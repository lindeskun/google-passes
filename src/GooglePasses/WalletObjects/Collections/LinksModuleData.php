<?php

namespace GooglePasses\WalletObjects\Collections;

class LinksModuleData extends \Google_Collection
{
    protected $collection_key = 'uris';
    protected $uris;

    public function setUris($uris)
    {
        $this->uris = $uris;
    }
    public function getUris()
    {
        return $this->uris;
    }
}