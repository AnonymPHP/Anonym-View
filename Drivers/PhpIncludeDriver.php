<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View\Drivers;


use Anonym\Components\View\Driver;
use Anonym\Components\View\ViewExecuteInterface;

/**
 * Class PhpIncludeDriver
 * @package Anonym\Components\View\Drivers
 */
class PhpIncludeDriver extends Driver implements ViewExecuteInterface
{

    /**
     * Ayarları depolar
     *
     * @var array
     */
    private $configs;

    /**
     * Ayarları alır
     *
     * @param array $configs
     */
    public function __construct(array $configs = [])
    {
        $this->configs = $configs;
    }

    /**
     * Çıktıyı postolar
     *
     * @return mixed
     */
    public function execute()
    {
        $configs = $this->configs;
        $rootDir = $configs['root'];
        $ext = isset($configs['extension']) ? $configs['extension'] : '.php';
        $masterPages = isset($configs['master']) ? $configs['master'] : [];



    }
}
