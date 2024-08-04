<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Applications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 100%;
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
            background-color: #ffecb2;
            border: 1px solid #000;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-image: radial-gradient(circle, #ffecb2, #fbefc2, #f8f2d1, #f6f4e1, #f6f6f0);
        }

        .btn-success,
        .btn-danger,
        .btn-primary {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            color: #fff;
        }

        .btn-success {
            background-color: #005B46;
        }

        .btn-danger {
            background-image: linear-gradient(to right top, #d61313, #d31716, #d01a1a, #cc1c1c, #c91f1f);
        }

        .btn-primary {
            background-color: #FFECB2;
            display: block;
            margin: 20px auto;
            color: #000;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                margin: 10px auto;
            }

            th, td {
                padding: 8px;
            }

            .btn-success,
            .btn-danger,
            .btn-primary {
                padding: 5px 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Leave Applications</h1>
        <table>
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Employee</th>
                    <th>Email</th>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>No of Leave</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- loading all leave applications from database -->
                <?php
                include "sql.php";
                global $row;
                $query = mysqli_query($link, "SELECT * FROM leaveinfo WHERE status='REJECTED' or status='Accepted' ");

                $numrow = mysqli_num_rows($query);

                if ($query) {
                    if ($numrow != 0) {
                        $cnt = 1;

                        while ($row = mysqli_fetch_assoc($query)) {
                            $datetime1 = new DateTime($row['startdate']);
                            $datetime2 = new DateTime($row['enddate']);
                            $interval = $datetime1->diff($datetime2);
                            $daysDifference = $interval->days;
                            echo "<tr>
                                    <td>$cnt</td>
                                    <td>{$row['username']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['leavetype']}</td>
                                    <td>{$datetime1->format('Y/m/d')}</td>
                                    <td>{$datetime2->format('Y/m/d')}</td>
                                    <td>{$interval->format('%a - days')}</td>
                                    <td>{$row['reason']}</td>
                                    <td>{$row['status']}</td>
                                    <td>
                                        <a href=\"1accept.php?email={$row['email']}&reason={$row['reason']}&leavetype={$row['leavetype']}&status={$row['status']}&daysDifference={$daysDifference}\">
                                            <button class='btn-success'>Accept</button>
                                        </a>
                                        <a href=\"1reject.php?email={$row['email']}&reason={$row['reason']}&leavetype={$row['leavetype']}&daysDifference={$daysDifference}\">
                                            <button class='btn-danger'>Reject</button>
                                        </a>
                                    </td>
                                </tr>";
                            $cnt++;
                        }
                    } else {
                        echo "<tr><td colspan='10'>No records found</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>Query Error : " . "SELECT * FROM leaveinfo WHERE status='pending'" . "<br>" . mysqli_error($link) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <button class="btn-primary" onclick="location.href='admindash.php'">admin</button>
    </div>
</body>

</html>
