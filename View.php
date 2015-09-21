<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;

use ArrayAccess;

/**
 * Class View
 * @package Anonym\Components\View
 */
class View extends RepositoryManager implements ViewAssignInterface, ArrayAccess
{


    /**
     * Sınıfı başlatır ve atamaları yapar
     *
     * @param array $files
     * @param array $configs
     */
    public function __construct($files = [], array $configs = [])
    {
        if (!is_array($files)) {
            $files = (array)$files;
        }

        $this->setFiles($files);
        $this->setConfigs($configs);
        $this->setLanguageManager(new LanguageManager($this->getLanguagePath()));

    }

    /**
     * create a new instance
     *
     * @param string $file
     * @param array $parameters
     * @return $this
     */
    public function make($file = '', $parameters = [])
    {
        if(is_object($parameters))
        {
            $parameters = (array) $parameters;
        }
         $this->setParameters($parameters);
         $this->useConfigs($this->getConfigs(), $file);
        return $this;
    }
    /**
     * get the language variables
     *
     * @param string|array $language
     * @return $this
     */
    public function language($language = '')
    {
        $language = (array)$language;
        $parameters = $this->getParameters();
        $new = [];
        foreach ($language as $lang) {
            $new =  array_merge($new,$this->getLanguageManager()->getLanguage($lang));
        }


        $parameters = array_merge($parameters, $new);
        $this->setParameters($parameters);
        return $this;
    }

    /**
     * Yeni veri ataması yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak değer
     * @return mixed
     */
    public function assign($name = '', $value = null)
    {
        if (is_string($name)) {
            $this->addParameter($name, $value);
        } elseif (is_array($name)) {
            $this->setParameters($name);
        }
        return $this;
    }


    /**
     * replace . to /
     *
     * @param string $name
     * @return mixed
     */
    protected function buildName($name){
        return str_replace('.', '/', $name);
    }

    /**
     * Ayaları kullanır
     *
     * @param array $configs
     * @param string $file
     */
    protected function useConfigs($configs, $file)
    {

        $this->setConfigs($configs);
        $this->setExt(isset($configs['ext']) ? $configs['ext'] : '.php');
        $this->setRoot(isset($configs['root']) ? $configs['root'] : VIEW);
        $this->setLanguagePath(isset($configs['language']) ? $configs['language'] : LANGUAGE);

        $this->setConfigs($configs);
        if (isset($configs['header'])) {
            $master = $configs['header'];
        }
        $master[] = $file;

        if (isset($configs['footer'])) {
            $master = array_merge($master, $configs['footer']);
        }

        $this->setFiles($master);
    }

    /**
     * @param string $name
     * @return string
     */
    protected function getNameForDriver($name){
        return $name.$this->getExt();
    }

    /**
     * check file is exists
     *
     * @param string $name
     * @return bool
     */
    public function exists($name){
         return file_exists($this->getRoot().DIRECTORY_SEPARATOR.$this->getNameForDriver($name));
    }
    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        $datas = $this->getParameters();
        return isset($datas[$offset]);
    }

    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return $this->getParameters()[$offset];
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        $this->addParameter($offset, $value);
    }

    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        $parameters = $this->getParameters();
        unset($parameters[$offset]);
        $this->setParameters($parameters);
    }
}
