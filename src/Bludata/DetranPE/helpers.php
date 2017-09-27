<?php

/**
 * Garante que uma string começa com o caracter separador de diretório
 *
 * @return string
 */
if (!function_exists('detranpe_str_startwith_directory_separator')) {
    function detranpe_str_startwith_directory_separator($path) {
        if (!starts_with($path, DIRECTORY_SEPARATOR)) {
            $path = DIRECTORY_SEPARATOR . $path;
        }
        return $path;
    }
}

/**
 * Retorna caminho para local de armazenamento dos arquivos
 *
 * @return string
 */
if (!function_exists('detranpe_storage_path')) {
    function detranpe_storage_path($subPath = '') {
        $subPath = detranpe_str_startwith_directory_separator($subPath);
        return realpath(__DIR__ . '/../../../storage') . $subPath;
    }
}

/**
 * Retorna caminho para local de armazenamento dos arquivos de WSDL
 *
 * @return string
 */
if (!function_exists('detranpe_wsdl_path')) {
    function detranpe_wsdl_path($subPath = '') {
        $subPath = detranpe_str_startwith_directory_separator($subPath);
        return detranpe_storage_path('/wsdl' . $subPath);
    }
}

/**
 * Retorna caminho para arquivo de WSDL do web-service ProcessoRenach
 *
 * @return string
 */
if (!function_exists('detranpe_wsdl_processorenach_file')) {
    function detranpe_wsdl_processorenach_file() {
        if ('production' === getenv('APP_ENV')) {
            return realpath(detranpe_wsdl_path('processorenach.wsdl'));
        }

        return detranpe_wsdl_processorenach2_file();
    }
}

/**
 * Retorna caminho para arquivo de WSDL do web-service Autenticacao
 *
 * @return string
 */
if (!function_exists('detranpe_wsdl_autenticacao_file')) {
    function detranpe_wsdl_autenticacao_file() {
        if ('production' === getenv('APP_ENV')) {
            return realpath(detranpe_wsdl_path('autenticacao.wsdl'));
        }
        return detranpe_wsdl_autenticacao2_file();
    }
}

/**
 * Retorna caminho para arquivo de WSDL do web-service ProcessoRenach
 *
 * @return string
 */
if (!function_exists('detranpe_wsdl_processorenach2_file')) {
    function detranpe_wsdl_processorenach2_file() {
        return realpath(detranpe_wsdl_path('processorenach2.wsdl'));
    }
}

/**
 * Retorna caminho para arquivo de WSDL do web-service Autenticacao
 *
 * @return string
 */
if (!function_exists('detranpe_wsdl_autenticacao2_file')) {
    function detranpe_wsdl_autenticacao2_file() {
        return realpath(detranpe_wsdl_path('autenticacao2.wsdl'));
    }
}

/**
 * Opções padrões usadas no construtor da classe SoapClient
 *
 * @return array
 */
if (!function_exists('detranpe_soap_client_options')) {
    function detranpe_soap_client_options() {
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

/**
 * Gera um novo SoapClient
 *
 * @param $wsdl Caminho para o arquivo WSDL
 * @param $options Opções usadas na requisições
 */
if (!function_exists('detranpe_generate_soap_client')) {
    function detranpe_generate_soap_client($wsdl, $options=null) {
        if (!file_exists($wsdl)) {
            $message = sprintf('%s is not a valid file');
            throw new \InvalidArgumentException($message);
        }

        if (is_array($options)) {
            $options = array_merge($options, detranpe_soap_client_options());
            return new SoapClient($wsdl, $options);
        }

        $options = detranpe_soap_client_options();
        return new SoapClient($wsdl, $options);
    }
}

/**
 * Gera um novo SoapServiceClient
 *
 * @param $wsdl Caminho para o arquivo WSDL
 * @param $options Opções usadas na requisições
 */
if (!function_exists('detranpe_generate_soap_service_client')) {
    function detranpe_generate_soap_service_client($wsdl, $options=null) {
        $soapClient = detranpe_generate_soap_client($wsdl, $options);
        return new \Bludata\DetranPE\Clients\SoapServiceClient($soapClient);
    }
}
