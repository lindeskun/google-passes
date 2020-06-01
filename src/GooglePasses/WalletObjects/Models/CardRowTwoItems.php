<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class CardRowTwoItems extends Google_Model
{
    protected $endItem;
    protected $endItemType = TemplateItem::class;
    protected $endItemDataType = '';

    protected $startItem;
    protected $startItemType = TemplateItem::class;
    protected $startItemDataType = '';


    public function setEndItem(TemplateItem $endItem)
    {
        $this->endItem = $endItem;
    }
    public function getEndItem()
    {
        return $this->endItem;
    }
    public function setStartItem(TemplateItem $startItem)
    {
        $this->startItem = $startItem;
    }
    public function getStartItem()
    {
        return $this->startItem;
    }
}