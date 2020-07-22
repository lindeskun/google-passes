<?php

namespace GooglePasses\Clients;

use Google_Client;
use GooglePasses\Factories\ResourcesFactory;
use GooglePasses\Helpers\Config;
use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use GooglePasses\WalletObjects\Objects\LoyaltyObject;
use Psr\Log\LoggerInterface;

class GoogleRestClient
{
    /** @var Google_Client  */
    private $client;

    /** @var LoggerInterface */
    private $logger;

    /** @var GoogleWalletObjectsService */
    private $service;

    /** @var ResourcesFactory */
    private $resourcesFactory;

    public function __construct(Config $config, LoggerInterface $logger)
    {
        $this->client = new Google_Client();

        $this->logger = $logger;

        // do OAuth2.0 via service account file.
        // See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $config->getServiceAccountFilePath());
        $this->client->useApplicationDefaultCredentials();
        $this->client->setApplicationName($config->getApplicationName());
        $this->client->setScopes($config->getScopes());

        $this->resourcesFactory = new ResourcesFactory($this->getService());
    }

    /**
     * @return GoogleWalletObjectsService
     */
    public function getService()
    {
        if (empty($this->service)) {
            $this->service = new GoogleWalletObjectsService($this->client);
        }
        return $this->service;
    }

    /**
     * @param LoyaltyClass $loyaltyClass
     * @return array
     */
    public function insertLoyaltyClass(LoyaltyClass $loyaltyClass)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->insert($loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string)$gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string)$e);
        }

        return $response;
    }

    /**
     * @param LoyaltyClass $loyaltyClass
     * @return array
     */
    public function patchLoyaltyClass(LoyaltyClass $loyaltyClass)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->patch($loyaltyClass->getId(), $loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string)$gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string)$e);
        }

        return $response;
    }

    /**
     * @param $classId
     * @return array
     */
    public function getLoyaltyClass($classId)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->get($classId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string)$gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string)$e);
        }

        return $response;
    }

    /**
     * @param $objectId
     * @return array
     */
    public function getLoyaltyObject($objectId)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->get($objectId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string)$gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string)$e);
        }

        return $response;
    }

    /**
     * @param LoyaltyObject $loyaltyObject
     * @return array
     */
    public function insertLoyaltyObject(LoyaltyObject $loyaltyObject)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->insert($loyaltyObject);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException) {
            $response = $gException->getErrors();
            $this->logger->warning((string)$gException);
            $response["code"] = $gException->getCode();
        } catch (\Exception $e) {
            $this->logger->error((string)$e);
        }

        return $response;
    }
}