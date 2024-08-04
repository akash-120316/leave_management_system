






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accept or Reject Form</title>
<style>
  /* Professional styling for form */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: baseline;
    height: 100vh;
}

form {
    background-color: #fff;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 400px;
    background-image: linear-gradient(to bottom, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
    border: 2px solid #ee8456;
    border-top: 80px;
    position: relative;
    transition: border-color 0.3s, transform 0.3s;
}

form:hover {
    border-color: #ff5f2e;
    transform: scale(1.02);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: bold;
}

input, select, textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    transition: border-color 0.3s, transform 0.3s;
    outline: none;
}

input:focus, input:valid, input:placeholder-shown,
select:focus, select:valid, select:placeholder-shown,
textarea:focus, textarea:valid, textarea:placeholder-shown {
    border-color: #ee8456;
}

textarea {
    resize: vertical;
    height: 100px;
}

button {
    background-color: #ee8456;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: block;
    width: 100%;
}

button:hover {
    background-color: #ff5f2e;
}

</style>
</head>
<body>


<div class="container">
<h2>Reject Form</h2>
<form action="#" method="post">


<label for="message">  <br><br>
<?php
$eid = $_GET['email'];
$descr = $_GET['reason'];
$lty = $_GET['leavetype'];
$st = $_GET['startdate'];
$daysDifference = $_GET['daysDifference'];
echo "EMAIL :$eid";
?><BR>
<?php
$eid = $_GET['email'];
$descr = $_GET['reason'];
$lty = $_GET['leavetype'];
$st = $_GET['startdate'];
$daysDifference = $_GET['daysDifference'];
echo "LEAVE TYPE: $lty";
?><br>
<?php
$eid = $_GET['email'];
$descr = $_GET['reason'];
$lty = $_GET['leavetype'];
$st = $_GET['startdate'];
$daysDifference = $_GET['daysDifference'];
echo "DATE: $st";
?><br>
<?php
$eid = $_GET['email'];
$descr = $_GET['reason'];
$lty = $_GET['leavetype'];
$st = $_GET['startdate'];
$daysDifference = $_GET['daysDifference'];
echo "LEAVE TYPE: $lty";
?><br>
<?php
$eid = $_GET['email'];
$descr = $_GET['reason'];
$lty = $_GET['leavetype'];
$st = $_GET['startdate'];
$daysDifference = $_GET['daysDifference'];
echo "REASON: $descr";
?><br>
<?php
$eid = $_GET['email'];
$descr = $_GET['reason'];
$lty = $_GET['leavetype'];
$st = $_GET['startdate'];
$daysDifference = $_GET['daysDifference'];
echo "NO OF LEAVE : $daysDifference";
?></label><br><BR>
  <label for="message">REMARKS:</label><br>
  <textarea  name="message" rows="4" cols="50" placeholder="NIL"></textarea><br><br>
  <label>REJECT</label>
  <button type="submit" name="action" value="accept">CONFIRM</button>
 
</form>
</div>
</body>
</html>


<?php

include ("sql.php");



session_start();

	$eid = $_GET['email'];
	$descr = $_GET['reason'];
	$lty=$_GET['leavetype'];
	
$st = $_GET['startdate'];
	$daysDifference = $_GET['daysDifference'];
	if(2==2){
	$add_to_db = mysqli_query($link,"UPDATE leaveinfo SET status='REJECTED' WHERE email='".$eid."' AND reason='".$descr."'");

				if($add_to_db){	
			


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect values of input fields
    $uname = $_REQUEST['message'];
	if(2==2){
		$add_to_db = mysqli_query($link,"UPDATE leaveinfo SET remarks='$uname' WHERE email='".$eid."' AND reason='".$descr."'");
	
					if($add_to_db){	


						

						
$to_email = "akash16.04.2005@gmail.com";
$subject = "YOUR LEAVE REQUEST HAS BEEN REJECTED";
$body = "GREETINGS $EID
 THE $lty LEAVE REQUEST THAT YOUV'E APPLIED FOR $st FOR A PERIOD OF $daysDifference 
 FOR THE REASON: $descr  HAS BEEN [-REJECTED-] BY THE AUTHORITY 
 KINDLY CHECKOUT THE WEBSITE FOR MORE DETAILS 
            THANKING YOU! ";
$headers = "From: qqqq87035@gmail.com";
if(mail($to_email, $subject, $body, $headers)) {
    header("Location: leaverequest.php");

   }} else {
    echo "Email sending failed...";
}

						header("Location: leaverequest.php");



					}


}
}


				}


         
?>


