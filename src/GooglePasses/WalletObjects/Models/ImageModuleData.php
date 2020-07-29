<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class ImageModuleData extends Google_Model
{
    public $id;
    public $mainImage;
    protected $mainImageType = Image::class;
    protected $mainImageDataType = '';


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setMainImage(Image $mainImage)
    {
        $this->mainImage = $mainImage;
    }

    public function getMainImage()
    {
        return $this->mainImage;
    }
}