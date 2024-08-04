<?php
ob_start(); // Start output buffering
// Your PHP code here
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .main {
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: +6768px;
            max-width: 70%;
            min-height: 480px;
        }


        .main::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 10px;
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00aa, #ff0000);
            z-index: -1;
            animation: animate 20s linear infinite;
            opacity: 0;
        }

        @keyframes animate {
            0% {
                filter: hue-rotate(0deg);
            }
            100% {
                filter: hue-rotate(360deg);
            }
        }
        .main button {
            background-color: #ee8456;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            cursor: pointer;
            border-width: 3px;
        }
        

        .main button:hover {
            background-color: #A97B74;
        }



        form {
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
            margin-bottom: 15px;
            position: relative;
        }
        .form-main {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
            top: 0;
            left: 70px;
        }


        

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #000; /* Changed border color */
            border-radius: 4px;
            box-sizing: border-box;
            color: #000; /* Changed text color */
        }

        .wrap {
            left: 0;
            width: 50%;
            z-index: 2;
            font-weight: bold;
        }

        button {
            background-color: #ee8456; /* Changed button background color */
            color: #fff; /* Changed button text color */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff5733; /* Changed button hover background color */
        }

        button.admin-login {
            background-color: #ee8456; /* Changed admin login button background color */
            margin-top: 10px;
        }

        button.admin-login:hover {
            background-color: #ff5733; /* Changed admin login button hover background color */
        }

        .toggle-main {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 150px 0 0 100px;
            z-index: 1000;
            font-weight: bold;
        }

        .toggle {
            background-color: linear-gradient(to left, #00a1ff, #00ff8f);
            height: 100%;
            background-image: url('../img/indexpic.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="main">
    <div class="form-main summit">
        <form action="admin_login.php" method="post">
        <h1>ADMIN ACCOUNT</h1>
            
            <input type="text" name="email" placeholder="Enter your EMAIL" required>

          
            <input type="password" name="password" placeholder="Enter your Password" required>

            <div class="wrap">
                <button type="submit">Submit</button>
            </div>
           
        </form>
    </div>
    <div class="toggle-main">
            <div class="toggle">
            </div>
        </div>
        </div>
        </div>
		<br>
		
    </div>
</body>

</html>


<?php
include ("sql.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
    $username = $_REQUEST['email'];

    $password=$_REQUEST["password"];
    



// Attempt select query execution
$sql = "SELECT * FROM admin where email='$username' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_array($result)){
           $c= $row['email'];
           $s=$row['password'];

 }

  mysqli_free_result($result);
  } 
  else{
    $c=" ";
    $s=" ";
  }
 
 }


if ($username==$c and $password==$s) {
    header("Location: admindash.php");
  } 
  else {
   
  }
}

// Close connection
mysqli_close($link);
?>