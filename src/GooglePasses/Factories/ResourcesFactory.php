<?php

declare(strict_types=1);

namespace GooglePasses\Factories;

use GooglePasses\Clients\GoogleWalletObjectsService;
use GooglePasses\WalletObjects\Resources\LoyaltyClassResource;
use GooglePasses\WalletObjects\Resources\LoyaltyObjectResource;

class ResourcesFactory
{
    public const LOYALTY_OBJECT = 'loyaltyobject';
    public const LOYALTY_CLASS = 'loyaltyclass';

    public const LOYALTY_OBJECT_INDEX = 1;
    public const LOYALTY_CLASS_INDEX = 0;

    protected GoogleWalletObjectsService $service;

    protected \SplFixedArray $cache;

    public function __construct(GoogleWalletObjectsService $service)
    {
        $this->service = $service;
        $this->cache = new \SplFixedArray(2);
    }

    public function makeLoyaltyObjectResource(): LoyaltyObjectResource
    {
        if (true === $this->cache->offsetExists(static::LOYALTY_OBJECT_INDEX)) {
            return $this->cache->offsetGet(static::LOYALTY_OBJECT_INDEX);
        }

        $object = new LoyaltyObjectResource(
            $this->service,
            GoogleWalletObjectsService::SERVICE_NAME,
            static::LOYALTY_OBJECT,
            [
                'methods' => [
                    'addmessage' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'get' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'insert' => [
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ],
                    'list' => [
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'classId' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ],
                    'modifylinkedofferobjects' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'patch' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'update' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );
        $this->cache->offsetSet(static::LOYALTY_OBJECT_INDEX, $object);

        return $object;
    }

    public function makeLoyaltyClassResource(): LoyaltyClassResource
    {
        if (true === $this->cache->offsetExists(static::LOYALTY_CLASS_INDEX)) {
            return $this->cache->offsetGet(static::LOYALTY_CLASS_INDEX);
        }

        $object = new LoyaltyClassResource(
            $this->service,
            GoogleWalletObjectsService::SERVICE_NAME,
            static::LOYALTY_CLASS,
            [
                'methods' => [
                    'addmessage' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'get' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'insert' => [
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ],
                    'list' => [
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'issuerId' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ],
                    'patch' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'update' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ]
        );

        $this->cache->offsetSet(static::LOYALTY_CLASS_INDEX, $object);

        return $object;
    }
}
