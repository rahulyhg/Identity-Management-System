<?php

session_start();
if(isset($_SESSION['status']))
{

}
else{
  header('index.php');
}

 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Home Automation Center</title>



      <link rel="stylesheet" href="css/styleSwitch.css">


</head>

<body>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>

<!-- The html structure can defintely be optimized,
     I am just using divs for layout, certain tags
     can be replaced with other tags such as "Button"
     or "input" -->

<!-- <h3>Switch 1</h3> -->
<div class="canvas">
	<div class="switch checked" id="1">
    <div class="screws">
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
    </div>
	  <div class='switch-button-outer'>
			<div class="switch-button"> <!-- This could be a <input> tag, then overwrite any default styles -->
				<div class="switch-button-inner"></div>
			</div>
		</div>
	</div>
  <!-- <h3>Switch 2</h3> -->

  <div class="switch checked" id="2">
    <div class="screws">
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
    </div>
	  <div class='switch-button-outer'>
			<div class="switch-button"> <!-- This could be a <input> tag, then overwrite any default styles -->
				<div class="switch-button-inner"></div>
			</div>
		</div>
	</div>
  </br>
  <!-- <h3>Switch 1</h3> -->
  <div class="switch checked" id="3">
    <div class="screws">
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
    </div>
	  <div class='switch-button-outer'>
			<div class="switch-button"> <!-- This could be a <input> tag, then overwrite any default styles -->
				<div class="switch-button-inner"></div>
			</div>
		</div>
	</div>

  <!-- Checked -->
	<div class="switch checked" id="4">
    <div class="screws">
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
      <span class="screw">*</span>
    </div>
	  <div class='switch-button-outer'>
			<div class="switch-button"> <!-- This could be a <input> tag, then overwrite any default styles -->
				<div class="switch-button-inner"></div>
			</div>
		</div>
	</div>
</div>

<div class="logout" id="logout">
	<a href="logout.php">logout</a>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
	var in1 = 0;
	var in2 = 0;
	var in3 = 0;
	var in4 = 0;
        
	$(document).ready(function(){
		$.get("sendCmd.php",{cmd:"51a"});
	});
	$('#1').click(function(){
		
		if(in1 == 0)
		{
			$.get("sendCmd.php",{cmd:"10a"});
			in1=1;
		}
		else if(in1==1)
		{
			$.get("sendCmd.php",{cmd:"11a"});
			in1=0;
		}
	});
	$('#2').click(function(){
		
		if(in2 == 0)
		{
			$.get("sendCmd.php",{cmd:"20a"});
			in2=1;
		}
		else if(in2==1)
		{
			$.get("sendCmd.php",{cmd:"21a"});
			in2=0;
		}
	});

	$('#3').click(function(){
		
		if(in3 == 0)
		{
			$.get("sendCmd.php",{cmd:"30a"});
			in3=1;
		}
		else if(in3==1)
		{
			$.get("sendCmd.php",{cmd:"31a"});
			in3=0;
		}
	});
	$('#4').click(function(){
		
		if(in4 == 0)
		{
			$.get("sendCmd.php",{cmd:"40a"});
			in4=1;
		}
		else if(in4==1)
		{
			$.get("sendCmd.php",{cmd:"41a"});
			in4=0;
		}
	});



    </script>
    <script src="js/indexSwitch.js"></script>

</body>
</html>
