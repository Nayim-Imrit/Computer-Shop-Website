<?php

session_start();
if(isset($_SESSION['accounts_id'])){//if user already registered, pressing back button will not allow them to register again but will show their session is active
  header("Location:loginregister.php");
}

require 'database.php';//requesting check for database aauthentication
$message='';
if (!empty($_POST ['email']) && !empty($_POST['password'])):
  //Enter new user in Database
  $sql = "INSERT INTO accounts (email,password) VALUES (:email, :password)";//values-prevention against sql injections
  $stmnt = $conn->prepare($sql);//from our database we created, prepare this sql stmnt

  $stmnt->bindParam(':email', $_POST['email']);//where we find email(form), we will insert email(database)
  $stmnt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));//predifined function to encrypt password

  if ($stmnt->execute() )://to know if user have been successfully added
    $message='Successfully created new user';
  else:
    $message='Issues found while creating your account';
  endif;
endif;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Below</title>
    <link rel="stylesheet" href="assets/home.css">
  </head>
  <body>
    <nav>
        <a href="home.html"><img class="logo" src="images/catalyst.png" /></a>
      <ul>
        <li><a href="#" aria-haspopup="true">Desktops</a>
           <ul class="hoverli">
            <li class="mainmenu"><a href="#">Certified Series</a>
              <ul>
                <li><a href="Rebel.html">Rebel 2</a></li>
                <li><a href="noctics.html">Noctics</a></li>
                <li><a href="pro.html">Pro Series</a></li>
              </ul>
          </ul>
        </li>
      </li>
      <li><a href="#" aria-haspopup="true">Intel</a>
        <ul>
          <li><a href="intelz170.html">Intel Z170</a></li>
          <li><a href="intelx99.html">Intel X99</a></li>
        </ul>
      </li>
      <li><a href="#" aria-haspopup="true">AMD</a>
        <ul>
          <li><a href="amdapu.html">AMD APU</a></li>
          <li><a href="#">AMD FX</a></li>
        </ul>
      </li>

        <li><a href="#" aria-haspopup="true">Laptops</a>
          <ul>
            <li><a href="#">Asus Laptops</a></li>
            <li><a href="#">MSI Laptops</a></li>
            <li><a href="#">Catalyst Laptops</a></li>
          </ul>
        </li>

        <li><a href="#" aria-haspopup="true">Account</a>
          <ul>
            <li><a href="loginregister.php">My Account</a></li>
            <li><a href="#">Order Status</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="formalign">
      <?php if(!empty($message)): ?>
       <p><?= $message ?></p> //display Successfully created new user on the form if user added in db
      <?php endif; ?>

    <h1 id="newtext">Register</h1>
    <form action="register.php" method="POST">
      <input type="text" placeholder="Enter your E-mail" name="email" />
      <input type="password" placeholder="Enter your Password" name="password" />
      <input type="password" placeholder="Confirm your Password" name="confirm_password" />
      <input type="submit" />
    </form>
    <div class="lastdivs">
    <div id="bottom-images">
      <p>CATALYST IS POWERED BY:</p>
      <img src="images/logobottom-1.jpg" alt="" />
    </div>

    <div id="bottom">
      <ul>
        <li class="one">Desktops:</li>
        <ul class="first">
          <li class="color">Certified Series</li>
          <li><a href="Rebel.html">Rebel 2</a></li>
          <li><a href="noctics.html">Noctics</a></li>
          <li><a href="pro.html">Pro Series</a></li>
        </ul>

        <ul class="second">
          <li class="two">Intel</li>
          <li><a href="intelz170.html">Intel Z170</a></li>
          <li><a href="intelx99.html">Intel x99</a></li>
        </ul>

        <ul class="third">
          <li class="three">AMD</li>
          <li><a href="amdapu.html">Amd APU</a></li>
          <li><a href="#">Amd FX</a></li>
        </ul>

        <ul class="fourth">
          <li class="four">Laptops</li>
          <li><a href="#">Asus Laptops</a></li>
          <li><a href="#">Msi Laptops</a></li>
          <li><a href="#">Catalyst Laptops</a></li>
        </ul>

        <ul class="sixth">
          <li class="six">Account</li>
          <li><a href="loginregister.php">My Account</a></li>
          <li><a href="#">Order Status</a></li>
        </ul>
    </ul>
    </div>

    <footer>

        <p>
          <a href="">Contact US</a>
        </p>
        <p>
          <a href="">Privacy Policy</a>
        </p>
        <p>&copy; 2016-2018 Catalyst All Rights Reserved.</p>
        <br />

  </footer>
  </div>
    </div>
  </body>
</html>
