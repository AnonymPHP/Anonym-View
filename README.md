 Anonym-View
 ==========

 Bu bileşende view dosyaları oluşturmayı öğreniyoruz.



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
