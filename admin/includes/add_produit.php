<?php
if (isset($_POST['add_produit'])) {
    $produit_cat_id = $_POST['produit_cat_id'];
    $produit_titre = $_POST['produit_titre'];
    $produit_prix = $_POST['produit_prix'];

    $produit_img = $_FILES['produit_img']['name'];
    $produit_img_tmp = $_FILES['produit_img']['tmp_name'];
    move_uploaded_file($produit_img_tmp, "../image_db/produit_img/$produit_img");

    $produit_comment = 0;


    $produit_description = $_POST['produit_description'];
    $produit_date = date('d - m - y');
    $produit_evaluation = $_POST['produit_evaluation'];

    $query = " INSERT INTO produit (produit_id, produit_cat_id, produit_titre, produit_prix, produit_img, produit_comment, produit_description, produit_date, produit_evaluation)
    VALUES (NULL, '{$produit_cat_id}', '{$produit_titre}','{$produit_prix}' , '{$produit_img}','{$produit_comment}' ,'{$produit_description}' ,now(),'{$produit_evaluation}')";
    $add_produit = mysqli_query($conn, $query);
    if (!$add_produit) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        echo "produit Created" . " " . "<a href='produit.php'>view produit</a>";
    }
}


?>

<form action="" method="POST" enctype="multipart/form-data">


    <div class="form-group">
        <label for="produit_cat_id">produit</label>
        <select name="produit_cat_id" id="produit_cat_id">

            <?php
            $query = "SELECT * FROM categorie ";
            $select_all = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($select_all)) {
                $cat_id = $row['cat_id'];
                $cat_titre = $row['cat_titre'];

                echo "<option value='{$cat_id}'>$cat_titre</option>";
            }

            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="produit_titre">produit_titre</label>
        <input type="text" class="form-control" name="produit_titre">
    </div>
    <div class="form-group">
        <label for="produit_prix">produit_prix</label>
        <input type="text" class="form-control" name="produit_prix">
    </div>
    <div class="form-group">
        <label for="produit_img">produit_img</label>
        <input type="file" class="form-control" name="produit_img">
    </div>
    <!-- <div class="form-group">
        <label for="produit_comment">produit_comment</label>
        <input type="text" class="form-control" name="produit_comment">
    </div> -->
    <div class="form-group">
        <label for="produit_description">produit_description</label>
        <input type="text" class="form-control" name="produit_description">
    </div>
    <div class="form-group">
        <label for="produit_date"></label>
        <input type="date" class="form-control" name="produit_date">
    </div>
    <div class="form-group">
        <label for="produit_evaluation">produit_evaluation</label>
        <input type="namber" class="form-control" name="produit_evaluation">
    </div>
    <div class="form-group">

        <input type="submit" value="add produit" name="add_produit" class="btn btn-primary">
    </div>
</form>