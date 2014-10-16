<?php

namespace Ger\Bundle\WorkflowBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Ger\Bundle\WorkflowBundle\Model\Workflow as BaseWorkflow;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Workflow
 * @package Ger\Bundle\WorkflowBundle\Entity
 * @ORM\Entity
 * @ORM\Table("workflows")
 */
class Workflow extends BaseWorkflow {

    /**
     * @ORM\Id
     * @var id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var steps
     * @ORM\OneToMany(targetEntity="Ger\Bundle\WorkflowBundle\Entity\Step", mappedBy="workflow", cascade={"all"})
     */
    protected $steps;

    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->steps = New ArrayCollection();
    }


    /**
     * Add steps
     *
     * @param \Ger\Bundle\WorkflowBundle\Entity\Step $steps
     * @return Workflow
     */
    public function addStep(\Ger\Bundle\WorkflowBundle\Entity\Step $steps)
    {
        $this->steps[] = $steps;

        return $this;
    }

    /**
     * Remove steps
     *
     * @param \Ger\Bundle\WorkflowBundle\Entity\Step $steps
     */
    public function removeStep(\Ger\Bundle\WorkflowBundle\Entity\Step $steps)
    {
        $this->steps->removeElement($steps);
    }

    /**
     * Get steps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSteps()
    {
        return $this->steps;
    }
}
