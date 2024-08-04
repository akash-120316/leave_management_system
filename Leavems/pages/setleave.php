
    <?php
    include "sql.php";
    session_start();

    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];




 
// Attempt insert query execution
$sql = "INSERT INTO `leavedetail` (`email`, `casualleave`, `sickleave`, `vacation`,onduty,permission,specialonduty) VALUES ('$loggedInUser', 12,0,0,14,12,0);";
if(mysqli_query($link, $sql)){
    header("Location: employeelist.php");


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}

// Close connection
mysqli_close($link);
?>
