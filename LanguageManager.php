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
 * the class of language manager
 *
 * Class LanguageManager
 * @package Anonym\Components\View
 */
class LanguageManager implements LanguageManagerInterface
{

    /**
     * the path of language files
     *
     * @var string
     */
    private $path;

    /**
     * get the language variables with file path
     *
     * @param string $file the file name
     * @return array|bool registered varibles on file
     */
    public function getLanguage($file = '')
    {
        $path = $this->path . $file . '.php';

        if (file_exists($path)) {
            $variables = require $path;
            return $variables;
        } else {
            return false;
        }
    }
}
