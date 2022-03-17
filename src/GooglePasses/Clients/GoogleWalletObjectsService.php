<?php

declare(strict_types=1);

namespace GooglePasses\Clients;

use Google_Client;
use Google_Service;

class GoogleWalletObjectsService extends Google_Service
{
    public const SERVICE_NAME = 'walletobjects';
    public const API_VERSION = 'v1';

    public function __construct(Google_Client $client)
    {
        parent::__construct($client);

        $this->rootUrl = 'https://walletobjects.googleapis.com/';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = static::API_VERSION;
    }
}
