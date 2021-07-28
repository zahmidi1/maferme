<?php include "./include/head.php" ?>
<!-- Header-->
<header class="py-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Ferme, EN DIRECT AVEC LES PRODUCTEURS.</h1>
                    <p class="lead fw-normal text-muted mb-4">
                        Tellement proches, que vous les trouverez dans certains de nos magasins.</p>
                    <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target" data-aos="fade-right">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="./image_db/la vache.jpeg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">BIENVENUE DANS VOTRE MAGASIN ENGAGÉ !</h2>
                <p class="lead fw-normal text-muted mb-0">Ferme, c’est un réseau coopératif de magasins bio qui vous propose de donner davantage de sens à vos achats. En consommant bio, local et éthique. Mais aussi, en soutenant les producteurs indépendants et les entreprises familiales, et en évitant les multinationales cotées en bourse. Färm, pour manger bien et juste!</p>
            </div>
        </div>
    </div>
</section>
<!-- About section two-->
<section class="py-5" data-aos="fade-left">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="./image_db/pome de tere.jpeg" alt="..." /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">POURQUOI FAIRE SES COURSES DANS LES MAGASINS MAFERME ?</h2>
                <p class="lead fw-normal text-muted mb-0">
                    Dans la ferme Maferme, vous trouverez un très large choix de produits, choisis pour leur qualité mais aussi pour leur exemplarité. et des produit natural pour vous</p>
            </div>
        </div>
    </div>
</section>
<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center" data-aos="fade-dawn">
            <h2 class="fw-bolder">Notre équipe</h2>
            <p class="lead fw-normal text-muted mb-5">
                Dédié à la qualité et à votre réussite</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <?php
            $query = "SELECT * FROM users";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $user_id = $row['user_id'];
                $user_nome = $row['user_nome'];
                $user_prenome = $row['user_prenome'];
                $user_email = $row['user_email'];
                $user_role = $row['user_role'];
                $user_img = $row['user_img'];


            ?>

                <div class="col mb-5 mb-5 mb-xl-0" data-aos="fade-up">
                    <div class="text-center">
                        <img width="200px" class="img-fluid rounded-circle mb-4 px-4" src="./image_db/<?php echo $user_img ?>" alt="..." />
                        <h5 class="fw-bolder"><?php echo $user_nome . ' ' . $user_prenome ?></h5>
                        <div class="fst-italic text-muted"> <?php echo $user_role ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
</main>
<!-- Footer-->
<?php include "./include/footer.php" ?>