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
     *Dosyaların tutulacağı yolu tutar
     *
     *
     * @var string
     */
    private $rootDir = VIEW;

    /**
     *Dosyanın uzantı tipini tutar
     *
     * @var string
     */
    private $fileExtension = '.php';

    /**
     * @return string
     */
    public function getRootDir()
    {
        return $this->rootDir;
    }

    /**
     * @param string $rootDir
     * @return ConfigRepository
     */
    public function setRootDir($rootDir)
    {
        $this->rootDir = $rootDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * @param string $fileExtension
     * @return ConfigRepository
     */
    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;
        return $this;
    }

}

