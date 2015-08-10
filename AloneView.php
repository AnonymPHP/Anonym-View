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
 * Class AloneView
 * @package Anonym\Components\View
 */
class AloneView extends View
{

    /**
     * Sınıfı başlatır
     *
     * @param string $fileName
     */
    public function __construct($fileName = null, array $params = [])
    {
        if (null !== $fileName) {
            $this->setFile($fileName);
        }

        $this->setParams($params);
    }

    /**
     * Dosya ataması yapar
     *
     * @param string $fileName
     * @return $this
     */
    public function setFile($fileName = '')
    {
        $this->getNameRepository()->addName($fileName);
        return $this;
    }
}
