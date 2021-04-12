<?php

namespace Kanboard\Plugin\zzzzOverwrite_translation;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base {

    public function initialize() {
        // nothing
    }

    public function onStartup() {
        // load Translation
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__ . '/Locale');
    }

    public function getPluginName() {
        return 'Overwrite Translation';
    }

    public function getPluginDescription() {
        return t('Overwrite default translations.');
    }

    public function getPluginAuthor() {
        return 'BlueTeck';
    }

    public function getPluginVersion() {
        return '1.0.34.0';
    }

    public function getPluginHomepage() {
        return 'https://github.com/BlueTeck/kanboard_plugin_overwrite_translation';
    }

}
