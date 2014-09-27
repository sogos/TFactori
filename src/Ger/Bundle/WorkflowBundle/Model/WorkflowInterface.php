<?php

namespace Ger\Bundle\WorkflowBundle\Model;


interface WorkflowInterface {
    /**
     * @return mixed
     */
    public function getSlug();

    /**
     * @return mixed
     */
    public function getStartDate();

    /**
     * @return mixed
     */
    public function getEndDate();

    /**
     * @param $slug
     * @return $this
     */
    public function setSlug($slug);

    /**
     * @param \DateTime $start_date
     * @return $this
     */
    public function setStartDate(\DateTime $start_date = null);

    /**
     * @param \DateTime $end_date
     * @return $this
     */
    public function setEndDate(\DateTime $end_date = null);


} 