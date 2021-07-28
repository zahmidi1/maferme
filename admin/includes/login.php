<?php include "../../include/db_conn.php" ?>
<?php session_start() ?>
<?php
if (isset($_POST['login'])) {

    $user_username =  $_POST['user_username'];
    $user_password =  $_POST['user_password'];
    $user_username = mysqli_real_escape_string($conn, $user_username);
    $user_password = mysqli_real_escape_string($conn, $user_password);


    $query = "SELECT * FROM `users` WHERE `user_username`= '{$user_username}' ";
    $select_user = mysqli_query($conn, $query);
    if (!$select_user) {
        die("QUERY FAILED" . mysqli_errno($conn));
    }
    while ($row = mysqli_fetch_array($select_user)) {
        $db_user_id = $row["user_id"];
        $db_user_nome = $row["user_nome"];
        $db_user_role = $row["user_role"];
        $db_user_username = $row["user_username"];
        $db_user_password = $row["user_password"];
    }

    if ($user_username === $db_user_username && $user_password === $db_user_password) {
        $_SESSION["user_username"] = $db_user_username;
        $_SESSION["user_nome"] = $db_user_nome;
        $_SESSION["admin_email"] = $db_admin_email;
        $_SESSION["user_role"] = $db_user_role;
        header("location: ../index.php");
    } else {
        header("location: ../login.php");
    }
}


?>

