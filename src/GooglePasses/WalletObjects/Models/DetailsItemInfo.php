<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class DetailsItemInfo extends Google_Model
{
    public $item;
    protected $itemType = TemplateItem::class;
    protected $itemDataType = '';


    public function setItem(TemplateItem $item)
    {
        $this->item = $item;
    }
    public function getItem()
    {
        return $this->item;
    }
}