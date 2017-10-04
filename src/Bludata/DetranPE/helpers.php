<?php
/*
 * Gera um novo SoapServiceClient
 *
 * @param $wsdl Caminho para o arquivo WSDL
 * @param $options Opções usadas na requisições
 */
if (!function_exists('detranpe_generate_rest_service_client')) {
    function detranpe_generate_soap_service_client($baseUrl = null)
    {
        return new \Bludata\DetranPE\Clients\RestServiceClient($baseUrl);
    }
}
