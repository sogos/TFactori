<?php

namespace Ger\Bundle\WorkflowBundle\Controller;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;
use Ger\Bundle\WorkflowBundle\Entity\Workflow;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as FOS;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


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
        return $workflows;
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
        $workflow = $this->getWorkflowBySlug($slug);
        return $workflow;
    }

    private function getWorkflowBySlug($slug)
    {
        $workflow = $this->getWorkflowRepository()->findOneBySlug($slug);
        if (!$workflow) {
            throw New NotFoundHttpException("Workflow with slug: " . $slug . " can't be found");
        }
        return $workflow;
    }

    /**
     * @param Request $request
     * @return mixed
     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Create New Workflow",
     *  input= "Ger\Bundle\WorkflowBundle\Form\Type\WorkflowType",
     *  output= "Ger\Bundle\WorkflowBundle\Entity\Workflow",
     * )
     */
    public function postWorkflowAction(Request $request)
    {
        $workflow = New Workflow();
        $form = $this->getWorkflowForm($request, $workflow);
        $form->handleRequest($request);
        if($form->isValid()) {
            $manager = $this->getManager();
            $manager->persist($workflow);
            $manager->flush();
            return $view = View::create(array($workflow), Codes::HTTP_CREATED);
        } else {
            return View::create(array($form->getErrors()), Codes::HTTP_NOT_ACCEPTABLE);
        }
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
        $workflow = $this->getWorkflowBySlug($slug);
        return array('slug' => $slug);
    }

    /**
     * @FOS\View()
     * @ApiDoc(
     *  resource=true,
     *  section="Workflows",
     *  description="Delete One Workflow",
     * )
     */
    public function deleteWorkflowAction($slug)
    {
        $workflow = $this->getWorkflowBySlug($slug);
        $manager = $this->getManager();
        $manager->remove($workflow);
        $manager->flush();
        return $view = View::create(null, Codes::HTTP_NO_CONTENT);
    }

}
