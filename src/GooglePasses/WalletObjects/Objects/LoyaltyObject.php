<?php

namespace GooglePasses\WalletObjects\Objects;

use Google_Collection;
use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use GooglePasses\WalletObjects\Collections\InfoModuleData;
use GooglePasses\WalletObjects\Collections\LinksModuleData;
use GooglePasses\WalletObjects\Models\AppLinkData;
use GooglePasses\WalletObjects\Models\Barcode;
use GooglePasses\WalletObjects\Models\ImageModuleData;
use GooglePasses\WalletObjects\Models\LatLongPoint;
use GooglePasses\WalletObjects\Models\LoyaltyPoints;
use GooglePasses\WalletObjects\Models\Message;
use GooglePasses\WalletObjects\Models\TextModuleData;
use GooglePasses\WalletObjects\Models\TimeInterval;

class LoyaltyObject extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    public $accountId;
    public $accountName;
    public $classId;
    public $disableExpirationNotification;
    public $hasLinkedDevice;
    public $hasUsers;
    public $id;
    public $kind;
    public $linkedOfferIds;
    public $smartTapRedemptionValue;
    public $state;
    public $version;
    protected $classReference;
    protected $classReferenceType = LoyaltyClass::class;
    protected $classReferenceDataType = '';

    protected $appLinkData;
    protected $appLinkDataType = AppLinkData::class;
    protected $appLinkDataDataType = '';

    protected $barcode;
    protected $barcodeType = Barcode::class;
    protected $barcodeDataType = '';

    protected $imageModulesData;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';

    protected $infoModuleData;
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';

    protected $validTimeInterval;
    protected $validTimeIntervalType = TimeInterval::class;
    protected $validTimeIntervalDataType = '';

    protected $textModulesData;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';

    protected $secondaryLoyaltyPoints;
    protected $secondaryLoyaltyPointsType = LoyaltyPoints::class;
    protected $secondaryLoyaltyPointsDataType = '';

    public $locations;

    protected $linksModuleData;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';

    protected $messages;
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';

    protected $loyaltyPoints;
    protected $loyaltyPointsType = LoyaltyPoints::class;
    protected $loyaltyPointsDataType = '';

    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
    public function getAccountId()
    {
        return $this->accountId;
    }
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
    public function getAccountName()
    {
        return $this->accountName;
    }
    public function setAppLinkData(AppLinkData $appLinkData)
    {
        $this->appLinkData = $appLinkData;
    }
    public function getAppLinkData()
    {
        return $this->appLinkData;
    }
    public function setBarcode(Barcode $barcode)
    {
        $this->barcode = $barcode;
    }
    public function getBarcode()
    {
        return $this->barcode;
    }
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }
    public function getClassId()
    {
        return $this->classId;
    }
    public function setClassReference(LoyaltyClass $classReference)
    {
        $this->classReference = $classReference;
    }
    public function getClassReference()
    {
        return $this->classReference;
    }
    public function setDisableExpirationNotification($disableExpirationNotification)
    {
        $this->disableExpirationNotification = $disableExpirationNotification;
    }
    public function getDisableExpirationNotification()
    {
        return $this->disableExpirationNotification;
    }
    public function setHasLinkedDevice($hasLinkedDevice)
    {
        $this->hasLinkedDevice = $hasLinkedDevice;
    }
    public function getHasLinkedDevice()
    {
        return $this->hasLinkedDevice;
    }
    public function setHasUsers($hasUsers)
    {
        $this->hasUsers = $hasUsers;
    }
    public function getHasUsers()
    {
        return $this->hasUsers;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageModulesData($imageModulesData)
    {
        $this->imageModulesData = $imageModulesData;
    }
    public function getImageModulesData()
    {
        return $this->imageModulesData;
    }
    public function setInfoModuleData(InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }
    public function getInfoModuleData()
    {
        return $this->infoModuleData;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLinkedOfferIds($linkedOfferIds)
    {
        $this->linkedOfferIds = $linkedOfferIds;
    }
    public function getLinkedOfferIds()
    {
        return $this->linkedOfferIds;
    }
    public function setLinksModuleData(LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }
    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setLoyaltyPoints(LoyaltyPoints $loyaltyPoints)
    {
        $this->loyaltyPoints = $loyaltyPoints;
    }
    public function getLoyaltyPoints()
    {
        return $this->loyaltyPoints;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setSecondaryLoyaltyPoints(LoyaltyPoints $secondaryLoyaltyPoints)
    {
        $this->secondaryLoyaltyPoints = $secondaryLoyaltyPoints;
    }
    public function getSecondaryLoyaltyPoints()
    {
        return $this->secondaryLoyaltyPoints;
    }
    public function setSmartTapRedemptionValue($smartTapRedemptionValue)
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;
    }
    public function getSmartTapRedemptionValue()
    {
        return $this->smartTapRedemptionValue;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setValidTimeInterval(TimeInterval $validTimeInterval)
    {
        $this->validTimeInterval = $validTimeInterval;
    }
    public function getValidTimeInterval()
    {
        return $this->validTimeInterval;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}