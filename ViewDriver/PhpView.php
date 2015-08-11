<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View\ViewDriver;

/**
 * Class PhpView
 * @package Anonym\Components\View
 */
class PhpView extends Driver implements ViewExecuteInterface
{

    /**
     * Sınıfı başlatır ve içeriği atar
     *
     * @param string $fileName
     */
    public function __construct($fileName = '')
    {
        $this->add($fileName);
    }

    /**
     * Veriyi işler
     *
     * @return string
     */
    public function execute()
    {
        $names = $this->generatePaths($this->getNameRepository(), $this->getConfigRepository());
        $params = $this->getParams();

        extract($params);
        if (count($params)) {
            foreach($names as $name)
            {
                if(file_exists($name))
                {
                    require $name;
                }
            }

            return ob_get_clean();
        }else{
            return false;
        }
    }
}
