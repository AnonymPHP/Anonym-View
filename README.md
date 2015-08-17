#Anonym-View


 Bu bileşende AnonymFramework de view dosyaları nasıl oluşturulduğunu öğreniyoruz.

 -----------------

 Bu bileşen çalışmak için `VIEW` isimli bir  sabite ihtiyaç duyar.

 ```php

 define('VIEW', 'viewDosyalarınınbulunacağıkonum');

 ```

--------------------

 PhpIncludeView
 --------------

 Düz php include sistemi ile yapılacak sistem.


 ```php

 $view = new PhpIncludeView('index', [
   'root' => VIEW,
   'ext' => '.php',
   'header => [
     'header',
     'sidebar'
     ],
     'footer' => [
     'footer',
     'js'
     ]
]);

$view->assing('paramName', 'paramValue');
$view->execute(); // return content

 ```

 Burada önemli olan dosya isimleri ve header vs isimlerinde .php vs uzantıları yazmamanız

----------------

TwigView
--------

```php

 $view = new TwigView('index', [
   'root' => VIEW,
   'ext' => '.php',
   'header => [
     'header',
     'sidebar'
     ],
     'footer' => [
     'footer',
     'js',
     ],

     'twig' => [

     ]
]);
```

Twig için özel yapılandırma ayalarınızı 'twig' dizisi içinde girebilirsiniz, detaylı twig kullanımı için
twig in kendi dökümantasyonlarından faydalanabilirsiniz.


---------------

BladeView
------------


```php
$blade = new \Anonym\Components\View\BladeView('index', [
    'blade' => [
        'view' => 'View', // view dosyası yolu
        'cache' => 'Cache' // önbellek dosyalarının tutulacağı yol
    ]
]);

$content = $blade->execute();

```

Bu kısımda laravel in blade'in kullanımı vardır, detaylı kullanım için laravel dökümantasyonlarına bakınız


--------------------

Header ve Footer Dosyalarını aktif etmek

```php

'header => [
     'header','sidebar'
     ],
     'footer' => [
     'footer','js',
     ],

```

Ayarların içine ekleyeceğiniz bu satırlar işinize yarayacaktır.


--------------------

Sınıfları başlatırken 3.parametre olarak kullanılacak parametreleri girebilirsiniz.


----------------------

```php

$view->assign([

'parametre1' => 'parametre2'

]);

```

------------------------


```php

$view->assign('parametre1', 'parametre2');
```


Dil dosyaları,
-------------

```php



$configs = [
 'language' => 'LanguageDir'
];
// or

define('LANGUAGE', 'LanguageDir');

$view->language('tr/index');
```
