<?php

namespace Ger\Bundle\WorkflowBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Storage agnostic workflow object
 * @ORM\MappedSuperclass
 */
class Workflow implements WorkflowInterface {

    /**
     * @var string
     * @ORM\Column(length=128, unique=true, type="string")
     * @Gedmo\Slug(fields={"name"})
     */
    protected $slug;
    /**
     * @var string
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    protected $name;
    /**
     * @var datetime
     * @Assert\NotBlank()
     * @Assert\DateTime()
     * @ORM\Column(type="datetime")
     */
    protected $start_date;
    /**
     * @var datetime
     * @Assert\NotBlank()
     * @Assert\DateTime()
     * @ORM\Column(type="datetime")
     */
    protected $end_date;

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return datetime
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @return datetime
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @param \DateTime $start_date
     * @return $this
     */
    public function setStartDate(\DateTime $start_date = null)
    {
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @param \DateTime $end_date
     * @return $this
     */
    public function setEndDate(\DateTime $end_date = null)
    {
        $this->end_date = $end_date;
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
} 