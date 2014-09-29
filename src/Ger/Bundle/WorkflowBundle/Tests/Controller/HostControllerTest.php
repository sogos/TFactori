<?php

namespace Ger\Bundle\WorkflowBundle\Tests\Controller;


class HostControllerTest extends BaseController
{

    public function testGetHostsAction()
    {
        $client = $this->createAuthenticatedClient();

        $crawler = $client->request('GET', '/api/hosts.json');

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
        $this->assertTrue(array_key_exists('hosts', $content_decoded));
    }

    public function testGetHostAction()
    {
        $client = $this->createAuthenticatedClient();

        $crawler = $client->request('GET', '/api/hosts/1.json');

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
        $this->assertTrue(array_key_exists('host', $content_decoded));
    }
}
