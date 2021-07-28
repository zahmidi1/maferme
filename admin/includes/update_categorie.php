<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">gategorie edite</label>


        <?php
        if (isset($_GET["update"])) {
            $cat_id_update = $_GET['update'];
            $query = "SELECT * FROM categorie WHERE cat_id = $cat_id_update  ";
            $select_cat_id = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($select_cat_id)) {

                $cat_id = $row['cat_id'];
                $cat_titre = $row['cat_titre'];
                $cat_image = $row['cat_image'];

        ?>

                <input class="form-control" value="<?php if (isset($cat_titre)) {
                                                        echo $cat_titre;
                                                    } ?>" name="cat_name" type="text">
        <?php }
        } ?>

        <?php

        if (isset($_POST['update'])) {
            $cat_name = $_POST['cat_name'];

            $cat_image = $_FILES['cat_image']['name'];
            $cat_img_tmp = $_FILES['cat_image']['tmp_name'];
            move_uploaded_file($cat_img_tmp, "../image_db/categotie_img/$cat_image");


            $query =   "UPDATE categorie SET cat_titre = '{$cat_name}' ,cat_image = '{$cat_image}' WHERE cat_id = $cat_id_update";
            $update_query = mysqli_query($conn, $query);

            if (!$update_query) {

                die("QUERY FAILED" . mysqli_error($conn));
            } else {
                header("location:categorie.php");
            }
        }
        ?>

    </div>
    <div class="form-group">
        <label for="produit_img">produit_img</label><br>
        <img style="width: 200px;" src="../image_db/produit_img/<?php echo $cat_image ?>" alt=""> <br>
        <input type="file" name="cat_image" id="">

    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update" value="update categorie">
    </div>


</form>