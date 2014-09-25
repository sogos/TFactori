<?php

namespace Ger\Bundle\WorkflowBundle\Model;

/**
 * Storage agnostic workflow object
 */
class Workflow implements WorkflowInterface {

    /**
     * @var string
     */
    protected $slug;
    /**
     * @var datetime
     */
    protected $start_date;
    /**
     * @var datetime
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
} 