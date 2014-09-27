<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Ger\Bundle\WorkflowBundle\Entity\Workflow;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{
    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getWorkflowRepository()
    {
        return $this->get('doctrine')->getManager()->getRepository('GerWorkflowBundle:Workflow');
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectManager|object
     */
    public function getManager()
    {
        return $this->getDoctrine()->getManager();
    }

    public function getWorkflowForm(Request $request,$workflow = null)
    {
        if(!$workflow) {
            $workflow = New Workflow();
        }
        $options = array('csrf_protection' => false);
        return $this->createForm('ger_workflow',$workflow, $options);
    }

} 