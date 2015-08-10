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
 * Class FileNameRepository
 * @package Anonym\Components\View
 */
class FileNameRepository
{

    /**
     *
     * Dosya isimlerini depolar
     *
     * @var array
     */
    private $names = [];

    /**
     * Sınıfı başlatır ve dosya isimleri atar
     *
     * @param array $names
     */
    public function __construct($names = [])
    {

        $this->setNames($names);
    }

    /**
     * Sınıfa yeni bir dosya ismi ekler
     *
     * @param string $name
     * @return $this
     */
    public function addName($name = '')
    {
        $this->names[] = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param array $names
     * @return FileNameRepository
     */
    public function setNames($names)
    {
        $this->names = $names;
        return $this;
    }



}
