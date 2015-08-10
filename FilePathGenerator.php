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
 * Trait FilePathGenerator
 * @package Anonym\Components\View
 */
trait FilePathGenerator
{

    /**
     * Dosyaların yollarını oluşturur
     *
     * @param FileNameRepository $fileNameRepository
     * @param ConfigRepository $configRepository
     * @return array
     */
    protected  function generatePaths(FileNameRepository $fileNameRepository, ConfigRepository $configRepository)
    {
        $names = $fileNameRepository->getNames();
        $rootDir = $configRepository->getRootDir();
        $extension = $configRepository->getFileExtension();

        $paths = [];

        foreach($names as $name)
        {
             $paths[] = $rootDir.$name.$extension;
        }

        return $paths;

    }
}

