<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class Message extends Google_Model
{
    protected $body;

    protected $displayInterval;
    protected $displayIntervalType = TimeInterval::class;
    protected $displayIntervalDataType = '';

    protected $header;
    protected $id;
    protected $kind;

    protected $localizedBody;
    protected $localizedBodyType = LocalizedString::class;
    protected $localizedBodyDataType = '';

    protected $localizedHeader;
    protected $localizedHeaderType = LocalizedString::class;
    protected $localizedHeaderDataType = '';

    protected $messageType;

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