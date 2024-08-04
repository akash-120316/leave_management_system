
<?php
include "sql.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $fullname = $_POST["fullname"];
    session_start();
    $email = $_POST["email"];
    $_SESSION['logged_in_user'] = $email;
    header("Location: setleave.php");

    $phoneno = $_POST["phoneno"];
    $date = $_POST["date"];
    $gender = $_POST["gender"];
    $dept = $_POST["dept"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    // Now you have the values in separate variables
    // You can perform further processing or validation here


    
    // For example, you may want to check if the passwords match
    if ($password != $repassword) {
        echo "Passwords do not match!";
        // You may want to redirect the user back to the form or take appropriate action
    } else {

        $sql =         "INSERT INTO `ginn`(`username`, `email`, `department`, `dateofbirth`, `phoneno`, `password`, `gender`) VALUES ('$fullname','$email','$dept','$date','$phoneno','$password','$gender')";

        if(mysqli_query($link, $sql)){
            header("Location: setleave.php");
        
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }    
    
    }
}
?>

