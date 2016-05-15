<?php
namespace BERGWERK\BwrkUtility\Utility\Tca\Configuration;

class InterfaceClass {

    /**
     * @var string
     */
    protected $showRecordFieldList = '';
    /**
     * @var int
     */
    protected $maxDBListItems = 30;
    /**
     * @var int
     */
    protected $maxSingleDBListItems = 50;

    /**
     * Defines which fields are shown in the show-item dialog. For example ‘doktype,title,alias,hidden,...’.
     *
     * @return string
     */
    public function getShowRecordFieldList()
    {
        return $this->showRecordFieldList;
    }

    /**
     * Defines which fields are shown in the show-item dialog. For example ‘doktype,title,alias,hidden,...’.
     *
     * @param string $showRecordFieldList
     */
    public function setShowRecordFieldList($showRecordFieldList)
    {
        $this->showRecordFieldList = $showRecordFieldList;
    }

    /**
     * Max number of items shown in the List module
     *
     * @return int
     */
    public function getMaxDBListItems()
    {
        return $this->maxDBListItems;
    }

    /**
     * Max number of items shown in the List module
     *
     * @param int $maxDBListItems
     */
    public function setMaxDBListItems($maxDBListItems)
    {
        $this->maxDBListItems = $maxDBListItems;
    }

    /**
     * Max number of items shown in the List module, if this table is listed in Extended mode (listing only a single table)
     *
     * @return int
     */
    public function getMaxSingleDBListItems()
    {
        return $this->maxSingleDBListItems;
    }

    /**
     * Max number of items shown in the List module, if this table is listed in Extended mode (listing only a single table)
     *
     * @param int $maxSingleDBListItems
     */
    public function setMaxSingleDBListItems($maxSingleDBListItems)
    {
        $this->maxSingleDBListItems = $maxSingleDBListItems;
    }
}