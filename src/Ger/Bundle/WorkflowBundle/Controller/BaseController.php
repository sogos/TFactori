<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller {
    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getWorkflowRepository()
    {
        return $this->get('doctrine')->getManager()->getRepository('GerWorkflowBundle:Workflow');
    }

} 