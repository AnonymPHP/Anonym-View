<?php
ob_start();
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


include 'vendor/autoload.php';

$view = new \Anonym\Components\View\PhpIncludeView('index', [
    'root' => 'View',
    'ext' => '.php',
]);

var_dump($view->execute());