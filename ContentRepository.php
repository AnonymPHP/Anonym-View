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
 * Class ContentRepository
 * @package Anonym\Components\View
 */
class ContentRepository
{

    /**
     *Döndürülecek içeriği tutar
     *
     * @var string
     */
    private $content;

    /**
     * İçeriği atar ve sınıfı başlatır
     *
     * @param string $content
     */
    public function __construct($content = '')
    {
        $this->setContent($content);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return ContentRepository
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }


}
