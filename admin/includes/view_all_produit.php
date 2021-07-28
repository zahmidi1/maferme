<div class="table-responsive">
    <table class="table table-dark table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>produit_id</th>
                <th>produit_cat_id</th>
                <th>produit_titre</th>
                <th>produit_prix</th>

                <th>produit_comment</th>
                <th>produit_description</th>
                <th>produit_date</th>
                <th>produit_evaluation</th>
                <th>produit_img</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>

            <?php

            $query = "SELECT * FROM produit";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $produit_id = $row['produit_id'];
                $produit_cat_id = $row['produit_cat_id'];
                $produit_titre = $row['produit_titre'];
                $produit_prix = $row['produit_prix'];
                $produit_comment = $row['produit_comment'];
                $produit_description = $row['produit_description'];
                $produit_date = $row['produit_date'];
                $produit_evaluation = $row['produit_evaluation'];
                $produit_img = $row['produit_img'];


            ?>

                <tr>
                    <td><?php echo $produit_id ?></td>
                    <?php
                    $query = "SELECT * FROM categorie  WHERE cat_id =  $produit_cat_id";
                    $select_cat = mysqli_query($conn, $query);

                    while ($cat = mysqli_fetch_assoc($select_cat)) {

                        $cat_id = $cat['cat_id'];
                        $cat_titre = $cat['cat_titre'];
                    ?>


                        <td><?php echo $cat_titre ?></td>


                    <?php } ?>

                    <td><?php echo $produit_titre ?></td>
                    <td><?php echo $produit_prix ?></td>
                    <td><?php echo $produit_comment ?></td>
                    <td><?php echo $produit_description ?></td>
                    <td><?php echo $produit_date ?></td>
                    <td><?php echo $produit_evaluation ?></td>
                    <td> <img style="width: 100px;" src="../image_db/produit_img/<?php echo $produit_img ?>" alt="image"></td>

                    <?php echo " <td> <a href='produit.php?delete={$produit_id}'>Delete</a></td>" ?>

                    <?php echo " <td> <a href='produit.php?source=update_produit&id_update={$produit_id}'>update</a></td>" ?>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query =   "DELETE from produit WHERE produit_id = {$id_delete}";
    $delete_query = mysqli_query($conn, $query);
    header("location:produit.php");
}
?>



<?php
if (isset($_GET['updete'])) {
    include "includes/update_produit.php";
}
?>