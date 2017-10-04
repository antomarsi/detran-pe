<?php

namespace Bludata\DetranPE\Clients;

use Bludata\Common\Annotations\XML\Entity;
use Bludata\Common\Annotations\XML\Field;
use Bludata\Common\Converters\XMLConverter;
use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\NotXMLEntityException;
use Bludata\DetranPE\Exceptions\NotXMLFieldException;
use Doctrine\Common\Annotations\AnnotationReader;
use GuzzleHttp\Client;

class RestServiceClient extends ServiceClient
{
    private $baseUrl;

    public function __construct($baseUrl = null)
    {
        $this->baseUrl = $baseUrl;
        $this->client = new Client();
    }

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function functionName()
    {
        return $this->service->getName();
    }

    public function call()
    {
        $this->validServiceOrDie($this->service);
        $functionName = $this->functionName();
        $params = $this->toXML($this->dto);

        if ($this->logger instanceof LoggerInterface) {
            $this->logger->debug('Sending Data: '.$params);
        }

        $response = $this->soapClient->__soapCall(
            $functionName,
            [
                $functionName => [
                    'xmlEntrada' => [
                        'any' => [
                            $params,
                        ],
                    ],
                ],
            ]
        );

        return $this->createDTOResponse($response);
    }
}
