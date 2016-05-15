<?php

namespace BERGWERK\BwrkUtility\Utility\Tca\Configuration;

class Ctrl
{
    /**
     * Contains the system name of the table. Is used for display in the backend.
     *
     * @var string
     */
    protected $title = '';
    /**
     * Points to the field name of the table which should be used as the “title” when the record is displayed in the system.
     *
     * @var string
     */
    protected $label = '';
    /**
     * Comma-separated list of field names, which are holding alternative values to the value from the field pointed to by “label” (see above) if that value is empty. May not be used consistently in the system, but should apply in most cases.
     *
     * @var string
     */
    protected $labelAlt = '';
    /**
     * If set, then the label_alt fields are always shown in the title separated by comma.
     *
     * @var bool
     */
    protected $labelAltForce = false;
    /**
     * Function or method reference.
     *
     * @var string
     */
    protected $labelUserFunc = '';
    /**
     * Options for label_userFunc.
     *
     * @var array
     */
    protected $labelUserFuncOptions = array();
    /**
     * Similar to label_userFunc but allowed to return formatted HTML for the label and used only for the labels of inline (IRRE) records.
     *
     * @var string
     */
    protected $formattedLabelUserFunc = '';
    /**
     * Options for formattedLabel_userFunc.
     *
     * @var array
     */
    protected $formattedLabelUserFuncOptions = array();
    /**
     * Field name, which defines the "record type".
     *
     * @var string
     */
    protected $type = '';
    /**
     * Hide this table in record listings.
     *
     * @var bool
     */
    protected $hideTable = false;
    /**
     * This is a list of fields that will trigger an update of the form, on top of the “type” field.
     *
     * @var string
     *
     * @todo: implode(',', $this->conf->getRequestUpdateColumns())
     */
    protected $requestUpdate = '';
    /**
     * Pointing to the icon file to use for the table.
     *
     * @var string
     */
    protected $iconFile = '';
    /**
     * Field name, whose value decides alternative icons for the table records (The default icon is the one defined with the ‘iconfile’ value.)
     *
     * @var string
     */
    protected $typeIconColumn = '';
    /**
     * Array of class names to use for the records. The keys must correspond to the values found in the column referenced in the typeicon_column property. The class names correspond to the backend’s sprite icons.
     *
     * @var array
     */
    protected $typeIconClasses = array();
    /**
     * Field name, which contains the value for any thumbnails of the records.
     *
     * @var string
     */
    protected $thumbnail = '';
    /**
     * Field name, which contains the thumbnail image used to represent the record visually whenever it is shown in TCEforms as a foreign reference selectable from a selector box.
     *
     * @var string
     */
    protected $selIconField = 'icon';
    /**
     * The path prefix of the value from selicon_field. This must the same as the “upload_path” of that field.
     *
     * @var string
     */
    protected $selIconFieldPath = 'uploads/media';
    /**
     * Field name, which is used to manage the order of the records.
     *
     * @var string
     */
    protected $sortBy = 'sorting';
    /**
     * If a field name for sortby is defined, then this is ignored.
     *
     * @var string
     */
    protected $sortByDefault = 'ORDER BY sorting';
    /**
     * Points to the palette-number(s) that should always be shown in the bottom of the TCEform.
     *
     * @var string
     */
    protected $mainPalette = '1';
    /**
     * Field name, which is automatically updated to the current timestamp (UNIX-time in seconds) each time the record is updated/saved in the system.
     *
     * @var string
     */
    protected $tstamp = 'tstamp';
    /**
     * Field name, which is automatically set to the current timestamp when the record is created. Is never modified again.
     *
     * @var string
     */
    protected $crdate = 'crdate';
    /**
     * Field name, which is automatically set to the uid of the backend user (be_users) who originally created the record. Is never modified again.
     *
     * @var string
     */
    protected $cruserId = 'cruser_id';
    /**
     * Determines where a record may exist in the page tree.
     *
     * @var int
     */
    protected $rootLevel = 0;
    /**
     * Records from this table may not be edited in the TYPO3 backend. Such tables are usually called “static”.
     *
     * @var bool
     */
    protected $readOnly = false;
    /**
     * Records may be changed only by “admin”-users (having the “admin” flag set).
     *
     * @var bool
     */
    protected $adminOnly = false;
    /**
     * Field name, which – if set – will prevent all editing of the record for non-admin users.
     *
     * @var string
     */
    protected $editLock = '';
    /**
     * Field name, which will contain the UID of the original record in case a record is created as a copy or new version of another record.
     *
     * @var string
     */
    protected $origUid = 't3_origuid';
    /**
     * Field name, which indicates if a record is considered deleted or not.
     *
     * @var string
     */
    protected $delete = 'deleted';
    /**
     * Field name where description of a record is stored in.
     *
     * @var string
     */
    protected $descriptionColumn = '';
    /**
     * Specifies which publishing control features are automatically implemented for the table.
     *
     * @var array
     */
    protected $enableColumns = array();
    /**
     * Comma-separated list of fields from the table that will be included when searching for records in the TYPO3 backend. Starting with TYPO3 CMS 4.6, no record from a table will ever be found if that table does not have “searchFields” defined.
     *
     * @var array
     */
    protected $searchFields = array();
    /**
     * This option can be used to group records in the new record wizard.
     *
     * @var string
     */
    protected $groupName = '';
    /**
     * If set, and the “disabled” field from enablecolumns is specified, then records will be disabled/hidden when they are copied.
     *
     * @var bool
     */
    protected $hideAtCopy = true;
    /**
     * This string will be prepended the records title field when the record is inserted on the same PID as the original record (thus you can distinguish them).
     *
     * @var string
     */
    protected $prependAtCopy = ' (copy %s)';
    /**
     * The fields in this list will automatically have the value of the same field from the “previous” record transferred when they are copied or moved to the position after another record from same table.
     *
     * @var string
     */
    protected $copyAfterDuplFields = 'colPos, sys_language_uid';
    /**
     * These fields are restored to the default value of the record when they are copied.
     *
     * @var string
     */
    protected $setToDefaultOnCopy = '';
    /**
     * When a new record is created, this defines the fields from the ‘previous’ record that should be used as default values.
     *
     * @var string
     */
    protected $useColumnsForDefaultValues = '';
    /**
     * When a new element is created in a draft workspace a placeholder element is created in the Live workspace.
     *
     * @var string
     */
    protected $shadowColumnsForNewPlaceholders = '';
    /**
     * Similar to shadowColumnsForNewPlaceholders but for move placeholders.
     *
     * @var string
     */
    protected $shadowColumnsForMovePlaceholders = '';
    /**
     * This marks a table to be “static”.
     *
     * @var bool
     */
    protected $isStatic = false;
    /**
     * Field name which is used to store the uid of a frontend user if the record is created through fe_adminLib.
     *
     * @var string
     */
    protected $feCrUserId = '';
    /**
     * Field name which is used for storing the uid of a frontend group whose members are allowed to edit through fe_adminLib.
     *
     * @var string
     */
    protected $feCrGroupId = '';
    /**
     * Field name which points to the field name which - as a boolean - will prevent any editing by the fe_adminLib if set.
     *
     * @var string
     */
    protected $feAdminLock = '';
    /**
     * Localization access control.
     *
     * @var string
     */
    protected $languageField = 'sys_language_uid';
    /**
     * Name of the field used by translations to point back to the original record (i.e. the record in the default language of which they are a translation).
     *
     * @var string
     */
    protected $transOrigPointerField = 'l10n_parent';
    /**
     * Translations may be stored in a separate table, instead of the same one.
     *
     * @var string
     */
    protected $transForeignTable = '';
    /**
     * Symmetrical property to “transForeignTable”. See above for explanations.
     *
     * @var string
     */
    protected $transOrigPointerTable = '';
    /**
     * Field name which will be updated with the value of the original language record whenever the translation record is updated.
     *
     * @var string
     */
    protected $transOrigDiffSourceField = 'l10n_diffsource';
    /**
     * If set, versioning is enabled for this table. If integer it indicates a version number of versioning features.
     *
     * @var int
     */
    protected $versioningWS = 2;
    /**
     * If set, this table can always be edited live even in a workspace and even if “live editing” is not enabled in a custom workspace.
     *
     * @var bool
     */
    protected $versioningWSAlwaysAllowLiveEdit = true;
    /**
     * (Only for other tables than “pages”)
     * If set, content from this table will get copied along when a new version of a page is created.
     *
     * @var bool
     */
    protected $versioningFollowPages = true;
    /**
     * Array of sub-properties, see Security-related configuration.
     *
     * @var array
     */
    protected $security = array();
    /**
     * Allows users to access records that are not in their defined web-mount, thus bypassing this restriction.
     *
     * @var bool
     */
    protected $security_ignoreWebMountRestriction = true;
    /**
     * Allows non-admin users to access records that on the root-level (page-id 0), thus bypassing this usual restriction.
     *
     * @var bool
     */
    protected $security_ignoreRootLevelRestriction = true;
    /**
     * User-defined content for extensions. You can use this as you like.
     *
     * @var array
     */
    protected $ext = array();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return string
     */
    public function getLabelAlt()
    {
        return $this->labelAlt;
    }

    /**
     * @param string $labelAlt
     */
    public function setLabelAlt($labelAlt)
    {
        $this->labelAlt = $labelAlt;
    }

    /**
     * @return boolean
     */
    public function isLabelAltForce()
    {
        return $this->labelAltForce;
    }

    /**
     * @param boolean $labelAltForce
     */
    public function setLabelAltForce($labelAltForce)
    {
        $this->labelAltForce = $labelAltForce;
    }

    /**
     * @return string
     */
    public function getLabelUserFunc()
    {
        return $this->labelUserFunc;
    }

    /**
     * @param string $labelUserFunc
     */
    public function setLabelUserFunc($labelUserFunc)
    {
        $this->labelUserFunc = $labelUserFunc;
    }

    /**
     * @return array
     */
    public function getLabelUserFuncOptions()
    {
        return $this->labelUserFuncOptions;
    }

    /**
     * @param array $labelUserFuncOptions
     */
    public function setLabelUserFuncOptions($labelUserFuncOptions)
    {
        $this->labelUserFuncOptions = $labelUserFuncOptions;
    }

    /**
     * @return string
     */
    public function getFormattedLabelUserFunc()
    {
        return $this->formattedLabelUserFunc;
    }

    /**
     * @param string $formattedLabelUserFunc
     */
    public function setFormattedLabelUserFunc($formattedLabelUserFunc)
    {
        $this->formattedLabelUserFunc = $formattedLabelUserFunc;
    }

    /**
     * @return array
     */
    public function getFormattedLabelUserFuncOptions()
    {
        return $this->formattedLabelUserFuncOptions;
    }

    /**
     * @param array $formattedLabelUserFuncOptions
     */
    public function setFormattedLabelUserFuncOptions($formattedLabelUserFuncOptions)
    {
        $this->formattedLabelUserFuncOptions = $formattedLabelUserFuncOptions;
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

    /**
     * @return boolean
     */
    public function isHideTable()
    {
        return $this->hideTable;
    }

    /**
     * @param boolean $hideTable
     */
    public function setHideTable($hideTable)
    {
        $this->hideTable = $hideTable;
    }

    /**
     * @return string
     */
    public function getRequestUpdate()
    {
        return $this->requestUpdate;
    }

    /**
     * @param string $requestUpdate
     */
    public function setRequestUpdate($requestUpdate)
    {
        $this->requestUpdate = $requestUpdate;
    }

    /**
     * @return string
     */
    public function getIconFile()
    {
        return $this->iconFile;
    }

    /**
     * @param string $iconFile
     */
    public function setIconFile($iconFile)
    {
        $this->iconFile = $iconFile;
    }

    /**
     * @return string
     */
    public function getTypeIconColumn()
    {
        return $this->typeIconColumn;
    }

    /**
     * @param string $typeIconColumn
     */
    public function setTypeIconColumn($typeIconColumn)
    {
        $this->typeIconColumn = $typeIconColumn;
    }

    /**
     * @return array
     */
    public function getTypeIconClasses()
    {
        return $this->typeIconClasses;
    }

    /**
     * @param array $typeIconClasses
     */
    public function setTypeIconClasses($typeIconClasses)
    {
        $this->typeIconClasses = $typeIconClasses;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string
     */
    public function getSelIconField()
    {
        return $this->selIconField;
    }

    /**
     * @param string $selIconField
     */
    public function setSelIconField($selIconField)
    {
        $this->selIconField = $selIconField;
    }

    /**
     * @return string
     */
    public function getSelIconFieldPath()
    {
        return $this->selIconFieldPath;
    }

    /**
     * @param string $selIconFieldPath
     */
    public function setSelIconFieldPath($selIconFieldPath)
    {
        $this->selIconFieldPath = $selIconFieldPath;
    }

    /**
     * @return string
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
    }

    /**
     * @return string
     */
    public function getSortByDefault()
    {
        return $this->sortByDefault;
    }

    /**
     * @param string $sortByDefault
     */
    public function setSortByDefault($sortByDefault)
    {
        $this->sortByDefault = $sortByDefault;
    }

    /**
     * @return string
     */
    public function getMainPalette()
    {
        return $this->mainPalette;
    }

    /**
     * @param string $mainPalette
     */
    public function setMainPalette($mainPalette)
    {
        $this->mainPalette = $mainPalette;
    }

    /**
     * @return string
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * @param string $tstamp
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return string
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * @param string $crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }

    /**
     * @return string
     */
    public function getCruserId()
    {
        return $this->cruserId;
    }

    /**
     * @param string $cruserId
     */
    public function setCruserId($cruserId)
    {
        $this->cruserId = $cruserId;
    }

    /**
     * @return int
     */
    public function getRootLevel()
    {
        return $this->rootLevel;
    }

    /**
     * @param int $rootLevel
     */
    public function setRootLevel($rootLevel)
    {
        $this->rootLevel = $rootLevel;
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
     * @return boolean
     */
    public function isAdminOnly()
    {
        return $this->adminOnly;
    }

    /**
     * @param boolean $adminOnly
     */
    public function setAdminOnly($adminOnly)
    {
        $this->adminOnly = $adminOnly;
    }

    /**
     * @return string
     */
    public function getEditLock()
    {
        return $this->editLock;
    }

    /**
     * @param string $editLock
     */
    public function setEditLock($editLock)
    {
        $this->editLock = $editLock;
    }

    /**
     * @return string
     */
    public function getOrigUid()
    {
        return $this->origUid;
    }

    /**
     * @param string $origUid
     */
    public function setOrigUid($origUid)
    {
        $this->origUid = $origUid;
    }

    /**
     * @return string
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @param string $delete
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    }

    /**
     * @return string
     */
    public function getDescriptionColumn()
    {
        return $this->descriptionColumn;
    }

    /**
     * @param string $descriptionColumn
     */
    public function setDescriptionColumn($descriptionColumn)
    {
        $this->descriptionColumn = $descriptionColumn;
    }

    /**
     * @return array
     */
    public function getEnableColumns()
    {
        return $this->enableColumns;
    }

    /**
     * @param array $enableColumns
     */
    public function setEnableColumns($enableColumns)
    {
        $this->enableColumns = $enableColumns;
    }

    /**
     * @return array
     */
    public function getSearchFields()
    {
        return $this->searchFields;
    }

    /**
     * @param array $searchFields
     */
    public function setSearchFields($searchFields)
    {
        $this->searchFields = $searchFields;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
    }

    /**
     * @return boolean
     */
    public function isHideAtCopy()
    {
        return $this->hideAtCopy;
    }

    /**
     * @param boolean $hideAtCopy
     */
    public function setHideAtCopy($hideAtCopy)
    {
        $this->hideAtCopy = $hideAtCopy;
    }

    /**
     * @return string
     */
    public function getPrependAtCopy()
    {
        return $this->prependAtCopy;
    }

    /**
     * @param string $prependAtCopy
     */
    public function setPrependAtCopy($prependAtCopy)
    {
        $this->prependAtCopy = $prependAtCopy;
    }

    /**
     * @return string
     */
    public function getCopyAfterDuplFields()
    {
        return $this->copyAfterDuplFields;
    }

    /**
     * @param string $copyAfterDuplFields
     */
    public function setCopyAfterDuplFields($copyAfterDuplFields)
    {
        $this->copyAfterDuplFields = $copyAfterDuplFields;
    }

    /**
     * @return string
     */
    public function getSetToDefaultOnCopy()
    {
        return $this->setToDefaultOnCopy;
    }

    /**
     * @param string $setToDefaultOnCopy
     */
    public function setSetToDefaultOnCopy($setToDefaultOnCopy)
    {
        $this->setToDefaultOnCopy = $setToDefaultOnCopy;
    }

    /**
     * @return string
     */
    public function getUseColumnsForDefaultValues()
    {
        return $this->useColumnsForDefaultValues;
    }

    /**
     * @param string $useColumnsForDefaultValues
     */
    public function setUseColumnsForDefaultValues($useColumnsForDefaultValues)
    {
        $this->useColumnsForDefaultValues = $useColumnsForDefaultValues;
    }

    /**
     * @return string
     */
    public function getShadowColumnsForNewPlaceholders()
    {
        return $this->shadowColumnsForNewPlaceholders;
    }

    /**
     * @param string $shadowColumnsForNewPlaceholders
     */
    public function setShadowColumnsForNewPlaceholders($shadowColumnsForNewPlaceholders)
    {
        $this->shadowColumnsForNewPlaceholders = $shadowColumnsForNewPlaceholders;
    }

    /**
     * @return string
     */
    public function getShadowColumnsForMovePlaceholders()
    {
        return $this->shadowColumnsForMovePlaceholders;
    }

    /**
     * @param string $shadowColumnsForMovePlaceholders
     */
    public function setShadowColumnsForMovePlaceholders($shadowColumnsForMovePlaceholders)
    {
        $this->shadowColumnsForMovePlaceholders = $shadowColumnsForMovePlaceholders;
    }

    /**
     * @return boolean
     */
    public function isIsStatic()
    {
        return $this->isStatic;
    }

    /**
     * @param boolean $isStatic
     */
    public function setIsStatic($isStatic)
    {
        $this->isStatic = $isStatic;
    }

    /**
     * @return string
     */
    public function getFeCrUserId()
    {
        return $this->feCrUserId;
    }

    /**
     * @param string $feCrUserId
     */
    public function setFeCrUserId($feCrUserId)
    {
        $this->feCrUserId = $feCrUserId;
    }

    /**
     * @return string
     */
    public function getFeCrGroupId()
    {
        return $this->feCrGroupId;
    }

    /**
     * @param string $feCrGroupId
     */
    public function setFeCrGroupId($feCrGroupId)
    {
        $this->feCrGroupId = $feCrGroupId;
    }

    /**
     * @return string
     */
    public function getFeAdminLock()
    {
        return $this->feAdminLock;
    }

    /**
     * @param string $feAdminLock
     */
    public function setFeAdminLock($feAdminLock)
    {
        $this->feAdminLock = $feAdminLock;
    }

    /**
     * @return string
     */
    public function getLanguageField()
    {
        return $this->languageField;
    }

    /**
     * @param string $languageField
     */
    public function setLanguageField($languageField)
    {
        $this->languageField = $languageField;
    }

    /**
     * @return string
     */
    public function getTransOrigPointerField()
    {
        return $this->transOrigPointerField;
    }

    /**
     * @param string $transOrigPointerField
     */
    public function setTransOrigPointerField($transOrigPointerField)
    {
        $this->transOrigPointerField = $transOrigPointerField;
    }

    /**
     * @return string
     */
    public function getTransForeignTable()
    {
        return $this->transForeignTable;
    }

    /**
     * @param string $transForeignTable
     */
    public function setTransForeignTable($transForeignTable)
    {
        $this->transForeignTable = $transForeignTable;
    }

    /**
     * @return string
     */
    public function getTransOrigPointerTable()
    {
        return $this->transOrigPointerTable;
    }

    /**
     * @param string $transOrigPointerTable
     */
    public function setTransOrigPointerTable($transOrigPointerTable)
    {
        $this->transOrigPointerTable = $transOrigPointerTable;
    }

    /**
     * @return string
     */
    public function getTransOrigDiffSourceField()
    {
        return $this->transOrigDiffSourceField;
    }

    /**
     * @param string $transOrigDiffSourceField
     */
    public function setTransOrigDiffSourceField($transOrigDiffSourceField)
    {
        $this->transOrigDiffSourceField = $transOrigDiffSourceField;
    }

    /**
     * @return int
     */
    public function getVersioningWS()
    {
        return $this->versioningWS;
    }

    /**
     * @param int $versioningWS
     */
    public function setVersioningWS($versioningWS)
    {
        $this->versioningWS = $versioningWS;
    }

    /**
     * @return boolean
     */
    public function isVersioningWSAlwaysAllowLiveEdit()
    {
        return $this->versioningWSAlwaysAllowLiveEdit;
    }

    /**
     * @param boolean $versioningWSAlwaysAllowLiveEdit
     */
    public function setVersioningWSAlwaysAllowLiveEdit($versioningWSAlwaysAllowLiveEdit)
    {
        $this->versioningWSAlwaysAllowLiveEdit = $versioningWSAlwaysAllowLiveEdit;
    }

    /**
     * @return boolean
     */
    public function isVersioningFollowPages()
    {
        return $this->versioningFollowPages;
    }

    /**
     * @param boolean $versioningFollowPages
     */
    public function setVersioningFollowPages($versioningFollowPages)
    {
        $this->versioningFollowPages = $versioningFollowPages;
    }

    /**
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
     * @param array $security
     */
    public function setSecurity($security)
    {
        $this->security = $security;
    }

    /**
     * @return boolean
     */
    public function isSecurityIgnoreWebMountRestriction()
    {
        return $this->security_ignoreWebMountRestriction;
    }

    /**
     * @param boolean $security_ignoreWebMountRestriction
     */
    public function setSecurityIgnoreWebMountRestriction($security_ignoreWebMountRestriction)
    {
        $this->security_ignoreWebMountRestriction = $security_ignoreWebMountRestriction;
    }

    /**
     * @return boolean
     */
    public function isSecurityIgnoreRootLevelRestriction()
    {
        return $this->security_ignoreRootLevelRestriction;
    }

    /**
     * @param boolean $security_ignoreRootLevelRestriction
     */
    public function setSecurityIgnoreRootLevelRestriction($security_ignoreRootLevelRestriction)
    {
        $this->security_ignoreRootLevelRestriction = $security_ignoreRootLevelRestriction;
    }

    /**
     * @return array
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param array $ext
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    }
}