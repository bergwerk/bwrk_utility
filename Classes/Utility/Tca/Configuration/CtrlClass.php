<?php

namespace BERGWERK\BwrkUtility\Utility\Tca\Configuration;

class CtrlClass
{
    /**
     * @var string
     */
    protected $title = '';
    /**
     * @var string
     */
    protected $label = '';
    /**
     * @var string
     */
    protected $labelAlt = '';
    /**
     * @var bool
     */
    protected $labelAltForce = false;
    /**
     * @var string
     */
    protected $labelUserFunc = '';
    /**
     * @var array
     */
    protected $labelUserFuncOptions = array();
    /**
     * @var string
     */
    protected $formattedLabelUserFunc = '';
    /**
     * @var array
     */
    protected $formattedLabelUserFuncOptions = array();
    /**
     * @var string
     */
    protected $type = '';
    /**
     * @var bool
     */
    protected $hideTable = false;
    /**
     * @var array
     */
    protected $requestUpdate = array();
    /**
     * @var string
     */
    protected $iconFile = '';
    /**
     * @var string
     */
    protected $typeIconColumn = '';
    /**
     * @var array
     */
    protected $typeIconClasses = array();
    /**
     * @var string
     */
    protected $thumbnail = '';
    /**
     * @var string
     */
    protected $selIconField = '';
    /**
     * @var string
     */
    protected $selIconFieldPath = '';
    /**
     * @var string
     */
    protected $sortBy = 'sorting';
    /**
     * @var string
     */
    protected $sortByDefault = 'ORDER BY sorting';
    /**
     * @var string
     */
    protected $mainPalette = '1';
    /**
     * @var string
     */
    protected $tstamp = 'tstamp';
    /**
     * @var string
     */
    protected $crdate = 'crdate';
    /**
     * @var string
     */
    protected $cruserId = 'cruser_id';
    /**
     * @var int
     */
    protected $rootLevel = 0;
    /**
     * @var bool
     */
    protected $readOnly = false;
    /**
     * @var bool
     */
    protected $adminOnly = false;
    /**
     * @var string
     */
    protected $editLock = '';
    /**
     * @var string
     */
    protected $origUid = 't3_origuid';
    /**
     * @var string
     */
    protected $delete = 'deleted';
    /**
     * @var string
     */
    protected $descriptionColumn = '';
    /**
     * @var array
     */
    protected $enableColumns = array();
    /**
     * @var array
     */
    protected $searchFields = array();
    /**
     * @var string
     */
    protected $groupName = '';
    /**
     * @var bool
     */
    protected $hideAtCopy = true;
    /**
     * @var string
     */
    protected $prependAtCopy = ' (copy %s)';
    /**
     * @var string
     */
    protected $copyAfterDuplFields = 'colPos, sys_language_uid';
    /**
     * @var string
     */
    protected $setToDefaultOnCopy = '';
    /**
     * @var string
     */
    protected $useColumnsForDefaultValues = '';
    /**
     * @var string
     */
    protected $shadowColumnsForNewPlaceholders = '';
    /**
     * @var string
     */
    protected $shadowColumnsForMovePlaceholders = '';
    /**
     * @var bool
     */
    protected $isStatic = false;
    /**
     * @var string
     */
    protected $feCrUserId = '';
    /**
     * @var string
     */
    protected $feCrGroupId = '';
    /**
     * @var string
     */
    protected $feAdminLock = '';
    /**
     * @var string
     */
    protected $languageField = 'sys_language_uid';
    /**
     * @var string
     */
    protected $transOrigPointerField = 'l10n_parent';
    /**
     * @var string
     */
    protected $transForeignTable = '';
    /**
     * @var string
     */
    protected $transOrigPointerTable = '';
    /**
     * @var string
     */
    protected $transOrigDiffSourceField = 'l10n_diffsource';
    /**
     * @var int
     */
    protected $versioningWS = 2;
    /**
     * @var bool
     */
    protected $versioningWSAlwaysAllowLiveEdit = true;
    /**
     * @var bool
     */
    protected $versioningFollowPages = true;
    /**
     * @var array
     */
    protected $security = array();
    /**
     * @var bool
     */
    protected $security_ignoreWebMountRestriction = true;
    /**
     * @var bool
     */
    protected $security_ignoreRootLevelRestriction = true;
    /**
     * @var array
     */
    protected $ext = array();

    /**
     * Contains the system name of the table. Is used for display in the backend.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Contains the system name of the table. Is used for display in the backend.
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Points to the field name of the table which should be used as the “title” when the record is displayed in the system.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Points to the field name of the table which should be used as the “title” when the record is displayed in the system.
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Comma-separated list of field names, which are holding alternative values to the value from the field pointed to by “label” (see above) if that value is empty. May not be used consistently in the system, but should apply in most cases.
     *
     * @return string
     */
    public function getLabelAlt()
    {
        return $this->labelAlt;
    }

    /**
     * Comma-separated list of field names, which are holding alternative values to the value from the field pointed to by “label” (see above) if that value is empty. May not be used consistently in the system, but should apply in most cases.
     *
     * @param string $labelAlt
     */
    public function setLabelAlt($labelAlt)
    {
        $this->labelAlt = $labelAlt;
    }

    /**
     * If set, then the label_alt fields are always shown in the title separated by comma.
     *
     * @return boolean
     */
    public function isLabelAltForce()
    {
        return $this->labelAltForce;
    }

    /**
     * If set, then the label_alt fields are always shown in the title separated by comma.
     *
     * @param boolean $labelAltForce
     */
    public function setLabelAltForce($labelAltForce)
    {
        $this->labelAltForce = $labelAltForce;
    }

    /**
     * Function or method reference.
     *
     * @return string
     */
    public function getLabelUserFunc()
    {
        return $this->labelUserFunc;
    }

    /**
     * Function or method reference.
     *
     * @param string $labelUserFunc
     */
    public function setLabelUserFunc($labelUserFunc)
    {
        $this->labelUserFunc = $labelUserFunc;
    }

    /**
     * Options for label_userFunc.
     *
     * @return array
     */
    public function getLabelUserFuncOptions()
    {
        return $this->labelUserFuncOptions;
    }

    /**
     * Options for label_userFunc.
     *
     * @param array $labelUserFuncOptions
     */
    public function setLabelUserFuncOptions($labelUserFuncOptions)
    {
        $this->labelUserFuncOptions = $labelUserFuncOptions;
    }

    /**
     * Similar to label_userFunc but allowed to return formatted HTML for the label and used only for the labels of inline (IRRE) records.
     *
     * @return string
     */
    public function getFormattedLabelUserFunc()
    {
        return $this->formattedLabelUserFunc;
    }

    /**
     * Similar to label_userFunc but allowed to return formatted HTML for the label and used only for the labels of inline (IRRE) records.
     *
     * @param string $formattedLabelUserFunc
     */
    public function setFormattedLabelUserFunc($formattedLabelUserFunc)
    {
        $this->formattedLabelUserFunc = $formattedLabelUserFunc;
    }

    /**
     * Options for formattedLabel_userFunc.
     *
     * @return array
     */
    public function getFormattedLabelUserFuncOptions()
    {
        return $this->formattedLabelUserFuncOptions;
    }

    /**
     * Options for formattedLabel_userFunc.
     *
     * @param array $formattedLabelUserFuncOptions
     */
    public function setFormattedLabelUserFuncOptions($formattedLabelUserFuncOptions)
    {
        $this->formattedLabelUserFuncOptions = $formattedLabelUserFuncOptions;
    }

    /**
     * Field name, which defines the "record type".
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Field name, which defines the "record type".
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Hide this table in record listings.
     *
     * @return boolean
     */
    public function isHideTable()
    {
        return $this->hideTable;
    }

    /**
     * Hide this table in record listings.
     *
     * @param boolean $hideTable
     */
    public function setHideTable($hideTable)
    {
        $this->hideTable = $hideTable;
    }

    /**
     * This is a list of fields that will trigger an update of the form, on top of the “type” field.
     *
     * @return string
     */
    public function getRequestUpdate()
    {
        return implode(',', $this->requestUpdate);
    }

    /**
     * This is a list of fields that will trigger an update of the form, on top of the “type” field.
     *
     * @param string $requestUpdate
     */
    public function setRequestUpdate($requestUpdate)
    {
        $this->requestUpdate[] = $requestUpdate;
    }

    /**
     * Pointing to the icon file to use for the table.
     *
     * @return string
     */
    public function getIconFile()
    {
        return $this->iconFile;
    }

    /**
     * Pointing to the icon file to use for the table.
     *
     * @param string $iconFile
     */
    public function setIconFile($iconFile)
    {
        $this->iconFile = $iconFile;
    }

    /**
     * Field name, whose value decides alternative icons for the table records (The default icon is the one defined with the ‘iconfile’ value.)
     *
     * @return string
     */
    public function getTypeIconColumn()
    {
        return $this->typeIconColumn;
    }

    /**
     * Field name, whose value decides alternative icons for the table records (The default icon is the one defined with the ‘iconfile’ value.)
     *
     * @param string $typeIconColumn
     */
    public function setTypeIconColumn($typeIconColumn)
    {
        $this->typeIconColumn = $typeIconColumn;
    }

    /**
     * Array of class names to use for the records. The keys must correspond to the values found in the column referenced in the typeicon_column property. The class names correspond to the backend’s sprite icons.
     *
     * @return array
     */
    public function getTypeIconClasses()
    {
        return $this->typeIconClasses;
    }

    /**
     * Array of class names to use for the records. The keys must correspond to the values found in the column referenced in the typeicon_column property. The class names correspond to the backend’s sprite icons.
     *
     * @param array $typeIconClasses
     */
    public function setTypeIconClasses($typeIconClasses)
    {
        $this->typeIconClasses = $typeIconClasses;
    }

    /**
     * Field name, which contains the value for any thumbnails of the records.
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Field name, which contains the value for any thumbnails of the records.
     *
     * @param string $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Field name, which contains the thumbnail image used to represent the record visually whenever it is shown in TCEforms as a foreign reference selectable from a selector box.
     *
     * @return string
     */
    public function getSelIconField()
    {
        return $this->selIconField;
    }

    /**
     * Field name, which contains the thumbnail image used to represent the record visually whenever it is shown in TCEforms as a foreign reference selectable from a selector box.
     *
     * @param string $selIconField
     */
    public function setSelIconField($selIconField)
    {
        $this->selIconField = $selIconField;
    }

    /**
     * The path prefix of the value from selicon_field. This must the same as the “upload_path” of that field.
     *
     * @return string
     */
    public function getSelIconFieldPath()
    {
        return $this->selIconFieldPath;
    }

    /**
     * The path prefix of the value from selicon_field. This must the same as the “upload_path” of that field.
     *
     * @param string $selIconFieldPath
     */
    public function setSelIconFieldPath($selIconFieldPath)
    {
        $this->selIconFieldPath = $selIconFieldPath;
    }

    /**
     * Field name, which is used to manage the order of the records.
     *
     * @return string
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * Field name, which is used to manage the order of the records.
     *
     * @param string $sortBy
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
    }

    /**
     * If a field name for sortby is defined, then this is ignored.
     *
     * @return string
     */
    public function getSortByDefault()
    {
        return $this->sortByDefault;
    }

    /**
     * If a field name for sortby is defined, then this is ignored.
     *
     * @param string $sortByDefault
     */
    public function setSortByDefault($sortByDefault)
    {
        $this->sortByDefault = $sortByDefault;
    }

    /**
     * Points to the palette-number(s) that should always be shown in the bottom of the TCEform.
     *
     * @return string
     */
    public function getMainPalette()
    {
        return $this->mainPalette;
    }

    /**
     * Points to the palette-number(s) that should always be shown in the bottom of the TCEform.
     *
     * @param string $mainPalette
     */
    public function setMainPalette($mainPalette)
    {
        $this->mainPalette = $mainPalette;
    }

    /**
     * Field name, which is automatically updated to the current timestamp (UNIX-time in seconds) each time the record is updated/saved in the system.
     *
     * @return string
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Field name, which is automatically updated to the current timestamp (UNIX-time in seconds) each time the record is updated/saved in the system.
     *
     * @param string $tstamp
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * Field name, which is automatically set to the current timestamp when the record is created. Is never modified again.
     *
     * @return string
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * Field name, which is automatically set to the current timestamp when the record is created. Is never modified again.
     *
     * @param string $crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * Field name, which is automatically set to the uid of the backend user (be_users) who originally created the record. Is never modified again.
     *
     * @return string
     */
    public function getCruserId()
    {
        return $this->cruserId;
    }

    /**
     * Field name, which is automatically set to the uid of the backend user (be_users) who originally created the record. Is never modified again.
     *
     * @param string $cruserId
     */
    public function setCruserId($cruserId)
    {
        $this->cruserId = $cruserId;
    }

    /**
     * Determines where a record may exist in the page tree.
     *
     * @return int
     */
    public function getRootLevel()
    {
        return $this->rootLevel;
    }

    /**
     * Determines where a record may exist in the page tree.
     *
     * @param int $rootLevel
     */
    public function setRootLevel($rootLevel)
    {
        $this->rootLevel = $rootLevel;
    }

    /**
     * Records from this table may not be edited in the TYPO3 backend. Such tables are usually called “static”.
     *
     * @return boolean
     */
    public function isReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * Records from this table may not be edited in the TYPO3 backend. Such tables are usually called “static”.
     *
     * @param boolean $readOnly
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;
    }

    /**
     * Records may be changed only by “admin”-users (having the “admin” flag set).
     *
     * @return boolean
     */
    public function isAdminOnly()
    {
        return $this->adminOnly;
    }

    /**
     * Records may be changed only by “admin”-users (having the “admin” flag set).
     *
     * @param boolean $adminOnly
     */
    public function setAdminOnly($adminOnly)
    {
        $this->adminOnly = $adminOnly;
    }

    /**
     * Field name, which – if set – will prevent all editing of the record for non-admin users.
     *
     * @return string
     */
    public function getEditLock()
    {
        return $this->editLock;
    }

    /**
     * Field name, which – if set – will prevent all editing of the record for non-admin users.
     *
     * @param string $editLock
     */
    public function setEditLock($editLock)
    {
        $this->editLock = $editLock;
    }

    /**
     * Field name, which will contain the UID of the original record in case a record is created as a copy or new version of another record.
     *
     * @return string
     */
    public function getOrigUid()
    {
        return $this->origUid;
    }

    /**
     * Field name, which will contain the UID of the original record in case a record is created as a copy or new version of another record.
     *
     * @param string $origUid
     */
    public function setOrigUid($origUid)
    {
        $this->origUid = $origUid;
    }

    /**
     * Field name, which indicates if a record is considered deleted or not.
     *
     * @return string
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Field name, which indicates if a record is considered deleted or not.
     *
     * @param string $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * Field name where description of a record is stored in.
     *
     * @return string
     */
    public function getDescriptionColumn()
    {
        return $this->descriptionColumn;
    }

    /**
     * Field name where description of a record is stored in.
     *
     * @param string $descriptionColumn
     */
    public function setDescriptionColumn($descriptionColumn)
    {
        $this->descriptionColumn = $descriptionColumn;
    }

    /**
     * Specifies which publishing control features are automatically implemented for the table.
     *
     * @return array
     */
    public function getEnableColumns()
    {
        return $this->enableColumns;
    }

    /**
     * Specifies which publishing control features are automatically implemented for the table.
     *
     * @param array $enableColumns
     */
    public function setEnableColumns($enableColumns)
    {
        $this->enableColumns = $enableColumns;
    }

    /**
     * Comma-separated list of fields from the table that will be included when searching for records in the TYPO3 backend. Starting with TYPO3 CMS 4.6, no record from a table will ever be found if that table does not have “searchFields” defined.
     *
     * @return array
     */
    public function getSearchFields()
    {
        return implode(',', $this->searchFields);
    }

    /**
     * Comma-separated list of fields from the table that will be included when searching for records in the TYPO3 backend. Starting with TYPO3 CMS 4.6, no record from a table will ever be found if that table does not have “searchFields” defined.
     *
     * @param array $searchFields
     */
    public function setSearchFields($searchFields)
    {
        $this->searchFields = $searchFields;
    }

    /**
     * This option can be used to group records in the new record wizard.
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * This option can be used to group records in the new record wizard.
     *
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    /**
     * If set, and the “disabled” field from enablecolumns is specified, then records will be disabled/hidden when they are copied.
     *
     * @return boolean
     */
    public function isHideAtCopy()
    {
        return $this->hideAtCopy;
    }

    /**
     * If set, and the “disabled” field from enablecolumns is specified, then records will be disabled/hidden when they are copied.
     *
     * @param boolean $hideAtCopy
     */
    public function setHideAtCopy($hideAtCopy)
    {
        $this->hideAtCopy = $hideAtCopy;
    }

    /**
     * This string will be prepended the records title field when the record is inserted on the same PID as the original record (thus you can distinguish them).
     *
     * @return string
     */
    public function getPrependAtCopy()
    {
        return $this->prependAtCopy;
    }

    /**
     * This string will be prepended the records title field when the record is inserted on the same PID as the original record (thus you can distinguish them).
     *
     * @param string $prependAtCopy
     */
    public function setPrependAtCopy($prependAtCopy)
    {
        $this->prependAtCopy = $prependAtCopy;
    }

    /**
     * The fields in this list will automatically have the value of the same field from the “previous” record transferred when they are copied or moved to the position after another record from same table.
     *
     * @return string
     */
    public function getCopyAfterDuplFields()
    {
        return $this->copyAfterDuplFields;
    }

    /**
     * The fields in this list will automatically have the value of the same field from the “previous” record transferred when they are copied or moved to the position after another record from same table.
     *
     * @param string $copyAfterDuplFields
     */
    public function setCopyAfterDuplFields($copyAfterDuplFields)
    {
        $this->copyAfterDuplFields = $copyAfterDuplFields;
    }

    /**
     * These fields are restored to the default value of the record when they are copied.
     *
     * @return string
     */
    public function getSetToDefaultOnCopy()
    {
        return $this->setToDefaultOnCopy;
    }

    /**
     * These fields are restored to the default value of the record when they are copied.
     *
     * @param string $setToDefaultOnCopy
     */
    public function setSetToDefaultOnCopy($setToDefaultOnCopy)
    {
        $this->setToDefaultOnCopy = $setToDefaultOnCopy;
    }

    /**
     * When a new record is created, this defines the fields from the ‘previous’ record that should be used as default values.
     *
     * @return string
     */
    public function getUseColumnsForDefaultValues()
    {
        return $this->useColumnsForDefaultValues;
    }

    /**
     * When a new record is created, this defines the fields from the ‘previous’ record that should be used as default values.
     *
     * @param string $useColumnsForDefaultValues
     */
    public function setUseColumnsForDefaultValues($useColumnsForDefaultValues)
    {
        $this->useColumnsForDefaultValues = $useColumnsForDefaultValues;
    }

    /**
     * When a new element is created in a draft workspace a placeholder element is created in the Live workspace.
     *
     * @return string
     */
    public function getShadowColumnsForNewPlaceholders()
    {
        return $this->shadowColumnsForNewPlaceholders;
    }

    /**
     * When a new element is created in a draft workspace a placeholder element is created in the Live workspace.
     *
     * @param string $shadowColumnsForNewPlaceholders
     */
    public function setShadowColumnsForNewPlaceholders($shadowColumnsForNewPlaceholders)
    {
        $this->shadowColumnsForNewPlaceholders = $shadowColumnsForNewPlaceholders;
    }

    /**
     * Similar to shadowColumnsForNewPlaceholders but for move placeholders.
     *
     * @return string
     */
    public function getShadowColumnsForMovePlaceholders()
    {
        return $this->shadowColumnsForMovePlaceholders;
    }

    /**
     * Similar to shadowColumnsForNewPlaceholders but for move placeholders.
     *
     * @param string $shadowColumnsForMovePlaceholders
     */
    public function setShadowColumnsForMovePlaceholders($shadowColumnsForMovePlaceholders)
    {
        $this->shadowColumnsForMovePlaceholders = $shadowColumnsForMovePlaceholders;
    }

    /**
     * This marks a table to be “static”.
     *
     * @return boolean
     */
    public function isIsStatic()
    {
        return $this->isStatic;
    }

    /**
     * This marks a table to be “static”.
     *
     * @param boolean $isStatic
     */
    public function setIsStatic($isStatic)
    {
        $this->isStatic = $isStatic;
    }

    /**
     * Field name which is used to store the uid of a frontend user if the record is created through fe_adminLib.
     *
     * @return string
     */
    public function getFeCrUserId()
    {
        return $this->feCrUserId;
    }

    /**
     * Field name which is used to store the uid of a frontend user if the record is created through fe_adminLib.
     *
     * @param string $feCrUserId
     */
    public function setFeCrUserId($feCrUserId)
    {
        $this->feCrUserId = $feCrUserId;
    }

    /**
     * Field name which is used for storing the uid of a frontend group whose members are allowed to edit through fe_adminLib.
     *
     * @return string
     */
    public function getFeCrGroupId()
    {
        return $this->feCrGroupId;
    }

    /**
     * Field name which is used for storing the uid of a frontend group whose members are allowed to edit through fe_adminLib.
     *
     * @param string $feCrGroupId
     */
    public function setFeCrGroupId($feCrGroupId)
    {
        $this->feCrGroupId = $feCrGroupId;
    }

    /**
     * Field name which points to the field name which - as a boolean - will prevent any editing by the fe_adminLib if set.
     *
     * @return string
     */
    public function getFeAdminLock()
    {
        return $this->feAdminLock;
    }

    /**
     * Field name which points to the field name which - as a boolean - will prevent any editing by the fe_adminLib if set.
     *
     * @param string $feAdminLock
     */
    public function setFeAdminLock($feAdminLock)
    {
        $this->feAdminLock = $feAdminLock;
    }

    /**
     * Localization access control.
     *
     * @return string
     */
    public function getLanguageField()
    {
        return $this->languageField;
    }

    /**
     * Localization access control.
     *
     * @param string $languageField
     */
    public function setLanguageField($languageField)
    {
        $this->languageField = $languageField;
    }

    /**
     * Name of the field used by translations to point back to the original record (i.e. the record in the default language of which they are a translation).
     *
     * @return string
     */
    public function getTransOrigPointerField()
    {
        return $this->transOrigPointerField;
    }

    /**
     * Name of the field used by translations to point back to the original record (i.e. the record in the default language of which they are a translation).
     *
     * @param string $transOrigPointerField
     */
    public function setTransOrigPointerField($transOrigPointerField)
    {
        $this->transOrigPointerField = $transOrigPointerField;
    }

    /**
     * Translations may be stored in a separate table, instead of the same one.
     *
     * @return string
     */
    public function getTransForeignTable()
    {
        return $this->transForeignTable;
    }

    /**
     * Translations may be stored in a separate table, instead of the same one.
     *
     * @param string $transForeignTable
     */
    public function setTransForeignTable($transForeignTable)
    {
        $this->transForeignTable = $transForeignTable;
    }

    /**
     * Symmetrical property to “transForeignTable”. See above for explanations.
     *
     * @return string
     */
    public function getTransOrigPointerTable()
    {
        return $this->transOrigPointerTable;
    }

    /**
     * Symmetrical property to “transForeignTable”. See above for explanations.
     *
     * @param string $transOrigPointerTable
     */
    public function setTransOrigPointerTable($transOrigPointerTable)
    {
        $this->transOrigPointerTable = $transOrigPointerTable;
    }

    /**
     * Field name which will be updated with the value of the original language record whenever the translation record is updated.
     *
     * @return string
     */
    public function getTransOrigDiffSourceField()
    {
        return $this->transOrigDiffSourceField;
    }

    /**
     * Field name which will be updated with the value of the original language record whenever the translation record is updated.
     *
     * @param string $transOrigDiffSourceField
     */
    public function setTransOrigDiffSourceField($transOrigDiffSourceField)
    {
        $this->transOrigDiffSourceField = $transOrigDiffSourceField;
    }

    /**
     * If set, versioning is enabled for this table. If integer it indicates a version number of versioning features.
     *
     * @return int
     */
    public function getVersioningWS()
    {
        return $this->versioningWS;
    }

    /**
     * If set, versioning is enabled for this table. If integer it indicates a version number of versioning features.
     *
     * @param int $versioningWS
     */
    public function setVersioningWS($versioningWS)
    {
        $this->versioningWS = $versioningWS;
    }

    /**
     * If set, this table can always be edited live even in a workspace and even if “live editing” is not enabled in a custom workspace.
     *
     * @return boolean
     */
    public function isVersioningWSAlwaysAllowLiveEdit()
    {
        return $this->versioningWSAlwaysAllowLiveEdit;
    }

    /**
     * If set, this table can always be edited live even in a workspace and even if “live editing” is not enabled in a custom workspace.
     *
     * @param boolean $versioningWSAlwaysAllowLiveEdit
     */
    public function setVersioningWSAlwaysAllowLiveEdit($versioningWSAlwaysAllowLiveEdit)
    {
        $this->versioningWSAlwaysAllowLiveEdit = $versioningWSAlwaysAllowLiveEdit;
    }

    /**
     * (Only for other tables than “pages”)
     * If set, content from this table will get copied along when a new version of a page is created.
     *
     * @return boolean
     */
    public function isVersioningFollowPages()
    {
        return $this->versioningFollowPages;
    }

    /**
     * (Only for other tables than “pages”)
     * If set, content from this table will get copied along when a new version of a page is created.
     *
     * @param boolean $versioningFollowPages
     */
    public function setVersioningFollowPages($versioningFollowPages)
    {
        $this->versioningFollowPages = $versioningFollowPages;
    }

    /**
     * Array of sub-properties, see Security-related configuration.
     *
     * @return array
     */
    public function getSecurity()
    {
        if(count($this->security)) return $this->security;
        return array(
            'ignoreWebMountRestriction' => $this->isSecurityIgnoreWebMountRestriction(),
            'ignoreRootLevelRestriction' => $this->isSecurityIgnoreRootLevelRestriction()
        );
    }

    /**
     * Array of sub-properties, see Security-related configuration.
     *
     * @param array $security
     */
    public function setSecurity($security)
    {
        $this->security = $security;
    }

    /**
     * Allows users to access records that are not in their defined web-mount, thus bypassing this restriction.
     *
     * @return boolean
     */
    public function isSecurityIgnoreWebMountRestriction()
    {
        return $this->security_ignoreWebMountRestriction;
    }

    /**
     * Allows users to access records that are not in their defined web-mount, thus bypassing this restriction.
     *
     * @param boolean $security_ignoreWebMountRestriction
     */
    public function setSecurityIgnoreWebMountRestriction($security_ignoreWebMountRestriction)
    {
        $this->security_ignoreWebMountRestriction = $security_ignoreWebMountRestriction;
    }

    /**
     * Allows non-admin users to access records that on the root-level (page-id 0), thus bypassing this usual restriction.
     *
     * @return boolean
     */
    public function isSecurityIgnoreRootLevelRestriction()
    {
        return $this->security_ignoreRootLevelRestriction;
    }

    /**
     * Allows non-admin users to access records that on the root-level (page-id 0), thus bypassing this usual restriction.
     *
     * @param boolean $security_ignoreRootLevelRestriction
     */
    public function setSecurityIgnoreRootLevelRestriction($security_ignoreRootLevelRestriction)
    {
        $this->security_ignoreRootLevelRestriction = $security_ignoreRootLevelRestriction;
    }

    /**
     * User-defined content for extensions. You can use this as you like.
     *
     * @return array
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * User-defined content for extensions. You can use this as you like.
     *
     * @param array $ext
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    }
}