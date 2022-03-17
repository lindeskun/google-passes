<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\LocalizedString;

class EventVenue extends \Google_Model
{
    public $kind;
    public $address;
    protected $addressType = LocalizedString::class;
    protected $addressDataType = '';
    public $name;
    protected $nameType = LocalizedString::class;
    protected $nameDataType = '';

    public function setAddress(LocalizedString $address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName(LocalizedString $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
