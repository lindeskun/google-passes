<?php

namespace GooglePasses\WalletObjects\Classes;

use GooglePasses\WalletObjects\Collections\InfoModuleData;
use GooglePasses\WalletObjects\Collections\LocalizedString;
use GooglePasses\WalletObjects\Models\CallbackOptions;
use GooglePasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePasses\WalletObjects\Models\EventDateTime;
use GooglePasses\WalletObjects\Models\EventVenue;
use GooglePasses\WalletObjects\Models\Image;
use GooglePasses\WalletObjects\Collections\LinksModuleData;
use GooglePasses\WalletObjects\Models\Review;
use GooglePasses\WalletObjects\Models\Uri;

class EventClass extends AbstractClass
{
    protected $collection_key = 'textModulesData';
    protected $allowMultipleUsersPerObject;
    protected $confirmationCodeLabel;
    protected $countryCode;
    protected $enableSmartTap;
    protected $eventId;
    protected $gateLabel;
    protected $hexBackgroundColor;
    protected $issuerName;
    protected $kind;
    protected $multipleDevicesAndHoldersAllowedStatus;
    protected $redemptionIssuers;
    protected $reviewStatus;
    protected $rowLabel;
    protected $seatLabel;
    protected $sectionLabel;
    protected $version;
    protected $wordMark;
    protected $logo;
    protected $callbackOptions;
    protected $classTemplateInfo;
    protected $homepageUri;
    protected $customConfirmationCodeLabel;
    protected $customGateLabel;
    protected $customRowLabel;
    protected $customSeatLabel;
    protected $customSectionLabel;
    protected $heroImage;
    protected $finePrint;
    protected $eventName;
    protected $venue;
    protected $textModulesData;
    protected $review;
    protected $messages;
    protected $locations;
    protected $localizedIssuerName;
    protected $linksModuleData;
    protected $infoModuleData;
    protected $imageModulesData;

    protected function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }

    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }

    public function setCallbackOptions(CallbackOptions $callbackOptions)
    {
        $this->callbackOptions = $callbackOptions;
    }

    public function getCallbackOptions()
    {
        return $this->callbackOptions;
    }

    public function setClassTemplateInfo(ClassTemplateInfo $classTemplateInfo)
    {
        $this->classTemplateInfo = $classTemplateInfo;
    }

    public function getClassTemplateInfo()
    {
        return $this->classTemplateInfo;
    }

    public function setConfirmationCodeLabel($confirmationCodeLabel)
    {
        $this->confirmationCodeLabel = $confirmationCodeLabel;
    }

    public function getConfirmationCodeLabel()
    {
        return $this->confirmationCodeLabel;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setCustomConfirmationCodeLabel(LocalizedString $customConfirmationCodeLabel
    ) {
        $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
    }

    public function getCustomConfirmationCodeLabel()
    {
        return $this->customConfirmationCodeLabel;
    }

    public function setCustomGateLabel(LocalizedString $customGateLabel)
    {
        $this->customGateLabel = $customGateLabel;
    }

    public function getCustomGateLabel()
    {
        return $this->customGateLabel;
    }

    public function setCustomRowLabel(LocalizedString $customRowLabel)
    {
        $this->customRowLabel = $customRowLabel;
    }

    public function getCustomRowLabel()
    {
        return $this->customRowLabel;
    }

    public function setCustomSeatLabel(LocalizedString $customSeatLabel)
    {
        $this->customSeatLabel = $customSeatLabel;
    }

    public function getCustomSeatLabel()
    {
        return $this->customSeatLabel;
    }

    public function setCustomSectionLabel(LocalizedString $customSectionLabel)
    {
        $this->customSectionLabel = $customSectionLabel;
    }

    public function getCustomSectionLabel()
    {
        return $this->customSectionLabel;
    }

    public function setDateTime(EventDateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }

    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }

    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setEventName(LocalizedString $eventName)
    {
        $this->eventName = $eventName;
    }

    public function getEventName()
    {
        return $this->eventName;
    }

    public function setFinePrint(LocalizedString $finePrint)
    {
        $this->finePrint = $finePrint;
    }

    public function getFinePrint()
    {
        return $this->finePrint;
    }

    public function setGateLabel($gateLabel)
    {
        $this->gateLabel = $gateLabel;
    }

    public function getGateLabel()
    {
        return $this->gateLabel;
    }

    public function setHeroImage(Image $heroImage)
    {
        $this->heroImage = $heroImage;
    }

    public function getHeroImage()
    {
        return $this->heroImage;
    }

    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }

    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
    }

    public function setHomepageUri(Uri $homepageUri)
    {
        $this->homepageUri = $homepageUri;
    }

    public function getHomepageUri()
    {
        return $this->homepageUri;
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

    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }

    public function getIssuerName()
    {
        return $this->issuerName;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setLinksModuleData(LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }

    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }

    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }

    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }

    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    public function getLocations()
    {
        return $this->locations;
    }

    public function setLogo(Image $logo)
    {
        $this->logo = $logo;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
    }

    public function getMultipleDevicesAndHoldersAllowedStatus()
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }

    public function setRedemptionIssuers($redemptionIssuers)
    {
        $this->redemptionIssuers = $redemptionIssuers;
    }

    public function getRedemptionIssuers()
    {
        return $this->redemptionIssuers;
    }

    public function setReview(Review $review)
    {
        $this->review = $review;
    }

    public function getReview()
    {
        return $this->review;
    }

    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }

    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }

    public function setRowLabel($rowLabel)
    {
        $this->rowLabel = $rowLabel;
    }

    public function getRowLabel()
    {
        return $this->rowLabel;
    }

    public function setSeatLabel($seatLabel)
    {
        $this->seatLabel = $seatLabel;
    }

    public function getSeatLabel()
    {
        return $this->seatLabel;
    }

    public function setSectionLabel($sectionLabel)
    {
        $this->sectionLabel = $sectionLabel;
    }

    public function getSectionLabel()
    {
        return $this->sectionLabel;
    }

    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }

    public function getTextModulesData()
    {
        return $this->textModulesData;
    }

    public function setVenue(EventVenue $venue)
    {
        $this->venue = $venue;
    }

    public function getVenue()
    {
        return $this->venue;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setWordMark(Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }

    public function getWordMark()
    {
        return $this->wordMark;
    }
}