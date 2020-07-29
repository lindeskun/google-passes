<?php


namespace GooglePasses\WalletObjects\Models;


use GooglePasses\WalletObjects\Collections\LocalizedString;

class ImageUri extends \Google_Model
{
    public $description;
    public $uri;
    public $localizedDescription;
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