<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

/**
 * Class WorkflowController
 * @package Ger\Bundle\WorkflowBundle\Controller
 * @FOS\NamePrefix("api_")
 */
class WorkflowController extends BaseController
{
    /**

     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Get Workflows List",
     * )
     */
     public function getWorkflowsAction()
    {
        $workflows = $this->getWorkflowRepository()->findAll();
        return array(
            'success' => true,
            'workflows' => $workflows
        );
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Get One Workflow",
     * )
     */
     public function getWorkflowAction($slug)
    {
        $workflow = $this->getWorkflowRepository()->findOneBySlug($slug);
        if(!$workflow) {
            throw New NotFoundHttpException("Workflow with slug: " . $slug . " can't be found");
        }
        return array(
            'success' => true,
            'workflow' => $workflow
        );
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Create New Workflow",
     * )
     */
     public function postWorkflowAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Update One Workflow",
     * )
     */
     public function putWorkflowAction($slug)
    {
        return array('slug' => $slug);
    }
     /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Delete One Workflow",
     * )
     */
     public function deleteWorkflowAction($slug)
    {
        return array('slug' => $slug);
    }










}
