<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Entity\Category;
use MMI\TVBundle\Entity\Video;
use MMI\TVBundle\Entity\Grid;
use MMI\TVBundle\Form\BlocType;
use MMI\TVBundle\Renew\MMIRenew;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;



class MainController extends Controller
{
    public function indexAction()
    {
        $grid = array();

        $em = $this->getDoctrine()->getManager();

        $hours = array(
            "1" => "8h00 - 9h30",
            "2" => "9h30 - 11h00",
            "3" => "11h00 - 12h30",
            "4" => "12h30 - 14h00",
            "5" => "14h00 - 15h30",
            "6" => "15h30 - 17h00",
            "7" => "17h00 - 18h30",
        );

        $planning = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId();

        $gridId = $planning->getId();

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocs($gridId)
        ;

        foreach($blocs as $bloc)
        {
            //tableau à deux dimensions : on ajoute tous les jours à la grille, et à chaque jour on ajoute tous les créneaux de la journée
            $grid[$bloc->getDay()][$bloc->getSlot()]=array('name'=>$bloc->getCategory()->getName(),'class'=>$bloc->getCategory()->getClass());
        }

        return $this->render('MMITVBundle:main:index.html.twig', array(
            'grid' => $grid,
            'hours' => $hours,
            'blocs' => $blocs,
            'planning'=>$planning
        ));
    }

    public function faqAction()
    {
        return $this->render('MMITVBundle:main:faq.html.twig');
    }

    public function biblioAction()
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('MMITVBundle:Video')
        ->getVideosWithCategory();

        foreach($videos as $video)
        {
            $video->getCategory();
        }

        return $this->render('MMITVBundle:main:biblio.html.twig',array('videos'=>$videos));

    }

    public function renewAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $renew = new MMIRenew($em);

        // Etape 1 : validation de la grille actuelle
        $renew->validateGrid($id);

        // Etape 2 : création d'une nouvelle grille pour la semaine suivante
        $renew->createNewGrid();

        // Etape 3 : suppression des grilles vieilles de plus de deux semaines
        $renew->purgeGrids();

        $this->get('session')->getFlashBag()->set('notice', 'Une nouvelle grille a été créée.');
        return $this->redirectToRoute('mmitv_home');
    }

    public function liveAction(Request $request)
    {
        //Appel de l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Déclaration des tableaux destinés à contenir les données json
        $jsonContent=array();
        $joliesVideos=array();

        // Serializer tools
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        // Récupération de la grille de la semaine précédente
        $newId = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId()->getId();
        $oldId = $newId - 1;

        $grid = $em->getRepository('MMITVBundle:Grid')
            ->findOneById($oldId);

        // Récupération des blocs et de leurs vidéos
        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocsWithVideos($grid);
        ;

        // Pour chaque bloc création d'un tableau php contenant ses données
        foreach($blocs as $bloc)
        {


            //Get Json related entities
            $bloc->getCategory();
            $bloc->getGrid();
            $bloc->getVideos();

            if(!empty($bloc->getVideos()))
            {
                foreach($bloc->getVideos() as $video)
                {
                    // Pour chaque vidéo du bloc, si elle existe, récupération des données dans un tableau PHP
                    $jolieVideo = array
                    (
                        'id'=>$video->getId(),
                        'category'=>$video->getCategory()->getName(),
                        'user'=>$video->getUser()->getUsername(),
                        'title'=>$video->getTitle(),
                        'url'=>$video->getUrl(),
                        'duration'=>$video->getDuration()->format('H:i:s'),
                        'description'=>$video->getDescription(),
                        'date'=>$video->getDate()->format('H:i:s'),
                        'poster'=>$video->getPoster(),
                    );
                    $joliesVideos[]=$jolieVideo;
                }
                $json_videos= $serializer->serialize($joliesVideos, 'json');
            }else{
                $json_videos=null;
            }

            $joliBloc=array(
                'id'=>$bloc->getId(),
                'duration'=>$bloc->getDuration()->format('H:i:s'),
                'slot'=>$bloc->getSlot(),
                'status'=>$bloc->getStatus(),
                'category'=>$bloc->getCategory()->getName(),
                'grid'=>$bloc->getGrid()->getId(),
                'day'=>$bloc->getDay(),
                'videos'=>$json_videos,
            );

            //Stockage des tableaux PHP contenant les données de chaque bloc dans un seul et grand tableau
            $jsonContent[]=$joliBloc;
            //$json=json_encode($joliBloc);
            //var_dump($json);

        }

        //Conversion du tableau de données en JSON
        $json = $serializer->serialize($jsonContent, 'json');

        // Affichage vérification du tableau
        var_dump($json);

        //var_dump($blocs);
        return $this->render('MMITVBundle:main:live.html.twig', array(
            'json'=>$json,
        ));
    }

    public function jsonAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jsonContent=array();
        $joliesVideos=array();

        $newId = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId()->getId();
        $oldId = $newId - 1;

        $grid = $em->getRepository('MMITVBundle:Grid')
                    ->findById($oldId);

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->findByGrid($grid);
        ;
        foreach($blocs as $bloc)
        {
            // Serializer tools
            $encoders = array(new JsonEncoder());
            $normalizers = array(new GetSetMethodNormalizer());
            $serializer = new Serializer($normalizers, $encoders);

            //Get Json related entities
            $bloc->getCategory();
            $bloc->getGrid();
            $bloc->getVideos();

            if(!empty($bloc->getVideos()))
            {
                foreach($bloc->getVideos() as $video)
                {
                    $jolieVideo = array
                    (
                    'id'=>$video->getId(),
                    'category'=>$video->getCategory()->getName(),
                    'user'=>$video->getUser()->getUsername(),
                    'title'=>$video->getTitle(),
                    'url'=>$video->getUrl(),
                    'duration'=>$video->getDuration()->format('H:i:s'),
                    'description'=>$video->getDescription(),
                    'date'=>$video->getDate()->format('H:i:s'),
                    'poster'=>$video->getPoster(),
                    );
                    $joliesVideos[]=$jolieVideo;
                }
                $json_videos= $serializer->serialize($joliesVideos, 'json');
            }else{
                $json_videos=null;
            }

            $joliBloc=array(
                'id'=>$bloc->getId(),
                'duration'=>$bloc->getDuration()->format('H:i:s'),
                'slot'=>$bloc->getSlot(),
                'status'=>$bloc->getStatus(),
                'category'=>$bloc->getCategory()->getName(),
                'grid'=>$bloc->getGrid()->getId(),
                'day'=>$bloc->getDay(),
                'videos'=>$json_videos,
            );
            $jsonContent[]=$joliBloc;
            //$json=json_encode($joliBloc);
            //var_dump($json);

        }
        $json = $serializer->serialize($jsonContent, 'json');
        var_dump($json);
        //var_dump($blocs);
        return $this->render('MMITVBundle:main:live.html.twig', array(
            'bloc'=>$blocs,
        ));
    }
}