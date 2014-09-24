<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class WorkflowController extends Controller
{
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     * )
     */
     public function getWorkflowsAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     * )
     */
     public function getWorkflowAction($slug)
    {
        return array('slug' => $slug);
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     * )
     */
     public function postWorkflowAction()
    {
        return array('slug' => $slug);
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     * )
     */
     public function putWorkflowAction($slug)
    {
        return array('slug' => $slug);
    }
     /**
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     * )
     */
     public function deleteWorkflowAction($slug)
    {
        return array('slug' => $slug);
    }










}
