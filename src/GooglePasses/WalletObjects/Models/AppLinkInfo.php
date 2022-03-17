<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class AppLinkInfo extends Google_Model
{
    public $appLogoImage;
    protected $appLogoImageType = Image::class;
    protected $appLogoImageDataType = '';
    public $appTarget;
    protected $appTargetType = AppTarget::class;
    protected $appTargetDataType = '';
    public $description;
    protected $descriptionType = LocalizedString::class;
    protected $descriptionDataType = '';
    public $title;
    protected $titleType = LocalizedString::class;
    protected $titleDataType = '';

    public function setAppLogoImage(Image $appLogoImage)
    {
        $this->appLogoImage = $appLogoImage;
    }
    public function getAppLogoImage()
    {
        return $this->appLogoImage;
    }
    public function setAppTarget(AppTarget $appTarget)
    {
        $this->appTarget = $appTarget;
    }
    public function getAppTarget()
    {
        return $this->appTarget;
    }
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setTitle(LocalizedString $title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
