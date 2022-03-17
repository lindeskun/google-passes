<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class LoyaltyPoints extends Google_Model
{
    public $label;
    public $localizedLabel;
    protected $localizedLabelType = LocalizedString::class;
    protected $localizedLabelDataType = '';

    public $balance;
    protected $balanceType = LoyaltyPointsBalance::class;
    protected $balanceDataType = '';

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
