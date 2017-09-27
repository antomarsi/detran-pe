<?php

namespace Bludata\Tests\DetranPE\Clients;

use Bludata\DetranPE\Clients\SoapServiceClient;
use TestCase;

class SoapServiceClientTest extends TestCase
{
    /**
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::call
     *
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::validService
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::dto
     * @uses Bludata\DetranPE\Clients\ServiceClient::validDTO
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::__construct
     * @expectedException Bludata\DetranPE\Exceptions\InvalidServiceException
     */
    public function testCalldtoButNotWithServiceThrowsException()
    {
        $soapClient = $this->createMock('SoapClient');
        $client = new SoapServiceClient($soapClient);
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
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::call
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::functionName
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::toXML
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::toArray
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::extractXMLFromResponse
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::__construct
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::createDTOResponse
     * @covers Bludata\DetranPE\Clients\SoapServiceClient::removeEmptyValues
     *
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::service
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::validService
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::validServiceOrDie
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::dto
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

        $soapClientResponse = new \stdClass();
        $soapClientResponse->response = new \stdClass();
        $soapClientResponse->response->any = '<Response>'
            .'<NewDataSet>'
                .'<Table>'
                    .'<Body>Some Server Result</Body>'
                .'</Table>'
            .'</NewDataSet>'
            .'</Response>';
        $soapClient = $this->createMock('SoapClient');
        $soapClient->method('__soapCall')
            ->willReturn($soapClientResponse);

        $soapClient->expects($this->exactly(1))
            ->method('__soapCall')
            ->with(
                'FooService',
                ['FooService' => [
                    'xmlEntrada' => [
                        'any' => [
                                0 => '<stub><Field>Lorem Ipsum</Field><Confirmacao></Confirmacao><DescricaoErro></DescricaoErro></stub>',
                            ],
                        ],
                    ],
                ],
                $this->anything()
            );

        $client = new SoapServiceClient($soapClient);

        $response = $client->dto($mockDTO)
            ->service($mockService)
            ->call();
        $this->assertEquals('Some Server Result', $response->getBody());
    }
}
