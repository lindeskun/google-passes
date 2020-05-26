<?php

namespace GooglePasses\WalletObjects\Collections;

class InfoModuleData extends \Google_Collection
{
    protected $collection_key = 'labelValueRows';
    protected $showLastUpdateTime;
    protected $labelValueRows;

    public function setLabelValueRows($labelValueRows)
    {
        $this->labelValueRows = $labelValueRows;
    }
    public function getLabelValueRows()
    {
        return $this->labelValueRows;
    }
    public function setShowLastUpdateTime($showLastUpdateTime)
    {
        $this->showLastUpdateTime = $showLastUpdateTime;
    }
    public function getShowLastUpdateTime()
    {
        return $this->showLastUpdateTime;
    }
}