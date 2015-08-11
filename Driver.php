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
 * Class Driver
 * @package Anonym\Components\View
 */
class Driver extends RepositoryManager implements ViewAssignInterface, ViewExecuteInterface
{

    use FilePathGenerator;


    /**
     *  Sınıfı başlatır.
     */

    public function __construct()
    {
        $this->setDefaultVars();
    }

    /**
     * Yeni bir içerik ekler
     *
     * @param string $name
     * @return $this
     */
    protected function add($name = '')
    {
        $this->getNameRepository()->addName($name);
        return $this;
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
        $this->getParamsRepository()->addParameter($name, $value);
        return $this;
    }

    /**
     * Çıktıyı oluşturur
     *
     * @return string
     */
    public function execute()
    {

        // do nothing
    }
}