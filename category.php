<?php include "./include/head.php" ?>
<!-- Page Content-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-3">
                <?php
                $query = "SELECT * FROM categorie ";
                $select_all = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($select_all)) {
                    $cat_id = $row['cat_id'];
                    $cat_titre = $row['cat_titre'];
                    $cat_image = $row['cat_image'];
                ?>
                    <div class="d-flex align-items-center mt-lg-5 mb-4">
                        <img style=" width: 100px; height: 100px ;" class="img-fluid rounded-circle" src="image_db/categotie_img/<?php echo $cat_image ?> " alt="..." />
                        <div class="ms-3">
                            <div class="fw-bold"><?php echo $cat_titre ?></div>
                            <div class="text-muted">
                                <a class="button button--flex button--link home__info-button" href="category.php?cat_id=<?php echo $cat_id ?>">
                                    show mor <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
            <div class="col-lg-9">
                <!-- Post content-->
                <section class="py-5">
                    <div class="container px-5">
                        <?php
                        if (isset($_GET["cat_id"])) {
                            $cat_id2 = $_GET["cat_id"];
                        }
                        $query = "SELECT * FROM categorie where cat_id = $cat_id2";
                        $select_all = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($select_all)) {

                            $cat_titre = $row['cat_titre'];

                        ?>
                            <h2 class="fw-bolder fs-5 mb-4"><?php echo $cat_titre ?></h2>
                            <div class="row gx-5">
                            <?php } ?>

                            <?php
                            if (isset($_GET["cat_id"])) {
                                $cat_id = $_GET["cat_id"];
                            }
                            $query = "SELECT * FROM produit where produit_cat_id = $cat_id ";
                            $select_all = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($select_all)) {
                                $produit_id = $row['produit_id'];
                                $produit_titre = $row['produit_titre'];
                                $produit_prix = $row['produit_prix'];
                                $produit_evaluation = $row['produit_evaluation'];
                                $produit_description = $row['produit_description'];
                                $produit_img = $row['produit_img'];
                            ?>
                                <div class="col-lg-4 mb-5">

                                    <div class="card h-100 shadow border-0">
                                        <img class="card-img-top" src="image_db/produit_img/<?php echo $produit_img ?>" alt="..." />
                                        <div class="card-body p-4">
                                            <div class="badge bg-secondary bg-gradient rounded-pill mb-2"><i class="bi bi-star-fill text-warning"></i> <?php echo $produit_evaluation ?></div>
                                            <a class="text-decoration-none link-dark stretched-link" href="produit_comenter.php?p_id=<?php echo $produit_id ?>">
                                                <h5 class="card-title mb-3"><?php echo $produit_titre ?></h5>
                                            </a>
                                            <p class="card-text mb-0"><?php echo $produit_description ?></p>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>

                            </div>
                    </div>

            </div>

        </div>
</section>
</main>
<!-- Footer-->
<?php include "./include/footer.php" ?>