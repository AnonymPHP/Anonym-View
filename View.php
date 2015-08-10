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
 * Class View
 * @package Anonym\Components\View
 */
class View implements ViewInterface
{

    /**
     * View dosyalarının default olarak bulunduğu konum
     *
     *
     * @var string -> rootDir
     */
    private $rootDir;

    /**
     * Tasarıma gönderilecek değerleri tutar
     *
     *
     * @var  array-> params
     */
    private $params;

    /**
     * Gönderilecek dosya ismini tutar
     *
     *
     * @var string -> name
     */
    private $name;

    /**
     * Parametreleri ve sınıf ismini atar
     *
     * @param string $name
     * @param array $params
     */
    public function __construct($name = '', array $params = []){
        $this->setParams($params);
        $this->setName($name);
    }


    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param array $params
     * @return View
     */
    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return View
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getRootDir()
    {
        return $this->rootDir;
    }

    /**
     * @param string $rootDir
     * @return View
     */
    public function setRootDir($rootDir)
    {
        $this->rootDir = $rootDir;
        return $this;
    }



    /**
     * Yeni veri ataması yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak değer
     * @return mixed
     */
    public function assign($name = '', $value)
    {
        $this->params[$name] = $value;
        return $this;
    }

    /**
     * View dosyasının bulunduğu konumu tutar
     *
     * @param string $name
     * @return string
     */
    protected function getViewName($name = '')
    {
        $root = $this->getRootDir();
        return $root.DIRECTORY_SEPARATOR.$name.'.php';
    }

    /**
     * Çıktıyı postolar
     *
     * @return mixed
     */
    public function execute()
    {
        $name = $this->getViewName( $this->getName());

        if(file_exists($name))
        {

        }else{

        }
    }
}
