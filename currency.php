<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <body>

    <header>
      <h1>Currency Converter</h1>
    </header>

    <form class="" action="#" method="post">

      <label for="amount">Enter Amount</label>
      <input type="number" step=".01" name="amount" id="amount" value="">

<div class="">
    <h2>Converting From:</h2>

    <input type="radio" name="currFrom" value="CAD" id="canadianFrom" checked="checked">
    <label for="canadianFrom">Canadian</label>
    <img src="images/canadian_flag.svg " alt="Canadian Flag" class="icon">

    <input type="radio" name="currFrom" value="USD" id="americanFrom">
    <label for="americanFrom">American</label>
    <img src="images/american_flag.png" alt="American Flag" class="icon">

    <input type="radio" name="currFrom" value="EUR" id="euroFrom">
    <label for="euroFrom">Euro</label>
    <img src="images/german_flag.png" alt="German Flag" class="icon">

    <input type="radio" name="currFrom" value="GBP" id="poundFrom">
    <label for="poundFrom">British Pound</label>
    <img src="images/british_flag.png" alt="British Flag" class="icon">

    <input type="radio" name="currFrom"  value="CYN" id="yuanFrom">
    <label for="yuanFrom">Chinese Yuan</label>
    <img src="images/china_flag.png" alt="Chinese Flag" class="icon">
</div>

<div class="">

    <h2>Converting To:</h2>

    <input type="radio" name="currTo" value="CAD" id="canadianTo">
    <label for="canadianTo">Canadian</label>
    <img src="images/canadian_flag.svg"  class="icon" name="canadian">

    <input type="radio" name="currTo" value="USD" id="americanTo" checked="checked">
    <label for="americanTo">American</label>
    <img src="images/american_flag.png" alt="American Flag" class="icon">

    <input type="radio" name="currTo" value="EUR" id="euroTo">
    <label for="euroTo">Euro</label>
    <img src="images/german_flag.png" alt="German Flag" class="icon">

    <input type="radio" name="currTo" value="GBP" id="poundTo">
    <label for="poundTo">British Pound</label>
    <img src="images/british_flag.png" alt="British Flag" class="icon">

    <input type="radio" name="currTo" value="CYN" id="yuanTo">
    <label for="yuanTo">Chinese Yuan</label>
    <img src="images/china_flag.png" alt="Chinese Flag" class="icon">
</div>
<div class="">
  <input type="submit" name="submit" value="convert">
</div>

  <?php

  if  (isset($_POST['submit'])){

    $amount = $_POST['amount'];
    $currFrom = $_POST['currFrom'];
    $currTo = $_POST['currTo'];
    $exchangeAmount = '0';

//CAD to other currency

if ($currFrom == "CAD" AND $currTo == "CAD") {
    $exchangeAmount = $amount;
  }

if ($currFrom == "CAD" AND $currTo == "USD") {
    $exchangeAmount = $amount * 0.80;
}

if ($currFrom == "CAD" AND $currTo == "EUR") {
    $exchangeAmount = $amount * 0.67;
}

if ($currFrom == "CAD" AND $currTo == "GBP") {
    $exchangeAmount = $amount * 0.57;
}

if ($currFrom == "CAD" AND $currTo == "CYN") {
    $exchangeAmount = $amount * 5.22;
}

//USD to other currency

if ($currFrom == "USD" AND $currTo == "CAD") {
  $exchangeAmount = $amount * 1.24;
}

if ($currFrom == "USD" AND $currTo == "USD") {
    $exchangeAmount = $amount;
}

if ($currFrom == "USD" AND $currTo == "EUR") {
  $exchangeAmount = $amount * 0.84;
}

if ($currFrom == "USD" AND $currTo == "GBP") {
  $exchangeAmount = $amount * 0.71;
}

if ($currFrom == "USD" AND $currTo == "CYN") {
  $exchangeAmount = $amount * 6.50;
}

//EUR to other currency

if ($currFrom == "EUR" AND $currTo == "CAD") {
  $exchangeAmount = $amount * 1.48;
}

if ($currFrom == "EUR" AND $currTo == "USD") {
  $exchangeAmount = $amount * 1.19;
}

if ($currFrom == "EUR" AND $currTo == "EUR") {
  $exchangeAmount = $amount;
}

if ($currFrom == "EUR" AND $currTo == "GBP") {
  $exchangeAmount = $amount * 0.85;
}

if ($currFrom == "EUR" AND $currTo == "CYN") {
  $exchangeAmount = $amount * 7.74;
}

//GBP to other Currency

if ($currFrom == "GBP" AND $currTo == "CAD") {
  $exchangeAmount = $amount * 1.72;
}

if ($currFrom == "GBP" AND $currTo == "USD") {
  $exchangeAmount = $amount * 1.38;
}

if ($currFrom == "GBP" AND $currTo == "EUR") {
  $exchangeAmount = $amount * 1.16;
}

if ($currFrom == "GBP" AND $currTo == "GBP") {
  $exchangeAmount = $amount;
}

if ($currFrom == "GBP" AND $currTo == "CYN") {
  $exchangeAmount = $amount * 9.03;
}

//CYN to other Currency

if ($currFrom == "CYN" AND $currTo == "CAD") {
  $exchangeAmount = $amount * 0.19;
}

if ($currFrom == "CYN" AND $currTo == "USD") {
  $exchangeAmount = $amount * 0.15;
}

if ($currFrom == "CYN" AND $currTo == "EUR") {
  $exchangeAmount = $amount * 0.12;
}

if ($currFrom == "CYN" AND $currTo == "GBP") {
  $exchangeAmount = $amount * 0.11;
}

if ($currFrom == "CYN" AND $currTo == "CYN") {
  $exchangeAmount = $amount;
}

switch ($currFrom) {
  case 'CAD':
    "$amount CAD";
    $fromFlagName = "canadian_flag.svg";
    $signFrom = "$";
    break;

    case 'USD':
      "$amount USD";
      $fromFlagName = "american_flag.png";
      $signFrom = "$";
      break;

    case 'EUR':
    "$amount EUR";
     $fromFlagName = "german_flag.png";
     $signFrom = "€";
    break;

    case 'GBP':
     "$amount GBP";
     $fromFlagName = "british_flag.png";
     $signFrom = "£";
    break;

    case 'CYN':
      "$amount CYN";
      $fromFlagName = "china_flag.png";
      $signFrom = "¥";
      break;
}


switch ($currTo) {
  case 'CAD':
    "$exchangeAmount CAD";
    $toFlagName = "canadian_flag.svg";
    $signTo = "$";
    break;

  case 'USD':
    "$exchangeAmount USD";
    $toFlagName = "american_flag.png";
    $signTo = "$";
    break;

  case 'EUR':
    "$exchangeAmount EUR";
     $toFlagName = "german_flag.png";
     $signTo = "€";
    break;

  case 'GBP':
    "$exchangeAmount GBP";
    $toFlagName = "british_flag.png";
    $signTo = "£";
    break;

  case 'CYN':
    "$exchangeAmount CYN";
    $toFlagName = "china_flag.png";
    $signTo = "¥";
    break;

}

}

   ?>
   <div class="">
     <h3>Entered Amount: </h3>

     <?php
        echo $signFrom . " " . $amount . " " . $currFrom;
      ?>
     <img src="images/<?php echo $fromFlagName?>" alt="Potato Flag" class="icon">
   </div>
   <div class="">
     <h3>Converted Amount: </h3>

     <?php
        echo $signTo . " " . $exchangeAmount . " " . $currTo;
      ?>
     <img src="images/<?php echo $toFlagName?>" alt="Canadian Flag" class="icon">
<?php

 ?>
</div>
    </form>
  </body>
</html>
