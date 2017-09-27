<?php

use PHPUnit\Framework\TestCase as ParentTestCase;
use Faker\Factory;

use Bludata\DetranPE\Services\AutenticaCliente\DTO\AutenticacaoDTO;
use Bludata\DetranPE\Services\AutenticaCliente\AutenticaClienteService;
use Bludata\DetranPE\Clients\SoapServiceClient;

class TestCase extends ParentTestCase
{
    /**
     * Factory
     */
    protected $faker;

    protected function setUp()
    {
        $this->faker = Factory::create('pt_BR');
    }

    protected function authWsdlFile()
    {
        return 'http://wsto.detran.to.gov.br/wsAutenticacao/Autenticacao.asmx?WSDL';
    }

    protected function wsdlFile()
    {
        return 'http://wsto.detran.to.gov.br/wsProcessoRenach/ProcessoRenach.asmx?WSDL';
    }

    protected function getMockSoapClientFromWSDL()
    {
        return $this->getMockFromWsdl($this->wsdlFile());
    }

    protected function getProcessoRenachHash()
    {
        $options = $this->getSoapServiceClientOptions();
        $authSoapClient = new SoapClient($this->authWsdlFile());
        $authSoapServiceCliente = new SoapServiceClient($authSoapClient, $options);
        $authService = new AutenticaClienteService;

        $autenticacao= new AutenticacaoDTO;
        $autenticacao->setCodigoCliente('BLUDATA');
        $autenticacao->setCodigoServico('wsProcessoRenach');

        $authClient = new SoapServiceClient($authSoapClient);

        $authResponse = $authClient->dto($autenticacao)
            ->service($authService)
            ->call();

        return $authResponse->getNumero();
    }

    protected function getSoapServiceClientOptions()
    {
        return [
            'soap_version' => SOAP_1_2,
            'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            'encoding' => 'UTF-8',
            'trace' => 1,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_NONE
        ];

    }
}
