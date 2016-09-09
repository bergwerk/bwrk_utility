<?php

namespace BERGWERK\BwrkUtility\Utility\Tca;

use BERGWERK\BwrkUtility\Utility\Tca\Dummy\Column;
use BERGWERK\BwrkUtility\Utility\Tca\Helpers\FormatHelper;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * Class AbstractClass
 * @package BERGWERK\BwrkUtility\Utility\Tca
 */
class AbstractTca
{

    /**
     *
     */
    const ExtensionsImage = 'jpg,jpeg,png,gif,tiff,bmp';

    /**
     * @var array
     */
    protected $fields = array();
    /**
     * @var \BERGWERK\BwrkUtility\Utility\Tca\Configuration
     */
    protected $conf;

    /**
     * @return string
     */
    public function getSearchFields()
    {
        return implode(',', $this->conf->ctrl->getSearchFields());
    }

    /**
     *
     */
    public function setDefaultFields()
    {
        if (!array_key_exists('sys_language_uid', $this->fields)) {

            $sysLanguageUid = new Column('sys_language_uid');
            $sysLanguageUid->setConfig(array(
                'exclude' => 1,
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
                'config' => array(
                    'type' => 'select',
                    'foreign_table' => 'sys_language',
                    'foreign_table_where' => 'ORDER BY sys_language.title',
                    'items' => array(
                        array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                        array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                    ),
                ),
            ));
            $this->addRawField($sysLanguageUid);
        }

        if (!array_key_exists('l10n_parent', $this->fields)) {
            $l10nParent = new Column('l10n_parent');
            $l10nParent->setConfig(array(
                'displayCond' => 'FIELD:sys_language_uid:>:0',
                'exclude' => 1,
                'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
                'config' => array(
                    'type' => 'select',
                    'items' => array(
                        array('', 0),
                    ),
                    'foreign_table' => $this->conf->getModel(),
                    'foreign_table_where' =>
                        'AND ' . $this->conf->getModel() . '.pid = ###CURRENT_PID### AND ' . $this->conf->getModel() . '.sys_language_uid IN (-1,0)',
                ),
            ));
            $this->addRawField($l10nParent);
        }

        if (!array_key_exists('l10n_diffsource', $this->fields)) {
            $this->addPassThrough(new Column('l10n_diffsource'));
        }

        if (!array_key_exists('t3ver_label', $this->fields)) {
            $t3verLabel = new Column('t3ver_label');
            $t3verLabel->setLabel('LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel');
            $this->addInputField($t3verLabel);
        }

        if (!array_key_exists('hidden', $this->fields)) {
            $hidden = new Column('hidden');
            $hidden->setLabel('LLL:EXT:lang/locallang_general.xlf:LGL.hidden');
            $this->addCheckField($hidden);
        }
    }

    /**
     * @param string $fieldName
     * @return string
     */
    public function getFieldLabel($fieldName)
    {
        if(empty($fieldName))
        {
            return $this->conf->getLl();
        }
        return $this->conf->getLl() . '.' . $fieldName;
    }

    /**
     * @return string
     */
    public function getShowItems()
    {
        $fieldArr = array();
        foreach ($this->fields as $key => $value) {
            if (substr($key, 0, 4) === 'tab_') {
                $fieldArr[$value] = '';
            } else {
                $fieldArr[$key] = $value;
            }
        }
        return implode(',', array_keys($fieldArr));
    }

    /**
     * @return string
     */
    public function getRecordsFieldList()
    {
        return implode(',', array_keys($this->getColumns()));
    }

    /**
     * @param array $fields
     * @return array
     */
    public function removeTabs($fields)
    {
        $fieldArr = array();

        foreach ($fields as $key => $value) {
            if (substr($key, 0, 4) !== 'tab_') {
                $fieldArr[$key] = $value;
            }
        }

        return $fieldArr;
    }

    /**
     * @return array
     */
    public function getColumns()
    {
        return $this->removeTabs($this->fields);
    }

    /*
     * Public
     */

    /**
     * @param string $string
     */
    public function addConfigSearchField($string)
    {
        array_push($this->conf->ctrl->getSearchFields(), $string);
    }

    private function setColumnDefaults(Column $column)
    {
        $label = $column->getLabel();
        $itemsLabelPath = $column->getItemsLabelPath();

        if (empty($label)) {
            $column->setLabel($this->getFieldLabel($column->getFieldName()));
        }
        if (empty($itemsLabelPath)) {
            $column->setItemsLabelPath($this->conf->getLl());
        }
        return $column;
    }

    /**
     * @param Column $column
     * @return array
     */
    public function addCheckField(Column $column)
    {
        $this->setColumnDefaults($column);
        $this->fields[$column->getFieldName()] = array(
            'exclude' => $column->getExclude(),
            'label' => $column->getLabel(),
            'config' => array(
                'type' => 'check',
            ),
        );
        $default = $column->getDefault();
        if (!empty($default)) {
            $this->fields[$column->getFieldName()]['config']['default'] = $default;
        }
        $onChange = $column->getOnChange();
        if (!empty($onChange)) {
            $this->fields[$column->getFieldName()]['config']['onChange'] = $onChange;
        }

        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }

    private function returnFieldArray(Column $column, $type)
    {
        $configArray = FormatHelper::getFieldConfig($type, $column);
        $column = $this->setColumnDefaults($column);

        $this->fields[$column->getFieldName()] = array(
            'exclude' => $column->getExclude(),
            'label' => $column->getLabel(),
            'config' => $configArray
        );

        $additionalFields = array(
            'displayCond',
            'defaultExtras',
            'onChange'
        );
        foreach($additionalFields as $additionalField)
        {
            $methodName = 'get'.ucfirst($additionalField);
            if(method_exists($column, $methodName))
            {
                $fieldValue = $column->$methodName();
                if(!empty($fieldValue)) $this->fields[$column->getFieldName()][$additionalField] = $fieldValue;
            }
        }
        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }
    public function addInputField(Column $column)
    {
        return $this->returnFieldArray($column, 'input');
    }

    public function addTypoLink(Column $column)
    {
        $column->setWizards(array(
            '_PADDING' => '2',
            'link' => array(
                'type' => 'popup',
                'title' => 'Link',
                'icon' => 'link_popup.gif',
                'module' => array(
                    'name' => 'wizard_element_browser',
                    'urlParameters' => array(
                        'mode' => $column->getMode()
                    )
                ),
                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
            )
        ));
        return $this->addInputField($column);
    }

    /**
     * @param Column $column
     * @return array
     */
    public function addTypoLinkFile(Column $column)
    {
        $column->setMode('file');
        return $this->addTypoLink($column);
    }


    public function addTextField(Column $column)
    {
        if ($column->isRte()) {
            $this->fields[$column->getFieldName()]['defaultExtras'] = 'richtext[]:rte_transform[mode=ts_css]';
        }
        $column->setMax(0);
        return $this->returnFieldArray($column, 'text');
    }


    public function addRawField(Column $column)
    {
        $this->fields[$column->getFieldName()] = $column->getConfig();
        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }

    /**
     * @param string $tabName
     * @param string $label
     */
    public function addTab($tabName, $label = '')
    {
        if (empty($label)) {
            $label = $this->conf->getLl() . '.' . $tabName;
        }
        $this->fields['tab_' . $tabName] = '--div--;' . $label;
    }

    public function addSelectFieldFunc(Column $column)
    {
        $renderType = $column->getRenderType();
        if(empty($renderType)) $column->setRenderType('selectSingle');

        $size = $column->getSize();
        if(empty($size)) $column->setSize(1);

        return $this->returnFieldArray($column, 'select');
    }

    public function addPassThrough(Column $column)
    {
        $this->fields[$column->getFieldName()] = array(
            'config' => array(
                'type' => 'passthrough'
            )
        );
        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }

    public function addSelectField(Column $column)
    {
        $itemsArr = array();
        foreach ($column->getItems() as $item) {
            $itemsArr[] = array(
                $column->getItemsLabelPath() . '.' . $item['name'],
                $item['value']
            );
        }

        $column->setItems($itemsArr);
        return $this->returnFieldArray($column, 'select');
    }

    public function addReferenceField(Column $column)
    {
        return $this->returnFieldArray($column, 'inline');
    }

    public function addSingleRelationField(Column $column)
    {
        return $this->returnFieldArray($column, 'select');
    }

    public function addMultipleRelationField(Column $column)
    {
        $column->setAllowed($column->getForeignTable());
        $column->setMm($column->getMmRelationTable());
        return $this->returnFieldArray($column, 'select');
    }

    public function addSysCategoryReferences(Column $column)
    {
        $foreignTableWhere = " AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC";
        $extBaseType = $column->getExtBaseType();
        if (!empty($extBaseType)) {
            $foreignTableWhere = " AND sys_category.tx_extbase_type = '" . $extBaseType . "' " . $foreignTableWhere;
        }

        $column->setForeignTable('sys_category');
        $column->setMmRelationTable('sys_category_record_mm');
        $column->setMmOppositeField('items');
        $column->setForeignTableWhere($foreignTableWhere);
        $column->setMmMatchFields(array(
            'tablenames' => $this->conf->getModel(),
            'fieldname' => $column->getFieldName()
        ));
        $column->setRenderMode('tree');
        $column->setTreeConfig(array(
            'appearance' => array('expandAll' => 1, 'showHeader' => 1),
            'parentField' => 'parent',
        ));
        return $this->addMultipleRelationField($column);
    }

    public function addSysCategoryReferencesFlexForm(Column $column)
    {
        $foreignTableWhere = " AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC";

        $column->setForeignTable('sys_category');
        $column->setMmRelationTable(null);
        $column->setMmOppositeField(null);
        $column->setForeignTableWhere($foreignTableWhere);
        $column->setMmMatchFields(array());
        $column->setRenderMode('tree');
        $column->setTreeConfig(array(
            'appearance' => array('expandAll' => 1, 'showHeader' => 1),
            'parentField' => 'parent'
        ));
        return $this->addMultipleRelationField($column);
    }

    public function addFalImageReference(Column $column)
    {
        $baseConfig = ExtensionManagementUtility::getFileFieldTCAConfig($column->getFieldName());
        $column = $this->setColumnDefaults($column);

        $config = array_merge($baseConfig, array(
            'minitems' => $column->getMinItems(),
            'maxitems' => $column->getMaxItems()
        ));

        $this->fields[$column->getFieldName()] = array(
            'exclude' => $column->getExclude(),
            'label' => $column->getLabel(),
            'config' => $config
        );

        $displayCond = $column->getDisplayCond();
        if (!empty($displayCond)) {
            $this->fields[$column->getFieldName()]['displayCond'] = $displayCond;
        }

        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }

    public function addSysFileReference(Column $column)
    {
        $exclude = $column->getExclude();
        if (empty($exclude)) {
            $column->setExclude(0);
        }
        $allowedExtensions = $column->getAllowedExtensions();
        if (empty($allowedExtensions)) {
            $column->setAllowedExtensions('*');
        }

        $column->setForeignTable('sys_file_reference');
        $column->setForeignField('uid_foreign');
        $column->setForeignSortBy('sorting_foreign');
        $column->setForeignTableField('tablenames');
        $column->setForeignMatchFields(array(
            'fieldname' => $column->getFieldName()
        ));
        $column->setForeignLabel('uid_local');
        $column->setForeignSelector('uid_local');
        $column->setOverWriteConfig(array(
            'appearance' => array(
                'newRecordLinkAddTitle' => 1,
                'headerThumbnail' => array(
                    'field' => 'uid_local',
                    'height' => 64,
                    'width' => 64
                )
            ),
            'foreign_selector_fieldTcaOverride' => array(
                'config' => array(
                    'appearance' => array(
                        'elementBrowserType' => 'file',
                        'elementBrowserAllowed' => $column->getAllowedExtensions()
                    )
                )
            )
        ));
        $this->addReferenceField($column);

        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }

    public function addPageReference(Column $column)
    {
        $allowed = $column->getAllowed();
        if(empty($allowed))
        {
            $column->setAllowed('pages');
        }

        $column = $this->setColumnDefaults($column);

        $config = array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => $column->getAllowed(),
            'size' => $column->getSize(),
            'maxitems' => $column->getMaxItems(),
            'minitems' => $column->getMinItems(),
            'show_thumbs' => 1
        );

        $this->fields[$column->getFieldName()] = array(
            'exclude' => $column->getExclude(),
            'label' => $column->getLabel(),
            'config' => $config
        );
        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }

    public function addUserFunc(Column $column)
    {
        $column = $this->setColumnDefaults($column);

        $config = array(
            'type' => 'user',
            'userFunc' => $column->getUserFunc(),
            'parameters' => $column->getParameters()
        );

        $this->fields[$column->getFieldName()] = array(
            'exclude' => $column->getExclude(),
            'label' => $column->getLabel(),
            'config' => $config
        );
        return array($column->getFieldName() => $this->fields[$column->getFieldName()]);
    }


}