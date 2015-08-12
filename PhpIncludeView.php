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
     * Sınıfı başlatır ve dosya ve parametreleri kullanır
     *
     * @param string $file View dosyası adı
     * @param array $configs Sınıfta kullanılacak ayalar
     * @param array $paramaters View Dosyasına gönderilecek parametreler
     */
    public function __construct($file, $configs = [], $paramaters = [])
    {
        $this->setParameters($paramaters);
        $this->useConfigs($configs, $fileName);
    }


    /**
     * Çıktıyı postolar
     *
     * @param array|null $parameters Sınıfa gönderilecek değerleri tutar
     * @return mixed
     */
    public function execute(array $parameters = null)
    {
        if (!is_null($parameters)) {
            $this->setParameters($parameters);
        }

        $files = $this->getFiles();

        if (count($files)) {
            extract($this->getParameters());
            foreach ($files as $file) {

                $file = $this->getRoot() . DIRECTORY_SEPARATOR . $file . $this->getExt();
                if (file_exists($file)) {
                    include $file;
                }
            }
        }

        return ob_get_clean();

    }
}
