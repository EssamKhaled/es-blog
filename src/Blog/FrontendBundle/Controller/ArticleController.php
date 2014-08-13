<?php

namespace Blog\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Blog\CoreBundle\Entity\Comment;

class ArticleController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CoreBundle:Article')->findByIsPublished('PUBLISHED');
        
        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * View a Article entity.
     *
     * @Route("/article/view/{id}", name="article_view")
     * @Method("GET")
     * @Template()
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CoreBundle:Article')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');            
        }
        
        return array(
            'entity' => $entity,
        );        

    }    
    
    /**
     * View a Article entity.
     *
     * @Route("/article/category/{id}", name="filter_category")
     * @Method("GET")
     * @Template()
     */
    public function filterViewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('CoreBundle:Article');
        
        $query = $repository->createQueryBuilder('a')
                                ->leftJoin('a.category', 'c')
                                ->where('c.id = :id')
                                ->setParameter('id', $id)
                                ->getQuery();
        
        $entities = $query->getResult();
    
        return array(
            'entities' =>  $entities,
        );        

    }   
    
    
    public function getCategoriesAction(){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CoreBundle:Category')->findAll();        
        
       return $this->render('FrontendBundle:Article:categoryFilter.html.twig', array(
            'entities' => $entities,
        ));           
    }
    
    public function getRecentArticlesAction(){
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CoreBundle:Article')->findBy(array(), array('id' => 'DESC'),3);        
        
       return $this->render('FrontendBundle:Article:recentArticles.html.twig', array(
            'entities' => $entities,
        ));           
    }    
    
    /**
     * @Route("/ajax/add-comment", name="add_comment")
     */
    public function addCommentAction()
    {
        $request = $this->get('request');

        if($request->isXmlHttpRequest()){
            
            $akismet = $this->get('ornicar_akismet');

            $name = $request->get('name');
            $email = $request->get('email');
            $commentContent = $request->get('comment');            
            $id = $request->get('id');
                
            $isSpam = $akismet->isSpam(array(
                'comment_author'  => $name,
                'comment_content' => $commentContent
            ));
            
            if($isSpam === false){

                $em = $this->getDoctrine()->getManager();
                $article = $em->getRepository('CoreBundle:Article')->find($id);

                if (!$article) {
                    throw $this->createNotFoundException('Unable to find Article entity.');            
                }

                $comment = new Comment();
                $comment->setCommentAuthor($name);
                $comment->setCommentAuthorEmail($email);
                $comment->setCommentContent($commentContent);

                $article->addComment($comment);

                $em->persist($article);
                $em->flush();               

                $message = \Swift_Message::newInstance()
                    ->setSubject('Hello Author, New Comment added')
                    ->setFrom('info@es-blog.com')
                    ->setTo('essam_2060@hotmail.com')
                    ->setBody('You have a new Comment! please check your blog')
                ;
                $this->get('mailer')->send($message);
    
                return new JsonResponse(1); 
            }
        }


    }      
    
}
