<?php
if (isset($_GET['id_update'])) {

    $id_update = $_GET['id_update'];
};


$query = "SELECT * FROM users WHERE `user_id` = $id_update";
$select_all = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($select_all)) {

    $user_id = $row['user_id'];
    $user_nome = $row['user_nome'];
    $user_prenome = $row['user_prenome'];
    $user_email = $row['user_email'];
    $user_role = $row['user_role'];
    $user_img = $row['user_img'];
    $user_username = $row['user_username'];
    $user_password = $row['user_password'];
}




if (isset($_POST['update_user'])) {

    $user_nome = $_POST['user_nome'];
    $user_prenome = $_POST['user_prenome'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $user_img = $_FILES['user_img']['name'];
    $user_img_tmp = $_FILES['user_img']['tmp_name'];
    move_uploaded_file($user_img_tmp, "../image_db/$user_img");

    if (empty($user_img)) {
        $query = "SELECT * FROM users WHERE `user_id` = $id_update";
        $select_by_id = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($select_by_id)) {

            $user_img = $row['user_img'];
        }
    }


    $query = " UPDATE `users` SET 
    user_nome = '$user_nome', 
    user_prenome  = '$user_prenome ',
    user_email = '$user_email',
    user_role = '$user_role',
    user_img = '$user_img'
      user_username = '$user_username'
    user_password = '$user_password'
    WHERE `user_id` = $id_update";


    $update_user_query = mysqli_query($conn, $query);
    if (!$update_user_query) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        echo "users update :" . " " . "<a href='users.php'>view users</a>";
    }
}


?>


<form action="" method="POST" enctype="multipart/form-data">



    <div class="form-group">
        <label for="user_nome">user_nome</label>
        <input type="text" value="<?php echo $user_nome ?>" class="form-control" name="user_nome">
    </div>


    <div class="form-group">
        <label for="user_prenome">user_prenome</label>
        <input type="text" value="<?php echo $user_prenome ?>" class="form-control" name="user_prenome">
    </div>


    <div class="form-group">
        <label for="user_img">user img</label><br>
        <img style="width: 200px;" src="../image_db/<?php echo $user_img ?>" alt=""> <br>
        <input type="file" name="user_img" id="">

    </div>

    <div class="form-group">
        <label for="user_email">user_email</label>
        <input type="text" value="<?php echo $user_email ?>" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <label for="user_role">user_role</label>
        <input type="text" value="<?php echo $user_role ?>" class="form-control" name="user_role">
    </div>
    <div class="form-group">
        <label for="user_username">user_username</label>
        <input type="text" value="<?php echo $user_username ?>" class="form-control" name="user_username">
    </div>
    <div class="form-group">
        <label for="user_password">user_password</label>
        <input type="text" value="<?php echo $user_password ?>" class="form-control" name="user_password">
    </div>
    <div class="form-group">
        <button type="submit" name="update_user" class="btn btn-primary">update user</button>

    </div>
</form>