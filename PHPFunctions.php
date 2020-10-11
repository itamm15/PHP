<?php
    function SayHello($name){
      echo "Hello $name";
    }
    SayHello('mario');

    function formatProduct($product){
      echo '<br>'."{$product['name']} costs {$product['price']}";
    }
    formatProduct($product=['name'=>'banana','price'=>30]);

    function formatProduct2($product){
      return '<br>'."{$product['name']} costs {$product['price']}";
    }

    $formated = formatProduct2($product=['name'=>'banana','price'=>30]);
    echo '<br>'.$formated;

    // Include and require

    //include('11.10.2020.php'); Including another file, and making it
    //require('11.10.2020.php');

    //include('11.10.2020.php'); If we made a mistake in the file path, the other part of our code will execute
    //require ...;
    //include ...;
    echo '<br>'.'end of php'.'<br>'.'<hr>';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
