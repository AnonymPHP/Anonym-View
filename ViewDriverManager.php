<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */

namespace Anonym\Components\View;

/**
 * Class ViewDriverManager
 * @package Anonym\Components\View
 */
class ViewDriverManager
{

    /**
     * the repository of drivers
     *
     * @var array
     */
    private $driverList;


    /**
     * create a new instance and register the driver list
     *
     */
    public function __construct()
    {
        $this->driverList = [
            'smarty' => SmartyView::class,
            'twig' => TwigView::class,
            'file' => PhpIncludeView::class,
            'blade' => BladeView::class
        ];
    }

    /**
     * select the driver
     *
     * @param string $name the name of driver
     * @param string $file the file name
     * @param array $configs the configs of driver
     * @param array $parameters the variables of view
     * @throws DriverNotFoundException
     * @return ViewExecuteInterface
     */
    public function driver($name = 'file', $file = '',array $configs = [], $parameters = [])
    {
        $list = $this->driverList;

        if (isset($list[$name])) {
            $driver = $list[$name];
            $driver = new $driver($file, $configs, $parameters);
            return $driver;
        }else{
            throw new DriverNotFoundException(sprintf('your %s driver is not found', $name));
        }

    }


}