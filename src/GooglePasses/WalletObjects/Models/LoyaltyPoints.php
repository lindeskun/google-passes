<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class LoyaltyPoints extends Google_Model
{
    protected $label;
    protected $localizedLabel;
    protected $balance;

    public function setBalance(LoyaltyPointsBalance $balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setLocalizedLabel(LocalizedString $localizedLabel)
    {
        $this->localizedLabel = $localizedLabel;
    }
    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }
}