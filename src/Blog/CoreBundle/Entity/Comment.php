<?php

namespace Blog\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Make
 *
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment_author", type="string", nullable=false)
     */
    private $commentAuthor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_email", type="string", nullable=false)
     */
    private $commentAuthorEmail;    

    
    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text", nullable=false)
     */
    private $commentContent;

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="string", nullable=false)
     */
    private $approved = "NO";
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;
    
    
    public function __toString() {
        return $this->commentAuthor;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setCreatedTimeStamp()
    {
        if($this->getCreated() == null)
        {
            $this->setCreated(new \DateTime(date('Y-m-d H:i:s')));
        }
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     * @return Comment
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;
    
        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string 
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }
    
    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Article
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }    

    /**
     * Set commentAuthor
     *
     * @param string $commentAuthor
     * @return Comment
     */
    public function setCommentAuthor($commentAuthor)
    {
        $this->commentAuthor = $commentAuthor;

        return $this;
    }

    /**
     * Get commentAuthor
     *
     * @return string 
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * Set commentAuthorEmail
     *
     * @param string $commentAuthorEmail
     * @return Comment
     */
    public function setCommentAuthorEmail($commentAuthorEmail)
    {
        $this->commentAuthorEmail = $commentAuthorEmail;

        return $this;
    }

    /**
     * Get commentAuthorEmail
     *
     * @return string 
     */
    public function getCommentAuthorEmail()
    {
        return $this->commentAuthorEmail;
    }

    /**
     * Set approved
     *
     * @param string $approved
     * @return Comment
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return string 
     */
    public function getApproved()
    {
        return $this->approved;
    }
}
