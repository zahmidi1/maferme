<div class="table-responsive">
    <table class="table table-dark table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>user_id</th>
                <th>user_nome</th>
                <th>user_prenome</th>
                <th>user_email</th>

                <th>user_role</th>

                <th>user_img</th>

            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM users";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $user_id = $row['user_id'];
                $user_nome = $row['user_nome'];
                $user_prenome = $row['user_prenome'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                $user_img = $row['user_img'];


            ?>

                <tr>
                    <td><?php echo $user_id ?></td>
                    <td><?php echo $user_nome ?></td>
                    <td><?php echo $user_prenome ?></td>
                    <td><?php echo $user_email ?></td>
                    <td><?php echo $user_role ?></td>
                    <td> <img style="width: 100px;" src="../image_db/<?php echo $user_img ?>" alt="image"></td>
                    <?php echo " <td> <a href='users.php?delete={$user_id}'>Delete</a></td>" ?>
                    <?php echo " <td> <a href='users.php?source=update_user&id_update={$user_id}'>update</a></td>" ?>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query =   "DELETE from users WHERE `user_id` = {$id_delete}";
    $delete_query = mysqli_query($conn, $query);
    header("location:users.php");
}
?>



<?php
if (isset($_GET['updete'])) {
    include "includes/update_user.php";
}
?>