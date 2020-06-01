<?php

namespace GooglePasses\WalletObjects\Models;
use Google_Model;
use GooglePasses\WalletObjects\Collections\FieldSelector;

class TemplateItem extends Google_Model
{
    protected $firstValue;
    protected $firstValueType = FieldSelector::class;
    protected $firstValueDataType = '';

    protected $predefinedItem;

    protected $secondValue;
    protected $secondValueType = FieldSelector::class;
    protected $secondValueDataType = '';


    public function setFirstValue(FieldSelector $firstValue)
    {
        $this->firstValue = $firstValue;
    }
    public function getFirstValue()
    {
        return $this->firstValue;
    }
    public function setPredefinedItem($predefinedItem)
    {
        $this->predefinedItem = $predefinedItem;
    }
    public function getPredefinedItem()
    {
        return $this->predefinedItem;
    }
    public function setSecondValue(FieldSelector $secondValue)
    {
        $this->secondValue = $secondValue;
    }
    public function getSecondValue()
    {
        return $this->secondValue;
    }
}