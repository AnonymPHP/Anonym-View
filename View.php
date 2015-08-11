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
 * Class View
 * @package Anonym\Components\View
 */
class View
{

    use FilePathGenerator;

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
     *Ayarları tutacak objeyi depolar
     *
     * @var ConfigRepository
     */
    private $configRepository;

    /**
     *İçeriği depolayacak objeyi tutar
     *
     *
     * @var ContentRepository
     */
    private $contentRepository;

    /**
     * Sınıfı başlatır ve atamaları yapar
     *
     */
    public function __construct()
    {
        $this->setConfigRepository( new ConfigRepository());
        $this->setNameRepository( new FileNameRepository());
        $this->setParamsRepository( new ParameterRepository());
    }

    /**
     * @return ConfigRepository
     */
    public function getConfigRepository()
    {
        return $this->configRepository;
    }

    /**
     * @param ConfigRepository $configRepository
     * @return View
     */
    public function setConfigRepository(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
        return $this;
    }


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

    /**
     * @return ContentRepository
     */
    public function getContentRepository()
    {
        return $this->contentRepository;
    }

    /**
     * @param ContentRepository $contentRepository
     * @return View
     */
    public function setContentRepository(ContentRepository $contentRepository)
    {
        $this->contentRepository = $contentRepository;
        return $this;
    }




}
