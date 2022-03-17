<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class CardRowThreeItems extends Google_Model
{
    public $endItem;
    protected $endItemType = TemplateItem::class;
    protected $endItemDataType = '';

    public $middleItem;
    protected $middleItemType = TemplateItem::class;
    protected $middleItemDataType = '';

    public $startItem;
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
    public function setMiddleItem(TemplateItem $middleItem)
    {
        $this->middleItem = $middleItem;
    }
    public function getMiddleItem()
    {
        return $this->middleItem;
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
