
<?php session_start() ?>
<?php
$_SESSION["user_username"] = null;
$_SESSION["admin_email"] = null;
$_SESSION["user_role"] = null;

header("location: ../../index.php")

?>

