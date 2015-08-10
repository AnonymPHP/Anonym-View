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
 * Class ParameterRepository
 * @package Anonym\Components\View
 */
class ParameterRepository
{

    /**
     * Kullanılacak parametreleri tutar
     *
     *
     * @var array
     */
    private $params = [];

    /**
     * Sınıfı başlatır ve değerleri hapseder
     *
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        $this->setParams($params);
    }

    /**
     * Parametrelere bir tane ekler
     *
     * @param string $name
     * @param $value
     * @return $this
     */
    public function addParameter($name = '', $value)
    {
        $this->params[$name] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return ParameterRepository
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }
}
