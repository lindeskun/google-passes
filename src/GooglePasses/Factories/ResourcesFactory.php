<?php

namespace GooglePasses\Factories;

use GooglePasses\Clients\GoogleWalletObjectsService;
use GooglePasses\Helpers\Settings;
use GooglePasses\WalletObjects\Resources\LoyaltyClassResource;
use GooglePasses\WalletObjects\Resources\LoyaltyObjectResource;
use SplDoublyLinkedList;

class ResourcesFactory
{
    const LOYALTY_OBJECT = 'loyaltyobject';
    const LOYALTY_CLASS = 'loyaltyclass';

    const LOYALTY_OBJECT_INDEX = Settings::TYPE_LOYALTY . 1;
    const LOYALTY_CLASS_INDEX = Settings::TYPE_LOYALTY . 0;

    /**
     * @var GoogleWalletObjectsService
     */
    protected $service;

    /** @var SplDoublyLinkedList  */
    protected $cache;

    public function __construct(GoogleWalletObjectsService $service)
    {
        $this->service = $service;
        $this->cache = new SplDoublyLinkedList();
    }

    /**
     * @return LoyaltyObjectResource
     */
    public function makeLoyaltyObjectResource()
    {
        if (!$this->cache->offsetExists(self::LOYALTY_OBJECT_INDEX)) {
            $object = new LoyaltyObjectResource(
                $this->service,
                GoogleWalletObjectsService::SERVICE_NAME,
                self::LOYALTY_OBJECT,
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
                    ]
                ]
            );
            $this->cache->offsetSet(self::LOYALTY_OBJECT_INDEX, $object);
        }

        return $this->cache->offsetGet(self::LOYALTY_OBJECT_INDEX);
    }

    /**
     * @return LoyaltyClassResource
     */
    public function makeLoyaltyClassResource()
    {
        if (!$this->cache->offsetExists(self::LOYALTY_CLASS_INDEX)) {
            $object = new LoyaltyClassResource(
                $this->service,
                GoogleWalletObjectsService::SERVICE_NAME,
                self::LOYALTY_CLASS,
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
                    ]
                ]
            );

            $this->cache->offsetSet(self::LOYALTY_CLASS_INDEX, $object);
        }

        return $this->cache->offsetGet(self::LOYALTY_CLASS_INDEX);
    }
}