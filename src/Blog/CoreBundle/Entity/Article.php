<?php

namespace Blog\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="is_published", type="string", length=15, nullable=true)
     */
    private $isPublished = "NOT-PUBLISHED";    
    
    /**
     * @var string
     *
     * @Assert\Image(
     *     maxSize = "20000k",
     *     mimeTypes = {"image/gif", "image/jpeg", "image/png"},
     *     mimeTypesMessage = "Please upload a valid picture"
     * )
     * @Assert\Regex(
     *     pattern="/[a-zA-Z0-9]+/",
     *     match=true,
     *     message="Special characters are not allowed"
     * )
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=true)
     */    
    private $image; 

    /**
     * @var text
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    protected $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    //----------------- Relations ------------------------------

    /**
     * @ORM\ManyToMany(targetEntity="Category", cascade={"persist"})
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="Comment", cascade={"persist"})
     */
    private $comment;

    //----------------------------------------------------------

    public function __construct() {
        $this->category = new \Doctrine\Common\Collections\ArrayCollection(); 
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection(); 
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
     * @ORM\PreUpdate
     */
    public function setUpdatedTimeStamp()
    {
        $this->setUpdated(new \DateTime(date('Y-m-d H:i:s')));
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
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set isPublished
     *
     * @param string $isPublished
     * @return Article
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    
        return $this;
    }

    /**
     * Get isPublished
     *
     * @return string 
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }
  
    /**
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setImage($image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Article
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
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
     * Add category
     *
     * @param \Blog\CoreBundle\Entity\Category $category
     * @return UsedCar
     */
    public function addCategory(\Blog\CoreBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Arabeaty\CoreBundle\Entity\Category $category
     */
    public function removeCategory(\Arabeaty\CoreBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategory()
    {
        return $this->category;
    }    
    

    
    //=================================================================================//      
    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return  '/web/uploads/'.$this->getUploadDir();
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/uploads/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'articles/';
    }
    
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getImage()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues

        // move takes the target directory and then the
        // target filename to move to
        $pictureName = uniqid().'.'.$this->getImage()->guessExtension();
        $this->getImage()->move(
            $this->getUploadRootDir(),
            $pictureName
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getImage()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->image = $pictureName;
    } 
    
    public function deleteImage($image){
        unlink($this->getUploadRootDir().$image);
    }
    //=================================================================================//  
    


    /**
     * Add comment
     *
     * @param \Blog\CoreBundle\Entity\Comment $comment
     * @return Article
     */
    public function addComment(\Blog\CoreBundle\Entity\Comment $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \Blog\CoreBundle\Entity\Comment $comment
     */
    public function removeComment(\Blog\CoreBundle\Entity\Comment $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComment()
    {
        return $this->comment;
    }
}
