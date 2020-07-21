<?php

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\LocalizedString;

class Uri extends \Google_Model
{
    public $description;
    public $id;
    public $kind;
    public $uri;
    protected $localizedDescription;
    protected $localizedDescriptionType = LocalizedString::class;
    protected $localizedDescriptionDataType = '';

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
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
    public function setLocalizedDescription(LocalizedString $localizedDescription)
    {
        $this->localizedDescription = $localizedDescription;
    }
    public function getLocalizedDescription()
    {
        return $this->localizedDescription;
    }
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
    public function getUri()
    {
        return $this->uri;
    }
}