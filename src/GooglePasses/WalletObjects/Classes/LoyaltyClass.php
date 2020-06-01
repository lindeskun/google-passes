<?php

namespace GooglePasses\WalletObjects\Classes;


use GooglePasses\WalletObjects\Collections\InfoModuleData;
use GooglePasses\WalletObjects\Collections\LinksModuleData;
use GooglePasses\WalletObjects\Collections\LocalizedString;
use GooglePasses\WalletObjects\Models\CallbackOptions;
use GooglePasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePasses\WalletObjects\Models\DiscoverableProgram;
use GooglePasses\WalletObjects\Models\Image;
use GooglePasses\WalletObjects\Models\ImageModuleData;
use GooglePasses\WalletObjects\Models\LatLongPoint;
use GooglePasses\WalletObjects\Models\Message;
use GooglePasses\WalletObjects\Models\Review;
use GooglePasses\WalletObjects\Models\Uri;

class LoyaltyClass extends AbstractClass
{
    protected $accountIdLabel;
    protected $accountNameLabel;
    protected $allowMultipleUsersPerObject;
    protected $countryCode;
    protected $enableSmartTap;
    protected $hexBackgroundColor;
    protected $issuerName;
    protected $kind;
    protected $multipleDevicesAndHoldersAllowedStatus;
    protected $programName;
    protected $redemptionIssuers;
    protected $reviewStatus;
    protected $rewardsTier;
    protected $rewardsTierLabel;
    protected $secondaryRewardsTier;
    protected $secondaryRewardsTierLabel;
    protected $version;

    protected $callbackOptions;
    protected $callbackOptionsType = CallbackOptions::class;
    protected $callbackOptionsDataType = '';

    protected $classTemplateInfo;
    protected $classTemplateInfoType = ClassTemplateInfo::class;
    protected $classTemplateInfoDataType = '';

    protected $heroImage;
    protected $heroImageType = Image::class;
    protected $heroImageDataType = '';

    protected $homepageUri;
    protected $homepageUriType = Uri::class;
    protected $homepageUriDataType = '';

    protected $imageModulesData;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';

    protected $discoverableProgram;
    protected $discoverableProgramType = DiscoverableProgram::class;
    protected $discoverableProgramDataType = '';

    protected $infoModuleData;
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';

    protected $wordMark;
    protected $wordMarkType = Image::class;
    protected $wordMarkDataType = '';

    protected $textModulesData;
//    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';

    protected $review;
    protected $reviewType = Review::class;
    protected $reviewDataType = '';

    protected $programLogo;
    protected $programLogoType = Image::class;
    protected $programLogoDataType = '';

    protected $linksModuleData;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';

    protected $localizedAccountIdLabel;
    protected $localizedAccountIdLabelType = LocalizedString::class;
    protected $localizedAccountIdLabelDataType = '';


    protected $localizedAccountNameLabel;
    protected $localizedAccountNameLabelType = LocalizedString::class;
    protected $localizedAccountNameLabelDataType = '';

    protected $localizedIssuerName;
    protected $localizedIssuerNameType = LocalizedString::class;
    protected $localizedIssuerNameDataType = '';

    protected $localizedProgramName;
    protected $localizedProgramNameType = LocalizedString::class;
    protected $localizedProgramNameDataType = '';

    protected $localizedRewardsTier;
    protected $localizedRewardsTierType = LocalizedString::class;
    protected $localizedRewardsTierDataType = '';

    protected $localizedRewardsTierLabel;
    protected $localizedRewardsTierLabelType = LocalizedString::class;
    protected $localizedRewardsTierLabelDataType = '';

    protected $localizedSecondaryRewardsTier;
    protected $localizedSecondaryRewardsTierType = LocalizedString::class;
    protected $localizedSecondaryRewardsTierDataType = '';

    protected $localizedSecondaryRewardsTierLabel;
    protected $localizedSecondaryRewardsTierLabelType = LocalizedString::class;
    protected $localizedSecondaryRewardsTierLabelDataType = '';

    protected $locations;
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';

    protected $messages;
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';


    public function setAccountIdLabel($accountIdLabel)
    {
        $this->accountIdLabel = $accountIdLabel;
    }
    public function getAccountIdLabel()
    {
        return $this->accountIdLabel;
    }
    public function setAccountNameLabel($accountNameLabel)
    {
        $this->accountNameLabel = $accountNameLabel;
    }
    public function getAccountNameLabel()
    {
        return $this->accountNameLabel;
    }
    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
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
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    public function setDiscoverableProgram(DiscoverableProgram $discoverableProgram)
    {
        $this->discoverableProgram = $discoverableProgram;
    }
    public function getDiscoverableProgram()
    {
        return $this->discoverableProgram;
    }
    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }
    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
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
    public function setImageModulesData(ImageModuleData $imageModulesData)
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
    public function setLocalizedAccountIdLabel(LocalizedString $localizedAccountIdLabel)
    {
        $this->localizedAccountIdLabel = $localizedAccountIdLabel;
    }
    public function getLocalizedAccountIdLabel()
    {
        return $this->localizedAccountIdLabel;
    }
    public function setLocalizedAccountNameLabel(LocalizedString $localizedAccountNameLabel)
    {
        $this->localizedAccountNameLabel = $localizedAccountNameLabel;
    }
    public function getLocalizedAccountNameLabel()
    {
        return $this->localizedAccountNameLabel;
    }
    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }
    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }
    public function setLocalizedProgramName(LocalizedString $localizedProgramName)
    {
        $this->localizedProgramName = $localizedProgramName;
    }
    public function getLocalizedProgramName()
    {
        return $this->localizedProgramName;
    }
    public function setLocalizedRewardsTier(LocalizedString $localizedRewardsTier)
    {
        $this->localizedRewardsTier = $localizedRewardsTier;
    }
    public function getLocalizedRewardsTier()
    {
        return $this->localizedRewardsTier;
    }
    public function setLocalizedRewardsTierLabel(LocalizedString $localizedRewardsTierLabel)
    {
        $this->localizedRewardsTierLabel = $localizedRewardsTierLabel;
    }
    public function getLocalizedRewardsTierLabel()
    {
        return $this->localizedRewardsTierLabel;
    }
    public function setLocalizedSecondaryRewardsTier(LocalizedString $localizedSecondaryRewardsTier)
    {
        $this->localizedSecondaryRewardsTier = $localizedSecondaryRewardsTier;
    }
    public function getLocalizedSecondaryRewardsTier()
    {
        return $this->localizedSecondaryRewardsTier;
    }
    public function setLocalizedSecondaryRewardsTierLabel(LocalizedString $localizedSecondaryRewardsTierLabel)
    {
        $this->localizedSecondaryRewardsTierLabel = $localizedSecondaryRewardsTierLabel;
    }
    public function getLocalizedSecondaryRewardsTierLabel()
    {
        return $this->localizedSecondaryRewardsTierLabel;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
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
    public function setProgramLogo(Image $programLogo)
    {
        $this->programLogo = $programLogo;
    }
    public function getProgramLogo()
    {
        return $this->programLogo;
    }
    public function setProgramName($programName)
    {
        $this->programName = $programName;
    }
    public function getProgramName()
    {
        return $this->programName;
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
    public function setRewardsTier($rewardsTier)
    {
        $this->rewardsTier = $rewardsTier;
    }
    public function getRewardsTier()
    {
        return $this->rewardsTier;
    }
    public function setRewardsTierLabel($rewardsTierLabel)
    {
        $this->rewardsTierLabel = $rewardsTierLabel;
    }
    public function getRewardsTierLabel()
    {
        return $this->rewardsTierLabel;
    }
    public function setSecondaryRewardsTier($secondaryRewardsTier)
    {
        $this->secondaryRewardsTier = $secondaryRewardsTier;
    }
    public function getSecondaryRewardsTier()
    {
        return $this->secondaryRewardsTier;
    }
    public function setSecondaryRewardsTierLabel($secondaryRewardsTierLabel)
    {
        $this->secondaryRewardsTierLabel = $secondaryRewardsTierLabel;
    }
    public function getSecondaryRewardsTierLabel()
    {
        return $this->secondaryRewardsTierLabel;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
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