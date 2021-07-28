<?php include "includes/admin_header.php" ?>

<!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    welecom tocategorie
                    <small><?php echo $_SESSION["user_nome"] ?></small>
                </h1>
                <div class="col-lg-6">
                    <?php if (isset($_POST['submit'])) {
                        $cat_name = $_POST['cat_name'];
                        $cat_image = $_FILES['cat_image']['name'];
                        $cat_img_tmp = $_FILES['cat_image']['tmp_name'];
                        move_uploaded_file($cat_img_tmp, "../image_db/categotie_img/$cat_image");

                        if ($cat_image == "" || empty($cat_image)) {
                            echo "this field should not be empty";
                        } else {

                            $query =   "INSERT INTO `categorie` (cat_id, cat_titre , cat_image) VALUES (NULL, '{$cat_name}','{$cat_image}')";
                            $select_all_cat = mysqli_query($conn, $query);
                            if (!$select_all_cat) {
                                die("QUERY FAILED" . mysqli_error($conn));
                            }
                        };
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">add gategorie </label>
                            <input class="form-control" name="cat_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">add image </label>
                            <input class="form-control" name="cat_image" type="file">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="add categorie">
                        </div>
                    </form>

                    <!-- update -->
                    <?php if (isset($_GET['update'])) {
                        include "includes/update_categorie.php";
                    } ?>
                    <!-- update -->
                </div>

                <div class="col-lg-6">

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th> titre categorie</th>
                                <th> image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM categorie ";
                            $select_all = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($select_all)) {

                                $cat_id = $row['cat_id'];
                                $cat_titre = $row['cat_titre'];

                                $cat_image = $row['cat_image'];
                            ?>
                                <tr>
                                    <td> <?php echo $cat_id ?></td>
                                    <td> <?php echo $cat_titre ?></td>
                                    <td> <img style="width: 100px;" src="../image_db/categotie_img/<?php echo $cat_image ?>" alt="image"></td>
                                    <?php echo " <td> <a href='categorie.php?delete={$cat_id}'>Delete</a></td>" ?>
                                    <?php echo " <td> <a href='categorie.php?update={$cat_id}'>Update</a></td>" ?>
                                </tr>
                        </tbody>
                    <?php  } ?>
                    </table>
                    <?php if (isset($_GET['delete'])) {

                        $cat_id_update = $_GET['delete'];
                        $query =   "DELETE from `categorie` WHERE cat_id = $cat_id_update ";
                        $delete_query = mysqli_query($conn, $query);
                        header("location:categorie.php");
                    }
                    ?>
                </div>
            </div>
        </div>


    </div>


</div>

<!-- footer -->

<?php include "includes/admin_footer.php" ?>