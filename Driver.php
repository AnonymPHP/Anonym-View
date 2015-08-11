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
     * Yeni veri ataması yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak değer
     * @return mixed
     */
    public function assign($name = '', $value)
    {

    }

    /**
     * Çıktıyı postolar
     *
     * @return mixed
     */
    public function execute()
    {
        // TODO: Implement execute() method.
    }
}
