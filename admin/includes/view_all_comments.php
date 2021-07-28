<div class="table-responsive">
    <table class="table table-dark table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>comment id</th>
                <th>produit</th>
                <th>status</th>

                <th> nom</th>
                <th> emil</th>

                <th> commenter</th>
                <th> date</th>

                <th> active</th>
                <th> noactive</th>
                <th> delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM comment";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $comment_id = $row['comment_id'];
                $comment_pro_id = $row['comment_pro_id'];
                $comment_status = $row['comment_status'];
                $comment_nom = $row['comment_nom'];
                $comment_emil = $row['comment_emil'];
                $comment_content = $row['comment_content'];
                $comment_date = $row['comment_date'];



            ?>

                <tr>
                    <td><?php echo $comment_id ?></td>
                    <?php
                    $query = "SELECT * FROM produit  WHERE produit_id =  $comment_pro_id";
                    $select_cat = mysqli_query($conn, $query);

                    while ($cat = mysqli_fetch_assoc($select_cat)) {

                        $produit_id = $cat['produit_id'];
                        $produit_titre = $cat['produit_titre'];
                    ?>


                        <td><?php echo $produit_titre ?></td>


                    <?php } ?>
                    <td><?php echo $comment_status ?></td>
                    <td><?php echo $comment_nom ?></td>
                    <td><?php echo $comment_emil ?></td>
                    <td><?php echo $comment_content ?></td>

                    <td><?php echo $comment_date ?></td>



                    <?php echo " <td> <a href='comments.php?active={$comment_id}'>active</a></td>" ?>
                    <?php echo " <td> <a href='comments.php?noavtive={$comment_id}'>noavtive</a></td>" ?>

                    <?php echo " <td> <a href='comments.php?delete={$comment_id}'>Delete</a></td>" ?>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query =   "DELETE from comment WHERE comment_id = {$id_delete}";
    $delete_query = mysqli_query($conn, $query);
    header("location:comments.php");
}

if (isset($_GET['noavtive'])) {
    $noavtive = $_GET['noavtive'];
    $query =   "UPDATE comment SET comment_status = 'noavtive'  WHERE comment_id = {$noavtive}";
    $delete_query = mysqli_query($conn, $query);
    header("location:comments.php");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $query =   "UPDATE comment SET comment_status = 'active'  WHERE comment_id = {$active}";
    $delete_query = mysqli_query($conn, $query);
    header("location:comments.php");
}



?>