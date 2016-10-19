<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Form\BlocType;
use MMI\TVBundle\MMIRenew\MMIRenew;



/**
 * Bloc controller.
 *
 * @Route("/bloc")
 */
class BlocController extends Controller
{
    public function indexAction($week)
    {
        $grid = array();
        $em = $this->getDoctrine()->getManager();

        $blocs = $em->getRepository('MMITVBundle:Bloc')
            ->getOrderedBlocs($week)
        ;

        foreach($blocs as $bloc)
        {
            //tableau à deux dimensions : on ajoute tous les jours à la grille, et à chaque jour on ajoute tous les créneaux de la journée
            $grid[$bloc->getDay()][]=$bloc->getSlot();
        }

        return $this->render('MMITVBundle:bloc:index.html.twig', array(
            'grid' => $grid,
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

    public function showAction(Bloc $bloc)
    {
        $deleteForm = $this->createDeleteForm($bloc);

        return $this->render('MMITVBundle:bloc:show.html.twig', array(
            'bloc' => $bloc,
            'delete_form' => $deleteForm->createView(),
        ));
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

    public function renewAction($weeknumber)
    {
        $em = $this->getDoctrine()->getManager();
        $renew = new MMIRenew($em);
        $renew->renew($weeknumber);
        $this->get('session')->getFlashBag()->set('notice', 'Nouvelle grille générée.');
        return $this->redirectToRoute('mmitv_bloc_index');
    }
}
