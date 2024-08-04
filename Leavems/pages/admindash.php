
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty dashboard</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

<body>
<style>
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

        .content {
            margin-left: 220px;
            padding: 16px;
            background-color: #fff;
        }

        .dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .box {
            width: 200px;
            height: 120px;
            background-image: linear-gradient(to bottom, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
            border: 2px solid #000;
            border-radius: 5px;
            text-align: center;
            font-size: large;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 10px;
        }

        .box strong {
            font-size: 15px;
        }

        .number {
            font-size: 25px;
            margin-bottom: 18px;
        }

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
            font-size: 18px;
            background-color: #ffecb2;
            color: #000;
            border: #000;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
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
    </style>
</head>
<div class="container1">
<div class="navbar">
    <a href="logout.php">LOGOUT</a>
    
   
</div>

<aside class="sidebar">
<div class="logo">
    <!-- Image icon -->
    <img src="../img/srec.jpg" alt="Image">
    <h2>SRI RAMAKRISHANA ENGINEERING COLLEGE</h2>
</div>
<ul class="links">
<li>
            <span class="material-symbols-outlined">list</span>
            <a href="employeelist.php">EMPLOYEE LIST</a> <!-- Updated href attribute -->
        </li>
        <li>
            <span class="material-symbols-outlined">request_page</span>
            <a href="leaverequest.php">LEAVE REQUESTS</a>
        </li>
        <li>
            <span class="material-symbols-outlined">request_page</span>
            <a href="odrequest.php">ONDUTY request</a>
        </li>
        
        <li>
            <span class="material-symbols-outlined">dns</span>
            <a href="leaverequesthistory.php">LEAVE REQUEST HISTORY</a>
        </li>
       
        <li>
            <span class="material-symbols-outlined">article</span>
            <a href="ondutyhistory.php">ONDUTY HISTORY</a>
        </li>
        <li>
            <span class="material-symbols-outlined">today</span>
            <a href="tcex.php">CALENDER</a>
        </li>

        <li>
            <span class="material-symbols-outlined">today</span>
            <a href="report.php">REPORT DETAILS</a>
        </li>
</div>
</aside>



<div class="content">
    <h1 style="text-align: center;">ADMIN Dashboard</h1>
    <div class="dashboard">



  


    <?php
include 'sql.php';
if(2==2){
// Query to get the count of pending requests
$query = "SELECT COUNT(*) as count FROM leaveinfo WHERE status = 'pending'";
$result = mysqli_query($link, $query);

// Fetch the result and set the pending count
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $pendingCount = $row['count'];
} else {
    $pendingCount = 0;
}

}

if(2==2){
    // Query to get the count of pending requests
    $query = "SELECT COUNT(*) as count FROM permissions WHERE status = 'pending'";
    $result = mysqli_query($link, $query);
    
    // Fetch the result and set the pending count
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $pendingCount1 = $row['count'];
    } else {
        $pendingCount1 = 0;
    }
    }
    




            // Dummy data for demonstration
            $pending_leaves = array(
                "Pending leave requests" => "$pendingCount",
                "Pending onduty request" => "$pendingCount1",
               
            );
            
            foreach ($pending_leaves as $status => $count) {
                echo "<div class='box'>";
                echo "<span class='number'>$count</span>";
                echo "<strong>$status</strong>";
                echo "</div>";
            }
        ?>
    </div>
<br><br>
    <div class="view-all-container">
        <div class="view-all-button">
        <h2 style="text-align: center;">PENDING Leave <button onclick="window.location.href = 'leaverequest.php';">VIEW ALL</button>
</h2>
        </div>
        <div class="table-container">
    <?php
    include "sql.php";
   

        // Attempt select query execution using the retrieved username
        $sql = "SELECT username, leavetype, startdate, enddate, reason, status FROM leaveinfo WHERE status='pending' limit 5";

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
    

    // Close connection
    mysqli_close($link);
    ?> </div>
    </div>

    <br>
    <div class="view-all-container">
        <div class="view-all-button">
            <h2 style="text-align: center;">PENDING ONDUTY <button onclick="window.location.href = 'odrequest.php';">VIEW ALL</button>
</h2>
        </div>
        <div class="table-container">
        <?php
    include "sql.php";
   

        // Attempt select query execution using the retrieved username
        $sql = "SELECT * FROM permissions WHERE status='pending' limit 5";

        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table id='pendingODTable'>";
                echo "<tr>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>leavetype</th>";
                echo "<th>startDate</th>";
                echo "<th>reason</th>";
                echo "<th>Status</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['leavetype'] . "</td>";
                    echo "<td>" . $row['startDate'] . "</td>";
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
    

    // Close connection
    mysqli_close($link);
    ?>
</div>
    </div>
</div>