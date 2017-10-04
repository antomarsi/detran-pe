<?php

namespace Bludata\Tests\DetranPE\Clients;

use Bludata\DetranPE\Clients\RestServiceClient;
use TestCase;

class RestServiceClientTest extends TestCase
{
    /**
     * @covers Bludata\DetranPE\Clients\RestServiceClient::call
     *
     * @uses Bludata\DetranPE\Clients\RestServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\RestServiceClient::validService
     * @uses Bludata\DetranPE\Clients\RestServiceClient::dto
     * @uses Bludata\DetranPE\Clients\ServiceClient::validDTO
     * @uses Bludata\DetranPE\Clients\RestServiceClient::__construct
     * @expectedException Bludata\DetranPE\Exceptions\InvalidServiceException
     */
    public function testCalldtoButNotWithServiceThrowsException()
    {
        $RestClient = $this->createMock('RestClient');
        $client = new RestServiceClient($RestClient);
        $mockDTO = $this->createMock('Bludata\DetranPE\Interfaces\DTOInterface');
        $client->dto($mockDTO)->call();
    }

    protected function registerXMLEntityStub()
    {
        if (class_exists('Bludata\Tests\DetranPE\Clients\XMLEntityStub')) {
            return;
        }

        $stubClass = <<<STUBCLASS
        namespace Bludata\Tests\DetranPE\Clients;

        use Bludata\DetranPE\DTO\DTO;

        /**
         * @Bludata\Common\Annotations\XML\Entity(name="stub")
         */
        class XMLEntityStub extends DTO
        {
            /**
             * @Bludata\Common\Annotations\XML\Field(name="Field")
             */
            protected \$field = 'Lorem Ipsum';
        }
STUBCLASS;
        eval($stubClass);
    }

    /**
     * @covers Bludata\DetranPE\Clients\RestServiceClient::call
     * @covers Bludata\DetranPE\Clients\RestServiceClient::functionName
     * @covers Bludata\DetranPE\Clients\RestServiceClient::toXML
     * @covers Bludata\DetranPE\Clients\RestServiceClient::toArray
     * @covers Bludata\DetranPE\Clients\RestServiceClient::extractXMLFromResponse
     * @covers Bludata\DetranPE\Clients\RestServiceClient::__construct
     * @covers Bludata\DetranPE\Clients\RestServiceClient::createDTOResponse
     * @covers Bludata\DetranPE\Clients\RestServiceClient::removeEmptyValues
     *
     * @uses Bludata\DetranPE\Clients\RestServiceClient::service
     * @uses Bludata\DetranPE\Clients\RestServiceClient::validService
     * @uses Bludata\DetranPE\Clients\RestServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\RestServiceClient::dto
     * @uses Bludata\DetranPE\Clients\ServiceClient::validDTO
     * @uses Bludata\DetranPE\DTO\DTO::__call
     */
    public function testCallWithXMLEntityClassDTO()
    {
        $this->registerXMLEntityStub();
        $mockDTO = new XMLEntityStub();

        $mockService = $this->createMock('Bludata\DetranPE\Interfaces\ServiceInterface');
        $mockService->method('getName')
            ->willReturn('FooService');
        $mockService->method('getResponseDTOName')
            ->willReturn('Bludata\DetranPE\DTO\TextDTO');

        $client = new RestServiceClient($restClient);

        $response = $client->dto($mockDTO)
            ->service($mockService)
            ->call();
        $this->assertEquals('Some Server Result', $response->getBody());
    }
}
