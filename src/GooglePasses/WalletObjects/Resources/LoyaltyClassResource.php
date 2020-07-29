<?php

namespace GooglePasses\WalletObjects\Resources;

use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use Google_Service_Resource;

class LoyaltyClassResource extends Google_Service_Resource
{
    /**
     * Returns the loyalty class with the given class ID. (loyaltyclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return LoyaltyClass
     */
    public function get($resourceId, $optParams = [])
    {
        $params = ['resourceId' => $resourceId];
        $params = array_merge($params, $optParams);
        return $this->call('get', [$params], LoyaltyClass::class);
    }

    /**
     * Inserts an loyalty class with the given ID and properties.
     * (loyaltyclass.insert)
     *
     * @param LoyaltyClass $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClass
     */
    public function insert(LoyaltyClass $postBody, $optParams = [])
    {
        $params = ['postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('insert', [$params], LoyaltyClass::class);
    }

    /**
     * Updates the loyalty class referenced by the given class ID. This method
     * supports patch semantics. (loyaltyclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyClass $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClass
     */
    public function patch($resourceId, LoyaltyClass $postBody, $optParams = [])
    {
        $params = ['resourceId' => $resourceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('patch', [$params], LoyaltyClass::class);
    }

    /**
     * Updates the loyalty class referenced by the given class ID.
     * (loyaltyclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param LoyaltyClass $postBody
     * @param array $optParams Optional parameters.
     * @return LoyaltyClass
     */
    public function update($resourceId, LoyaltyClass $postBody, $optParams = [])
    {
        $params = ['resourceId' => $resourceId, 'postBody' => $postBody];
        $params = array_merge($params, $optParams);
        return $this->call('update', [$params], LoyaltyClass::class);
    }
}