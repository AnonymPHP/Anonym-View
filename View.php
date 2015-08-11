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
class View extends RepositoryManager
{

    use FilePathGenerator, DriverManager;


    /**
     * Sınıfı başlatır ve atamaları yapar
     *
     */
    public function __construct()
    {
        $this->setDefaultVars();
    }

    public function driver($driver  = null)
    {

        if (is_string($driver)) {

            $list = $this->getDriverList();
            if (isset($list[$driver])) {
                $driver = $list[$driver];
                $driver = new $driver;
            }

            if($driver instanceof Driver)
            {

            }

        }

    }

}
