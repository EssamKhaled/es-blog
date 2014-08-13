<?php

namespace Blog\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Blog\CoreBundle\Entity\Category;
use Blog\BackendBundle\Form\CategoryType;

/**
 * Category controller.
 *
 * @Route("/category")
 */
class CategoryController extends Controller
{
    /**
     * @Route("/", name="backend_category")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Category')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Displays a form to create a new Category entity.
     *
     * @Route("/new", name="new_category")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Category();

        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }  
    
    /**
     * Creates a new Category entity.
     *
     * @Route("/new", name="create_category")
     * @Method("POST")
     * @Template("BackendBundle:Category:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Category();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
                      
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('backend_category'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    /**
     * Displays a form to edit an existing Category entity.
     *
     * @Route("/{id}/edit", name="edit_category")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $editForm = $this->createEditForm($entity);        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),            
        );
    }
    
    /**
    * Creates a form to edit a Category entity.
    *
    * @param Category $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Category $entity)
    {
        $form = $this->createForm(new CategoryType(), $entity, array(
            'action' => $this->generateUrl('update_category', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }
    
    /**
     * Edits an existing Category entity.
     *
     * @Route("/{id}/edit", name="update_category")
     * @Method("PUT")
     * @Template("ElShaabBackEndBundle:Category:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $Category = $em->getRepository('CoreBundle:Category')->find($id);
        
        if (!$Category) {
            throw $this->createNotFoundException('Unable to find Category entity.');
        }

        $editForm = $this->createEditForm($Category);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {            
            
            $em->flush();

            return $this->redirect($this->generateUrl('edit_category', array('id' => $id)));
        }
    }
    
    /**
     * Deletes a Category entity.
     *
     * @Route("/delete/{id}", name="category_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CoreBundle:Category')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Category entity.');            
        }
       
        $em->remove($entity);
        $em->flush();        

        return $this->redirect($this->generateUrl('backend_category'));
    }
    
    /**
    * Creates a form to create a Category entity.
    *
    * @param Category $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Category $entity)
    {
        $form = $this->createForm(new CategoryType(), $entity, array(
            'action' => $this->generateUrl('create_category'),
            'method' => 'POST',
        ));

        return $form;
    }    
}
