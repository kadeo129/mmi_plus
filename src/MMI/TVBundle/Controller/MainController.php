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
        $welcome = "Bonjour, ceci est la page d'accueil";
        return $this->render('MMITVBundle:main:index.html.twig', array('welcome' => $welcome));
    }
}