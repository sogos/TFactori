<?php
/**
 * Created by PhpStorm.
 * User: tcordier
 * Date: 27/09/2014
 * Time: 10:50
 */

namespace Ger\Bundle\WorkflowBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BaseController extends WebTestCase {


    /**
     * Create a client with a default Authorization header.
     *
     * @param string $username
     * @param string $password
     *
     * @return \Symfony\Bundle\FrameworkBundle\Client
     */
    protected function createAuthenticatedClient($username = 'admin', $password = 'kitten')
    {
        $client = static::createClient();
        $client->request(
            'POST',
            '/api/login_check',
            array(
                'username' => $username,
                'password' => $password,
            )
        );

        $data = json_decode($client->getResponse()->getContent(), true);
        $client = static::createClient();
        $client->setServerParameter('HTTP_Authorization', sprintf('Bearer %s', $data['token']));

        return $client;
    }

} 