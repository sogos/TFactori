<?php

namespace Ger\Bundle\WorkflowBundle\Entity;

use Ger\Bundle\WorkflowBundle\Model\Workflow as BaseWorkflow;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Workflow
 * @package Ger\Bundle\WorkflowBundle\Entity
 * @ORM\Entity
 * @ORM\Table("worklows")
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
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }


}
