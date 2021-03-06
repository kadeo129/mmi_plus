<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Entity\Grid;
use MMI\TVBundle\Repository\GridRepository;
use MMI\TVBundle\Form\BlocType;



/**
 * Bloc controller.
 *
 * @Route("/bloc")
 */
class BlocController extends Controller
{
    public function indexAction()
    {
        $grid = array();

        $horaires = array(
            "1" => "8h00 - 9h30",
            "2" => "9h30 - 11h00",
            "3" => "11h00 - 12h30",
            "4" => "12h30 - 14h00",
            "5" => "14h00 - 15h30",
            "6" => "15h30 - 17h00",
            "7" => "17h00 - 18h30",
        );

        $em = $this->getDoctrine()->getManager();

        $planning = $em->getRepository('MMITVBundle:Grid')
                        ->getMostRecentId();

        $gridId = $planning[0]->getId();

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocs($gridId)
        ;

        foreach($blocs as $bloc)
        {
            //tableau à deux dimensions : on ajoute tous les jours à la grille, et à chaque jour on ajoute tous les créneaux de la journée
            $grid[$bloc->getDay()][$bloc->getSlot()]=$bloc->getCategory()->getName();

        }

        return $this->render('MMITVBundle:bloc:index.html.twig', array(
            'grid' => $grid,
            'horaires' => $horaires,
        ));
    }

    public function newAction(Request $request)
    {
        $bloc = new Bloc();
        $form = $this->createForm('MMI\TVBundle\Form\BlocType', $bloc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bloc);
            $em->flush();

            return $this->redirectToRoute('mmitv_bloc_show', array('id' => $bloc->getId()));
        }

        return $this->render('MMITVBundle:bloc:new.html.twig', array(
            'bloc' => $bloc,
            'form' => $form->createView(),
        ));
    }

    public function showAction($day,$slot)
    {
        $em = $this->getDoctrine()->getManager();

        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }
        $grid = $em->getRepository('MMITVBundle:Grid')->getMostRecentId()->getId();
        $bloc = $em->getRepository('MMITVBundle:Bloc')->getWithRelatedVideos($day,$slot,$grid);
        $hours = array(
            "1" => "8h00 - 9h30",
            "2" => "9h30 - 11h00",
            "3" => "11h00 - 12h30",
            "4" => "12h30 - 14h00",
            "5" => "14h00 - 15h30",
            "6" => "15h30 - 17h00",
            "7" => "17h00 - 18h30",
        );

        $bloc->getVideos();

        $bloc->getCategory();

        return $this->render('MMITVBundle:bloc:show.html.twig',array(
            'bloc'=>$bloc,
            'hours'=>$hours,
            'day'=>$day,
            'user'=>$user,
            'slot'=>$slot));


    }

    public function editAction(Request $request, Bloc $bloc)
    {
        $deleteForm = $this->createDeleteForm($bloc);
        $editForm = $this->createForm('MMI\TVBundle\Form\BlocType', $bloc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bloc);
            $em->flush();

            return $this->redirectToRoute('mmitv_bloc_edit', array('id' => $bloc->getId()));
        }

        return $this->render('MMITVBundle:bloc:edit.html.twig', array(
            'bloc' => $bloc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Bloc $bloc)
    {
        $form = $this->createDeleteForm($bloc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bloc);
            $em->flush();
        }

        return $this->redirectToRoute('mmitv_bloc_index');
    }

    private function createDeleteForm(Bloc $bloc)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mmitv_bloc_delete', array('id' => $bloc->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function testAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planning = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId();

        var_dump($planning);

        return $this->render('MMITVBundle:bloc:test.html.twig', array(
            'planning' => $planning
        ));

    }

    public function test2Action($day,$slot)
    {

        $em = $this->getDoctrine()->getManager()->getRepository('MMITVBundle:Bloc');
        $bloc = $em->getWithRelatedVideos($day,$slot);
        $hours = array(
            "1" => "8h00 - 9h30",
            "2" => "9h30 - 11h00",
            "3" => "11h00 - 12h30",
            "4" => "12h30 - 14h00",
            "5" => "14h00 - 15h30",
            "6" => "15h30 - 17h00",
            "7" => "17h00 - 18h30",
        );

        var_dump($bloc);

        return $this->render('MMITVBundle:bloc:test2.html.twig',array(
            'bloc'=>$bloc,
            'hours'=>$hours,
            'day'=>$day,
            'slot'=>$slot));
    }
}
