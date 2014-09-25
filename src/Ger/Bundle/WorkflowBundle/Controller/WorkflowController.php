<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;

/**
 * Class WorkflowController
 * @package Ger\Bundle\WorkflowBundle\Controller
 * @FOS\NamePrefix("api_")
 */
class WorkflowController extends Controller
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
        return array();
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
        return array('slug' => $slug);
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
