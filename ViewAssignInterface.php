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
 * Interface ViewInterface
 * @package Anonym\Components\View
 */
interface ViewInterface
{

    /**
     * Yeni veri ataması yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak değer
     * @return mixed
     */
    public function assign($name = '', $value);

}
