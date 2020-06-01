<?php


namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class CardRowOneItem extends Google_Model
{

    protected $item;
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