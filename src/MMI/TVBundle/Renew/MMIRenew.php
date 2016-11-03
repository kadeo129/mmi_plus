<?php

namespace MMI\TVBundle\Renew;

use MMI\TVBundle\Entity\Bloc as Bloc;
use MMI\TVBundle\Entity\Grid as Grid;
use MMI\TVBundle\Entity\Category as Category;
use Doctrine\ORM\EntityManager;

class MMIRenew
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getEm()
    {
        return $this->em;
    }

    public function setEm($em)
    {
        $this->em = $em;
    }


    //Valider la grille actuelle
    public function validateGrid($id)
    {
        $em = $this->getEm();

        $grid = $em->getRepository('MMITVBundle:Grid')
                    ->findOneById($id);
        $grid->setStatus(true);
        $em->flush();
    }

    // Créer une nouvelle grille
    public function createNewGrid()
    {
        // Appel de l'EntityManager
        $em = $this->getEm();

        // Création d'une nouvelle grille
        $lastGrid = $em ->getRepository('MMITVBundle:Grid')
                        ->getMostRecentId();

        if(isset($lastGrid))
        {
            $weekNumber = ($lastGrid->getWeek()+1);
        }
        else
        {
            $weekNumber = 1;
        }

        $newGrid = new Grid();
        $newGrid->setStatus(false);
        $newGrid->setWeek($weekNumber);


        for($i = 1; $i <= 5; $i++)
        {
            for($j = 1; $j <= 7; $j++)
            {
                $bloc = new Bloc();

                // Lundi

                if($i == 1 and $j == 1)
                {
                    $name = 'Graphisme';
                }elseif($i == 1 and $j == 2)
                {
                    $name = 'Techno';
                }elseif($i == 1 and $j == 3)
                {
                    $name = 'Ateliers';
                }elseif($i == 1 and $j == 4)
                {
                    $name = 'Actus/Culture';
                }elseif($i == 1 and $j == 5)
                {
                    $name = 'After MMI';
                }elseif($i == 1 and $j == 6)
                {
                    $name = 'Audiovisuel';
                }elseif($i == 1 and $j == 7)
                {
                    $name = 'Divertissement';
                }

                // Mardi

                elseif($i == 2 and $j == 1)
                {
                    $name = 'Graphisme';
                }elseif($i == 2 and $j == 2)
                {
                    $name = 'Audiovisuel';
                }elseif($i == 2 and $j == 3)
                {
                    $name = 'Ateliers';
                }elseif($i == 2 and $j == 4)
                {
                    $name = 'Actus/Culture';
                }elseif($i == 2 and $j == 5)
                {
                    $name = 'After MMI';
                }elseif($i == 2 and $j == 6)
                {
                    $name = 'Audiovisuel';
                }elseif($i == 2 and $j == 7)
                {
                    $name = 'Graphisme';
                }

                // Mercredi

                elseif($i == 3 and $j == 1)
                {
                    $name = 'Graphisme';
                }elseif($i == 3 and $j == 2)
                {
                    $name = 'Techno';
                }elseif($i == 3 and $j == 3)
                {
                    $name = 'Ateliers';
                }elseif($i == 3 and $j == 4)
                {
                    $name = 'Actus/Culture';
                }elseif($i == 3 and $j == 5)
                {
                    $name = 'After MMI';
                }elseif($i == 3 and $j == 6)
                {
                    $name = 'Audiovisuel';
                }elseif($i == 3 and $j == 7)
                {
                    $name = 'Graphisme';
                }

                // Jeudi

                elseif($i == 4 and $j == 1)
                {
                    $name = 'Graphisme';
                }elseif($i == 4 and $j == 2)
                {
                    $name = 'Audiovisuel';
                }elseif($i == 4 and $j == 3)
                {
                    $name = 'Ateliers';
                }elseif($i == 4 and $j == 4)
                {
                    $name = 'Actus/Culture';
                }elseif($i == 4 and $j == 5)
                {
                    $name = 'After MMI';
                }elseif($i == 4 and $j == 6)
                {
                    $name = 'Divertissement';
                }elseif($i == 4 and $j == 7)
                {
                    $name = 'Divertissement';
                }

                // Vendredi

                elseif($i == 5 and $j == 1)
                {
                    $name = 'Graphisme';
                }elseif($i == 5 and $j == 2)
                {
                    $name = 'Techno';
                }elseif($i == 5 and $j == 3)
                {
                    $name = 'Actus/Culture';
                }elseif($i == 5 and $j == 4)
                {
                    $name = 'Actus/Culture';
                }elseif($i == 5 and $j == 5)
                {
                    $name = 'After MMI';
                }elseif($i == 5 and $j == 6)
                {
                    $name = 'Graphisme';
                }elseif($i == 5 and $j == 7)
                {
                    $name = 'Graphisme';
                }

                else
                {
                    $name = null;
                }

                $category = $em->getRepository('MMITVBundle:Category')
                    ->findOneByName($name);
                $bloc->setCategory($category);
                $bloc->setGrid($newGrid);
                $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
                $bloc->setSlot($j);
                $bloc->setStatus('0');
                $bloc->setDay($i);
                $em->persist($bloc);
            }
        }
        $em->persist($newGrid);
        $em->flush();
    }

    //Supprimer les grilles de plus de deux semaines
    public function purgeGrids()
    {
        // Appel de l'EntityManager
        $em = $this->getEm();

        $mostRecentGrid = $em->getRepository('MMITVBundle:Grid')
                                ->getMostRecentId();
        $limit = ($mostRecentGrid->getWeek()-4);

        $oldGrids = $em->getRepository('MMITVBundle:Grid')
                        ->getOldGrids($limit);

        foreach($oldGrids as $oldGrid)
        {
            $em->remove($oldGrid);
            $em->flush();
        }
    }

    public function purgeVideos()
    {
        // Appel de l'EntityManager
        $em = $this->getEm();

        $videos= $em->getRepository('MMITVBundle:Video')->findAll();
        foreach($videos as $video)
        {
            var_dump($video);
            $videosWithSameURL = $em->getRepository('MMITVBundle:Video')->getNumberOfURL($video->getUrl());
            var_dump($videosWithSameURL);
            $reponse=null;
            if($videosWithSameURL>1)
            {
                $tz  = new \DateTimeZone('Europe/Paris');
                $age = \DateTime::createFromFormat('Y-m-d H:i:s', $video->getDate()->format('Y-m-d H:i:s'), $tz)->diff(new \DateTime('now', $tz))->days;
                var_dump($age);
                if($age>21)
                {
                    $em->remove($video);
                    $em->flush();
                    return $this->redirectToRoute('mmitv_home');
                }
            }
            var_dump($reponse);
            return $this->render('MMITVBundle:video:testvideo.html.twig');
        }
    }


}