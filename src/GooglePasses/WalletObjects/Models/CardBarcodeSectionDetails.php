<?php


namespace GooglePasses\WalletObjects\Models;


class CardBarcodeSectionDetails extends \Google_Model
{
    protected $firstBottomDetail;
    protected $firstBottomDetailType = BarcodeSectionDetail::class;
    protected $firstBottomDetailDataType = '';

    protected $firstTopDetail;
    protected $firstTopDetailType = BarcodeSectionDetail::class;
    protected $firstTopDetailDataType = '';

    protected $secondTopDetail;
    protected $secondTopDetailType = BarcodeSectionDetail::class;
    protected $secondTopDetailDataType = '';

    public function setFirstBottomDetail(BarcodeSectionDetail $firstBottomDetail)
    {
        $this->firstBottomDetail = $firstBottomDetail;
    }
    public function getFirstBottomDetail()
    {
        return $this->firstBottomDetail;
    }
    public function setFirstTopDetail(BarcodeSectionDetail $firstTopDetail)
    {
        $this->firstTopDetail = $firstTopDetail;
    }
    public function getFirstTopDetail()
    {
        return $this->firstTopDetail;
    }
    public function setSecondTopDetail(BarcodeSectionDetail $secondTopDetail)
    {
        $this->secondTopDetail = $secondTopDetail;
    }
    public function getSecondTopDetail()
    {
        return $this->secondTopDetail;
    }
}