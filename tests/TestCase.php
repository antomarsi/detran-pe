<?php

use Bludata\DetranPE\Clients\RestServiceClient;
use Faker\Factory;
use PHPUnit\Framework\TestCase as ParentTestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class TestCase extends ParentTestCase
{
    /**
     * Factory.
     */
    protected $faker;

    protected function setUp()
    {
        $this->faker = Factory::create('pt_BR');
    }

    protected function getClient()
    {
        $mock = new MockHandler([
            new Response(200, []),
            new RequestException("Error Communicating with Server", new Request('GET', 'test'))
        ]);

        $handler = HandlerStack::create($mock);
        return new Client(['handler' => $handler]);
    }

    protected function getRestClient()
    {
        return new RestServiceClient($this->getClient());
    }
}
