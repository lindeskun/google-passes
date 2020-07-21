<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class DateTime extends Google_Model
{
    public $date;

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}