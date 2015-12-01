<?php

namespace BERGWERK\BwrkUtility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;

class Configuration
{
    /**
     * @var array
     */
    private static $_cache = array();

    /**
     * @param $key
     * @return mixed
     */
    public static function getConfiguration($key)
    {
        if (!isset(self::$_cache[$key])) {
            /* @var $objectManager ObjectManager */
            $objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');

            /* @var $configurationManager ConfigurationManager */
            $configurationManager = $objectManager->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');

            $setup = $configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);

            $arrayKey = explode('.', $key);

            self::$_cache[$key] = self::getConfigurationSub($setup, $arrayKey);
        }

        return self::$_cache[$key];
    }

    /**
     * @param $data
     * @param $key
     * @return null
     */
    protected static function getConfigurationSub($data, $key)
    {
        $currentKey = array_shift($key);

        if (count($key) > 0) {
            $currentKey .= '.';
        }

        if (!isset($data[$currentKey])) return null;

        $currentData = $data[$currentKey];

        if (!is_array($currentData)) return $currentData;

        return self::getConfigurationSub($currentData, $key);
    }
}