<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $ages = [20,30,40,50,60];
      print_r($ages);
      echo '<br>'.'Hello!';

      //associative arrays (key & value pairs)

      $ninjas = ['shaun' => 'black', 'mario' => 'white', 'luigi'=>'brown'];
      echo '<br>'.$ninjas['mario'].'<br>';

      print_r($ninjas);

      $ninjas['toad'] = 'pink';
      print_r($ninjas);

      echo '<br>'.count($ninjas).'<br>';


      //multi-dimensional arrays with associative array => keys and values

      $blogs = [
          ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
          ['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
          ['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
      ];

      print_r($blogs);
      echo '<br>';
      //print_r($blogs[1][1]);
      echo '<br>';
      print_r($blogs[1]);
      //echo '<br>'.($blogs[1][2]);
      echo '<br>';
      echo $blogs[2]['author'];

      echo count($blogs);

      $blogs[] = ['title'=>'castel party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];
      echo '<br>';
      print_r($blogs);

      $popped = array_pop($blogs);
      echo '<br>';
      print_r($popped);
      echo '<hr>';

      //Loooooooooooops

      for($i = 0;$i<5;$i++){
        echo 'I love Poland'.'<br>';
      }
      for($i=0;$i<count($blogs);$i++){
        echo $blogs[$i]['author'].'<br>';
      }

      //foreach

      foreach($blogs as $blog){
        echo $blog['author'].'<br>';
      }

      echo '<br>'.'<br>'.'<br>';
      //Loop interact with html

      $prodcuts = [
        ['name'=>'banana','price'=>70],
        ['name'=>'apple','price'=>60],
        ['name'=>'orange','price'=>50],
        ['name'=>'cherry','price'=>40],
        ['name'=>'plum','price'=>30],
        ['name'=>'milk','price'=>20]
      ];

      // foreach($prodcuts as $product){
      //   echo $product['name'].' - '.$product['price'].'<br>';
      // }
      $i=0;
      while($i < count($prodcuts)){
        echo $prodcuts[$i]['name'].'<br>'.$prodcuts[$i]['price'].'<br>';
        $i++;
      }



      echo '<hr>';

      //Booleans - as in the others programming languages

      echo 5 == '5'; //True
      echo 5 === '5'; //False

    ?>
    <script type="text/javascript">
        let activities = [
          ['mario party', 'mario', 'lorem', 30],
          ['mario kart cheats', 'toad', 'lorem', 25],
          ['zelda hidden chests', 'link', 'lorem', 50]
        ];

        console.log(activities);
    </script>
  </body>
</html>
