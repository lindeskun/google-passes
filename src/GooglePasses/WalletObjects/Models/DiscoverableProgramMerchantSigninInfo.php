<?php


namespace GooglePasses\WalletObjects\Models;


class DiscoverableProgramMerchantSigninInfo extends \Google_Model
{
    protected $signinWebsite;

    public function setSigninWebsite(Uri $signinWebsite)
    {
        $this->signinWebsite = $signinWebsite;
    }
    public function getSigninWebsite()
    {
        return $this->signinWebsite;
    }
}