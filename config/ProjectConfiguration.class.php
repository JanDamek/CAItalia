<?php

require_once dirname(__FILE__) . '/../lib/vendor/Symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration {

    static protected $zendLoaded = false;

    static public function registerZend() {
        if (self::$zendLoaded) {
            return;
        }

        set_include_path(sfConfig::get('sf_lib_dir') . '/vendor' . PATH_SEPARATOR . get_include_path());
        require_once sfConfig::get('sf_lib_dir') . '/vendor/Zend/Loader/Autoloader.php';
        Zend_Loader_Autoloader::getInstance();
        self::$zendLoaded = true;
    }

    public function setup() {
        $this->enablePlugins('sfDoctrinePlugin');
        $this->enablePlugins('sfDoctrineGuardPlugin');
        $this->enablePlugins('sfDoctrineApplyPlugin');
        $this->enablePlugins('sfImageTransformPlugin');
        $this->enablePlugins('sfFormExtraPlugin');
        $this->enablePlugins('eCropPlugin');
        $this->enablePlugins('sfAdminThemejRollerPlugin');
        $this->enablePlugins('sfJqueryReloadedPlugin');
        $this->enablePlugins('sfMediaBrowserPlugin');
        $this->enablePlugins('sfLightboxPlugin');
        $this->enablePlugins('ckWebServicePlugin');

        set_include_path(sfConfig::get('sf_lib_dir') . '/vendor' . PATH_SEPARATOR . get_include_path());

        self::registerZend();
    }

}
