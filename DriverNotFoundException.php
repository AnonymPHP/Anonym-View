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
use Exception;

/**
 * Class DriverNotFoundException
 * @package Anonym\Components\View
 */
class DriverNotFoundException extends Exception
{

    /**
     * throw the message
     *
     * @param string $message the message of exception
     */
    public function __construct($message = '')
    {
        $this->message = $message;
    }
}
