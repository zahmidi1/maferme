<div class="table-responsive">
    <table class="table table-dark table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>

                <th>id produit</th>

                <th>date</th>

                <th>message</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM reserve_produit";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $reserve_id = $row['reserve_id'];
                $reserve_name = $row['reserve_name'];
                $reserve_email = $row['reserve_email'];
                $reserve_phone = $row['reserve_phone'];
                $reserve_id_produit = $row['reserve_id_produit'];
                $date = $row['date'];
                $reserve_message = $row['reserve_message'];
                $status = $row['status'];
            ?>

                <tr>
                    <td><?php echo $reserve_id ?></td>
                    <td><?php echo $reserve_name ?></td>
                    <td><?php echo $reserve_email ?></td>
                    <td><?php echo $reserve_phone ?></td>
                    <td><?php echo $reserve_id_produit ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $reserve_message ?></td>
                    <td><?php echo $status ?></td>
                    <?php echo " <td> <a href='reserve.php?delete={$reserve_id}'>Delete</a></td>" ?>
                    <?php echo " <td> <a href='reserve.php?noactive={$reserve_id}'>noactive</a></td>" ?>
                    <?php echo " <td> <a href='reserve.php?active={$reserve_id}'>active</a></td>" ?>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query =   "DELETE from reserve_produit WHERE `reserve_id` = {$id_delete}";
    $delete_query = mysqli_query($conn, $query);
    header("location:reserve.php");
}
?>
<?php
if (isset($_GET['noactive'])) {
    $noactive = $_GET['noactive'];
    $query = "UPDATE `reserve_produit` SET `status` = 'noactive' WHERE `reserve_id` = $noactive";
    $noactive_query = mysqli_query($conn, $query);
    header("location:reserve.php");
}
?>
<?php
if (isset($_GET['active'])) {
    echo $avtive = $_GET['active'];
    $query = "UPDATE `reserve_produit` SET `status` = 'active' WHERE `reserve_id` = $avtive";
    $noactive_query = mysqli_query($conn, $query);
    header("location:reserve.php");
}
?>