<?php

use Bludata\DetranPE\Clients\RestServiceClient;
use Faker\Factory;
use PHPUnit\Framework\TestCase as ParentTestCase;

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

    protected function getBaseUrl()
    {
        return 'http://10.150.235.175:40475/JsonBiometriaPratico.svc';
    }

    protected function getRestClient()
    {
        return new RestServiceClient($this->getBaseUrl());
    }
}
