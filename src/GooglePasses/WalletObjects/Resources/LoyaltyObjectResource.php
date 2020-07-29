<?php

namespace GooglePasses\WalletObjects\Resources;

use Google_Service_Resource;
use GooglePasses\WalletObjects\Objects\LoyaltyObject;

class LoyaltyObjectResource extends Google_Service_Resource
{
    /**
     * Returns the loyalty object with the given object ID. (loyaltyobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return LoyaltyObject
     */
    public function get($resourceId, $optParams = [])
    {
        $params = ['resourceId' => $resourceId];
        $params = array_merge($params, $optParams);
        return $this->call('get', [$params], LoyaltyObject::class);
    }

    /**
     * Inserts an loyalty object with the given ID and properties.
     * (loyaltyobject.insert)
     *
     * @param LoyaltyObject $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObject
     */
    public function insert(LoyaltyObject $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('insert', [$params], LoyaltyObject::class);
    }

    /**
     * Modifies linked offer objects for the loyalty object with the given ID.
     * (loyaltyobject.modifylinkedofferobjects)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_ModifyLinkedOfferObjectsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObject
     */
    public function modifylinkedofferobjects(
        $resourceId,
        Google_Service_Walletobjects_ModifyLinkedOfferObjectsRequest $postBody,
        $optParams = []
    ) {
        $params = ['resourceId' => $resourceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('modifylinkedofferobjects', [$params], LoyaltyObject::class);
    }

    /**
     * Updates the loyalty object referenced by the given object ID. This method
     * supports patch semantics. (loyaltyobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyObject $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObject
     */
    public function patch($resourceId, LoyaltyObject $postBody, $optParams = [])
    {
        $params = ['resourceId' => $resourceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('patch', [$params], LoyaltyObject::class);
    }

    /**
     * Updates the loyalty object referenced by the given object ID.
     * (loyaltyobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyObject $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyObject
     */
    public function update($resourceId, LoyaltyObject $postBody, $optParams = [])
    {
        $params = ['resourceId' => $resourceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('update', [$params], LoyaltyObject::class);
    }
}