<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
         body {
      font-family: 'Arial', sans-serif;
      background-color:#fff; 
      background-size: cover;
      color: #fff;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }

        .main {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: linear-gradient(to bottom, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
            border: 1px solid #000;
            width:85%;
        }

        h1 {
          text-align: center;
      color: #333;
        }
        .column {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .button-center {
      text-align: center;
    }

    button[type="submit"] {
    width: 50%;
    padding: 12px 20px; /* Decreased padding */
    border: none;
    border-radius: 30px; /* Decreased border radius */
    background-color: #FFECB2;
    color: #000;
    cursor: pointer;
    margin-bottom: 10px;
    border: 1px solid #000;
    margin: 25px auto; /* Center horizontally */
    display: block;
    margin-left: auto; /* Move button to the right side */
}

    </style>
</head>

<body>
    <div class="main">
        <h1>Reset Password</h1>
        <form action="resetpassword.php" method="post">
        <div class="column">
                <div class="input-box">
                    <label><span>CURRENT PASSWORD</span></label>
                    <input type="password" placeholder="" name="oldpassword" required />
                </div>
                <div class="input-box">
                    <label><span> NEW PASSWORD</span></label>
                    <input type="password" placeholder="" name="1npassword" required />
                </div>

                <div class="input-box">
                    <label><span>CONFRIM PASSWORD </span></label>
                    <input type="password" placeholder=" " name="2npassword" required />
                </div>
            </div>
            <button type="submit" >SUMMIT</button>
			<a href="backkk.php"></a>
        </form>
        </form>
    </div>
</body>

</html>
<?php
include "sql.php";
session_start();

    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];
    }
    if (isset($_SESSION['logged_in_us'])) {

    $oldpass=$_SESSION['logged_in_us'];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $u = $_REQUEST['oldpassword'];

        $x = $_REQUEST['1npassword'];

        $y = $_REQUEST['2npassword'];

        
if($oldpass==$u){
    if($x==$y){
        $sql = "UPDATE ginn SET password='$x' WHERE email='$loggedInUser'";
        if(mysqli_query($link, $sql)){
            header("Location: facultydash.php");

        } 
        else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    }
}

    }

    ?>
