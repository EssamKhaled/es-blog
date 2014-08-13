<?php

namespace Blog\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Comment')->findByApproved("NO");

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Deletes a Comment entity.
     *
     * @Route("/delete/{id}", name="comment_delete")
     */
    public function deleteCommentAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CoreBundle:Comment')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comment entity.');            
        }
        
        $em->remove($entity);
        $em->flush();        

        return $this->redirect($this->generateUrl('dashboard'));
    } 
    
    /**
     * Deletes a Comment entity.
     *
     * @Route("/approve/{id}", name="comment_approve")
     */
    public function approveCommentAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CoreBundle:Comment')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comment entity.');            
        }
        
        $entity->setApproved('YES');
        
        $em->persist($entity);
        $em->flush();        

        return $this->redirect($this->generateUrl('dashboard'));
    }     
    
    
}
