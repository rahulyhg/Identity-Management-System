<?php

session_start();

require('dbconnect.php');
require('way2sms-api.php');
//sendWay2SMS("8097670658", "codeforgood", "8097522505", "helloworld from php124");

//var_dump($_POST);
if(isset($_POST['number']))
{
  $mobile = substr($_POST['number'],3,13);
  $otp = getRandomCode();
  //echo "Mobile = ".$mobile." and OTP = ".$otp;
  if(!(isInDb($conn , $mobile)))
  {
    //$conn->query("insert into auth values (NULL, $mobile, $otp, CURRENT_TIMESTAMP);");
    //if(mysqli_affected_rows($conn) > 0)
    //{
    //  $_SESSION['otp'] = $otp;
    //  $_SESSION['mobile'] = $mobile;
    //  var_dump(sendWay2SMS("8097670658", "codeforgood", $mobile, "The OTP is ".$otp.". Please Do not share this with anyone"));
      //sleep(5);
    //  header("Location: otpPin.php");
    //}
    //else
    //{
    //  echo "Oops !! Some Error Occured . Some Error inserting data in database";
    //}
	echo "You are not registered User. Please contact administrator";
  }
  else{
	//echo "\nIN Sending";
    $conn->query("update auth set otp = $otp, TimeStamp=CURRENT_TIMESTAMP where Number = $mobile;");
    if(mysqli_affected_rows($conn)>0)
    {
	//echo "inMessageSending";
      $_SESSION['otp'] = $otp;
      $_SESSION['mobile'] = $mobile;
	//echo "\nbefore sending message";
      var_dump(sendWay2SMS("8097670658", "codeforgood", $mobile, "The OTP is ".$otp.". Please Do not share this with anyone"));
      	//echo "\nRedirecting now";
	header("Location: otpPin.php");
    }
    else{
      echo "Oops !! Some Error Occured . Some Error occured while updating data in database";
    }
  }
}
else{
  echo "Oops !! Some Error Occured :(";
}

function getRandomCode(){
	$an = "123456789";//ABCDEFGHIJKLMNOPQRSTUVWXYZ;
	$su = strlen($an) - 1;
	return substr($an, rand(0, $su), 1) .
			substr($an, rand(0, $su), 1) .
			substr($an, rand(0, $su), 1) .
			substr($an, rand(0, $su), 1);
}
function isInDb($conn ,$number)
{
  $conn->query("select * from auth where Number = $number");
  if(mysqli_affected_rows($conn)>0)
  {
	//echo "isInDb = true";
      return true;
  }
  else{
	//echo "isInDb = false";
    return false;
  }
}

 ?>
