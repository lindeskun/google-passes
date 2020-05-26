<?php


namespace GooglePasses\WalletObjects\Models;


class CallbackOptions extends \Google_Model
{
    protected $updateRequestUrl;
    protected $url;

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