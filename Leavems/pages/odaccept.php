<?php

include ("sql.php");





session_start();



	$eid = $_GET['email'];
	$descr = $_GET['reason'];
	$lty=$_GET['leavetype'];
	$daysDifference = $_GET['daysDifference'];
	if(2==2){
	$add_to_db = mysqli_query($link,"UPDATE permissions SET status='Accepted' WHERE email='".$eid."' AND reason='".$descr."'");

				if($add_to_db){	
					echo 'Saved!!';
					header("Location: odrequest.php");
				}
				else{
					echo "Query Error : " . "UPDATE permissions SET status='Accepted' WHERE email='".$eid."' AND reason='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}



	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
$s=1;

	

	if($lty=="PERMISSION"){
		$sql = "UPDATE leavedetail SET permission =permission-$s WHERE email='".$eid."'";
		if(mysqli_query($link, $sql)){
			
		} 
	}



	else if($lty=="ON-DUTY"){
		$sql = "UPDATE leavedetail SET onduty =onduty-$s WHERE email='".$eid."'";
		if(mysqli_query($link, $sql)){
			
		} 
	}
	else if($lty=="SPECIAL ON-DUTY"){
		$sql = "UPDATE leavedetail SET specialonduty =specialonduty+$daysDifference WHERE email='".$eid."'";
		if(mysqli_query($link, $sql)){
			
		} 
	}
?>

