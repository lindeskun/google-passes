<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class TextModuleData extends Google_Model
{
    public $body;
    public $header;
    public $id;

    public $localizedBody;
    protected $localizedBodyType = LocalizedString::class;
    protected $localizedBodyDataType = '';

    public $localizedHeader;
    protected $localizedHeaderType = LocalizedString::class;
    protected $localizedHeaderDataType = '';


    public function setBody($body)
    {
        $this->body = $body;
    }
    public function getBody()
    {
        return $this->body;
    }
    public function setHeader($header)
    {
        $this->header = $header;
    }
    public function getHeader()
    {
        return $this->header;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setLocalizedBody(LocalizedString $localizedBody)
    {
        $this->localizedBody = $localizedBody;
    }
    public function getLocalizedBody()
    {
        return $this->localizedBody;
    }
    public function setLocalizedHeader(LocalizedString $localizedHeader)
    {
        $this->localizedHeader = $localizedHeader;
    }
    public function getLocalizedHeader()
    {
        return $this->localizedHeader;
    }
}