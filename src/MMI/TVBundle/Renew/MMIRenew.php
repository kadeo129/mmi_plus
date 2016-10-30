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
        $em->persist($newGrid);
        $em->flush();

        // Création des 35 nouveaux blocs de la grille
        $bloc = new Bloc();
        $bloc->setCategory($this->getReference('Graphisme'));
        $bloc->setGrid($this->getReference(1));
        $bloc->setDuration(\DateTime::createFromFormat("H:i:s", "01:30:00"));
        $bloc->setSlot('1');
        $bloc->setStatus('0');
        $bloc->setDay('1');
        $manager->persist($bloc);
        $manager->flush();



    }
}