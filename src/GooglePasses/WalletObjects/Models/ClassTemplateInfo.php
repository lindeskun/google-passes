<?php

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\CardTemplateOverride;
use GooglePasses\WalletObjects\Collections\DetailsTemplateOverride;

class ClassTemplateInfo extends \Google_Model
{
    protected $cardBarcodeSectionDetails;
    protected $cardBarcodeSectionDetailsType = CardBarcodeSectionDetails::class;
    protected $cardBarcodeSectionDetailsDataType = '';

    protected $cardTemplateOverride;
    protected $cardTemplateOverrideType = CardTemplateOverride::class;
    protected $cardTemplateOverrideDataType = '';

    protected $detailsTemplateOverride;
    protected $detailsTemplateOverrideType = DetailsTemplateOverride::NULL_VALUE;
    protected $detailsTemplateOverrideDataType = '';

    protected $listTemplateOverride;
    protected $listTemplateOverrideType = ListTemplateOverride::class;
    protected $listTemplateOverrideDataType = '';

    public function setCardBarcodeSectionDetails(CardBarcodeSectionDetails $cardBarcodeSectionDetails)
    {
        $this->cardBarcodeSectionDetails = $cardBarcodeSectionDetails;
    }
    public function getCardBarcodeSectionDetails()
    {
        return $this->cardBarcodeSectionDetails;
    }
    public function setCardTemplateOverride(CardTemplateOverride $cardTemplateOverride)
    {
        $this->cardTemplateOverride = $cardTemplateOverride;
    }
    public function getCardTemplateOverride()
    {
        return $this->cardTemplateOverride;
    }
    public function setDetailsTemplateOverride(DetailsTemplateOverride $detailsTemplateOverride)
    {
        $this->detailsTemplateOverride = $detailsTemplateOverride;
    }
    public function getDetailsTemplateOverride()
    {
        return $this->detailsTemplateOverride;
    }
    public function setListTemplateOverride(ListTemplateOverride $listTemplateOverride)
    {
        $this->listTemplateOverride = $listTemplateOverride;
    }
    public function getListTemplateOverride()
    {
        return $this->listTemplateOverride;
    }
}