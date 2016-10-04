<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Grid;
use MMI\TVBundle\Form\GridType;

/**
 * Grid controller.
 *
 * @Route("/grid")
 */
class GridController extends Controller
{
    /**
     * Lists all Grid entities.
     *
     * @Route("/", name="grid_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $grids = $em->getRepository('MMITVBundle:Grid')->findAll();

        return $this->render('grid/index.html.twig', array(
            'grids' => $grids,
        ));
    }

    /**
     * Creates a new Grid entity.
     *
     * @Route("/new", name="grid_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $grid = new Grid();
        $form = $this->createForm('MMI\TVBundle\Form\GridType', $grid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grid);
            $em->flush();

            return $this->redirectToRoute('grid_show', array('id' => $grid->getId()));
        }

        return $this->render('grid/new.html.twig', array(
            'grid' => $grid,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Grid entity.
     *
     * @Route("/{id}", name="grid_show")
     * @Method("GET")
     */
    public function showAction(Grid $grid)
    {
        $deleteForm = $this->createDeleteForm($grid);

        return $this->render('grid/show.html.twig', array(
            'grid' => $grid,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Grid entity.
     *
     * @Route("/{id}/edit", name="grid_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Grid $grid)
    {
        $deleteForm = $this->createDeleteForm($grid);
        $editForm = $this->createForm('MMI\TVBundle\Form\GridType', $grid);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grid);
            $em->flush();

            return $this->redirectToRoute('grid_edit', array('id' => $grid->getId()));
        }

        return $this->render('grid/edit.html.twig', array(
            'grid' => $grid,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Grid entity.
     *
     * @Route("/{id}", name="grid_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Grid $grid)
    {
        $form = $this->createDeleteForm($grid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($grid);
            $em->flush();
        }

        return $this->redirectToRoute('grid_index');
    }

    /**
     * Creates a form to delete a Grid entity.
     *
     * @param Grid $grid The Grid entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Grid $grid)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('grid_delete', array('id' => $grid->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
