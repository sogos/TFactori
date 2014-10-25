<?php

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
        $this->auth = array(
            'PHP_AUTH_USER' => $username,
            'PHP_AUTH_PW'   => $password,
        );
        $client = static::createClient(array(), $this->auth );

        return $client;
    }

} 