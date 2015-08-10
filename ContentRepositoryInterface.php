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
 * Interface ContentRepositoryInterface
 * @package Anonym\Components\View
 */
interface ContentRepositoryInterface
{

    /**
     * İçeriği döndürür
     *
     * @return string
     */
    public function getContent();

}
