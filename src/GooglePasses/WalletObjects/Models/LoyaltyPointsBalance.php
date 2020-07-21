<?php


namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class LoyaltyPointsBalance extends Google_Model
{
    public $double;
    public $int;
    public $string;
    protected $money;
    protected $moneyType = Money::class;
    protected $moneyDataType = '';

    public function setDouble($double)
    {
        $this->double = $double;
    }
    public function getDouble()
    {
        return $this->double;
    }
    public function setInt($int)
    {
        $this->int = $int;
    }
    public function getInt()
    {
        return $this->int;
    }
    public function setMoney(Money $money)
    {
        $this->money = $money;
    }
    public function getMoney()
    {
        return $this->money;
    }
    public function setString($string)
    {
        $this->string = $string;
    }
    public function getString()
    {
        return $this->string;
    }
}