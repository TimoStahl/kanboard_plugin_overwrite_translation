<?php

namespace Plugin\Overwrite_translation;

use Core\Plugin\Base;
use Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->on('session.bootstrap', function($container) {
            Translator::load($container['config']->getCurrentLanguage(), __DIR__.'/Locale');
        });
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
        return '1.0.0';
    }
}
