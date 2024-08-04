
<?php
session_start(); // Start the session at the very beginning

include "sql.php";
?>


<!DOCTYPE html>
<html>

<head>
    <title>facultys Dashboard</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty dashboard</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .navbar {
            background-color: #FFECB2;
            color: #d4d4d4;
            padding: 16px 20px;
            overflow: hidden;

        }

        .content,
        .dashboard,
        .box,
        table,
        .view-all-container {
            background-color: #fff;
        }

        .navbar a {
            margin-right: 10px;
            border-radius: 10px;
            color: #000;
            float: right;
            font-size: large;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #ffecb2;
            border: 1px solid #000;
            display: flex;
        }


        .navbar a:hover {
            background-image: radial-gradient(circle, #f9f6f5, #fcf4f0, #fcf4eb, #faf3e5, #f6f4e1);
            color: black;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 110px;
            height: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            background: #FFECB2;

            border-right: 1px solid rgba(255, 255, 255, 0.7);
            transition: width 0.3s ease;
            background-image: #FFECB2;
        }

        .sidebar:hover {
            width: 260px;

        }

        .sidebar a {
            padding: 15px 18px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }






        .sidebar img {
            margin-bottom: 0;
            height: 85px;
            width: 100%;
        }

        /* Content */
        .content {
            margin-left: 220px;
            padding: 16px;
        }

        /* Dashboard Boxes */
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            /* Allow boxes to wrap */
            justify-content: center;
            /* Center items horizontally */
            gap: 20px;
            /* Add gap between boxes */
        }


        .box {
            width: 200px;
            height: 120px;
            /* Smaller height */
            background-image: linear-gradient(to bottom, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
            border: 2px solid #000;
            border-radius: 5px;
            text-align: center;
            font-size: large;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Align text to the bottom */
            padding: 10px;
        }

        .box strong {
            font-size: 15px;
        }

        .number {
            font-size: 25px;
            margin-bottom: 18px;
            /* Add some spacing between number and text */
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #000;
            color: #000;
            font-size: large;
            border: 1px solid #000;
        }

        th {
            background-color: #FFECB2;
            color: #000;
            font-size: large;
            border: 1px solid #000;

        }

        .view-all-heading {
            text-align: center;
            background-color: #FFECB2;
            margin: 10px;
        }

        /* Adjust styles for the view all button and container */
        .view-all-container {
            text-align: center;
            margin-bottom: 0%;
            background-color: #FFECB2;
            border-radius: 10px;
            border-color: #000;
            margin-bottom: 3%;
            padding: 0;
            border: 1px solid #000;
        }

        .view-all-button button {
            padding: 12px 24px;
            /* Increase padding for a larger button */
            font-size: 18px;
            /* Increase font size for better visibility */
            background-color: #ffecb2;
            color: #000;
            border: #000;
            border-radius: 5px;
            /* Add border-radius for rounded corners */
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Smooth transition */
            border: 1px solid #000;
        }

        .view-all-button button:hover {
            background-color: #fff2cc;
        }

        .sidebar .logo {
            color: #000;
            display: flex;
            align-items: center;
            padding: 25px 10px 15px;
        }

        .logo img {
            width: 43px;
            border-radius: 50%;
            height: 40px;
        }

        .logo h2 {
            font-size: 1.15rem;
            font-weight: 600;
            margin-left: 15px;
            display: none;
        }

        .sidebar:hover .logo h2 {
            display: block;
        }

        .sidebar .links {
            list-style: none;
            margin-top: 20px;
            overflow-y: auto;
            scrollbar-width: none;
            height: calc(100% - 140px);
        }

        .sidebar .links::-webkit-scrollbar {
            display: none;
        }

        .links li {
            display: flex;
            border-radius: 4px;
            align-items: center;
        }

        .links li:hover {
            cursor: pointer;
            background: #fff;
        }

        .links h4 {
            color: #222;
            font-weight: 500;
            display: none;
            margin-bottom: 10px;
        }

        .sidebar:hover .links h4 {
            display: block;
        }

        .links hr {
            margin: 10px 8px;
            border: 1px solid #4c4c4c;
        }

        .sidebar:hover .links hr {
            border-color: transparent;
        }

        .links li span {
            padding: 12px 10px;
        }

        .links li a {
            padding: 10px;
            color: #000;
            display: none;
            font-weight: 500;
            white-space: nowrap;
            text-decoration: none;
        }

        .sidebar:hover .links li a {
            display: block;
        }

        .links .logout-link {
            margin-top: 20px;
        }

        .li img {
            color: #000;
            display: flex;
            align-items: center;
            padding: 25px 10px 15px;

        }
    </style>
    </head>

    <div class="container1">
        <div class="navbar">
            <a href="logout.php">LOGOUT</a>

            <a href="#" onclick="myFunction(); return false;">LEAVE REGULATIONS</a>


            <script>
                function myFunction() {
                    const myWindow = window.open();
                    myWindow.document.open();
                    myWindow.document.write(`
            
        <h1>Leave Regulation Rules</h1>
        <ul>
            <h3>Employees are entitled to a certain number of leave days per year, as specified in their employment contract.</h3>
            <h3>Leave requests must be submitted to the HR department at least [insert number] days in advance.</h3>
            </ul> <h1>Leave Regulation Rules</h1>
      <ul>
            <h3>Unused leave days may be carried forward to the following year, up to a maximum of [insert number] days.</h3>
            <h3>Leave days cannot be accumulated beyond the specified limit and will be forfeited if not utilized within the calendar year.</h3>
            </ul>
      
        <h1>Leave Regulation Rules</h1>
        <ul>
            <h3>Employees are required to inform their immediate supervisor or manager in case of illness or other reasons necessitating sick leave.</h3>
            <h3>Leave taken without prior approval may result in disciplinary action.</h3>
            <h3>[Insert specific rule here]</h3>
            </ul>
      
        
    `);
                    myWindow.document.close();
                }
            </script>
            <a href="resetpassword.php">RESET PASSWORD</a>


        </div>

        <aside class="sidebar">
            <div class="logo">
                <!-- Image icon -->
                <img src="../img/srec.jpg" alt="Image">
                <h2>SRI RAMAKRISHANA ENGINEERING COLLEGE</h2>
            </div>
            <!-- Sidebar menu -->
            <ul class="links">

                <li>
                    <span class="material-symbols-outlined">person</span>
                    <a href="profile.php">Profile</a> <!-- Updated href attribute -->
                </li>
                <li>
                    <span class="material-symbols-outlined">draft</span>
                    <a href="leaveapplication.php">Leave Application Form</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">draft</span>
                    <a href="odp.php">On-duty Form</a>
                </li>

                <li>
                    <span class="material-symbols-outlined">dns</span>
                    <a href="leavedet.php">Leave Information</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">article</span>
                    <a href="empleaverequesthistory.php">Leave History</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">article</span>
                    <a href="odhistory.php">On-duty History</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">today</span>
                    <a href="tcex.php">Calender</a>
                </li>
              
    </div>
    </aside>

    <div class="content">
        <h1 style="text-align: center;">Faculty Dashboard</h1>
        <div class="dashboard">
            <?php
            if (isset($_SESSION['logged_in_user'])) {
                $loggedInUser = $_SESSION['logged_in_user'];

                // Attempt select query execution using the retrieved username
                $sql = "SELECT * FROM leavedetail WHERE email='$loggedInUser'";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {


                            $cas = $row['casualleave'];
                            $sick = $row['sickleave'];
                            $lop = $row['lop'];
                            $ond = $row['onduty'];

                        }

                        mysqli_free_result($result);
                    }



                    // Dummy data for demonstration
                    $pending_leaves = array(
                        "Pending casual" => "$cas /12",
                        "Pending sick leave" => "$sick /12",
                        "Pending onduty" => " $ond /12",
                        "LOSS OF PAY (LOP)" => "$lop"
                    );

                    foreach ($pending_leaves as $status => $count) {
                        echo "<div class='box'>";
                        echo "<span class='number'>$count</span>";
                        echo "<strong>$status</strong>";
                        echo "</div>";
                    }
                }
            }
            ?>
        </div>
        <br><br>
        <div class="view-all-container">
            <div class="view-all-button">
                <h2 style="text-align: center;">PENDING Leave <button
                        onclick="window.location.href = 'pending.php';">VIEW ALL</button>
                </h2>
            </div>
            <div class="table-container">
                <?php
                include "sql.php";


                // Attempt select query execution
                if (isset($_SESSION['logged_in_user'])) {
                    $loggedInUser = $_SESSION['logged_in_user'];

                    // Attempt select query execution using the retrieved username
                    $sql = "SELECT username, leavetype, startdate, enddate, reason, status FROM leaveinfo WHERE status='pending' and email='$loggedInUser'  limit 5";

                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table id='pendingLeaveTable'>";
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
        </div>

        <br>
        <div class="view-all-container">
            <div class="view-all-button">
                <h2 style="text-align: center;">Accepted Leave <button
                        onclick="window.location.href = 'aleavehistory.php';">VIEW ALL</button>
                </h2>
            </div>
            <div class="table-container">
                <?php
                include "sql.php";

                // Attempt select query execution
                $sql = "SELECT username, leavetype, startdate, enddate, reason, status FROM leaveinfo where email='$loggedInUser' and status='Accepted' limit 5";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table id='acceptedLeaveTable'>";
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
                    }
                }

                mysqli_close($link);
                ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>