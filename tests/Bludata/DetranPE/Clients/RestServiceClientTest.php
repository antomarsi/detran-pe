<?php

namespace Bludata\Tests\DetranPE\Clients;

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
        $client = $this->getRestClient();
        $mockDTO = $this->createMock('Bludata\DetranPE\Interfaces\DTOInterface');
        $client->dto($mockDTO)->call();
    }

    protected function registerJSONEntityStub()
    {
        if (class_exists('Bludata\Tests\DetranPE\Clients\JSONEntityStub')) {
            return;
        }

        $stubClass = <<<STUBCLASS
        namespace Bludata\Tests\DetranPE\Clients;

        use Bludata\DetranPE\DTO\DTO;

        /**
         * @Bludata\Common\Annotations\JSON\Entity(name="stub")
         */
        class JSONEntityStub extends DTO
        {
            /**
             * @Bludata\Common\Annotations\JSON\Field(name="Field", order=0, type="string")
             */
            protected \$field = 'Lorem Ipsum';
        }
STUBCLASS;
        eval($stubClass);
    }

    /**
     * @covers Bludata\DetranPE\Clients\RestServiceClient::call
     * @covers Bludata\DetranPE\Clients\RestServiceClient::functionName
     * @covers Bludata\DetranPE\Clients\RestServiceClient::toJSON
     * @covers Bludata\DetranPE\Clients\RestServiceClient::getBaseUrl
     * @covers Bludata\DetranPE\Clients\RestServiceClient::setBaseUrl
     * @covers Bludata\DetranPE\Clients\RestServiceClient::getUrl
     * @covers Bludata\DetranPE\Clients\RestServiceClient::__construct
     * @covers Bludata\DetranPE\Clients\RestServiceClient::createDTOResponse
     *
     * @uses Bludata\DetranPE\Clients\RestServiceClient::service
     * @uses Bludata\DetranPE\Clients\RestServiceClient::validService
     * @uses Bludata\DetranPE\Clients\RestServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\RestServiceClient::dto
     * @uses Bludata\DetranPE\Clients\ServiceClient::validDTO
     * @uses Bludata\DetranPE\DTO\DTO::__call
     */
    public function testCallWithJSONEntityClassDTO()
    {
        $this->registerJSONEntityStub();
        $mockDTO = new JSONEntityStub();

        $mockService = $this->createMock('Bludata\DetranPE\Interfaces\ServiceInterface');
        $mockService->method('getName')
            ->willReturn('FooService');
        $mockService->method('getResponseDTOName')
            ->willReturn('Bludata\DetranPE\DTO\TextDTO');
        $mockService->method('getParamDTOName')
            ->willReturn('Bludata\Tests\DetranPE\Clients\JSONEntityStub');

        $client = $this->getRestClient();

        $client->dto($mockDTO);

        $client->service($mockService);

        $this->assertEquals($mockService->getParamDTOName(), get_class($mockDTO));
    }
}
