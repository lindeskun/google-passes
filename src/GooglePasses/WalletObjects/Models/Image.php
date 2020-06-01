<?php

namespace GooglePasses\WalletObjects\Models;

class Image extends \Google_Model
{
    protected $kind;
    protected $sourceUri;
    protected $sourceUriType = ImageUri::class;
    protected $sourceUriDataType = '';


    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setSourceUri(ImageUri $sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }

    public function getSourceUri()
    {
        return $this->sourceUri;
    }
}