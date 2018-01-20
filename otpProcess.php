<?php
session_start();
require('dbconnect.php');
//var_dump($_POST);
if(isset($_POST['number']) && isset($_POST['pin']))
{
  $mobile = $_POST['number'];
  $result = $conn->query("SELECT * FROM `auth` WHERE number=$mobile;");
  $row = mysqli_fetch_array($result);
  //print_r($row);
  //echo "</br>";
  $time = $row['TimeStamp'];
  $otp = $row['OTP'];
  $result = $conn->query("select CURRENT_TIMESTAMP;");
  $row = mysqli_fetch_array($result);
  $now=$row["CURRENT_TIMESTAMP"];
  $dt = date("Y-m-d h:i:sa", strtotime($time));
  $dte = date("Y-m-d h:i:sa", strtotime($now));
  $datetime1 = new DateTime($dt);
  $datetime2 = new DateTime($dte);
  $interval = $datetime1->diff($datetime2);
  //echo $otp;
  //echo "</br>";
  //echo "Interval = ".$interval->format('%h:%i')." Date From ".$now;
  //echo "</br>";
  //echo $_POST['otp'];
  //echo "</br>";
  if(($otp == $_POST['pin']) && ($interval->format('%h:%i') < "0:9"))
  {
    $conn->query("update auth set OTP = 0000 where Number = $mobile");
    if(mysqli_affected_rows($conn) > 0)
    {
      $_SESSION['status']="true";
      echo "true";
      //header('Location: home.php');
    }
  }
  else
  {
    echo "otp expired . try again";
  }
}
else {
  echo "false";
}
?>
