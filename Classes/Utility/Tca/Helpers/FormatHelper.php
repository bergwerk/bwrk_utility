<?php
namespace BERGWERK\BwrkUtility\Utility\Tca\Helpers;

use BERGWERK\BwrkUtility\Utility\Tca\Dummy\Column;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class FormatHelper {
    public static function getFieldConfig($type, Column $column)
    {
        $column->setType($type);
        $fieldConfig = array();
        foreach(self::getFieldsForType($type) as $field)
        {
            $methodName = 'get'.ucfirst($field);
            if(method_exists($column, $methodName))
            {
                $fieldValue = $column->$methodName();

                if($field == 'isIn') $field = 'is_in';
                if($field == 'placeHolder') $field = 'placeholder';
                if($field == 'autoComplete') $field = 'autocomplete';
                if($field == 'selIconCols') $field = 'selicon_cols';
                if($field == 'fileFolderExtList') $field = 'fileFolder_extList';
                if($field == 'fileFolderRecursion') $field = 'fileFolder_recursions';
                if($field == 'mm') $field = 'MM';
                if($field == 'mmOppositeField') $field = 'MM_opposite_field';
                if($field == 'mmMatchFields') $field = 'MM_match_fields';
                if($field == 'mmOppositeUsage') $field = 'MM_oppositeUsage';
                if($field == 'mmTableWhere') $field = 'MM_table_where';
                if($field == 'mmHasUidField') $field = 'MM_hasUidField';
                if($field == 'maxItems') $field = 'maxitems';
                if($field == 'minItems') $field = 'minitems';
                if($field == 'authModeEnforce') $field = 'authMode_enforce';
                if($field == 'enableMultiSelectFilterTextField') $field = 'enableMultiSelectFilterTextfield';
                if($field == 'foreignDefaultSortBy') $field = 'foreign_default_sortby';
                if($field == 'foreignField') $field = 'foreign_field';
                if($field == 'foreignLabel') $field = 'foreign_label';
                if($field == 'foreignMatchFields') $field = 'foreign_match_fields';
                if($field == 'foreignRecordDefaults') $field = 'foreign_record_defaults';
                if($field == 'foreignDefaultSortBy') $field = 'foreign_default_sortby';
                if($field == 'foreignSelector') $field = 'foreign_selector';
                if($field == 'foreignSelectorFieldTcaOverride') $field = 'foreign_selector_fieldTcaOverride';
                if($field == 'foreignSortBy') $field = 'foreign_sortby';
                if($field == 'foreignTable') $field = 'foreign_table';
                if($field == 'foreignTableField') $field = 'foreign_table_field';
                if($field == 'foreignTypes') $field = 'foreign_types';
                if($field == 'foreignUnique') $field = 'foreign_unique';
                if($field == 'symmetricField') $field = 'symmetric_field';
                if($field == 'symmetricLabel') $field = 'symmetric_label';
                if($field == 'symmetricSortBy') $field = 'symmetric_sortby';

                if(!empty($fieldValue)) $fieldConfig[$field] = $fieldValue;
            }
        }
        return $fieldConfig;
    }

    private static function getFieldsForType($type)
    {
        return array_merge(self::getDefaultFieldsForType($type), self::getAdditionalFieldsForType($type));
    }
    private static function getDefaultFieldsForType($type)
    {
        $fields = array();
        switch($type)
        {
            case 'input':
                $fields = array(
                    'type',
                );
                break;
            case 'text':
                $fields = array(
                    'type'
                );
                break;
            case 'check':
                $fields = array(
                    'type'
                );
                break;
            case 'radio':
                $fields = array(
                    'type'
                );
                break;
            case 'select':
                $fields = array(
                    'type'
                );
                break;
            case 'group':
                $fields = array(
                    'type'
                );
                break;
            case 'none':
                $fields = array(
                    'type'
                );
                break;
            case 'passthrough':
                $fields = array(
                    'type'
                );
                break;
            case 'user':
                $fields = array(
                    'type'
                );
                break;
            case 'flex':
                $fields = array(
                    'type'
                );
                break;
            case 'inline':
                $fields = array(
                    'type'
                );
                break;
        }
        return $fields;
    }


    private static function getAdditionalFieldsForType($type)
    {
        $fields = array();
        switch ($type)
        {
            case 'input':
                $fields = array(
                    'size',
                    'max',
                    'format',
                    'default',
                    'readOnly',
                    'renderType',
                    'isIn',
                    'range',
                    'displayAgeDisplay',
                    'autoComplete',
                    'placeHolder',
                    'mode',
                    'wizards',
                    'dbType',
                    'eval'
                );
                break;
            case 'text':
                $fields = array(
                    'renderType',
                    'cols',
                    'rows',
                    'max',
                    'wrap',
                    'default',
                    'eval',
                    'format',
                    'isIn',
                    'placeHolder',
                    'mode',
                    'wizards'
                );
                break;
            case 'select':
                $fields = array(
                    'type',
                    'items',
                    'itemsProcFunc',
                    'selIconCols',
                    'showIconTable',
                    'foreignTable',
                    'foreignTableWhere',
                    'foreignTablePrefix',
                    'fileFolder',
                    'fileFolderExtList',
                    'fileFolderRecursions',
                    'allowNonIdValues',
                    'default',
                    'dontRemapTablesOnCopy',
                    'rootLevel',
                    'MM',
                    'MM_opposite_field',
                    'MM_match_fields',
                    'MM_oppositeUsage',
                    'MM_insert_fields',
                    'MM_table_where',
                    'MM_hasUidField',
                    'special',
                    'size',
                    'autoSizeMax',
                    'selectedListStyle',
                    'itemListStyle',
                    'renderType',
                    'treeConfig',
                    'multiple',
                    'maxItems',
                    'minItems',
                    'wizards',
                    'disableNoMatchingValueElement',
                    'enableMultiSelectFilterTextField',
                    'multiSelectFilterItems',
                    'authMode',
                    'authMode_enforce',
                    'exclusiveKeys',
                    'localizeReferencesAtParentLocalization'
                );
                break;
            case 'inline':
                $fields = array(
                    'appearance',
                    'autoSizeMax',
                    'behaviour',
                    'customControls',
                    'filter',
                    'foreignDefaultSortBy',
                    'foreignField',
                    'foreignLabel',
                    'foreignMatchFields',
                    'foreignRecordDefaults',
                    'foreignSelector',
                    'foreignSelectorFieldTcaOverride',
                    'foreignSortBy',
                    'foreignTable',
                    'foreignTableField',
                    'foreignTypes',
                    'foreignUnique',
                    'minItems',
                    'maxItems',
                    'mm',
                    'size',
                    'symmetricField',
                    'symmetricLabel',
                    'symmetricSortBy'
                );
                break;
        }
        return $fields;
    }
}