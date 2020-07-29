<?php

namespace GooglePasses\WalletObjects\Collections;

use GooglePasses\WalletObjects\Models\Uri;

class LinksModuleData extends \Google_Collection
{
    protected $collection_key = 'uris';
    public $uris;
    protected $urisType = Uri::class;
    protected $urisDataType = 'array';

    public function setUris($uris)
    {
        $this->uris = $uris;
    }
    public function getUris()
    {
        return $this->uris;
    }
}