<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;

use Smarty;
/**
 * Class SmartyView
 * @package Anonym\Components\View
 */
class SmartyView extends View implements ViewExecuteInterface
{

    /**
     * Smarty objesini tutar
     *
     * @var Smarty
     */
    private $smarty;
    /**
     * Sınıfı başlatır ve ayarları kullanır
     *
     * @param string $file
     * @param array $configs
     */
    public function __construct($file = '', array $configs = [])
    {
        $this->useConfigs($configs, $file);
        $this->useSmartyConfigs();
    }

    /**
     * Smarty Ayarlarını kullanır
     *
     */
    private function useSmartyConfigs()
    {
        $smarty = new Smarty();
        $configs = $this->getConfigs();

        if (isset($configs['smarty'])) {
            $smartyConfigs = $configs['smarty'];

            if (isset($smartyConfigs['cacheDir'])) {
                $smarty->setCacheDir($smartyConfigs['cacheDir']);
            }

            if (isset($smartyConfigs['templateDir'])) {
                $smarty->setTemplateDir($smartyConfigs['templateDir']);
            }

            if (isset($smartyConfigs['compileDir'])) {
                $smarty->setCompileDir($smartyConfigs['compileDir']);
            }

            if (isset($smartyConfigs['configDir'])) {
                $smarty->setConfigDir($smartyConfigs['configDir']);
            }

        }

        $this->setSmarty($smarty);

    }

    /**
     * Smarty e çıktıyı yollar
     *
     * @return string
     */
    public function execute()
    {
        $smarty = $this->getSmarty();
        $params = $this->getParameters();
        $files = $this->getFiles();

        $content = '';

        if (count($params)) {
            foreach ($params as $key => $value) {
                $smarty->assign($key, $value);
            }
        }


        if (count($files)) {
            foreach ($files as $file) {
                $content .= $smarty->fetch($file . $this->getExt());
            }
        }


        return $content;
    }

    /**
     * @return Smarty
     */
    public function getSmarty()
    {
        return $this->smarty;
    }

    /**
     * @param Smarty $smarty
     * @return SmartyView
     */
    public function setSmarty(Smarty $smarty)
    {
        $this->smarty = $smarty;
        return $this;
    }


}
