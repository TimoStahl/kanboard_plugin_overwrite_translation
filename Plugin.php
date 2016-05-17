<?php

namespace Kanboard\Plugin\Overwrite_translation;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        // nothing
    }
    
    public function onStartup()
    {
        // load Translation
        Translator::load($this->language->getCurrentLanguage(), __DIR__.'/Locale');
    }
    
    public function getPluginName()
    {
        return 'Overwrite Translation';
    }
    public function getPluginDescription()
    {
        return t('Overwrite default translations.');
    }
    public function getPluginAuthor()
    {
        return 'BlueTeck';
    }
    public function getPluginVersion()
    {
        return '1.0.28.0';
    }
}
