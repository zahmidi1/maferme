 <?php include "./include/db_conn.php" ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta name="description" content="" />
     <meta name="author" content="" />
     <title>Maferm</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
     <!-- animation-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles.css" rel="stylesheet" />
     <style>
         .navA {
             color: #fff !important;
         }

         .navA_active {
             color: #1c515c !important;
         }
     </style>

 </head>

 <body class="d-flex flex-column">
     <main class="flex-shrink-0">
         <!-- Navigation-->

         <nav id="navbar" class="navbar nav  fixed-top navbar-expand-lg navbar-light scrolling-active">
             <div class="container ">
                 <a id="linkE" class="navbar-brand navA_active navA " href="index.php"><img class="logo " src="./image_db/maFERME.png" alt="">aferme</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-flower2"></i></button>
                 <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                     <li class="nav-item"><a id="linkD" class="nav-link navA navA_active" href="index.php ">HOME</a></li>
                     <li class="nav-item"><a id="linkA" class="nav-link navA navA_active" href="about.php">A PROPOS DE NOUS </a></li>
                     <li class="nav-item"><a id="linkB" class="nav-link navA navA_active" href="all_produit.php">PRODUIT</a></li>

                     <li class="nav-item"><a id="linkC" class="nav-link navA navA_active" href="contact.php">CONTACT</a></li>


                 </ul>
             </div>
             </div>
         </nav>
         <!-- Header-->
         <header class=" bg-img py-5">
             <div class="container px-5">
                 <div class="row gx-5 align-items-center mt-5  justify-content-center">
                     <div class=" col-lg-12 col-xl-7 mt-5 col-xxl-6" data-aos="fade-down">
                         <div class="my-5  text-center text-xl-start">
                             <h1 class="display-4 fw-bolder text-white mb-2">Bienvenue à la ferme </h1>
                             <h5 class="display-5 fw-bolder text-white mb-2"> notre famille vous accueille à la Ferme de zahmidi</h5>
                             <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                 <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                             </div>
                         </div>


                     </div>
                     <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">

                         <div class="home__info">
                             <div class="text-xl-start">
                                 <span class="home__info-title">toop produit </span>
                                 <a href="" class="button button--flex button--link home__info-button">
                                     plus <i class="bi bi-arrow-right"></i>
                                 </a>
                             </div>

                             <div class="home__info-overlay">
                                 <img class="img_home  " src="image_db/home2.jpg" alt="..." />
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="home__social col-lg-6">
                         <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                             <i class="bi bi-facebook"></i>
                         </a>
                         <a href="https://www.instagram.com/" target="_blank" class="home__social-link">

                             <i class="bi bi-instagram"></i>
                         </a>
                         <a href="https://twitter.com/" target="_blank" class="home__social-link">

                             <i class="bi bi-twitter"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </header>
         <!-- Features section-->
         <section class="py-5" id="features">
             <div class="container px-5 my-5">
                 <div class="row gx-5">
                     <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                         <h2 class="fw-bolder mb-0">Services et privilèges.</h2>
                     </div>
                     <div class="col-lg-8">
                         <div class="row gx-5 row-cols-1 row-cols-md-2">
                             <div class="col mb-5 h-100" data-aos="fade-left" data-aos-duration="2000">
                                 <div class=" feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                 <h2 class="h5">Visitez la ferme</h2>
                                 <p class="mb-0">Visite libre de la salle de traite et des étables à petits veaux
                                 </p>
                             </div>
                             <div class="col mb-5 h-100" data-aos="fade-left" data-aos-duration="2000">
                                 <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                 <h2 class="h5">investir</h2>
                                 <p class="mb-0">Vous pouvez toujours investir du sens ou nous faire un don.</p>
                             </div>
                             <div class="col mb-5 mb-md-0 h-100" data-aos="fade-left">
                                 <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                 <h2 class="h5">aider</h2>
                                 <p class="mb-0">Vous pouvez demander de l'aide à tout moment.</p>
                             </div>
                             <div class="col h-100" data-aos="fade-left">
                                 <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                 <h2 class="h5">Emprunt d'équipement</h2>
                                 <p class="mb-0">Vous pouvez demander de Emprunt d'équipement à tout moment</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- Testimonial section-->
         <div class="py-5 bg-light">
             <div class="container px-5 my-5">
                 <div class="row gx-5 justify-content-center">
                     <div class="col-lg-10 col-xl-7" data-aos="fade-down">
                         <div class="text-center">
                             <div class="fs-4 mb-4 fst-italic">"Découvrez nos champs, savourez nos produits laitiers, faites votre marché… tous les jours de l’année."</div>
                             <div class="d-flex align-items-center justify-content-center">
                                 <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                 <div class="fw-bold">
                                     zahmidi
                                     <span class="fw-bold text-primary mx-1">/</span>
                                     CEO
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Blog preview section-->
         <section class="py-5">
             <div class="container px-5 my-5">
                 <div class="row gx-5 justify-content-center">
                     <div class="col-lg-8 col-xl-6">
                         <div class="text-center">
                             <h2 class="fw-bolder">produit de c'est session </h2>
                             <p class="lead fw-normal text-muted mb-5"></p>
                         </div>
                     </div>
                 </div>
                 <div class="row gx-5">


                     <?php
                        $query = "SELECT * FROM produit limit 3 ";
                        $select_all = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($select_all)) {

                            $produit_titre = $row['produit_titre'];
                            $produit_prix = $row['produit_prix'];
                            $produit_description = substr($row['produit_description'], 0, 100);
                            $produit_evaluation = $row['produit_evaluation'];
                            $produit_img = $row['produit_img'];
                        ?>
                         <div class="col-lg-4 mb-5">

                             <div class="test  card h-100 shadow border-0" data-aos="fade-up">
                                 <img class="card-img-top" src="image_db/produit_img/<?php echo $produit_img ?>" alt="..." />
                                 <div class="card-body p-4">
                                     <div class="badge bg-secondary bg-gradient rounded-pill mb-2">News</div>
                                     <a class="text-decoration-none link-dark stretched-link" href="#!">
                                         <h5 class="card-title mb-3"><?php echo $produit_titre ?></h5>
                                     </a>
                                     <p class="card-text mb-0"><?php echo $produit_description ?></p>
                                 </div>
                             </div>
                         </div>
                     <?php } ?>


                     <!-- Call to action-->
                     <aside class="bg-secondary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                         <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                             <div class="mb-4 mb-xl-0" data-aos="fade-right">
                                 <div class="fs-3 fw-bold text-white">novelle produits, rappelles moi.</div>
                                 <div class="text-white-50">envoyer nous votre nome et email adress pour nous rappelle vous .</div>
                             </div>
                             <div class="ms-xl-4">

                                 <?php
                                    if (isset($_POST["rappelle"])) {

                                        $rappelle_name =  $_POST["rappelle_name"];
                                        $rappelle_email = $_POST["rappelle_email"];

                                        $query =   "INSERT INTO `rappelles` (rappelle_id, rappelle_name , rappelle_email) VALUES (NULL, '{$rappelle_name}','{$rappelle_email}')";
                                        $select_all_cat = mysqli_query($conn, $query);
                                        if (!$select_all_cat) {
                                            die("QUERY FAILED" . mysqli_error($conn));
                                        }
                                    }

                                    ?>

                                 <form action="" method="post" enctype="multipart/form-data">
                                     <div class="input-group mb-2" data-aos="fade-left">
                                         <input class="form-control" type="text" name="rappelle_name" placeholder="voter nome..." />
                                     </div>
                                     <div class="input-group mb-2" data-aos="fade-right">
                                         <input class="form-control" type="text" name="rappelle_email" placeholder="Email address..." />
                                         <button class="btn btn-outline-light" name="rappelle" type="submit">rappelle moi</button>
                                     </div>
                                 </form>
                                 <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                             </div>
                         </div>
                     </aside>
                 </div>
         </section>
     </main>
     <!-- Footer-->
     <?php include "./include/footer.php" ?>