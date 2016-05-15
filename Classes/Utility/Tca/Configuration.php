<?php

namespace BERGWERK\BwrkUtility\Utility\Tca;

use BERGWERK\BwrkUtility\Utility\Tca\Configuration\Ctrl;

class Configuration
{

    /**
     * @var \BERGWERK\BwrkUtility\Utility\Tca\Configuration\Ctrl
     */
    public $ctrl;

    function __construct()
    {
        $this->ctrl = new Ctrl();
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