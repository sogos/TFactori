<?php

namespace Ger\Bundle\WorkflowBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     */
    protected $name;
    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    protected $start_date;
    /**
     * @var datetime
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
     * @param $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @param $end_date
     * @return $this
     */
    public function setEndDate($end_date)
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