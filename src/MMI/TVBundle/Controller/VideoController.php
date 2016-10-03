<?php

namespace MMI\TVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class VideoController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMITVBundle:Video:index.html.twig', array(
        ));
    }

    public function libraryAction()
    {
        return $this->render('MMITVBundle:Video:library.html.twig', array(
        ));
    }

    public function addAction()
    {
        return $this->render('MMITVBundle:Video:add.html.twig', array(
        ));
    }
}