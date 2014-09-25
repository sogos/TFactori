<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;

/**
 * Class StepController
 * @package Ger\Bundle\StepBundle\Controller
 * @FOS\NamePrefix("api_")
 */
class StepController extends Controller
{
    /**

     * @ApiDoc(
     *  resource=true,
     *  section="Steps",
     *  description="Get Steps List",
     * )
     */
     public function getStepsAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Steps",
     *  description="Get One Step",
     * )
     */
     public function getStepAction($slug)
    {
        return array('slug' => $slug);
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Steps",
     *  description="Create New Step",
     * )
     */
     public function postStepAction()
    {
        return array();
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Steps",
     *  description="Update One Step",
     * )
     */
     public function putStepAction($slug)
    {
        return array('slug' => $slug);
    }
     /**
     * @ApiDoc(
     *  resource=true,
     *  section="Steps",
     *  description="Delete One Step",
     * )
     */
     public function deleteStepAction($slug)
    {
        return array('slug' => $slug);
    }










}
