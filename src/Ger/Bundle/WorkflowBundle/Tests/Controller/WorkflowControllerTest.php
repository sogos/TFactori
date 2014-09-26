<?php

namespace Ger\Bundle\WorkflowBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorkflowControllerTest extends WebTestCase
{

    public function testGetWorkflowsAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api/workflows.json');

        $this->assertTrue($client->getResponse()->getStatusCode() == 200);
        $content = $client->getResponse()->getContent();
        if(is_object(json_decode($content))) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false, "Response in not a Valid Json");
        }
        $content_decoded = json_decode($content, true);
        $this->assertTrue(array_key_exists('success', $content_decoded));
        $this->assertTrue($content_decoded['success']);
        $this->assertTrue(array_key_exists('workflows', $content_decoded));
        $this->assertTrue(count($content_decoded['workflows']) == 1, "There is more than one workflow in database");
    }

    public function testGetWorkflowAction()
    {
        $client = static::createClient();

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

    }
}
