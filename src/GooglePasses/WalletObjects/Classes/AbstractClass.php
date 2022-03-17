<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Classes;

use Google_Collection;

abstract class AbstractClass extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    public $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
