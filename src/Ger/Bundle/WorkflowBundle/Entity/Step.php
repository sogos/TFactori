<?php

namespace Ger\Bundle\WorkflowBundle\Entity;

use Ger\Bundle\WorkflowBundle\Model\Step as BaseStep;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Step
 * @package Ger\Bundle\WorkflowBundle\Entity
 * @ORM\Entity
 * @ORM\Table("steps")
 */
class Step extends BaseStep {

    /**
     * @ORM\Id
     * @var id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var worfklow
     * @ORM\ManyToOne(targetEntity="Ger\Bundle\WorkflowBundle\Entity\Workflow", cascade={"all"}, fetch="EAGER", inversedBy="steps")
     */
    protected $workflow;

    /**
     * @var child
     * @ORM\OneToMany(targetEntity="Ger\Bundle\WorkflowBundle\Entity\Step",orphanRemoval=true, mappedBy="parent", cascade={"all"})
     */
    protected $child;

    /**
     * @var parent
     * @ORM\ManyToOne(targetEntity="Ger\Bundle\WorkflowBundle\Entity\Step", inversedBy="child")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="set null")
     */
    protected $parent;

    /**
     * @var retry_on_failure
     * @ORM\Column(type="boolean")
     */
    protected $retry_on_failure;

    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set workflow
     *
     * @param \Ger\Bundle\WorkflowBundle\Entity\Workflow $workflow
     * @return Step
     */
    public function setWorkflow(\Ger\Bundle\WorkflowBundle\Entity\Workflow $workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * Get workflow
     *
     * @return \Ger\Bundle\WorkflowBundle\Entity\Workflow 
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }

  
    /**
     * Set parent
     *
     * @param \Ger\Bundle\WorkflowBundle\Entity\Step $parent
     * @return Step
     */
    public function setParent(\Ger\Bundle\WorkflowBundle\Entity\Step $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Ger\Bundle\WorkflowBundle\Entity\Step 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set retry_on_failure
     *
     * @param boolean $retryOnFailure
     * @return Step
     */
    public function setRetryOnFailure($retryOnFailure)
    {
        $this->retry_on_failure = $retryOnFailure;

        return $this;
    }

    /**
     * Get retry_on_failure
     *
     * @return boolean 
     */
    public function getRetryOnFailure()
    {
        return $this->retry_on_failure;
    }

    /**
     * Set child
     *
     * @param \Ger\Bundle\WorkflowBundle\Entity\Step $child
     * @return Step
     */
    public function setChild(\Ger\Bundle\WorkflowBundle\Entity\Step $child = null)
    {
        $this->child = $child;

        return $this;
    }

    /**
     * Get child
     *
     * @return \Ger\Bundle\WorkflowBundle\Entity\Step 
     */
    public function getChild()
    {
        return $this->child;
    }
}
