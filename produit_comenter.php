<?php include "./include/head.php" ?>
<!-- Page Content-->

<?php
if (isset($_GET["p_id"])) {
    $p_id = $_GET["p_id"];
}

$query = "SELECT * FROM produit where produit_id = $p_id";
$select_all = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($select_all)) {

    $produit_titre = $row['produit_titre'];
    $produit_prix = $row['produit_prix'];
    $produit_description = $row['produit_description'];
    $produit_evaluation = $row['produit_evaluation'];
    $produit_img = $row['produit_img'];

?>



    <section class="py-5 mt-5">
        <div class="container px-5">
            <h1 class="fw-bolder fs-5 mb-4">produit</h1>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-xl-5 py-lg-5">
                            <div class="p-4 p-md-5">
                                <div class="badge bg-secondary bg-gradient rounded-pill mb-2"><i class="bi bi-star-fill text-warning"></i> <?php echo $produit_evaluation ?></div>
                                <div class="h2 fw-bolder"><?php echo $produit_titre ?></div>
                                <p><?php echo $produit_description ?></p>
                                <a class="stretched-link text-decoration-none" href="reserve_produit.php?id_pro=<?php echo $p_id ?>">
                                    réserve produit
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="bg-featured-blog" style="background-image: url('image_db/produit_img/<?php echo $produit_img ?>')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container px-5">
            <div class="row gx-5">
                <div class="col-xl-8">

                    <div class="card bg-light">
                        <div class="card-body">


                            <!-- forme coomenter  and  commenter-->


                            <?php include './include/commenter.php' ?>

                            <!--fin   forme coomenter  and  commenter--->



                        </div>
                        <div class="col-xl-4">
                            <div class="card border-0 h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex h-100 align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Contact</div>
                                            <p class="text-muted mb-4">
                                                For press inquiries, email us at
                                                <br />
                                                <a href="contact.php">contact nous</a>
                                            </p>
                                            <div class="h6 fw-bolder">Follow us</div>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
            <div class="row gx-5">

                <?php
                $query = "SELECT * FROM produit limit 3 ";
                $select_all = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($select_all)) {

                    $produit_titre = $row['produit_titre'];
                    $produit_prix = $row['produit_prix'];
                    $produit_description = $row['produit_description'];
                    $produit_evaluation = $row['produit_evaluation'];
                    $produit_img = $row['produit_img'];
                ?>
                    <div class="col-lg-4 mb-5">

                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="image_db/produit_img/<?php echo $produit_img ?>" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-secondary bg-gradient rounded-pill mb-2"><i class="bi bi-star-fill text-warning"></i> <?php echo $produit_evaluation ?></div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3"><?php echo $produit_titre ?></h5>
                                </a>
                                <p class="card-text mb-0"><?php echo $produit_description ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
        <div class="text-end mb-5 mb-xl-0">
            <a class="text-decoration-none" href="#!">
                More stories
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        </div>
    </section>
    </main>
<?php } ?>
<!-- Footer-->
<?php include "./include/footer.php" ?>