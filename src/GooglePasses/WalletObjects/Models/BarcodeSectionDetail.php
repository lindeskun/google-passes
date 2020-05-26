<?php


namespace GooglePasses\WalletObjects\Models;


use GooglePasses\WalletObjects\Collections\FieldSelector;

class BarcodeSectionDetail extends \Google_Model
{
    protected $fieldSelector;

    public function setFieldSelector(FieldSelector $fieldSelector)
    {
        $this->fieldSelector = $fieldSelector;
    }
    public function getFieldSelector()
    {
        return $this->fieldSelector;
    }
}