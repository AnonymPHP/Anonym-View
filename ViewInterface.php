<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadýr.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View;

/**
 * Interface ViewInterface
 * @package Anonym\Components\View
 */
interface ViewInterface
{

    /**
     * Yeni veri atamasý yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak deðer
     * @return mixed
     */
    public function assign($name = '', $value);

    /**
     * Çýktýyý postolar
     *
     * @param string $name Çýktýlanacak gönderinin adý
     * @param array $params Tasarým a yollanacak deðerler
     * @return mixed
     */
    public function execute($name = '', array $params = []);
}
