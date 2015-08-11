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
 * Class DriverManager
 * @package Anonym\Components\View
 */
trait DriverManager
{

    /**
     * Sürücüyü Tutar
     *
     *
     * @var Driver
     */
    private $driver;

    /**
     * Sürücü listesini tutar
     *
     * @var array
     */
    private $driverList;

    /**
     * @return Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     * @return $this
     */
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
        return $this;
    }

    /**
     * @return array
     */
    public function getDriverList()
    {
        return $this->driverList;
    }

    /**
     * @param array $driverList
     * @return DriverManager
     */
    public function setDriverList(array $driverList)
    {
        $this->driverList = $driverList;
        return $this;
    }


}