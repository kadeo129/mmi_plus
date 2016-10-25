<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Video;
use MMI\TVBundle\Form\VideoType;

class VideoController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('MMITVBundle:Video')->findAll();

        return $this->render('MMITVBundle:video:index.html.twig', array(
            'videos' => $videos,
        ));
    }

    public function newAction(Request $request)
    {
        $video = new Video();
        $form = $this->createForm('MMI\TVBundle\Form\VideoType', $video);
       // $form->get('blocs')->setData($blocId);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('mmitv_video_show', array('id' => $video->getId()));
        }

        return $this->render('MMITVBundle:video:new.html.twig', array(
            'video' => $video,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);

        return $this->render('MMITVBundle:video:show.html.twig', array(
            'video' => $video,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Video $video)
    {
        $deleteForm = $this->createDeleteForm($video);
        $editForm = $this->createForm('MMI\TVBundle\Form\VideoType', $video);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('mmitv_video_edit', array('id' => $video->getId()));
        }

        return $this->render('MMITVBundle:video:edit.html.twig', array(
            'video' => $video,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Video $video)
    {
        $form = $this->createDeleteForm($video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($video);
            $em->flush();
        }

        return $this->redirectToRoute('mmitv_video_index');
    }

    private function createDeleteForm(Video $video)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mmitv_video_delete', array('id' => $video->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function softdeleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('MMITVBundle:Video')->getVideoWithBlocs($id);
        $blocs = $video->getBlocs();
        foreach($blocs as $bloc)
        {
            $video->removeBloc($bloc);
        }
        $em->flush();
        return $this->redirectToRoute('mmitv_home');

    }
}
