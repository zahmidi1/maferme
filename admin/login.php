<?php include "../include/db_conn.php";
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="./css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Fonts -->
</head>



<body>
    <div class="container">
        <div class="title">Login</div>
        <div class="content">
            <form action="./includes/login.php" method="post">

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="user_username" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="user_password" placeholder="Enter your password" required>
                    </div>

                </div>

                <div class="button">
                    <input type="submit" name="login" value="LOGIN">
                </div>
            </form>
        </div>
    </div>

</body>

</html>