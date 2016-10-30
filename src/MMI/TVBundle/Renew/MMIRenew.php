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
}