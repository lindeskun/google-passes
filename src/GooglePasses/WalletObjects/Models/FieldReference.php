<?php

namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class FieldReference extends Google_Model
{
    protected $dateFormat;
    protected $fieldPath;

    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }
    public function getDateFormat()
    {
        return $this->dateFormat;
    }
    public function setFieldPath($fieldPath)
    {
        $this->fieldPath = $fieldPath;
    }
    public function getFieldPath()
    {
        return $this->fieldPath;
    }
}