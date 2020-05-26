<?php

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\LocalizedString;

class EventVenue extends \Google_Model
{
    protected $kind;
    protected $address;
    protected $name;

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