<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class CardRowTemplateInfo extends Google_Model
{
    protected $oneItem;
    protected $oneItemType = CardRowOneItem::class;
    protected $oneItemDataType = '';

    protected $threeItems;
    protected $threeItemsType = CardRowThreeItems::class;
    protected $threeItemsDataType = '';

    protected $twoItems;
    protected $twoItemsType = CardRowTwoItems::NULL_VALUE;
    protected $twoItemsDataType = '';


    public function setOneItem(CardRowOneItem $oneItem)
    {
        $this->oneItem = $oneItem;
    }
    public function getOneItem()
    {
        return $this->oneItem;
    }
    public function setThreeItems(CardRowThreeItems $threeItems)
    {
        $this->threeItems = $threeItems;
    }
    public function getThreeItems()
    {
        return $this->threeItems;
    }
    public function setTwoItems(CardRowTwoItems $twoItems)
    {
        $this->twoItems = $twoItems;
    }
    public function getTwoItems()
    {
        return $this->twoItems;
    }
}