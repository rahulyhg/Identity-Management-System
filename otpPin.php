<?php

session_start();
//var_dump($_SESSION);
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
      <link rel="stylesheet" href="css/stylePin.css">
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
    <!-- <script src="js/indexPin.js"></script> -->
    <script>

      'use strict';

      (function () {
        var input = '',
            correct = '1593';

        var mNum=<?php echo $_SESSION['mobile']; ?>;

        alert(mNum);

        var dots = document.getElementsByClassName('dot'),
            numbers = document.getElementsByClassName('number');
        dots = Array.from(dots);
        numbers = Array.from(numbers);

        var numbersBox = document.getElementsByClassName('numbers')[0];
        $(numbersBox).on('click', '.number', function (evt) {
          var number = $(this);

          number.addClass('grow');
          input += number.index() + 1;
          $(dots[input.length - 1]).addClass('active');

          if (input.length >= 4) {
            // if (input !== correct) {
            // 	dots.forEach(function (dot) {
            // 		return $(dot).addClass('wrong');
            // 	});
            // 	$(document.body).addClass('wrong');
            // } else {
            // 	dots.forEach(function (dot) {
            // 		return $(dot).addClass('correct');
            // 	});
            // 	$(document.body).addClass('correct');
            // }
            // setTimeout(function () {
            // 	dots.forEach(function (dot) {
            // 		return dot.className = 'dot';
            // 	});
            // 	input = '';
            // }, 900);
            // setTimeout(function () {
            // 	document.body.className = '';
            // }, 1000);

            $.post("otpProcess.php",{pin: input ,number : mNum} ,function(result)
            {
              console.log(result)
              if(result == "true")
              {
                dots.forEach(function (dot) {
                		return $(dot).addClass('correct');
                  });
                	$(document.body).addClass('correct');
              }
              else {
                dots.forEach(function (dot) {
                		return $(dot).addClass('wrong');
                	});
                	$(document.body).addClass('wrong');
              }
              input="";
            });

          }
          setTimeout(function () {
            number.className = 'number';
          }, 1000);
        });
      })();


    </script>
</body>
</html>
