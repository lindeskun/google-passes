<?php

namespace GooglePasses\WalletObjects\Collections;

class DetailsTemplateOverride extends \Google_Collection
{
    protected $collection_key = 'detailsItemInfos';
    protected $detailsItemInfos;

    public function setDetailsItemInfos($detailsItemInfos)
    {
        $this->detailsItemInfos = $detailsItemInfos;
    }
    public function getDetailsItemInfos()
    {
        return $this->detailsItemInfos;
    }
}