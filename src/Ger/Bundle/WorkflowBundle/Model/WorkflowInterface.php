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
     * @param $start_date
     * @return $this
     */
    public function setStartDate($start_date);

    /**
     * @param $end_date
     * @return $this
     */
    public function setEndDate($end_date);


} 