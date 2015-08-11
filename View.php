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
class View
{

    use  DriverManager;


    /**
     * Sınıfı başlatır ve atamaları yapar
     *
     */
    public function __construct()
    {
        $this->setDefaultVars();
    }

    /**
     * Sürücü seçimi yapar
     *
     * @param null $driver
     * @return Driver
     * @throws DriverException
     */
    public function driver($driver  = null, array $configs = [])
    {

        if (is_string($driver)) {

            $list = $this->getDriverList();
            if (isset($list[$driver])) {
                $driver = $list[$driver];
                $driver = new $driver($configs);
            }

            if($driver instanceof Driver)
            {
                return  $driver;
            }else{
                throw new DriverException(sprintf('%s sınıfınız geçerli bir sürücü değil', get_class($driver)));
            }

        }

    }

}
