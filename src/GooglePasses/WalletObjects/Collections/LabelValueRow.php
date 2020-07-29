<?php

namespace GooglePasses\WalletObjects\Collections;

use Google_Collection;
use GooglePasses\WalletObjects\Models\LabelValue;

class LabelValueRow extends Google_Collection
{
    protected $collection_key = 'columns';

    public $columns;
    protected $columnsType = LabelValue::class;
    protected $columnsDataType = 'array';


    public function setColumns($columns)
    {
        $this->columns = $columns;
    }
    public function getColumns()
    {
        return $this->columns;
    }
}