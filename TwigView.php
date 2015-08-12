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
     * Sınıfı başlatır
     *
     * @param string $file
     * @param array $configs
     */
    public function __construct($file = '', array $configs = [])
    {
        $this->useConfigs($configs, $file);
    }

    /**
     * Çıktıyı postolar
     *
     * @return mixed
     */
    public function execute()
    {
        $loader = new Twig_Loader_Filesystem($this->getRoot() . DIRECTORY_SEPARATOR);
        $this->setTwig(new Twig_Environment($loader, $this->getConfigs()['twig']));
        $content = '';

        if (count($this->getFiles())) {
            foreach ($this->getFiles() as $file) {
                $content .= $this->getTwig()->render($file, $this->getParameters());
            }
        }

        return $content;

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
