<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

class Image extends \Google_Model
{
    public $kind;
    public $sourceUri;
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
