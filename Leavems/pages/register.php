
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
text-align: center;
            
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
        <h3>Enter Your Registration Details</h3>
        <form action="c.php" method="post">
            <div class="input-box">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" placeholder="Enter full name" name="fullname" required />
            </div>

            <div class="input-box">
                <label for="email">Email Address</label>
                <input type="text" id="email" placeholder="Enter email address" name="email" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="phoneno">Phone Number</label>
                    <input type="number" id="phoneno" placeholder="Enter phone number" name="phoneno" required />
                </div>
                <div class="input-box">
                    <label for="date">Birth Date</label>
                    <input type="date" id="date" placeholder="Enter birth date" name="date" required />
                </div>
            </div>

            <div class="gender-box">
                <div class="gender-option">
                    <label for="gender">Select Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="prefer not to say">Prefer not to say</option>
                    </select>
                </div>
            </div>

            <div class="gender-box">
                <div class="gender-option">
                    <label for="department">Select department:</label>
                    <select id="deot" name="dept" required>
                        <option value="CSE">CSE</option>
                        <option value="IT">IT</option>
                        <option value="ECE">ECE</option>
                        <option value="MATHS">MATHS</option>

                        <option value="MECH">MECH</option>
                        <option value="R/A">R/A</option>
                        <option value="EIE">EIE</option>
                        <option value="BME">BME</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="EEE">EEE</option>
                        <option value="ENG">ENGLISH</option>


                    </select>
                </div>
            </div>
            

            <div class="column">
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter password" name="password" required />
                </div>
                <div class="input-box">
                    <label for="repassword">Re-enter Password</label>
                    <input type="password" id="repassword" placeholder="Re-enter password" name="repassword" required />
                </div>
            </div>

            <button type="submit">Register</button>
            <a href="backkk.php">Back</a>
        </form>
    </div></div>
</body>

</html>

