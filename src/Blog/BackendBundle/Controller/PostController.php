<?php

namespace Blog\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Blog\CoreBundle\Entity\Article;
use Blog\BackendBundle\Form\ArticleType;

/**
 * Article controller.
 *
 * @Route("/post")
 */
class PostController extends Controller
{
    /**
     * @Route("/", name="backend_post")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Article')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Displays a form to create a new Article entity.
     *
     * @Route("/new", name="new_article")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $Article = new Article();

        $form   = $this->createCreateForm($Article);

        return array(
            'Article' => $Article,
            'form'   => $form->createView(),
        );
    }  
    
    /**
     * Creates a new Article entity.
     *
     * @Route("/new", name="create_article")
     * @Method("POST")
     * @Template("BackendBundle:Article:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Article();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload();
                      
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('backend_post'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    /**
     * Displays a form to edit an existing Article entity.
     *
     * @Route("/{id}/edit", name="edit_article")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CoreBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $editForm = $this->createEditForm($entity);        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),            
        );
    }
    
    /**
    * Creates a form to edit a Article entity.
    *
    * @param Article $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Article $entity)
    {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl('update_article', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }
    
    /**
     * Edits an existing Article entity.
     *
     * @Route("/{id}/edit", name="update_article")
     * @Method("PUT")
     * @Template("BackendBundle:Article:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $Article = $em->getRepository('CoreBundle:Article')->find($id);
        $oldImage = $Article->getImage();
        
        if (!$Article) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        $editForm = $this->createEditForm($Article);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {            
            
            $image = $editForm->get('image')->getData();
            
            if($image != null){
                $Article->deleteImage($oldImage);
                $Article->upload();
            }else{
                $Article->setImage($oldImage);
            } 
            
            $em->flush();

            return $this->redirect($this->generateUrl('edit_article', array('id' => $id)));
        }
    }
    
    /**
     * Deletes a Article entity.
     *
     * @Route("/delete/{id}", name="article_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CoreBundle:Article')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');            
        }
        $entity->deleteImage($entity->getImage());
        $em->remove($entity);
        $em->flush();        

        return $this->redirect($this->generateUrl('backend_post'));
    }
    
    /**
    * Creates a form to create a Article entity.
    *
    * @param Article $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Article $entity)
    {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl('create_article'),
            'method' => 'POST',
        ));

        return $form;
    }    
}
