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
 * the interface of language manager class
 *
 * Interface LanguageManagerInterface
 * @package Anonym\Components\View
 */
interface LanguageManagerInterface
{

    /**
     * get the language variables with file path
     *
     * @param string $file the file name
     * @return array|bool registered varibles on file
     */
    public function getLanguage($file = '');

}

