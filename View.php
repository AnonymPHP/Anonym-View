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
 * Class View
 * @package Anonym\Components\View
 */
class View extends Blade
{

    /**
     * create a new instance and register blade
     *
     * @param array $configs
     */
    public function __construct(array $configs = []){
        $cache = isset($configs['cache']) ? $configs['cache'] : RESOURCE.'cache/';
        $view =  isset($configs['view']) ? $configs['view'] : VIEW;


        parent::__construct($view, $cache);
     }


}
