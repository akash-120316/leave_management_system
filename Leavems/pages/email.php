<?php



session_start();

// Attempt select query execution
if (isset($_SESSION['logged_in_user'])) {
    $uname = $_SESSION['name'];
    $e= $_SESSION['email'];
    $l= $_SESSION['leaveType'];
    $st= $_SESSION['startDate'];
    $et= $_SESSION['endDate'];
    $r= $_SESSION['reason'];
    $d= $_SESSION['days'];
 

$to_email = "sowendharya36@gmail.com";
$subject = "$e requested for a leave";
$body = "$uname - $e has requested for a $l leave starting from $st to $et for a period of $d days 
Reason: $r";
$headers = "From: phpmailer7778@gmail.com";
if(mail($to_email, $subject, $body, $headers)) {
    header("Location: facultydash.php");

   }} else {
    echo "Email sending failed...";
}
?>