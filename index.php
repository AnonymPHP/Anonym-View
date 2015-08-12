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

$configs = [
    'root' => 'View',
    'ext' => '.php',
];

$view = new \Anonym\Components\View\PhpIncludeView('index', $configs);
$content = $view->execute();

//
$view = new \Anonym\Components\View\TwigView('index', $configs);
$view->assign('test', 'aaa');
$content = $view->execute();

///

$blade = new \Anonym\Components\View\BladeView('index', [
    'blade' => [
        'view' => 'View',
        'cache' => 'Cache'
    ]
]);

$content = $blade->execute();
