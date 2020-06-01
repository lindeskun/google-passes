<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class AppLinkData extends Google_Model
{
    protected $androidAppLinkInfo;
    protected $androidAppLinkInfoType = AppLinkInfo::class;
    protected $androidAppLinkInfoDataType = '';
    protected $iosAppLinkInfo;
    protected $iosAppLinkInfoType = AppLinkInfo::class;
    protected $iosAppLinkInfoDataType = '';
    protected $webAppLinkInfo;
    protected $webAppLinkInfoType = AppLinkInfo::class;
    protected $webAppLinkInfoDataType = '';

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