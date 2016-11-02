<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Video;
use MMI\TVBundle\Entity\Grid;
use MMI\TVBundle\Form\VideoType;

class VideoController extends Controller
{
    public function indexAction()
    {
        // Get User
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('MMITVBundle:Video')->findAll();

        return $this->render('MMITVBundle:video:index.html.twig', array(
            'videos' => $videos,
            'user' => $user,
        ));
    }

    public function newAction(Request $request)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        $em = $this->getDoctrine()->getManager();

        //$grid = $em->getRepository('MMITVBundle:Grid')->getMostRecentId()->getId();

        $video = new Video();

        $planning = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId();

        $gridId = $planning->getId();

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocs($gridId)
        ;



        $form = $this->createForm('MMI\TVBundle\Form\VideoType', $video, array('blocs'=>$blocs));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('mmitv_video_show', array('id' => $video->getId()));
        }

        return $this->render('MMITVBundle:video:new.html.twig', array(
            'video' => $video,
            'form' => $form->createView(),
            'user' => $user,
        ));
    }

    public function newFromBlocAction(Request $request, $day, $slot)
    {
        // Get User
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        $userForm=array($user);

        // Em
        $em = $this->getDoctrine()->getManager();

        // Get blocs from current grid
        $planning = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId();

        $grid = $planning->getId();

        $bloc = $em->getRepository('MMITVBundle:Bloc')->getSingleBloc($day,$slot,$grid);
        $category=array($bloc[0]->getCategory());
        ;

        // Entity to be persisted
        $video = new Video();

        // From creation
        $form_fromBloc = $this->createForm('MMI\TVBundle\Form\VideoFromBlocType', $video, array('bloc'=>$bloc,'category'=>$category,'user'=>$userForm));
        $form_fromBloc->handleRequest($request);

        // Form validation
        if ($form_fromBloc->isSubmitted() && $form_fromBloc->isValid()) {
            $em->persist($video);
            $em->flush();

            return $this->redirectToRoute('mmitv_video_show', array('id' => $video->getId()));
        }

        return $this->render('MMITVBundle:video:new_frombloc.html.twig', array(
            'video' => $video,
            'form' => $form_fromBloc->createView(),
            'user' => $user,
        ));
    }

    public function showAction(Video $video)
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }
        $deleteForm = $this->createDeleteForm($video);

        return $this->render('MMITVBundle:video:show.html.twig', array(
            'video' => $video,
            'delete_form' => $deleteForm->createView(),
            'user'=>$user,
        ));
    }

    public function editAction(Request $request, Video $video)
    {
        $em = $this->getDoctrine()->getManager();

        //$grid = $em->getRepository('MMITVBundle:Grid')->getMostRecentId()->getId();

        $planning = $em->getRepository('MMITVBundle:Grid')
            ->getMostRecentId();

        $gridId = $planning->getId();

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocs($gridId)
        ;

        $deleteForm = $this->createDeleteForm($video);
        $editForm = $this->createForm('MMI\TVBundle\Form\VideoType', $video, array( /*'grid'=>$grid)*/ 'blocs'=>$blocs));
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
