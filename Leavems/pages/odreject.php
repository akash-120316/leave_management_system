<?php

include ("sql.php");





session_start();



	$eid = $_GET['email'];
	$descr = $_GET['reason'];
	$lty=$_GET['leavetype'];
	$daysDifference = $_GET['daysDifference'];
	if(2==2){
	$add_to_db = mysqli_query($link,"UPDATE permissions SET status='REJECTED' WHERE email='".$eid."' AND reason='".$descr."'");

				if($add_to_db){	
					echo 'Saved!!';
					header("Location: odrequest.php");
				}
				else{
					echo "Query Error : " . "UPDATE permissions SET status='REJECTED' WHERE email='".$eid."' AND reason='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}



	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
?>