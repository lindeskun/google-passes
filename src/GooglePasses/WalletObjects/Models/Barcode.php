<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;
use GooglePasses\WalletObjects\Collections\LocalizedString;

class Barcode extends Google_Model
{
    protected $alternateText;
    protected $kind;
    protected $renderEncoding;
    protected $type;
    protected $value;
    protected $showCodeText;
    protected $showCodeTextType = LocalizedString::class;
    protected $showCodeTextDataType = '';

    public function setAlternateText($alternateText)
    {
        $this->alternateText = $alternateText;
    }
    public function getAlternateText()
    {
        return $this->alternateText;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setRenderEncoding($renderEncoding)
    {
        $this->renderEncoding = $renderEncoding;
    }
    public function getRenderEncoding()
    {
        return $this->renderEncoding;
    }
    public function setShowCodeText(LocalizedString $showCodeText)
    {
        $this->showCodeText = $showCodeText;
    }
    public function getShowCodeText()
    {
        return $this->showCodeText;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
}