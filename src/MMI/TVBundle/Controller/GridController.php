<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Grid;
use MMI\TVBundle\Form\GridType;


class GridController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $grids = $em->getRepository('MMITVBundle:Grid')->findAll();

        return $this->render('MMITVBundle:grid:index.html.twig', array(
            'grids' => $grids,
        ));
    }

    public function newAction(Request $request)
    {
        $grid = new Grid();
        $form = $this->createForm('MMI\TVBundle\Form\GridType', $grid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grid);
            $em->flush();

            return $this->redirectToRoute('mmitv_grid_show', array('id' => $grid->getId()));
        }

        return $this->render('MMITVBundle:grid:new.html.twig', array(
            'grid' => $grid,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Grid $grid)
    {
        $deleteForm = $this->createDeleteForm($grid);

        return $this->render('MMITVBundle:grid:show.html.twig', array(
            'grid' => $grid,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Grid $grid)
    {
        $deleteForm = $this->createDeleteForm($grid);
        $editForm = $this->createForm('MMI\TVBundle\Form\GridType', $grid);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grid);
            $em->flush();

            return $this->redirectToRoute('mmitv_grid_edit', array('id' => $grid->getId()));
        }

        return $this->render('MMITVBundle:grid:edit.html.twig', array(
            'grid' => $grid,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Grid $grid)
    {
        $form = $this->createDeleteForm($grid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($grid);
            $em->flush();
        }

        return $this->redirectToRoute('mmitv_grid_index');
    }

    private function createDeleteForm(Grid $grid)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mmitv_grid_delete', array('id' => $grid->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
