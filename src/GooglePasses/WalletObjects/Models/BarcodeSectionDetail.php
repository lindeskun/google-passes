<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\FieldSelector;

class BarcodeSectionDetail extends \Google_Model
{
    public $fieldSelector;
    protected $fieldSelectorType = FieldSelector::class;
    protected $fieldSelectorDataType = '';

    public function setFieldSelector(FieldSelector $fieldSelector)
    {
        $this->fieldSelector = $fieldSelector;
    }
    public function getFieldSelector()
    {
        return $this->fieldSelector;
    }
}
