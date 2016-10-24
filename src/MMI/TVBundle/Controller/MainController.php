<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Form\BlocType;
use MMI\TVBundle\MMIRenew\MMIRenew;


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

        $gridId = $planning[0]->getId();

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocs($gridId)
        ;

        foreach($blocs as $bloc)
        {
            //tableau à deux dimensions : on ajoute tous les jours à la grille, et à chaque jour on ajoute tous les créneaux de la journée
            $grid[$bloc->getDay()][$bloc->getSlot()]=$bloc->getCategory()->getName();
        }

        return $this->render('MMITVBundle:main:index.html.twig', array(
            'grid' => $grid,
            'hours' => $hours,
            'blocs' => $blocs
        ));
    }
}