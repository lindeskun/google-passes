<?php

namespace GooglePasses\WalletObjects\Collections;

use GooglePasses\WalletObjects\Models\TranslatedString;

class LocalizedString extends \Google_Collection
{
    protected $collection_key = 'translatedValues';
    protected $kind;
    protected $defaultValue;
    protected $translatedValues;

    public function setDefaultValue(TranslatedString $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setTranslatedValues($translatedValues)
    {
        $this->translatedValues = $translatedValues;
    }
    public function getTranslatedValues()
    {
        return $this->translatedValues;
    }
}