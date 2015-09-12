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
 * Class BladeView
 * @package Anonym\Components\View
 */
class BladeView extends View implements ViewExecuteInterface
{

    /**
     * Blade objesini tutar
     *
     * @var Blade
     */
    private $blade;


    /**
     * Sınıfı başlatır ve dosya ve parametreleri kullanır
     *
     * @param string $file View dosyası adı
     * @param array $configs Sınıfta kullanılacak ayalar
     * @param array $paramaters View Dosyasına gönderilecek parametreler
     */
    public function __construct($file = '', $configs = [], $paramaters = [])
    {
        $this->setParameters($paramaters);
        $this->useBladeConfigs($configs, $file);


    }

    /**
     * @return Blade
     */
    public function getBlade()
    {
        return $this->blade;
    }

    /**
     * @param Blade $blade
     * @return BladeView
     */
    public function setBlade(Blade $blade)
    {
        $this->blade = $blade;
        return $this;
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

        $parameters = $this->getParameters();
        $files = $this->getFiles();
        $blade = $this->getBlade();
        $content = '';


        if (count($files)) {
            foreach ($files as $file) {
                $content .= $blade->view()->make($file, $parameters);
            }
        }

        return $content;
    }

    /**
     * Blade ayarlarını kullanıma hazırlar
     *
     * @param array $configs
     * @param string $file
     */
    private function useBladeConfigs($configs, $file)
    {
        if (isset($configs['blade'])) {
            $blade = $configs['blade'];
        }

        $root = isset($blade['view']) ? $blade['view'] : $configs['root'];
        $cache = isset($blade['cache']) ? $blade['cache'] : $configs['cache'];

        $this->setBlade(new Blade($root, $cache));
        unset($configs['blade']);
        $this->useConfigs($configs, $file);
    }
}
