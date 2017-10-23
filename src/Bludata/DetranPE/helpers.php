<?php
/**
 * Garante que uma string começa com o caracter separador de diretório.
 *
 * @return string
 */
if (!function_exists('detranpe_str_startwith_directory_separator')) {
    function detranpe_str_startwith_directory_separator($path)
    {
        if (!starts_with($path, DIRECTORY_SEPARATOR)) {
            $path = DIRECTORY_SEPARATOR.$path;
        }

        return $path;
    }
}

/*
 * Retorna caminho para local de armazenamento dos arquivos
 *
 * @return string
 */
if (!function_exists('detranpe_storage_path')) {
    function detranpe_storage_path($subPath = '')
    {
        $subPath = detranpe_str_startwith_directory_separator($subPath);

        return realpath(__DIR__.'/../../../storage').$subPath;
    }
}

/*
 * Gera um novo RestServiceClient
 *
 * @param $baseUrl Caminho base para as chamadas rest
 */
if (!function_exists('detranpe_generate_rest_service_client')) {
    function detranpe_generate_rest_service_client($client)
    {
        return new \Bludata\DetranPE\Clients\RestServiceClient($client);
    }
}