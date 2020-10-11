<?php
  define('NAME', 'Mateusz');  // const!
  $age = 1;
  $name = 'Mateusz';
  // echo $name;
  echo NAME;
  $stringOne = 'my mail is ';
  $stringTwo = 'mateusz.osinski@gmail.com';
  echo '<br>';
  echo $stringOne.$stringTwo; //konkatenacja
  echo '<br>'.'Hey, my name is '.$name;
  // " " - wyswietli zawartosc zmiennej, ' ' - nie wyslwietli wartosci a nazwe

  echo '<br>'."Hello my dear \"friends\""; // wyswietlenie w cudzyslowiu
  echo '<br>'.'Hello my dear "friends"'; // to samo

  echo '<br>'.$name[0]; // tablicowe branie, jak w js

  echo '<br>'.strlen($name);  //liczba liter w wyrazie

  echo '<br>'.strtoupper($name);  //wyswlietli duze litery - moze byc tez mb_

  echo '<br>'.strtolower($name); //wyswietli male litery - moze byc tez mb_

  echo '<br>'.str_replace('M', 'g', $name);  //zamienie 1. co 2. na co

  $radius = 25;
  $pi = 3.14;

  //podstawowe operacje

  echo '<br>'.$pi*$radius**2; // pi * radius^2

  $radius++;  //tak jak w c++, js..

  echo '<br>'.floor($pi);  //zaokraglenie
  echo '<br>'.ceil($pi);  //podniesienie wyzej

  $foo = 'bar';

  echo '<br>';

  //heredoc
  echo<<<EOT
  Hello there!
  how u doing?
  $foo
  EOT;

  echo '<br>';
  //nowdoc

  echo<<<'EOT'
  Hello there!
  how u doing?
  $foo
  EOT;

  //reprezentacje w roznych systemach
  $bin = 0b1011;
  $oct = 011;
  $dec = 11;
  $hex = 0xA;
  echo '<br>';
  echo $bin."   ".$oct."  ".$dec."  ".$hex;

  $bin = $bin <<2 ; // 101100
  echo '<br>'.$bin;

  $bin = $bin >> 3; //101
  echo '<br>'.$bin;

  echo '<br>'.gettype($bin);

  echo '<br>'.is_int($age);
  echo '<br>'.PHP_VERSION;
  //operator ignorowania bledow - @
  echo '<br>'.@gettype($w); //zamiast komunikatu o bledzie wyskokuje napis NULL


  //indexed Arrays

  $people = ['Shawn', 'James', 'ryan'];
  $peopleTwo = array('ken', 'chunk-li');
  $ages = [20,30,40,50];
  echo $ages[1].'<br>';

  print_r($ages);  //wyswietlenie struktury tablicy

  echo '<br>';

  $ages[] = 60;  //doda sie na ostatnim miejscu wartosc 60
  print_r($ages);

  array_push($ages, 70);

  echo '<br>'.count($ages).'<br>';

  $merged = array_merge($people, $peopleTwo);

  print_r($merged);

  //zmienne jeszcze raz
  echo '<br>';
  $a = 1;
    echo $a; //1
  echo '<br>';
  $a = $a++; //postinkrementacja
    echo $a;//1
  echo '<br>';
  $b = 0;
    echo $b;//0
  echo '<br>';
  $b = $a++;
    echo $a;//2
    echo $b;//1
  $b = ++$a; //preinkrementacja
  echo '<br>';
    echo $b;//3
  echo '<br>';
    echo $a; //3

    $binarna = 0b1001010101010;
    echo '<br>', $binarna;
    $binarna = $binarna >> 3; //Oddaj trzy ostatnie cyfry
    echo '<br>', $binarna;
    $binarna = $binarna << 3; //Dodaj na koniec trzy zera
    echo '<br>', $binarna;
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP project</title>
  </head>
  <body>
    <h1>My first project</h1>
      <div class=""><?php echo NAME ?></div>
      <div class=""><?php echo $age ?></div>
  </body>
</html>
