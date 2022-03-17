<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Models;

class CallbackOptions extends \Google_Model
{
    public $updateRequestUrl;
    public $url;

    public function setUpdateRequestUrl($updateRequestUrl)
    {
        $this->updateRequestUrl = $updateRequestUrl;
    }
    public function getUpdateRequestUrl()
    {
        return $this->updateRequestUrl;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}
