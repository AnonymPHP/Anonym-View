<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;
use Exception;

/**
 * Class ContentMustBeStringException
 * @package Anonym\Components\View
 */
class ContentMustBeStringException extends Exception
{

    /**
     * İçeriği gönderir
     *
     * @param string $message
     */
    public function __construct($message = '')
    {
        $this->message = $message;
    }

}
