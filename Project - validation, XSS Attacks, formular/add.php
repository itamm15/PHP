<?php
  //Diference between GET AND POST - GET writting values in the URL, POST - Just sending it to the server
  // if(isset($_GET['submit'])){
  //   echo $_GET['email'].'<br>';
  //   echo $_GET['name'].'<br> ';
  //   echo $_GET['color'];
  // }

  //Checking the forumlar
  if(isset($_POST['submit'])){
    //echo htmlspecialchars($_POST['email']).'<br>';
    //echo htmlspecialchars($_POST['name']).'<br> ';
    //echo htmlspecialchars($_POST['color']);
    //Security for XSS Attacks like pointing a script

    //Data validation

    if(empty($_POST['email'])){
      echo 'An email is required <br>';
    }else{
      $email = htmlspecialchars($_POST['email']);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Email must be a vali email address';
      }
    }
    if(empty($_POST['name'])){
      echo 'A name is required <br>';
    }else {
      $name = htmlspecialchars($_POST['name']);
      if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
        echo 'Must be letters and spaces only'.'<br>';
      }
    }
    if(empty($_POST['color'])){
      echo 'A color is required <br>';
    }else {
      $color = htmlspecialchars($_POST['color']);
      if(!preg_match('/^[a-zA-Z]/', $color)){
        echo 'Color must include only letters';
      }
    }
  }

 ?>
<?php include("header.php"); ?>
  <!DOCTYPE html>
<html>
    <section class="container grey-text">
        <h4 class="center">Add a belt</h4>
        <form class="white" action="add.php" method="POST">
            <label>Your email:</label>
            <input type="text" name="email" value="">
            <label>Belt name:</label>
            <input type="text" name="name" value="">
            <label>Color:</label>
            <input type="text" name="color" value="">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include("footer.php"); ?>

  </body>
  </html>
