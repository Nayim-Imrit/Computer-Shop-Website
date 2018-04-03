<?php
session_start();//we used session to store user activity so we need to start session.

if(isset($_SESSION['accounts_id'])){//if user already logged in, session exists
  header("Location:loginregister.php");//redirect them to homepage, they cannot register og go back after loggin in
 }

require'database.php';//need database connection to check user login

if (!empty($_POST ['email']) && !empty($_POST['password']))://if email & psswd not empty on submit,
  $records = $conn->prepare('SELECT id,email,password FROM accounts WHERE email=:email');//store record we get from db
  $records->bindParam(':email', $_POST['email']);//bin parameter to query, where email from db must=email on form
  $records->execute();//call execute
  $results = $records->fetch(PDO::FETCH_ASSOC);//store results and fetch results where email matched from what has been posted
  $message='';

  if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){//verify psswd of user with the one in db(results)
    $message='Successfully logged in!';
    $_SESSION['accounts_id']=$results['id'];//stores on user computer and server side too, to see if user is still logged in
    //header("Location:home.html"); redirect user to homepage
    echo "<SCRIPT type='text/javascript'>
        alert('$message');
        window.location.replace(\"//localhost/computershop/home.html\");
    </SCRIPT>";

  } else{
    $message= 'Sorry mismatch in credentials';
  }
endif;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Below</title>
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
       <p><?= $message ?></p> //if there is a problem with login, display error msg from execute stmnt
      <?php endif; ?>

    <h1 id="newtext">Login</h1>
    <form action="login.php" method="POST">//this form will post to login.php
      <input type="text" placeholder="Enter your E-mail" name="email" />
      <input type="password" placeholder="Enter your Password" name="password" />
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
