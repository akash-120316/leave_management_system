<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OD/PERMISSION Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;align-items: baseline;
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
            border-top: 80PX;
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
    <form action="odp.php" method="post"> 
        <h2>OD/PERMISSION FORM</h2>
        
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="text" name="email" required>

        <label for="leaveType">Leave Type:</label>
        <select id="leaveType" name="leaveType" required>
            <option value="ON-DUTY">ONDUTY</option>
            <option value="SPECIAL ON-DUTY">SPECIAL ON-DUTY</option>
            <option value="PERMISSION">PERMISSION</option>
            <!-- Add more options as needed -->
        </select>

        <div class="time-container">
            <label for="startDate">Start Date*:</label>
            <input type="date" id="startDate" name="startDate" required>

            <label for="endDate">End Date:</label>
            <input type="date" id="endDate" name="endDate">
        </div>

        <div class="time-container">
            <label for="startTime">Start Time *:</label>
            <input type="time" id="startTime" name="startTime" required>

            <label for="endTime">End Time:</label>
            <input type="time" id="endTime" name="endTime">
        </div>

        <label for="reason">Reason:</label>
        <textarea id="reason" name="reason" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>
<?php
include "sql.php";
// Process the form submission

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $leaveType = mysqli_real_escape_string($link, $_POST['leaveType']);
    $startDate = mysqli_real_escape_string($link, $_POST['startDate']);
    $endDate = mysqli_real_escape_string($link, $_POST['endDate']);
    $startTime = mysqli_real_escape_string($link, $_POST['startTime']);
    $endTime = mysqli_real_escape_string($link, $_POST['endTime']);
    $reason = mysqli_real_escape_string($link, $_POST['reason']);

    // Insert data into the permissions table

    session_start();
    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];
        if ($email == $loggedInUser) {



    $sql = "INSERT INTO permissions (name, email, leaveType, startDate, endDate, startTime, endTime, reason) 
            VALUES ('$name', '$email', '$leaveType', '$startDate', '$endDate', '$startTime', '$endTime', '$reason')";

    if (mysqli_query($link, $sql)) {

        header("Location: facultydash.php");

    } }
}
}
// Close the database connection
mysqli_close($link);
?>
