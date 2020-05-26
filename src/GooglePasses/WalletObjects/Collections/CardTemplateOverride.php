<?php


namespace GooglePasses\WalletObjects\Collections;


class CardTemplateOverride extends \Google_Collection
{
    protected $collection_key = 'cardRowTemplateInfos';
    protected $cardRowTemplateInfos;

    public function setCardRowTemplateInfos($cardRowTemplateInfos)
    {
        $this->cardRowTemplateInfos = $cardRowTemplateInfos;
    }
    public function getCardRowTemplateInfos()
    {
        return $this->cardRowTemplateInfos;
    }
}