<?php

namespace BERGWERK\BwrkUtility\Utility\Tca;

use BERGWERK\BwrkUtility\Utility\Tca\Configuration\CtrlClass;
use BERGWERK\BwrkUtility\Utility\Tca\Configuration\InterfaceClass;

class Configuration
{

    /**
     * @var \BERGWERK\BwrkUtility\Utility\Tca\Configuration\CtrlClass
     */
    public $ctrl;

    /**
     * @var \BERGWERK\BwrkUtility\Utility\Tca\Configuration\InterfaceClass
     */
    public $interface;

    function __construct()
    {
        $this->ctrl = new CtrlClass();
        $this->interface = new InterfaceClass();
    }

    /**
     * @var string
     */
    protected $ext = '';
    /**
     * @var string
     */
    protected $ll = '';
    /**
     * @var string
     */
    protected $model = '';
    /**
     * @var string
     */
    protected $plugin = '';

    /**
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
    }

    /**
     * @return string
     */
    public function getLl()
    {
        return $this->ll;
    }

    /**
     * @param string $ll
     */
    public function setLl($ll)
    {
        $this->ll = $ll;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getPlugin()
    {
        return $this->plugin;
    }

    /**
     * @param string $plugin
     */
    public function setPlugin($plugin)
    {
        $this->plugin = $plugin;
    }
}