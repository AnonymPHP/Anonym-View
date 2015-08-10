<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;
use Anonym\Components\HttpClient\Response;

/**
 * Class View
 * @package Anonym\Components\View
 */
class View extends Response
{

    /**
     *Parametreleri depolar
     *
     *
     * @var ParameterRepository
     */
    private $paramsRepository;

    /**
     * Dosya isimlerini depolar
     *
     * @var FileNameRepository
     */
    private $nameRepository;

    /**
     * @return ParameterRepository
     */
    public function getParamsRepository()
    {
        return $this->paramsRepository;
    }

    /**
     * @param ParameterRepository $paramsRepository
     * @return View
     */
    public function setParamsRepository(ParameterRepository $paramsRepository)
    {
        $this->paramsRepository = $paramsRepository;
        return $this;
    }

    /**
     * @return FileNameRepository
     */
    public function getNameRepository()
    {
        return $this->nameRepository;
    }

    /**
     * @param FileNameRepository $nameRepository
     * @return View
     */
    public function setNameRepository(FileNameRepository $nameRepository)
    {
        $this->nameRepository = $nameRepository;
        return $this;
    }
}
