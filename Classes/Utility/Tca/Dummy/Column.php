<?php
namespace BERGWERK\BwrkUtility\Utility\Tca\Dummy;

class Column {
    /**
     * @var string
     */
    protected $fieldName = '';
    /**
     * @var string
     */
    protected $label = '';
    /**
     * @var int
     */
    protected $exclude = 0;
    /**
     * @var string
     */
    protected $default = '';
    /**
     * @var int
     */
    protected $size = 30;
    /**
     * @var int
     */
    protected $max = 255;
    /**
     * @var bool
     */
    protected $readOnly = false;
    /**
     * @var string
     */
    protected $eval = 'trim';
    /**
     * @var null
     */
    protected $displayCond = null;
    /**
     * @var string
     */
    protected $mode = 'wizard';
    /**
     * @var bool
     */
    protected $rte = false;
    /**
     * @var int
     */
    protected $cols = 40;
    /**
     * @var int
     */
    protected $rows = 6;
    /**
     * @var array
     */
    protected $config = array();
    /**
     * @var string
     */
    protected $itemsProcFunc = '';
    /**
     * @var array
     */
    protected $items = array();
    /**
     * @var string
     */
    protected $itemsLabelPath = '';
    /**
     * @var string
     */
    protected $foreignTable = '';
    /**
     * @var string
     */
    protected $foreignTableWhere = '';
    /**
     * @var string
     */
    protected $foreignField = '';
    /**
     * @var string
     */
    protected $foreignSortBy = '';
    /**
     * @var string
     */
    protected $foreignTableField = '';
    /**
     * @var string
     */
    protected $foreignMatchFields = '';
    /**
     * @var string
     */
    protected $foreignLabel = '';
    /**
     * @var string
     */
    protected $foreignSelector = '';
    /**
     * @var int
     */
    protected $maxItems = 999;
    /**
     * @var int
     */
    protected $minItems = 0;
    /**
     * @var array
     */
    protected $overWriteConfig = array();
    /**
     * @var string
     */
    protected $mmRelationTable = '';
    /**
     * @var string
     */
    protected $mmOppositeField = '';
    /**
     * @var string
     */
    protected $mmMatchFields = '';
    /**
     * @var string
     */
    protected $extBaseType = '';
    /**
     * @var string
     */
    protected $allowedExtensions = '';
    /**
     * @var string
     */
    protected $allowed = '';
    /**
     * @var string
     */
    protected $parameters = '';
    /**
     * @var string
     */
    protected $userFunc = '';
    /**
     * @var string
     */
    protected $defaultExtras = '';

    /**
     * @var string
     */
    protected $format = '';

    /**
     * @var string
     */
    protected $renderType = '';

    /**
     * @var string
     */
    protected $isIn = '';

    /**
     * @var array
     */
    protected $range = array();

    /**
     * @var bool
     */
    protected $disableAgeDisplay = false;

    /**
     * @var bool
     */
    protected $autoComplete = false;

    /**
     * @var string
     */
    protected $placeHolder = '';

    /**
     * @var array
     */
    protected $wizards = array();

    /**
     * @var string
     */
    protected $dbType = '';
// @here
    /**
     * @var int
     */
    protected $selIconCols = 0;
    /**
     * @var bool
     */
    protected $showIconTable = true;
    /**
     * @var string
     */
    protected $foreignTablePrefix = '';
    /**
     * @var string
     */
    protected $fileFolder = '';
    /**
     * @var string
     */
    protected $fileFolderExtList = '';
    /**
     * @var int
     */
    protected $fileFolderRecursion = 0;
    /**
     * @var bool
     */
    protected $allowNonIdValues = false;
    /**
     * @var string
     */
    protected $dontRemapTablesOnCopy = '';
    /**
     * @var bool
     */
    protected $rootLevel = false;
    /**
     * @var string
     */
    protected $mm = '';
    /**
     * @var array
     */
    protected $mmOppositeUsage = array();
    /**
     * @var array
     */
    protected $mmInsertFields = array();
    /**
     * @var string
     */
    protected $mmTableWhere = '';
    /**
     * @var bool
     */
    protected $mmHasUidField = true;
    /**
     * @var string
     */
    protected $special = '';
    /**
     * @var int
     */
    protected $autoSizeMax = 5;
    /**
     * @var string
     */
    protected $selectedListStyle = '';
    /**
     * @var string
     */
    protected $itemListStyle = '';
    /**
     * @var array
     */
    protected $treeConfig = array();
    /**
     * @var bool
     */
    protected $multiple = false;
    /**
     * @var bool
     */
    protected $disableNoMatchingValueElement = false;
    /**
     * @var bool
     */
    protected $enableMultiSelectFilterTextField = false;
    /**
     * @var array
     */
    protected $multiSelectFilterItems = array();
    /**
     * @var string
     */
    protected $authMode = '';
    /**
     * @var string
     */
    protected $authModeEnforce = '';
    /**
     * @var string
     */
    protected $exclusiveKeys = '';
    /**
     * @var bool
     */
    protected $localizeReferencesAtParentLocalization = true;

    /**
     * @var array
     */
    protected $appearance = array();
    /**
     * @var array
     */
    protected $behaviour = array();
    /**
     * @var array
     */
    protected $customControls = array();
    /**
     * @var string
     */
    protected $foreignDefaultSortBy = '';
    /**
     * @var array
     */
    protected $foreignRecordDefaults = array();
    /**
     * @var array
     */
    protected $foreignSelectorFieldTcaOverride = array();
    /**
     * @var string
     */
    protected $foreignUnique = '';
    /**
     * @var string
     */
    protected $symmetricField = '';
    /**
     * @var string
     */
    protected $symmetricLabel = '';
    /**
     * @var string
     */
    protected $symmetricSortBy = '';

    /**
     * @var string
     */
    protected $renderMode = '';

    /**
     * @var string
     */
    protected $type = '';

    /**
     * @var string
     */
    protected $onChange = '';


    /**
     * Column constructor.
     * @param $fieldName
     */
    function __construct($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @param string $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * @param int $exclude
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
    }

    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param string $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param int $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return boolean
     */
    public function isReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param boolean $readOnly
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
    }

    /**
     * @return string
     */
    public function getEval()
    {
        return $this->eval;
    }

    /**
     * @param string $eval
     */
    public function setEval($eval)
    {
        $this->eval = $eval;
    }

    /**
     * @return null
     */
    public function getDisplayCond()
    {
        return $this->displayCond;
    }

    /**
     * @param null $displayCond
     */
    public function setDisplayCond($displayCond)
    {
        $this->displayCond = $displayCond;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return boolean
     */
    public function isRte()
    {
        return $this->rte;
    }

    /**
     * @param boolean $rte
     */
    public function setRte($rte)
    {
        $this->rte = $rte;
    }

    /**
     * @return int
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * @param int $cols
     */
    public function setCols($cols)
    {
        $this->cols = $cols;
    }

    /**
     * @return int
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param int $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @return string
     */
    public function getItemsProcFunc()
    {
        return $this->itemsProcFunc;
    }

    /**
     * @param string $itemsProcFunc
     */
    public function setItemsProcFunc($itemsProcFunc)
    {
        $this->itemsProcFunc = $itemsProcFunc;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getItemsLabelPath()
    {
        return $this->itemsLabelPath;
    }

    /**
     * @param string $itemsLabelPath
     */
    public function setItemsLabelPath($itemsLabelPath)
    {
        $this->itemsLabelPath = $itemsLabelPath;
    }

    /**
     * @return string
     */
    public function getForeignTable()
    {
        return $this->foreignTable;
    }

    /**
     * @param string $foreignTable
     */
    public function setForeignTable($foreignTable)
    {
        $this->foreignTable = $foreignTable;
    }

    /**
     * @return string
     */
    public function getForeignTableWhere()
    {
        return $this->foreignTableWhere;
    }

    /**
     * @param string $foreignTableWhere
     */
    public function setForeignTableWhere($foreignTableWhere)
    {
        $this->foreignTableWhere = $foreignTableWhere;
    }

    /**
     * @return string
     */
    public function getForeignField()
    {
        return $this->foreignField;
    }

    /**
     * @param string $foreignField
     */
    public function setForeignField($foreignField)
    {
        $this->foreignField = $foreignField;
    }

    /**
     * @return string
     */
    public function getForeignSortBy()
    {
        return $this->foreignSortBy;
    }

    /**
     * @param string $foreignSortBy
     */
    public function setForeignSortBy($foreignSortBy)
    {
        $this->foreignSortBy = $foreignSortBy;
    }

    /**
     * @return string
     */
    public function getForeignTableField()
    {
        return $this->foreignTableField;
    }

    /**
     * @param string $foreignTableField
     */
    public function setForeignTableField($foreignTableField)
    {
        $this->foreignTableField = $foreignTableField;
    }

    /**
     * @return string
     */
    public function getForeignMatchFields()
    {
        return $this->foreignMatchFields;
    }

    /**
     * @param string $foreignMatchFields
     */
    public function setForeignMatchFields($foreignMatchFields)
    {
        $this->foreignMatchFields = $foreignMatchFields;
    }

    /**
     * @return string
     */
    public function getForeignLabel()
    {
        return $this->foreignLabel;
    }

    /**
     * @param string $foreignLabel
     */
    public function setForeignLabel($foreignLabel)
    {
        $this->foreignLabel = $foreignLabel;
    }

    /**
     * @return string
     */
    public function getForeignSelector()
    {
        return $this->foreignSelector;
    }

    /**
     * @param string $foreignSelector
     */
    public function setForeignSelector($foreignSelector)
    {
        $this->foreignSelector = $foreignSelector;
    }

    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     */
    public function setMaxItems($maxItems)
    {
        $this->maxItems = $maxItems;
    }

    /**
     * @return int
     */
    public function getMinItems()
    {
        return $this->minItems;
    }

    /**
     * @param int $minItems
     */
    public function setMinItems($minItems)
    {
        $this->minItems = $minItems;
    }

    /**
     * @return array
     */
    public function getOverWriteConfig()
    {
        return $this->overWriteConfig;
    }

    /**
     * @param array $overWriteConfig
     */
    public function setOverWriteConfig($overWriteConfig)
    {
        $this->overWriteConfig = $overWriteConfig;
    }

    /**
     * @return string
     */
    public function getMmRelationTable()
    {
        return $this->mmRelationTable;
    }

    /**
     * @param string $mmRelationTable
     */
    public function setMmRelationTable($mmRelationTable)
    {
        $this->mmRelationTable = $mmRelationTable;
    }

    /**
     * @return string
     */
    public function getMmOppositeField()
    {
        return $this->mmOppositeField;
    }

    /**
     * @param string $mmOppositeField
     */
    public function setMmOppositeField($mmOppositeField)
    {
        $this->mmOppositeField = $mmOppositeField;
    }

    /**
     * @return string
     */
    public function getExtBaseType()
    {
        return $this->extBaseType;
    }

    /**
     * @param string $extBaseType
     */
    public function setExtBaseType($extBaseType)
    {
        $this->extBaseType = $extBaseType;
    }

    /**
     * @return string
     */
    public function getAllowedExtensions()
    {
        return $this->allowedExtensions;
    }

    /**
     * @param string $allowedExtensions
     */
    public function setAllowedExtensions($allowedExtensions)
    {
        $this->allowedExtensions = $allowedExtensions;
    }

    /**
     * @return string
     */
    public function getAllowed()
    {
        return $this->allowed;
    }

    /**
     * @param string $allowed
     */
    public function setAllowed($allowed)
    {
        $this->allowed = $allowed;
    }

    /**
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param string $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getMmMatchFields()
    {
        return $this->mmMatchFields;
    }

    /**
     * @param string $mmMatchFields
     */
    public function setMmMatchFields($mmMatchFields)
    {
        $this->mmMatchFields = $mmMatchFields;
    }

    /**
     * @return string
     */
    public function getUserFunc()
    {
        return $this->userFunc;
    }

    /**
     * @param string $userFunc
     */
    public function setUserFunc($userFunc)
    {
        $this->userFunc = $userFunc;
    }

    /**
     * @return string
     */
    public function getDefaultExtras()
    {
        return $this->defaultExtras;
    }

    /**
     * @param string $defaultExtras
     */
    public function setDefaultExtras($defaultExtras)
    {
        $this->defaultExtras = $defaultExtras;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getRenderType()
    {
        return $this->renderType;
    }

    /**
     * @param string $renderType
     */
    public function setRenderType($renderType)
    {
        $this->renderType = $renderType;
    }

    /**
     * @return string
     */
    public function getIsIn()
    {
        return $this->isIn;
    }

    /**
     * @param string $isIn
     */
    public function setIsIn($isIn)
    {
        $this->isIn = $isIn;
    }

    /**
     * @return array
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @param array $range
     */
    public function setRange($range)
    {
        $this->range = $range;
    }

    /**
     * @return boolean
     */
    public function isDisableAgeDisplay()
    {
        return $this->disableAgeDisplay;
    }

    /**
     * @param boolean $disableAgeDisplay
     */
    public function setDisableAgeDisplay($disableAgeDisplay)
    {
        $this->disableAgeDisplay = $disableAgeDisplay;
    }

    /**
     * @return boolean
     */
    public function isAutoComplete()
    {
        return $this->autoComplete;
    }

    /**
     * @param boolean $autoComplete
     */
    public function setAutoComplete($autoComplete)
    {
        $this->autoComplete = $autoComplete;
    }

    /**
     * @return string
     */
    public function getPlaceHolder()
    {
        return $this->placeHolder;
    }

    /**
     * @param string $placeHolder
     */
    public function setPlaceHolder($placeHolder)
    {
        $this->placeHolder = $placeHolder;
    }

    /**
     * @return array
     */
    public function getWizards()
    {
        return $this->wizards;
    }

    /**
     * @param array $wizards
     */
    public function setWizards($wizards)
    {
        $this->wizards = $wizards;
    }

    /**
     * @return string
     */
    public function getDbType()
    {
        return $this->dbType;
    }

    /**
     * @param string $dbType
     */
    public function setDbType($dbType)
    {
        $this->dbType = $dbType;
    }

    /**
     * @return int
     */
    public function getSelIconCols()
    {
        return $this->selIconCols;
    }

    /**
     * @param int $selIconCols
     */
    public function setSelIconCols($selIconCols)
    {
        $this->selIconCols = $selIconCols;
    }

    /**
     * @return boolean
     */
    public function isShowIconTable()
    {
        return $this->showIconTable;
    }

    /**
     * @param boolean $showIconTable
     */
    public function setShowIconTable($showIconTable)
    {
        $this->showIconTable = $showIconTable;
    }

    /**
     * @return string
     */
    public function getForeignTablePrefix()
    {
        return $this->foreignTablePrefix;
    }

    /**
     * @param string $foreignTablePrefix
     */
    public function setForeignTablePrefix($foreignTablePrefix)
    {
        $this->foreignTablePrefix = $foreignTablePrefix;
    }

    /**
     * @return string
     */
    public function getFileFolder()
    {
        return $this->fileFolder;
    }

    /**
     * @param string $fileFolder
     */
    public function setFileFolder($fileFolder)
    {
        $this->fileFolder = $fileFolder;
    }

    /**
     * @return string
     */
    public function getFileFolderExtList()
    {
        return $this->fileFolderExtList;
    }

    /**
     * @param string $fileFolderExtList
     */
    public function setFileFolderExtList($fileFolderExtList)
    {
        $this->fileFolderExtList = $fileFolderExtList;
    }

    /**
     * @return int
     */
    public function getFileFolderRecursion()
    {
        return $this->fileFolderRecursion;
    }

    /**
     * @param int $fileFolderRecursion
     */
    public function setFileFolderRecursion($fileFolderRecursion)
    {
        $this->fileFolderRecursion = $fileFolderRecursion;
    }

    /**
     * @return boolean
     */
    public function isAllowNonIdValues()
    {
        return $this->allowNonIdValues;
    }

    /**
     * @param boolean $allowNonIdValues
     */
    public function setAllowNonIdValues($allowNonIdValues)
    {
        $this->allowNonIdValues = $allowNonIdValues;
    }

    /**
     * @return string
     */
    public function getDontRemapTablesOnCopy()
    {
        return $this->dontRemapTablesOnCopy;
    }

    /**
     * @param string $dontRemapTablesOnCopy
     */
    public function setDontRemapTablesOnCopy($dontRemapTablesOnCopy)
    {
        $this->dontRemapTablesOnCopy = $dontRemapTablesOnCopy;
    }

    /**
     * @return boolean
     */
    public function isRootLevel()
    {
        return $this->rootLevel;
    }

    /**
     * @param boolean $rootLevel
     */
    public function setRootLevel($rootLevel)
    {
        $this->rootLevel = $rootLevel;
    }

    /**
     * @return string
     */
    public function getMm()
    {
        return $this->mm;
    }

    /**
     * @param string $mm
     */
    public function setMm($mm)
    {
        $this->mm = $mm;
    }

    /**
     * @return array
     */
    public function getMmOppositeUsage()
    {
        return $this->mmOppositeUsage;
    }

    /**
     * @param array $mmOppositeUsage
     */
    public function setMmOppositeUsage($mmOppositeUsage)
    {
        $this->mmOppositeUsage = $mmOppositeUsage;
    }

    /**
     * @return array
     */
    public function getMmInsertFields()
    {
        return $this->mmInsertFields;
    }

    /**
     * @param array $mmInsertFields
     */
    public function setMmInsertFields($mmInsertFields)
    {
        $this->mmInsertFields = $mmInsertFields;
    }

    /**
     * @return string
     */
    public function getMmTableWhere()
    {
        return $this->mmTableWhere;
    }

    /**
     * @param string $mmTableWhere
     */
    public function setMmTableWhere($mmTableWhere)
    {
        $this->mmTableWhere = $mmTableWhere;
    }

    /**
     * @return boolean
     */
    public function isMmHasUidField()
    {
        return $this->mmHasUidField;
    }

    /**
     * @param boolean $mmHasUidField
     */
    public function setMmHasUidField($mmHasUidField)
    {
        $this->mmHasUidField = $mmHasUidField;
    }

    /**
     * @return string
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * @param string $special
     */
    public function setSpecial($special)
    {
        $this->special = $special;
    }

    /**
     * @return int
     */
    public function getAutoSizeMax()
    {
        return $this->autoSizeMax;
    }

    /**
     * @param int $autoSizeMax
     */
    public function setAutoSizeMax($autoSizeMax)
    {
        $this->autoSizeMax = $autoSizeMax;
    }

    /**
     * @return string
     */
    public function getSelectedListStyle()
    {
        return $this->selectedListStyle;
    }

    /**
     * @param string $selectedListStyle
     */
    public function setSelectedListStyle($selectedListStyle)
    {
        $this->selectedListStyle = $selectedListStyle;
    }

    /**
     * @return string
     */
    public function getItemListStyle()
    {
        return $this->itemListStyle;
    }

    /**
     * @param string $itemListStyle
     */
    public function setItemListStyle($itemListStyle)
    {
        $this->itemListStyle = $itemListStyle;
    }

    /**
     * @return array
     */
    public function getTreeConfig()
    {
        return $this->treeConfig;
    }

    /**
     * @param array $treeConfig
     */
    public function setTreeConfig($treeConfig)
    {
        $this->treeConfig = $treeConfig;
    }

    /**
     * @return boolean
     */
    public function isMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param boolean $multiple
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
    }

    /**
     * @return boolean
     */
    public function isDisableNoMatchingValueElement()
    {
        return $this->disableNoMatchingValueElement;
    }

    /**
     * @param boolean $disableNoMatchingValueElement
     */
    public function setDisableNoMatchingValueElement($disableNoMatchingValueElement)
    {
        $this->disableNoMatchingValueElement = $disableNoMatchingValueElement;
    }

    /**
     * @return boolean
     */
    public function isEnableMultiSelectFilterTextField()
    {
        return $this->enableMultiSelectFilterTextField;
    }

    /**
     * @param boolean $enableMultiSelectFilterTextField
     */
    public function setEnableMultiSelectFilterTextField($enableMultiSelectFilterTextField)
    {
        $this->enableMultiSelectFilterTextField = $enableMultiSelectFilterTextField;
    }

    /**
     * @return array
     */
    public function getMultiSelectFilterItems()
    {
        return $this->multiSelectFilterItems;
    }

    /**
     * @param array $multiSelectFilterItems
     */
    public function setMultiSelectFilterItems($multiSelectFilterItems)
    {
        $this->multiSelectFilterItems = $multiSelectFilterItems;
    }

    /**
     * @return string
     */
    public function getAuthMode()
    {
        return $this->authMode;
    }

    /**
     * @param string $authMode
     */
    public function setAuthMode($authMode)
    {
        $this->authMode = $authMode;
    }

    /**
     * @return string
     */
    public function getAuthModeEnforce()
    {
        return $this->authModeEnforce;
    }

    /**
     * @param string $authModeEnforce
     */
    public function setAuthModeEnforce($authModeEnforce)
    {
        $this->authModeEnforce = $authModeEnforce;
    }

    /**
     * @return string
     */
    public function getExclusiveKeys()
    {
        return $this->exclusiveKeys;
    }

    /**
     * @param string $exclusiveKeys
     */
    public function setExclusiveKeys($exclusiveKeys)
    {
        $this->exclusiveKeys = $exclusiveKeys;
    }

    /**
     * @return boolean
     */
    public function isLocalizeReferencesAtParentLocalization()
    {
        return $this->localizeReferencesAtParentLocalization;
    }

    /**
     * @param boolean $localizeReferencesAtParentLocalization
     */
    public function setLocalizeReferencesAtParentLocalization($localizeReferencesAtParentLocalization)
    {
        $this->localizeReferencesAtParentLocalization = $localizeReferencesAtParentLocalization;
    }

    /**
     * @return array
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * @param array $appearance
     */
    public function setAppearance($appearance)
    {
        $this->appearance = $appearance;
    }

    /**
     * @return array
     */
    public function getBehaviour()
    {
        return $this->behaviour;
    }

    /**
     * @param array $behaviour
     */
    public function setBehaviour($behaviour)
    {
        $this->behaviour = $behaviour;
    }

    /**
     * @return array
     */
    public function getCustomControls()
    {
        return $this->customControls;
    }

    /**
     * @param array $customControls
     */
    public function setCustomControls($customControls)
    {
        $this->customControls = $customControls;
    }

    /**
     * @return string
     */
    public function getForeignDefaultSortBy()
    {
        return $this->foreignDefaultSortBy;
    }

    /**
     * @param string $foreignDefaultSortBy
     */
    public function setForeignDefaultSortBy($foreignDefaultSortBy)
    {
        $this->foreignDefaultSortBy = $foreignDefaultSortBy;
    }

    /**
     * @return array
     */
    public function getForeignRecordDefaults()
    {
        return $this->foreignRecordDefaults;
    }

    /**
     * @param array $foreignRecordDefaults
     */
    public function setForeignRecordDefaults($foreignRecordDefaults)
    {
        $this->foreignRecordDefaults = $foreignRecordDefaults;
    }

    /**
     * @return array
     */
    public function getForeignSelectorFieldTcaOverride()
    {
        return $this->foreignSelectorFieldTcaOverride;
    }

    /**
     * @param array $foreignSelectorFieldTcaOverride
     */
    public function setForeignSelectorFieldTcaOverride($foreignSelectorFieldTcaOverride)
    {
        $this->foreignSelectorFieldTcaOverride = $foreignSelectorFieldTcaOverride;
    }

    /**
     * @return string
     */
    public function getForeignUnique()
    {
        return $this->foreignUnique;
    }

    /**
     * @param string $foreignUnique
     */
    public function setForeignUnique($foreignUnique)
    {
        $this->foreignUnique = $foreignUnique;
    }

    /**
     * @return string
     */
    public function getSymmetricField()
    {
        return $this->symmetricField;
    }

    /**
     * @param string $symmetricField
     */
    public function setSymmetricField($symmetricField)
    {
        $this->symmetricField = $symmetricField;
    }

    /**
     * @return string
     */
    public function getSymmetricLabel()
    {
        return $this->symmetricLabel;
    }

    /**
     * @param string $symmetricLabel
     */
    public function setSymmetricLabel($symmetricLabel)
    {
        $this->symmetricLabel = $symmetricLabel;
    }

    /**
     * @return string
     */
    public function getSymmetricSortBy()
    {
        return $this->symmetricSortBy;
    }

    /**
     * @param string $symmetricSortBy
     */
    public function setSymmetricSortBy($symmetricSortBy)
    {
        $this->symmetricSortBy = $symmetricSortBy;
    }

    /**
     * @return string
     */
    public function getRenderMode()
    {
        return $this->renderMode;
    }

    /**
     * @param string $renderMode
     */
    public function setRenderMode($renderMode)
    {
        $this->renderMode = $renderMode;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    protected $expandAll;

    /**
     * @return mixed
     */
    public function getExpandAll()
    {
        return $this->expandAll;
    }

    /**
     * @param mixed $expandAll
     */
    public function setExpandAll($expandAll)
    {
        $this->expandAll = $expandAll;
    }

    /**
     * @return string
     */
    public function getOnChange()
    {
        return $this->onChange;
    }

    /**
     * @param string $onChange
     */
    public function setOnChange($onChange = 'reload')
    {
        $this->onChange = $onChange;
    }
}