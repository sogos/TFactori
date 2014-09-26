<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;

/**
 * Class WorkerController
 * @package Ger\Bundle\WorkerBundle\Controller
 * @FOS\NamePrefix("api_")
 */
class WorkerController extends Controller
{
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workers",
     *  description="Get Workers List",
     * )
     */
     public function getWorkersAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workers",
     *  description="Get One Worker",
     * )
     */
     public function getWorkerAction($slug)
    {
        return array('slug' => $slug);
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workers",
     *  description="Create New Worker",
     * )
     */
     public function postWorkerAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workers",
     *  description="Update One Worker",
     * )
     */
     public function putWorkerAction($slug)
    {
        return array('slug' => $slug);
    }
     /**
     * @ApiDoc(
     *  resource=true,
     *  section="Workers",
     *  description="Delete One Worker",
     * )
     */
     public function deleteWorkerAction($slug)
    {
        return array('slug' => $slug);
    }


}
