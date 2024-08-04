<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Details</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #000;
        }

        th, td {
            border: 1px solid #000;
            padding: 12px;
            text-align: left;
        }

        .mycontainer {
            max-width: auto;
            max-height: auto;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        th {
            background-color: #FFECB2;
            color: #000;
            border: 1px solid #000;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
            border: 1px solid #000;
        }

        tr:hover {
            background-image: radial-gradient(circle, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
        }

        h1 {
            color: #333;
            margin-top: 20px;
        }

        p {
            color: #666;
        }
        
        button {
            background-color: #c46400;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
          
            align-self: center;
        }

        button:hover {
            background-color: #B8775B;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Leave Details</h1>

    <?php
    include "sql.php";

    session_start();

    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];

        // Attempt select query execution using the retrieved username
        $sql = "SELECT * FROM leavedetail WHERE email='$loggedInUser'";

        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Email</th>";
                echo "<th>Casual Leave</th>";
                echo "<th>Sick Leave</th>";
                echo "<th>Vacation</th>";
                echo "<th>Onduty</th>";
                echo "<th>Permission</th>";
                echo "<th>Special Onduty</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['casualleave']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['sickleave']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['vacation']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['onduty']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['permission']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['specialonduty']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "<p>No records matching your query were found.</p>";
            }
        } else {
            echo "<p>Error: Could not execute $sql. " . mysqli_error($link) . "</p>";
        }
    }
    // Close connection
    mysqli_close($link);
    ?>

</div>

</body>
</html>
