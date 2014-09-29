<?php

namespace Ger\Bundle\WorkflowBundle\Tests\Controller;


class WorkflowControllerTest extends BaseController
{

    public function testGetWorkflowsAction()
    {
        $client = $this->createAuthenticatedClient();

        $crawler = $client->request('GET', '/api/workflows.json');
        $this->assertTrue($client->getResponse()->getStatusCode() == 200, "Received: " . $client->getResponse()->getStatusCode());
        $content = $client->getResponse()->getContent();
        $workflows_decoded = json_decode($content, true);
        $this->assertTrue(count($workflows_decoded) == 1, "There is more than one workflow in database");
    }

    public function testGetWorkflowAction()
    {
        $client = $this->createAuthenticatedClient();
        $crawler = $client->request('GET', '/api/workflows/testZZ.json');
        $this->assertTrue($client->getResponse()->getStatusCode() == 404);
        $content = $client->getResponse()->getContent();
        if(is_object(json_decode($content))) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false, "Response in not a Valid Json");
        }
        $content_decoded = json_decode($content, true);
        $this->assertTrue(array_key_exists('message', $content_decoded));

        $crawler = $client->request('GET', '/api/workflows/test1.json');
        $content = $client->getResponse()->getContent();
        $this->assertTrue($client->getResponse()->getStatusCode() == 200, "Entity is not loaded or Sluggable behavior don't work");
        $content_decoded = json_decode($content, true);
        $this->assertTrue(array_key_exists('success', $content_decoded));
        $this->assertTrue(array_key_exists('workflow', $content_decoded));
        $this->assertTrue($content_decoded['workflow']['slug'] == "test1");

    }

    public function testPostWorkflowAction()
    {
        $client = $this->createAuthenticatedClient();
        $client->request('POST', '/api/workflows.json', array(
            'ger_workflow' => array(
                'name' => 'workflow1',
                'start_date' => '25-03-1983 11:12:12+100',
                'end_date' => '25-03-1983 12:12:12+100'
            )
        ));
        $this->assertTrue($client->getResponse()->getStatusCode() == 201, "Something Blocked the creation of a Workflow");
        $client->request('POST', '/api/workflows.json', array(
            'ger_workflow' => array(
                'name' => 'workflow1',
                'start_date' => '25-03-1983 11:12:12+100',
                'end_date' => '25-03-1983 12:12:12+100'
            )
        ));
        $this->assertTrue($client->getResponse()->getStatusCode() == 201, "Must be able to create Workflow with same name");

    }

    public function testDeleteWorkflowAction()
    {
        $client = $this->createAuthenticatedClient();
        $client->request('DELETE', '/api/workflows/workflow1.json');
        $this->assertTrue($client->getResponse()->getStatusCode() == 204, "Something Blocked the creation of a Workflow");

    }
}
