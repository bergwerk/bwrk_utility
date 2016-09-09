<?php
namespace BERGWERK\BwrkUtility\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Frontend\Page\PageRepository;

/** *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */
class CacheUtility
{
    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManager
     */
    protected $configurationManager;

    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \TYPO3\CMS\Extbase\Mvc\Request
     */
    protected $request;

    /**
     * @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer
     */
    protected $cObj;

    /**
     * @var string
     */
    protected $extKey;

    /**
     * @var array
     */
    protected $settings;

    /**
     * @var array
     */
    protected $configuration;

    /**
     * @var string
     */
    protected $gpVars;

    /**
     * @var string
     */
    protected $cacheIdentifier = null;


    /**
     * CacheUtility constructor.
     * @param string $extKey
     */
    public function __construct($extKey)
    {
        $this->objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->request = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Mvc\\Request');

        $this->configurationManager = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');
        $this->cObj = $this->configurationManager->getContentObject();

        $this->configuration = $this->configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);

        $this->extKey = $extKey;

        $this->settings = $this->configuration['settings'];
        $this->gpVars = $this->request->getArguments();
    }


    /**
     * getCache function.
     *
     * @return mixed
     */
    public function getCache()
    {
        if(GeneralUtility::getApplicationContext()->isDevelopment() || GeneralUtility::getApplicationContext()->__toString() == 'Production/Staging')
        {
            return false;
        }

        $cacheID = $this->getCacheID(array($this->cacheIdentifier));
        $data = PageRepository::getHash($cacheID);
        return !$data ? false : unserialize($data);
    }


    /**
     * setCache function.
     *
     * @param mixed $data (default: null)
     * @return mixed
     */
    public function setCache($data = null)
    {
        $lifetime = mktime(23, 59, 59) + 1 - time();
        $cacheID = $this->getCacheID(array($this->cacheIdentifier));

        PageRepository::storeHash($cacheID, serialize($data), $this->extKey . '_cache', $lifetime);
        return $data;
    }

    /**
     * @param array $array
     */
    public function setCacheIdentifier($array)
    {
        $this->cacheIdentifier = md5(json_encode($array));
    }




    /**
     * getCacheID function.
     *
     * @param mixed $hashVars (default: null)
     * @return string
     */
    private function getCacheID($hashVars = null)
    {
        $additionalHashVars = array(
            'pid' => $GLOBALS['TSFE']->id,
            'lang' => $GLOBALS['TSFE']->sys_language_uid,
            'uid' => $this->cObj->data['uid']
        );
        $additionalHashVars = array_merge($additionalHashVars, $this->gpVars);
        $hashVars = array_merge($additionalHashVars, $hashVars);
        $hashString = join('|', array_values($hashVars)) . join('|', array_keys($hashVars));
        return md5($hashString);
    }

}