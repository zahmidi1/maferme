<div class="table-responsive">
    <table class="table table-dark table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>rappelle id</th>
                <th>rappelle name</th>
                <th>rappelle email</th>

            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM rappelles";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $rappelle_id = $row['rappelle_id'];
                $rappelle_name = $row['rappelle_name'];
                $rappelle_email = $row['rappelle_email'];



            ?>

                <tr>
                    <td><?php echo $rappelle_id ?></td>
                    <td><?php echo $rappelle_name ?></td>
                    <td><?php echo $rappelle_email ?></td>


                    <?php echo " <td> <a href='rappelles.php?delete={$rappelle_id}'>Delete</a></td>" ?>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query =   "DELETE from rappelles WHERE `rappelle_id` = {$rappelle_id}";
    $delete_query = mysqli_query($conn, $query);
    header("location:rappelles.php");
}
?>