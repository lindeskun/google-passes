<?php

namespace GooglePasses\WalletObjects\Classes;

use Google_Collection;

abstract class AbstractClass extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}