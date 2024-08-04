<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
        }
        .container {
            width: 35%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the container horizontally */
            padding: 20px; /* Add some padding inside the container */
            border: 2px solid #ccc; /* Add a border */
            border-radius: 40px; /* Optional: Add rounded corners */
           background-image: linear-gradient(to bottom, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.35);
            border-color:#CCC;

            
        }

        form {
            width: 100%;
        }

        

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h2 img {
            margin-right: 10px;
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
            border-color: #c46400;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            background-color: #c46400;
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
            background-color: #B8775B;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="leaveapplication.php" method="post"> 
        <h2>
        <img src="srec logo 1.jpg" alt="Logo" style="height: 40px; width: auto; margin-right: 10px;"> <!-- Image added to the title -->   
        LEAVE APPLICATION FORM
    </h2>
        
        <label for="name">Full Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required>

        <label for="leaveType">Type of Leave:</label>
        <select id="leaveType" name="leaveType" required>
            <option value="" disabled selected>Select leave type</option>
            <option value="sick">Sick Leave</option>
            <option value="vacation">Vacation Leave</option>
            <option value="casual">Casual Leave</option>
        </select>

        <label for="startDate">Start Date:</label>
        <input type="date" id="startDate" name="startDate" required>

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" required>

        <label for="reason">Reason for Leave:</label>
        <textarea id="reason" name="reason" rows="4" required></textarea>

        <button type="submit">Submit Application</button>
    </form>
    </div>
</body>
</html>
<?php


$currentDateTime = new DateTime('now');
 $currentDate = $currentDateTime->format('Y-m-d'); 

include ("sql.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect values of input fields

    session_start();
    $uname = $_REQUEST['name'];
   $_SESSION['name'] = $uname;
    header("Location: email.php");

    $e = $_REQUEST['email'];
    $_SESSION['email'] = $e;
    header("Location: email.php");

    $ltype = $_REQUEST["leaveType"];
    $_SESSION['leaveType'] = $ltype;
    header("Location: email.php");

    $sdate = $_REQUEST["startDate"];
     $_SESSION['startDate'] = $sdate;
    header("Location: email.php");
    
    $edate = $_REQUEST["endDate"];
    $_SESSION['endDate'] = $edate;
    header("Location: email.php");
    
    $reason = $_REQUEST["reason"];
     $_SESSION['reason'] = $reason;
    header("Location: email.php");

    // Convert start date and end date to DateTime objects
    $startDate = new DateTime($sdate);
    $endDate = new DateTime($edate);

    // Calculate the difference in days
    $interval = $startDate->diff($endDate);
    $daysDifference = $interval->days;
    $_SESSION['days'] = $daysDifference;
    header("Location: email.php");

    // Now $daysDifference contains the difference in days as an integer

    session_start();
    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];
        if ($e == $loggedInUser) {

            $sql = "INSERT INTO leaveinfo (username, leavetype, startdate, enddate, reason, email, daysofleave,currentd) VALUES ('$uname', '$ltype', '$sdate', '$edate', '$reason', '$e', '$daysDifference','$currentDate')";
            if (mysqli_query($link, $sql)) {

                header("Location: facultydash.php");
            }
        } else {
            // Handle the case where the email doesn't match the logged-in user
        }
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
}

// Close connection
mysqli_close($link);
?>
