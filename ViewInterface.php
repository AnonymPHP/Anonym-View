<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyad�r.
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
     * Yeni veri atamas� yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak de�er
     * @return mixed
     */
    public function assign($name = '', $value);

    /**
     * ��kt�y� postolar
     *
     * @param string $name ��kt�lanacak g�nderinin ad�
     * @param array $params Tasar�m a yollanacak de�erler
     * @return mixed
     */
    public function execute($name = '', array $params = []);
}
