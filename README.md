#Anonym-View


 Bu bileşende AnonymFramework de view dosyaları nasıl oluşturulduğunu öğreniyoruz.



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

