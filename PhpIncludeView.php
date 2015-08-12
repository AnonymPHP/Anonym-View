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
 * Class PhpIncludeView
 * @package Anonym\Components\View
 */
class PhpIncludeView extends View implements ViewExecuteInterface
{

    /**
     * Sınıfı başlatır
     *
     * @param string $fileName
     * @param array $configs
     */
    public function __construct($fileName = '', array $configs = [])
    {
        $this->useConfigs($configs, $fileName);
    }


    /**
     * Çıktıyı postalar
     *
     * @return string
     */
    public function execute()
    {
        $files = $this->getFiles();

        if (count($files)) {
            extract($this->getParameters());
            foreach ($files as $file) {

                $file = $this->getRoot() . DIRECTORY_SEPARATOR . $file . $this->getExt();
                var_dump($file);
                if (file_exists($file)) {
                    include $file;
                }
            }
        }

        return ob_get_clean();

    }
}