<?php

namespace Bludata\Tests\DetranPE;

use TestCase;

class HelpersTest extends TestCase
{
    /**
     * @covers ::detranpe_generate_rest_service_client
     *
     * @uses Bludata\DetranPE\Clients\RestServiceClient::__construct
     * @uses ::detranpe_storage_path
     * @uses ::detranpe_str_startwith_directory_separator
     */
    public function testDetranpeGenerateRestServiceClient()
    {
        $this->assertTrue(function_exists('detranpe_generate_rest_service_client'), 'Function "detranpe_generate_rest_service_client" must exists');
        $restServiceClient = detranpe_generate_rest_service_client($this->getClient());
        $this->assertInstanceOf('Bludata\DetranPE\Clients\RestServiceClient', $restServiceClient);
    }
}
