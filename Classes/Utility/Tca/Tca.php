<?php
namespace BERGWERK\BwrkUtility\Utility\Tca;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * Class Tca
 * @package BERGWERK\BwrkUtility\Utility\Tca
 */
class Tca extends AbstractTca
{
    /**
     * @param Configuration $configuration
     */
    public function init(Configuration $configuration)
    {
        $this->setDefaults($configuration);
    }

    /**
     * @param Configuration $configuration
     */
    private function setDefaults(Configuration $configuration)
    {
        $this->conf = $configuration;
        $this->conf->interface->setShowRecordFieldList($this->getRecordsFieldList());

        $ll = $this->conf->getLl();
        $iconFile = $this->conf->ctrl->getIconFile();
        $enableColumns = $this->conf->ctrl->getEnableColumns();

        if (empty($ll)) {
            $this->conf->setLl('LLL:EXT:' . $this->conf->getExt() . '/Resources/Private/Language/locallang_db.xlf:' . $this->conf->getModel());
        }

        if (empty($iconFile)) {
            $this->conf->ctrl->setIconFile(ExtensionManagementUtility::extRelPath($this->conf->getExt()) . 'Resources/Public/Icons/' . $this->conf->getModel() . '.gif');
        }

        if (count($enableColumns) == 0) {
            $this->conf->ctrl->setEnableColumns(array(
                'disabled' => 'hidden',
                'starttime' => 'starttime',
                'endtime' => 'endtime',
            ));
        }
    }

    /**
     * @return array
     */
    public function createTca()
    {
        $this->addTab('default_typo3_conf', 'LLL:EXT:bwrk_utility/Resources/Private/Language/locallang_db.xlf:tx_bwrkutility.default_typo3_conf');
        $this->setDefaultFields();

        $tca = array(
            'ctrl' => array(
                'title' => $this->getFieldLabel($this->conf->ctrl->getTitle()),
                'label' => $this->conf->ctrl->getLabel(),
                'label_alt' => $this->conf->ctrl->getLabelAlt(),
                'label_alt_force' => $this->conf->ctrl->isLabelAltForce(),
                'formattedLabel_userFunc' => $this->conf->ctrl->getFormattedLabelUserFunc(),
                'formattedLabel_userFunc_options' => $this->conf->ctrl->getFormattedLabelUserFuncOptions(),
                'type' => $this->conf->ctrl->getType(),
                'hideTable' => $this->conf->ctrl->isHideTable(),
                'requestUpdate' => $this->conf->ctrl->getRequestUpdate(),
                'iconfile' => $this->conf->ctrl->getIconFile(),
                'thumbnail' => $this->conf->ctrl->getThumbnail(),
                'selicon_field' => $this->conf->ctrl->getSelIconField(),
                'selicon_field_path' => $this->conf->ctrl->getSelIconFieldPath(),
                'sortby' => $this->conf->ctrl->getSortBy(),
                'default_sortby' => $this->conf->ctrl->getSortByDefault(),
                'mainpalette' => $this->conf->ctrl->getMainPalette(),
                'tstamp' => $this->conf->ctrl->getTstamp(),
                'crdate' => $this->conf->ctrl->getCrdate(),
                'cruser_id' => $this->conf->ctrl->getCruserId(),
                'rootLevel' => $this->conf->ctrl->getRootLevel(),
                'readOnly' => $this->conf->ctrl->isReadOnly(),
                'adminOnly' => $this->conf->ctrl->isAdminOnly(),
                'editlock' => $this->conf->ctrl->getEditLock(),
                'origUid' => $this->conf->ctrl->getOrigUid(),
                'delete' => $this->conf->ctrl->getDelete(),
                'descriptionColumn' => $this->conf->ctrl->getDescriptionColumn(),
                'enablecolumns' => $this->conf->ctrl->getEnableColumns(),
                'searchFields' => $this->conf->ctrl->getSearchFields(),
                'groupName' => $this->conf->ctrl->getGroupName(),
                'hideAtCopy' => $this->conf->ctrl->isHideAtCopy(),
                'prependAtCopy' => $this->conf->ctrl->getPrependAtCopy(),
                'copyAfterDuplFields' => $this->conf->ctrl->getCopyAfterDuplFields(),
                'setToDefaultOnCopy' => $this->conf->ctrl->getSetToDefaultOnCopy(),
                'useColumnsForDefaultValues' => $this->conf->ctrl->getUseColumnsForDefaultValues(),
                'shadowColumnsForNewPlaceholders' => $this->conf->ctrl->getShadowColumnsForNewPlaceholders(),
                'shadowColumnsForMovePlaceholders' => $this->conf->ctrl->getShadowColumnsForMovePlaceholders(),
                'is_static' => $this->conf->ctrl->isIsStatic(),
                'fe_cruser_id' => $this->conf->ctrl->getFeCrUserId(),
                'fe_crgroup_id' => $this->conf->ctrl->getFeCrGroupId(),
                'fe_admin_lock' => $this->conf->ctrl->getFeAdminLock(),
                'languageField' => $this->conf->ctrl->getLanguageField(),
                'transOrigPointerField' => $this->conf->ctrl->getTransOrigPointerField(),
                'transForeignTable' => $this->conf->ctrl->getTransForeignTable(),
                'transOrigPointerTable' => $this->conf->ctrl->getTransOrigPointerTable(),
                'transOrigDiffSourceField' => $this->conf->ctrl->getTransOrigDiffSourceField(),
                'versioningWS' => $this->conf->ctrl->getVersioningWS(),
                'versioningWS_alwaysAllowLiveEdit' => $this->conf->ctrl->isVersioningWSAlwaysAllowLiveEdit(),
                'versioning_followPages' => $this->conf->ctrl->isVersioningFollowPages(),
                'security' => $this->conf->ctrl->getSecurity(),
                'EXT' => $this->conf->ctrl->getExt()
//                'dividers2tabs' => TRUE,
            ),
            'interface' => array(
                'showRecordFieldList' => $this->conf->interface->getShowRecordFieldList(),
                'maxDBListItems' => $this->conf->interface->getMaxDBListItems(),
                'maxSingleDBListItems' => $this->conf->interface->getMaxSingleDBListItems()
            ),
            'columns' => $this->getColumns(),
            'types' => array(
                '1' => array('showitem' => $this->getShowItems())
            ),
            'palettes' => array(
                '1' => array('showitem' => ''),
            ),
        );

        $typeIconColumn = $this->conf->ctrl->getTypeIconColumn();
        if(!empty($typeIconColumn)) $tca['ctrl']['typeicon_column'] = $typeIconColumn;

        $typeIconClasses = $this->conf->ctrl->getTypeIconClasses();
        if(!empty($typeIconClasses)) $tca['ctrl']['typeicon_classes'] = $typeIconClasses;

        $labelUserFunc = $this->conf->ctrl->getLabelUserFunc();
        if (!empty($labelUserFunc))
        {
            $tca['ctrl']['formattedLabel_userFunc'] = $labelUserFunc;
            $tca['ctrl']['label_userFunc'] = $labelUserFunc;
            $tca['ctrl']['label_userFunc_options'] = $this->conf->ctrl->getLabelUserFuncOptions();
        }

        return $tca;
    }
}