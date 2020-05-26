<?php

namespace GooglePasses\Clients;

use Google_Client;
use GooglePasses\Factories\ResourcesFactory;
use GooglePasses\Helpers\Config;
use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use GooglePasses\WalletObjects\Objects\LoyaltyObject;

class GoogleRestClient
{
    const SCOPES = 'https://www.googleapis.com/auth/wallet_object.issuer';

    private $client;

    private $service;

    private $resourcesFactory;

    public function __construct(Config $config) {
        $this->client = new Google_Client();

        // do OAuth2.0 via service account file.
        // See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $config->getServiceAccountFilePath());
        $this->client->useApplicationDefaultCredentials();
        // Set application name.
        $this->client->setApplicationName($config->getApplicationName());
        // Set Api scopes.
        $this->client->setScopes([self::SCOPES]);

        $this->resourcesFactory = new ResourcesFactory($this->getService());
    }

    public function getService()
    {
        if (empty($this->service)) {
            $this->service = new GoogleWalletObjectsService($this->client);
        }
        return $this->service;
    }

    public function insertLoyaltyClass(LoyaltyClass $loyaltyClass){
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->insert($loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function getLoyaltyClass($classId){
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->get($classId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function insertLoyaltyObject(LoyaltyObject $loyaltyObject){
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->insert($loyaltyObject);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
            echo("\n>>>> [START] Google Server Error response:");
            var_dump($response);
            echo("\n>>>> [END] Google Server Error response\n");
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
}