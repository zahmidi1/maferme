<?php
if (isset($_POST['add_user'])) {
    $user_nome = $_POST['user_nome'];
    $user_prenome = $_POST['user_prenome'];
    $user_email = $_POST['user_email'];
    $user_role = $_POST['user_role'];
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $user_img = $_FILES['user_img']['name'];
    $user_img_tmp = $_FILES['user_img']['tmp_name'];
    move_uploaded_file($user_img_tmp, "../image_db/$user_img");





    $query = " INSERT INTO `users` (`user_id`, `user_nome`, `user_prenome`, `user_email`, `user_role`, `user_img`,`user_username` ,`user_password`)
    VALUES (NULL, '{$user_nome}', '{$user_prenome}','{$user_email}' , '{$user_role}','{$user_img}','{$user_username}','{$user_password}')";
    $add_user = mysqli_query($conn, $query);
    if (!$add_user) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        echo "produit Created" . " " . "<a href='users.php'>view users</a>";
    }
}


?>

<form action="" method="POST" enctype="multipart/form-data">



    <div class="form-group">
        <label for="produit_titre">user_nome</label>
        <input type="text" class="form-control" name="user_nome">
    </div>



    <div class="form-group">
        <label for="produit_prix">user_prenome</label>
        <input type="text" class="form-control" name="user_prenome">
    </div>



    <div class="form-group">
        <label for="produit_img">user_img</label>
        <input type="file" class="form-control" name="user_img">
    </div>



    <div class="form-group">
        <label for="produit_description">user_email</label>
        <input type="email" class="form-control" name="user_email">
    </div>





    <div class="form-group">
        <label for="produit_evaluation">user_role</label>
        <input type="text" class="form-control" name="user_role">
    </div>

    <div class="form-group">
        <label for="produit_evaluation">user_username</label>
        <input type="text" class="form-control" name="user_username">
    </div>


    <div class="form-group">
        <label for="produit_evaluation">user_password</label>
        <input type="text" class="form-control" name="user_password">
    </div>

    <div class="form-group">

        <input type="submit" value="add user" name="add_user" class="btn btn-primary">
    </div>
</form>