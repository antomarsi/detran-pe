<?php

namespace Bludata\DetranPE\Clients;

use Bludata\DetranPE\Exceptions\InvalidDTOException;
use Bludata\DetranPE\Exceptions\InvalidServiceException;
use Bludata\DetranPE\Interfaces\DTOInterface;
use Bludata\DetranPE\Interfaces\ServiceClientInterface;
use Bludata\DetranPE\Interfaces\ServiceInterface;
use Psr\Log\LoggerInterface;

abstract class ServiceClient implements ServiceClientInterface
{
    /**
     * @property Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @property Bludata\DetranPE\Interfaces\DTOInterface
     */
    protected $dto;

    /**
     * @property Bludata\DetranPE\Interfaces\ServiceInterface
     */
    protected $service;

    /**
     * @param string $dtoClassName
     */
    protected function newDTOInstance($dtoClassName)
    {
        $reflection = new \ReflectionClass($dtoClassName);

        return $reflection->newInstanceWithoutConstructor();
    }

    /**
     * @return Bludata\DetranPE\Interfaces\DTOInterface
     */
    public function newParamDTOInstance()
    {
        $this->validServiceOrDie();

        return $this->newDTOInstance($this->service->getParamDTOName());
    }

    /**
     * @return Bludata\DetranPE\Interfaces\DTOInterface
     */
    public function newResponseDTOInstance()
    {
        $this->validServiceOrDie();

        return $this->newDTOInstance($this->service->getResponseDTOName());
    }

    /**
     * @param Bludata\DetranPE\Interfaces\DTOInterface $dto
     *
     * @return self
     */
    public function dto(DTOInterface $dto)
    {
        $this->dto = $dto;

        return $this;
    }

    /**
     * @param mixed
     *
     * @return bool
     */
    public function validDTO($dto)
    {
        return $dto instanceof DTOInterface;
    }

    /**
     * @param Bludata\DetranPE\Interfaces\ServiceInterface $service
     *
     * @return self
     */
    public function service(ServiceInterface $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @param mixed
     *
     * @return bool
     */
    public function validService($service)
    {
        return $service instanceof ServiceInterface;
    }

    /**
     * @param mixed
     *
     * @throws Bludata\DetranPE\Exceptions\InvalidServiceException
     */
    public function validServiceOrDie($service)
    {
        if (!$this->validService($service)) {
            throw new InvalidServiceException();
        }

        return $this;
    }

    /**
     * @param mixed
     *
     * @throws Bludata\DetranPE\Exceptions\InvalidDTOException
     */
    public function validDTOOrDie($dto)
    {
        if (!$this->validDTO($dto)) {
            throw new InvalidDTOException();
        }

        return $this;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function logger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function call();
}
