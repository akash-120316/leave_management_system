<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-image: linear-gradient(to bottom, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
            border: 1px solid #000;         
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size:  60px;
        }

        table {
            text-align: left;
            margin-bottom: 20px;
            
        }

        th, td {
           
            padding: 10px;
            text-align: left;
            
        }

        th {
            background-color: #FFECB2;
           
        }
        .profile-details p {
       margin-top: 20px;
        margin-bottom: 30px;
       line-height: 5; /* Adjust the value as needed */
}

        h2 img {
            width: 100px; /* Adjust icon size */
    height: 100px; /* Adjust icon size */
    border-radius: 50%;
    background-color: #ccc; /* Placeholder color */
    margin-bottom: 20px;
    margin-top: -50px; /* Adjust to center vertically */
    display: flex;
    justify-content: center;
    align-items: center;
        }
    </style>
</head>

<body>
    <h1>USER PROFILE</h1>


    
<div class="container">
<div class="profile-icon">
            <h2><img src="../img/profile.png" alt="Logo"> </h2>
            
        </div>
    <?php
    include "sql.php";
    session_start();

    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];

        // Attempt select query execution using the retrieved username
        $sql = "SELECT * FROM ginn WHERE email='$loggedInUser'";

        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<th>Username:</th>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Email:</th>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Date of Birth:</th>";
                    echo "<td>" . $row['dateofbirth'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Department:</th>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Gender:</th>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<th>Phone Number:</th>";
                    echo "<td>" . $row['phoneno'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            }
        }
    }

    // Close connection
    mysqli_close($link);
    ?>
    </div>
</body>

</html>
