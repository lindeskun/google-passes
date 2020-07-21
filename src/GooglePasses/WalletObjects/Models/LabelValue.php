<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class LabelValue extends Google_Model
{
    public $label;

    protected $localizedLabel;
    protected $localizedLabelType = LocalizedString::class;
    protected $localizedLabelDataType = '';

    protected $localizedValue;
    protected $localizedValueType = LocalizedString::class;
    protected $localizedValueDataType = '';

    protected $value;

    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setLocalizedLabel(LocalizedString $localizedLabel)
    {
        $this->localizedLabel = $localizedLabel;
    }
    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }
    public function setLocalizedValue(LocalizedString $localizedValue)
    {
        $this->localizedValue = $localizedValue;
    }
    public function getLocalizedValue()
    {
        return $this->localizedValue;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}