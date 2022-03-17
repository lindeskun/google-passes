<?php

declare(strict_types=1);

namespace GooglePasses\WalletObjects\Collections;

use GooglePasses\WalletObjects\Models\CardRowTemplateInfo;

class CardTemplateOverride extends \Google_Collection
{
    protected $collection_key = 'cardRowTemplateInfos';
    public $cardRowTemplateInfos;
    protected $cardRowTemplateInfosType = CardRowTemplateInfo::class;
    protected $cardRowTemplateInfosDataType = 'array';

    public function setCardRowTemplateInfos($cardRowTemplateInfos)
    {
        $this->cardRowTemplateInfos = $cardRowTemplateInfos;
    }
    public function getCardRowTemplateInfos()
    {
        return $this->cardRowTemplateInfos;
    }
}
