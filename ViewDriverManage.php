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


}