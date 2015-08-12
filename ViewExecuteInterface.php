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
 * Interface ViewExecuteInterface
 * @package Anonym\Components\View
 */
interface ViewExecuteInterface
{

    /**
     * Çıktıyı postolar
     *
     * @param array|null $parameters Sınıfa gönderilecek değerleri tutar
     * @return mixed
     */
    public function execute(array $parameters = null);
}
