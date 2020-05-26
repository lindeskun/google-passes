<?php

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\LocalizedString;

class EventDateTime extends \Google_Model
{
    protected $doorsOpen;
    protected $doorsOpenLabel;
    protected $end;
    protected $kind;
    protected $start;
    protected $customDoorsOpenLabel;


    public function setCustomDoorsOpenLabel(LocalizedString $customDoorsOpenLabel)
    {
        $this->customDoorsOpenLabel = $customDoorsOpenLabel;
    }
    public function getCustomDoorsOpenLabel()
    {
        return $this->customDoorsOpenLabel;
    }
    public function setDoorsOpen($doorsOpen)
    {
        $this->doorsOpen = $doorsOpen;
    }
    public function getDoorsOpen()
    {
        return $this->doorsOpen;
    }
    public function setDoorsOpenLabel($doorsOpenLabel)
    {
        $this->doorsOpenLabel = $doorsOpenLabel;
    }
    public function getDoorsOpenLabel()
    {
        return $this->doorsOpenLabel;
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}