<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View\Drivers;


use Anonym\Components\View\ViewExecuteInterface;

/**
 * Class PhpIncludeDriver
 * @package Anonym\Components\View\Drivers
 */
class PhpIncludeDriver extends Driver implements ViewExecuteInterface
{


    /**
     * Ayarları alır
     *
     * @param array $configs
     */
    public function __construct(array $configs = [])
    {
        $this->getConfigRepository()->setConfigs($configs);
    }

    /**
     * Çıktıyı postolar
     *
     * @return mixed
     */
    public function execute()
    {
        // TODO: Implement execute() method.
    }
}
