<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class DateTime extends Google_Model
{
    protected $date;

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}