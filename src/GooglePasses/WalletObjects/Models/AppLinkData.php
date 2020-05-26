<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class AppLinkData extends Google_Model
{
    protected $androidAppLinkInfo;
    protected $iosAppLinkInfo;
    protected $webAppLinkInfo;

    public function setAndroidAppLinkInfo(AppLinkInfo $androidAppLinkInfo)
    {
        $this->androidAppLinkInfo = $androidAppLinkInfo;
    }
    public function getAndroidAppLinkInfo()
    {
        return $this->androidAppLinkInfo;
    }
    public function setIosAppLinkInfo(AppLinkInfo $iosAppLinkInfo)
    {
        $this->iosAppLinkInfo = $iosAppLinkInfo;
    }
    public function getIosAppLinkInfo()
    {
        return $this->iosAppLinkInfo;
    }
    public function setWebAppLinkInfo(AppLinkInfo $webAppLinkInfo)
    {
        $this->webAppLinkInfo = $webAppLinkInfo;
    }
    public function getWebAppLinkInfo()
    {
        return $this->webAppLinkInfo;
    }
}