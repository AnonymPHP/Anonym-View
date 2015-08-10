<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;


class MultiView extends View
{

    /**
     * Parametreleri sınıfa atar
     *
     * @param array $params
     * @param array $files
     */
    public function __construct(array $files = [], array $params = [])
    {
        $this->getNameRepository()->setNames($files);
        $this->setParams($params);
    }

    /**
     * Yeni bir item ekler
     *
     * @param string $fileName
     * @return $this
     */
    protected function addFile($fileName = '')
    {
        $this->getNameRepository()->addName($fileName);
        return $this;
    }
}