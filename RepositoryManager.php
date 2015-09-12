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
 * Class RepositoryManager
 * @package Anonym\Components\View
 */
class RepositoryManager
{

    /**
     * the instance of language manager class
     *
     * @var LanguageManagerInterface
     */
    private $languageManager;

    /**
     * Store the language files path
     *
     * @var string
     */
    private $languagePath = '';
    /**
     * Kullanılacak uzantı
     *
     * @var string
     */
    private $ext;

    /**
     * Dosyaların bulunacağı konum
     *
     * @var string
     */
    private $root;

    /**
     * Gönderilecek parametreleri tutar
     *
     * @var array
     */
    private $parameters = [];

    /**
     * Ayları tutar
     *
     * @var array
     */
    private $configs = [];

    /**
     * Dosya adlarını tutar
     *
     * @var array
     */
    private $files = [];


    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return RepositoryManager
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * Yeni bir parametre ekler
     *
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function addParameter($name, $value)
    {
        $this->parameters[$name] = $value;
        return $this;
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
     * @return RepositoryManager
     */
    public function setConfigs($configs)
    {
        $this->configs = $configs;
        return $this;
    }

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param array $files
     * @return RepositoryManager
     */
    public function setFiles($files)
    {
        $this->files = $files;
        return $this;
    }


    /**
     * Yeni bir dosya ismi ekler
     *
     * @param string $name
     * @return $this
     */
    public function addFile($name = '')
    {
        $this->files[] = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     * @return RepositoryManager
     */
    public function setExt($ext)
    {
        $this->ext = $ext;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param string $root
     * @return RepositoryManager
     */
    public function setRoot($root)
    {
        $this->root = $root;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguagePath()
    {
        return $this->languagePath;
    }

    /**
     * @param string $languagePath
     * @return RepositoryManager
     */
    public function setLanguagePath($languagePath)
    {
        $this->languagePath = $languagePath;
        return $this;
    }

    /**
     * @return LanguageManagerInterface
     */
    public function getLanguageManager()
    {
        return $this->languageManager instanceof LanguageManager ? $this->languageManager : new LanguageManager($this->getLanguagePath());
    }

    /**
     * @param LanguageManagerInterface $languageManager
     * @return RepositoryManager
     */
    public function setLanguageManager(LanguageManagerInterface $languageManager)
    {
        $this->languageManager = $languageManager;
        return $this;
    }



}
