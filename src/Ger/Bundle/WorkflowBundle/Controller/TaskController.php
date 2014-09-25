<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;

/**
 * Class TaskController
 * @package Ger\Bundle\TaskBundle\Controller
 * @FOS\NamePrefix("api_")
 */
class TaskController extends Controller
{
    /**

     * @ApiDoc(
     *  resource=true,
     *  section="Tasks",
     *  description="Get Tasks List",
     * )
     */
     public function getTasksAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Tasks",
     *  description="Get One Task",
     * )
     */
     public function getTaskAction($slug)
    {
        return array('slug' => $slug);
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Tasks",
     *  description="Create New Task",
     * )
     */
     public function postTaskAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Tasks",
     *  description="Update One Task",
     * )
     */
     public function putTaskAction($slug)
    {
        return array('slug' => $slug);
    }
     /**
     * @ApiDoc(
     *  resource=true,
     *  section="Tasks",
     *  description="Delete One Task",
     * )
     */
     public function deleteTaskAction($slug)
    {
        return array('slug' => $slug);
    }










}
