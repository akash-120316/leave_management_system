<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepted Leave Information</title>
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
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
             border: 1px solid #000;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            border: 1px solid #000;
        }

        th {
            background-color: #FFECB2;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Pending Leave Information</h1>
    <div class="container">
    <?php
    include "sql.php";
    session_start();

    // Attempt select query execution
    if (isset($_SESSION['logged_in_user'])) {
        $loggedInUser = $_SESSION['logged_in_user'];

        // Attempt select query execution using the retrieved username
        $sql = "SELECT username, leavetype, startdate, enddate, reason, status FROM leaveinfo WHERE status='pending' AND email='$loggedInUser'";

        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Username</th>";
                echo "<th>Leave Type</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
                echo "<th>Reason</th>";
                echo "<th>Status</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['leavetype'] . "</td>";
                    echo "<td>" . $row['startdate'] . "</td>";
                    echo "<td>" . $row['enddate'] . "</td>";
                    echo "<td>" . $row['reason'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
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
