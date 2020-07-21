<?php


namespace GooglePasses\WalletObjects\Models;


use GooglePasses\WalletObjects\Collections\FieldSelector;

class FirstRowOption extends \Google_Model
{
    public $transitOption;
    public $fieldOption;
    protected $fieldOptionType = FieldSelector::class;
    protected $fieldOptionDataType = '';

    public function setFieldOption(FieldSelector $fieldOption)
    {
        $this->fieldOption = $fieldOption;
    }
    public function getFieldOption()
    {
        return $this->fieldOption;
    }
    public function setTransitOption($transitOption)
    {
        $this->transitOption = $transitOption;
    }
    public function getTransitOption()
    {
        return $this->transitOption;
    }
}