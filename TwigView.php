<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;

use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * Class TwigView
 * @package Anonym\Components\View
 */
class TwigView extends View implements ViewExecuteInterface
{

    /**
     * Twig objesini tutar
     *
     * @var Twig_Environment
     */
    private $twig;

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
        $this->useConfigs($configs, $file);
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

        $loader = new Twig_Loader_Filesystem($this->getRoot() . DIRECTORY_SEPARATOR);
        $configs = isset($this->getConfigs()['twig']) ? $this->getConfigs()['twig'] : [];
        $this->setTwig(new Twig_Environment($loader, $configs));
        $content = '';

        if (count($this->getFiles())) {
            foreach ($this->getFiles() as $file) {
                $content .= $this->getTwig()->render($this->getNameForDriver($file),$this->getParameters());
            }
        }

        return $content;

    }

    /**
     * @param string $name
     * @return string
     */
    protected function getNameForDriver($name){
        return $name.'.twig'.$this->getExt();
    }
    /**
     * @return Twig_Environment
     */
    public function getTwig()
    {
        return $this->twig;
    }

    /**
     * @param Twig_Environment $twig
     * @return TwigView
     */
    public function setTwig(Twig_Environment $twig)
    {
        $this->twig = $twig;
        return $this;
    }


}
