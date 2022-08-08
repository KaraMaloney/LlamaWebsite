<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product Search</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/search.js"></script>
  </head>

  <div class="weather">
    <div id="icon"></div>
    <p id="greating"></p>
    <script src="js/weather.js"></script>
  </div>

  <nav>
    <div class="nav center-align">
      <a href="index.html"><i class="fa fa-fw fa-home"></i>Home</a>

      <div class="dropdown">
        <a href="product.html"><i class="fa fa-fw fa-gift"></i>Products</a>
        <div class="dcontent">
          <a href="currency.php">Currency Exchange</a>
          <a href="#">Service 2</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="contact.html"><i class="fa fa-fw fa-envelope"></i>Contact</a>
        <div class="dcontent">
          <a href="currency.php"><img src="images/french_flag.png" alt="French Flag"> Contactez-nous</a>
          <a href="#"><img src="images/sweden_flag.png" alt="Sweden Flag"> Kontakta oss</a>
        </div>
      </div>

    <a href="aboutme.html"><i class="fa fa-fw fa-user"></i>About Us</a>
  </div>

  </nav>


    <div class="center-align">
      <h1>Crochet Llamas</h1>
    </div>

    <div class="center-align">
        <img src="images/llama.jpg" alt="crochet Llamas" width="200" height="200">
    </div>

    <div class="info">
      <p>These crochet llamas come in a veritety of diffrent colours.<br> Enter a colour into the search bar below to see if it is available!</p>
    </div>

    <?php
    require_once 'init.php';
    $conn = OpenDB();

    deleteDB($conn);

    createDB($conn);
    createtable($conn);
    importdata($conn);
     ?>

    <div class="search">
        <div>
          <h2>Search for Available Items</h2>
        </div>

        <form method="get">
          <input type="text" name="search" id="searchbar" onkeyup="search()" placeholder="Search a colour and hit Enter">
        </form>
        <?php display($conn); ?>

    </div>




</html>
