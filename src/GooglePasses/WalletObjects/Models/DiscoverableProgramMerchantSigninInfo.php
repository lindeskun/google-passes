<?php


namespace GooglePasses\WalletObjects\Models;


class DiscoverableProgramMerchantSigninInfo extends \Google_Model
{
    public $signinWebsite;
    protected $signinWebsiteType = Uri::class;
    protected $signinWebsiteDataType = '';

    public function setSigninWebsite(Uri $signinWebsite)
    {
        $this->signinWebsite = $signinWebsite;
    }
    public function getSigninWebsite()
    {
        return $this->signinWebsite;
    }
}