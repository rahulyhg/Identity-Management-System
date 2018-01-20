<?php

session_start();
if(isset($_SESSION['status']))
{
  header('Location: home.php');
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pin code validation</title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans"/>
<div id="pin">
  <div class="dots">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  <p>Enter the password</p>
  <div class="numbers">
    <div class="number" id="1">1</div>
    <div class="number" id="2">2</div>
    <div class="number" id="3">3</div>
    <div class="number" id="4">4</div>
    <div class="number" id="5">5</div>
    <div class="number" id="6">6</div>
    <div class="number" id="7">7</div>
    <div class="number" id="8">8</div>
    <div class="number" id="9">9</div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
