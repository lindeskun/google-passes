<?php

namespace GooglePasses\WalletObjects\Collections;

class FieldSelector extends \Google_Collection
{
    protected $fields;

    protected $collection_key = 'fields';

    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function getFields()
    {
        return $this->fields;
    }
}