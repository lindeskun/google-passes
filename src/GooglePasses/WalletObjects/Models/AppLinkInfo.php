<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class AppLinkInfo extends Google_Model
{
    protected $appLogoImage;
    protected $appTarget;
    protected $description;
    protected $title;

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