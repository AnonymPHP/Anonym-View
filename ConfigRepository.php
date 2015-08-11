<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;

/**
 * Class ConfigRepository
 * @package Anonym\Components\View
 */
class ConfigRepository
{

    /**
     *Ayarları tutar
     *
     * @var array
     */
    private $configs = [];

    /**
     * Sınıfı başlatır ve ayarlamaları yapar
     *
     * @param array $configs
     */
    public function __construct(array $configs = [])
    {
        $this->setConfigs($configs);
    }

    /**
     * @return array
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * @param array $configs
     * @return ConfigRepository
     */
    public function setConfigs(array $configs)
    {
        $this->configs = $configs;
        return $this;
    }



}

