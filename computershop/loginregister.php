<?php
session_start();

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Account</title>
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
      <?php if(isset($_SESSION['accounts_id'])): ?>//check if user is still logged in
        <br />Welcome. You are successfully logged in!

        <a href="logout.php">Logout?</a>//clear session
      <?php else: ?>
    <h1 id="newtext">Please Login or Register</h1>
    <a id="newtext" href="login.php">Login</a> or
    <a id="newtext" href="register.php">Register</a>
  <?php endif; ?>

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
