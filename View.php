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
class View extends RepositoryManager implements ViewAssignInterface, ViewExecuteInterface
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
     * Çıktıyı postolar
     *
     * @return mixed
     */
    public function execute()
    {
        // we do nothing
    }
}
