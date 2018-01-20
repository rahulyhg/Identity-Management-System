<?php

session_start();
if((isset($_SESSION['status'])))
{
  header('Location: home.php');
}

 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Home Automation System</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Lato:300,900,400italic);
@import url(https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.1/animate.min.css);
body {
  background: #B2675E;
  font-weight: 300;
  color: #f2e8dd;
  font-size: 2em;
  font-family: "Lato", "Helvetica Neue", Helvetica, sans-serif;
  text-align: center;
}

::-webkit-input-placeholder {
  color: rgba(0, 50, 73, 0.4);
}

h2 {
  margin-top: 5%;
  font-size: 22px;
  font-weight: 300;
}

form {
  color: #003249;
  display: block;
  width: 700px;
  margin: 0 auto;
  margin-top: 5%;
}
form input {
  border: none;
  padding: 1em 1em;
}
form input[type="tel"] {
  background: #EBDCCB;
  position: relative;
  z-index: 100;
}
form input[type="tel"]:focus {
  background: #f2e8dd;
  outline: none;
}
form input[type="submit"] {
  background: #7D3238;
  font-weight: 800;
  color: white;
  margin-left: -10px;
  -webkit-transition: background .3 ease;
  z-index: 1;
  position: relative;
}
form input[type="submit"]:hover {
  background: #592328;
}

.sendApp:not(.sendApp--active) input[type='tel'] {
  transform: translateX(55px);
  transition: transform .3s ease;
  z-index: 100;
}
.sendApp:not(.sendApp--active) input[type='submit'] {
  transform: translateX(-50px);
  opacity: 0;
  transition: opacity .3s ease, transform .3s ease;
  z-index: 1;
}

.sendApp input[type='tel'] {
  transform: translateX(0);
  transition: transform .3s ease;
}
.sendApp input[type='submit'] {
  transform: translateX(0);
  opacity: 1;
  transition: opacity .3s ease, transform .3s ease;
}

::-webkit-input-placeholder {
  color: rgba(0, 50, 73, 0.4);
}

:-moz-placeholder {
  /* Firefox 18- */
  color: rgba(0, 50, 73, 0.4);
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: rgba(0, 50, 73, 0.4);
}

:-ms-input-placeholder {
  color: rgba(0, 50, 73, 0.4);
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <h2><em>Welcome</em> to <em>Home Automation System</em></h2>
  <h2>Enter your <em>Phone Number</em></h2>
<form class="sendApp" action="login.php" method="POST">
  <input name="number" id="number" type="tel" value="" placeholder="+91" />
  <input type="submit" value="OK" class="animated" disabled/>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
