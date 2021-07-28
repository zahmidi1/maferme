<?php
if (isset($_GET['id_update'])) {

    $id_update = $_GET['id_update'];
};
$query = "SELECT * FROM `produit` WHERE produit_id =  $id_update";
$select_by_id = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($select_by_id)) {
    $produit_id = $row['produit_id'];
    $produit_cat_id = $row['produit_cat_id'];
    $produit_titre = $row['produit_titre'];
    $produit_prix = $row['produit_prix'];
    $produit_comment = $row['produit_comment'];
    $produit_description = $row['produit_description'];
    $produit_date = $row['produit_date'];
    $produit_evaluation = $row['produit_evaluation'];
    $produit_img = $row['produit_img'];
}
if (isset($_POST['update_produit'])) {

    $produit_cat_id = $_POST['produit_cat_id'];
    $produit_titre = $_POST['produit_titre'];
    $produit_prix = $_POST['produit_prix'];

    $produit_img = $_FILES['produit_img']['name'];
    $produit_img_tmp = $_FILES['produit_img']['tmp_name'];
    move_uploaded_file($produit_img_tmp, "../image_db/produit_img/$produit_img");

    if (empty($produit_img)) {
        $query = "SELECT * FROM `produit` WHERE produit_id =  $id_update";
        $select_by_id = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($select_by_id)) {

            $produit_img = $row['produit_img'];
        }
    }

    $produit_comment = 4;
    $produit_description = $_POST['produit_description'];
    $produit_date = date('d - m - y');
    $produit_evaluation = $_POST['produit_evaluation'];



    $query = " UPDATE `produit` SET 
    produit_titre = '$produit_titre', 
    produit_prix  = '$produit_prix ',
    produit_img = '$produit_img',
    produit_comment = '$produit_comment',
    produit_cat_id = '$produit_cat_id',
    produit_description = '{$produit_description}',
    produit_date = now(),
    produit_evaluation = '$produit_evaluation'
    WHERE `produit_id` = $id_update";


    $update_produit_query = mysqli_query($conn, $query);
    if (!$update_produit_query) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        echo "produit update :" . " " . "<a href='produit.php'>view produit</a>";
    }
}


?>


<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="produit_cat_id">categorie</label> <br>
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
        <input type="text" value="<?php echo $produit_titre ?>" class="form-control" name="produit_titre">
    </div>
    <div class="form-group">
        <label for="produit_prix">produit_prix</label>
        <input type="text" value="<?php echo $produit_prix ?>" class="form-control" name="produit_prix">
    </div>
    <div class="form-group">
        <label for="produit_img">produit img</label><br>
        <img style="width: 200px;" src="../image_db/produit_img/<?php echo $produit_img ?>" alt=""> <br>
        <input type="file" name="produit_img" id="">
    </div>
    <div class="form-group">
        <label for="produit_description">produit_description</label>
        <input type="text" value="<?php echo $produit_description ?>" class="form-control" name="produit_description">
    </div>
    <div class="form-group">
        <label for="produit_date"></label>
        <input type="date" value="<?php echo $produit_date ?>" class="form-control" name="produit_date">
    </div>
    <div class="form-group">
        <label for="produit_evaluation">produit_evaluation</label>
        <input type="namber" value="<?php echo $produit_evaluation ?>" class="form-control" name="produit_evaluation">
    </div>
    <div class="form-group">
        <button type="submit" name="update_produit" class="btn btn-primary">update produit</button>

    </div>
</form>