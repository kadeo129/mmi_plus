<?php

namespace MMI\TVBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MMI\TVBundle\Entity\Category;
use MMI\TVBundle\Form\CategoryType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;


class CategoryController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('MMITVBundle:Category')->findAll();

        return $this->render('MMITVBundle:category:index.html.twig', array(
            'categories' => $categories,
        ));
    }

    public function newAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm('MMI\TVBundle\Form\CategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('mmitv_category_show', array('id' => $category->getId()));
        }

        return $this->render('MMITVBundle:category:new.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Category $category)
    {
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('MMITVBundle:category:show.html.twig', array(
            'category' => $category,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function editAction(Request $request, Category $category)
    {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('MMI\TVBundle\Form\CategoryType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('mmitv_category_show', array('id' => $category->getId()));
        }

        return $this->render('MMITVBundle:category:edit.html.twig', array(
            'category' => $category,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function deleteAction(Request $request, Category $category)
    {
        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $id=$category->getId();

        $countVideos = $em
            ->getRepository('MMITVBundle:Video')
            ->getNbRelatedVideos($id);

        if ($form->isSubmitted() && $form->isValid() && $countVideos==0)
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }
        else
        {
            //throw new NotFoundHttpException("Cette catégorie contient une ou plusieurs vidéos : elle ne peut pas être supprimée.");
            $request->getSession()->getFlashBag()->add('notice', 'Une catégorie contenant des vidéos ne peut pas être supprimée.');
        }

        return $this->redirectToRoute('mmitv_category_index');
    }

    private function createDeleteForm(Category $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mmitv_category_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function testAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em
                ->getRepository('MMITVBundle:Category')
                ->findOneBy(array('id' => $id));
        var_dump($category);

        $countVideos = $em
            ->getRepository('MMITVBundle:Video')
            ->getNbRelatedVideos($id);

        var_dump($countVideos);

        if($countVideos==0)
        {
            $em->remove($category);
            $em->flush();
        }else{
            throw new NotFoundHttpException("Cette catégorie contient une ou plusieurs vidéos : elle ne peut pas être supprimée.");
        }
        return $this->render('MMITVBundle:category:test.html.twig');

    }
}
