<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;

/**
 * Class HostController
 * @package Ger\Bundle\HostBundle\Controller
 * @FOS\NamePrefix("api_")
 */
class HostController extends Controller
{
    /**

     * @ApiDoc(
     *  resource=true,
     *  section="Hosts",
     *  description="Get Hosts List",
     * )
     */
     public function getHostsAction()
    {
        return array(
            'success' => true,
            'hosts' => array( )
        );
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Hosts",
     *  description="Get One Host",
     * )
     */
     public function getHostAction($slug)
    {
        return array(
            'success' => true,
            'host' => array( )
        );
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Hosts",
     *  description="Create New Host",
     * )
     */
     public function postHostAction()
    {
        return array(
            'success' => true,
            'host' => array( )
        );
    }
    /**
     * @ApiDoc(
     *  resource=true,
     *  section="Hosts",
     *  description="Update One Host",
     * )
     */
     public function putHostAction($slug)
    {
        return array(
            'success' => true,
            'host' => array( )
        );
    }
     /**
     * @ApiDoc(
     *  resource=true,
     *  section="Hosts",
     *  description="Delete One Host",
     * )
     */
     public function deleteHostAction($slug)
    {
        return array(
            'success' => true
        );
    }


}
