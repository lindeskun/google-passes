<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class Message extends Google_Model
{
    public $body;

    public $displayInterval;
    protected $displayIntervalType = TimeInterval::class;
    protected $displayIntervalDataType = '';

    public $header;
    public $id;
    public $kind;

    public $localizedBody;
    protected $localizedBodyType = LocalizedString::class;
    protected $localizedBodyDataType = '';

    public $localizedHeader;
    protected $localizedHeaderType = LocalizedString::class;
    protected $localizedHeaderDataType = '';

    public $messageType;

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setDisplayInterval(TimeInterval $displayInterval)
    {
        $this->displayInterval = $displayInterval;
    }

    public function getDisplayInterval()
    {
        return $this->displayInterval;
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

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
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

    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
    }

    public function getMessageType()
    {
        return $this->messageType;
    }
}