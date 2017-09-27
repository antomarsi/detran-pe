<?php

namespace Bludata\Tests\DetranPE;

use TestCase;

class HelpersTest extends TestCase
{
    /**
     * @covers ::detranpe_wsdl_processorenach2_file
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     * @uses ::detranpe_wsdl_path
     */
    public function testDestrantoWsdlProcessoRenach2File()
    {
        $this->assertTrue(function_exists('detranpe_wsdl_processorenach2_file'), 'Function "detranpe_wsdl_processorenach_file" must exists');
        $wsdlFile = detranpe_wsdl_processorenach2_file();
        $this->assertInternalType('string', $wsdlFile);
        $this->assertTrue(file_exists($wsdlFile), 'Function "detranpe_wsdl_processorenach2_file" must return a valid file');
    }

    /**
     * @covers ::detranpe_wsdl_autenticacao2_file
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     * @uses ::detranpe_wsdl_path
     */
    public function testDestrantoWsdlAutenticacao2File()
    {
        $this->assertTrue(function_exists('detranpe_wsdl_autenticacao2_file'), 'Function "detranpe_wsdl_autenticacao_file" must exists');
        $wsdlFile = detranpe_wsdl_autenticacao2_file();
        $this->assertInternalType('string', $wsdlFile);
        $this->assertTrue(file_exists($wsdlFile), 'Function "detranpe_wsdl_autenticacao2_file" must return a valid file');
    }

    /**
     * @covers ::detranpe_wsdl_processorenach_file
     * @uses ::detranpe_wsdl_processorenach2_file
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     * @uses ::detranpe_wsdl_path
     */
    public function testDestrantoWsdlProcessoRenachFile()
    {
        $this->assertTrue(function_exists('detranpe_wsdl_processorenach_file'), 'Function "detranpe_wsdl_processorenach_file" must exists');
        $wsdlFile = detranpe_wsdl_processorenach_file();
        $this->assertInternalType('string', $wsdlFile);
        $this->assertTrue(file_exists($wsdlFile), 'Function "detranpe_wsdl_processorenach_file" must return a valid file');
    }

    /**
     * @covers ::detranpe_wsdl_autenticacao_file
     * @uses ::detranpe_wsdl_autenticacao2_file
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     * @uses ::detranpe_wsdl_path
     */
    public function testDestrantoWsdlAutenticacaoFile()
    {
        $this->assertTrue(function_exists('detranpe_wsdl_autenticacao_file'), 'Function "detranpe_wsdl_autenticacao_file" must exists');
        $wsdlFile = detranpe_wsdl_autenticacao_file();
        $this->assertInternalType('string', $wsdlFile);
        $this->assertTrue(file_exists($wsdlFile), 'Function "detranpe_wsdl_autenticacao_file" must return a valid file');
    }

    /**
     * @covers ::detranpe_soap_client_options
     */
    public function testDestrantoSoapClientOptions()
    {
        $this->assertTrue(function_exists('detranpe_soap_client_options'), 'Function "detranpe_soap_client_options" must exists');
        $options = detranpe_soap_client_options();
        $this->assertInternalType('array', $options);
    }

    /**
     * @covers ::detranpe_generate_soap_client
     * @uses ::detranpe_wsdl_autenticacao_file
     * @uses ::detranpe_soap_client_options
     * @depends testDestrantoWsdlAutenticacaoFile
     * @uses ::detranpe_wsdl_autenticacao2_file
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     * @uses ::detranpe_wsdl_path
     */
    public function testDestrantoGenerateSoapClientWithAutenticacaoFile()
    {
        $this->assertTrue(function_exists('detranpe_generate_soap_client'), 'Function "detranpe_generate_soap_client" must exists');
        $wsdlFile = detranpe_wsdl_autenticacao_file();
        $soapClient = detranpe_generate_soap_client($wsdlFile);
        $this->assertInstanceOf('SoapClient', $soapClient);
        return $soapClient;
    }

    /**
     * @covers ::detranpe_generate_soap_service_client
     * @uses Bludata\DetranPE\Clients\SoapServiceClient::__construct
     * @uses ::detranpe_soap_client_options
     * @uses ::detranpe_generate_soap_client
     * @uses ::detranpe_wsdl_autenticacao_file
     * @uses ::detranpe_wsdl_autenticacao2_file
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     * @uses ::detranpe_wsdl_path
     */
    public function testDestrantoGenerateSoapServiceClientWithAutenticacaoFile()
    {
        $this->assertTrue(function_exists('detranpe_generate_soap_service_client'), 'Function "detranpe_generate_soap_service_client" must exists');
        $wsdlFile = detranpe_wsdl_autenticacao_file();
        $soapServiceClient = detranpe_generate_soap_service_client($wsdlFile);
        $this->assertInstanceOf('Bludata\DetranPE\Clients\SoapServiceClient', $soapServiceClient);
    }
}
