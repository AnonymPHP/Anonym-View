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
 * Class View
 * @package Anonym\Components\View
 */
class View extends RepositoryManager implements ViewAssignInterface
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
    }


    /**
     * Yeni veri ataması yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak değer
     * @return mixed
     */
    public function assign($name = '', $value)
    {
        $this->addParameter($name, $value);
        return $this;
    }

    /**
     * Ayaları kullanır
     *
     * @param array $configs
     * @param string $file
     */
    protected function useConfigs($configs, $file)
    {

        $this->setExt(isset($configs['ext']) ? $configs['ext'] : '.php');
        $this->setRoot(isset($configs['root']) ? $configs['root'] : VIEW);

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

}


