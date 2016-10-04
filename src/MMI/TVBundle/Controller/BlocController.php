<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Bloc;
use MMI\TVBundle\Form\BlocType;

/**
 * Bloc controller.
 *
 * @Route("/bloc")
 */
class BlocController extends Controller
{
    /**
     * Lists all Bloc entities.
     *
     * @Route("/", name="bloc_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blocs = $em->getRepository('MMITVBundle:Bloc')->findAll();

        return $this->render('bloc/index.html.twig', array(
            'blocs' => $blocs,
        ));
    }

    /**
     * Creates a new Bloc entity.
     *
     * @Route("/new", name="bloc_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bloc = new Bloc();
        $form = $this->createForm('MMI\TVBundle\Form\BlocType', $bloc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bloc);
            $em->flush();

            return $this->redirectToRoute('bloc_show', array('id' => $bloc->getId()));
        }

        return $this->render('bloc/new.html.twig', array(
            'bloc' => $bloc,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bloc entity.
     *
     * @Route("/{id}", name="bloc_show")
     * @Method("GET")
     */
    public function showAction(Bloc $bloc)
    {
        $deleteForm = $this->createDeleteForm($bloc);

        return $this->render('bloc/show.html.twig', array(
            'bloc' => $bloc,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bloc entity.
     *
     * @Route("/{id}/edit", name="bloc_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bloc $bloc)
    {
        $deleteForm = $this->createDeleteForm($bloc);
        $editForm = $this->createForm('MMI\TVBundle\Form\BlocType', $bloc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bloc);
            $em->flush();

            return $this->redirectToRoute('bloc_edit', array('id' => $bloc->getId()));
        }

        return $this->render('bloc/edit.html.twig', array(
            'bloc' => $bloc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bloc entity.
     *
     * @Route("/{id}", name="bloc_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bloc $bloc)
    {
        $form = $this->createDeleteForm($bloc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bloc);
            $em->flush();
        }

        return $this->redirectToRoute('bloc_index');
    }

    /**
     * Creates a form to delete a Bloc entity.
     *
     * @param Bloc $bloc The Bloc entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bloc $bloc)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bloc_delete', array('id' => $bloc->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
