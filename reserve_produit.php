<?php include "./include/head.php" ?>


<?php
if (isset($_GET["id_pro"])) {
    $id_pro = $_GET["id_pro"];
}

$query = "SELECT * FROM produit where produit_id = $id_pro";
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
            <h1 class="fw-bolder fs-5 mb-4">Company Blog</h1>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-xl-5 py-lg-5">
                            <div class="p-4 p-md-5">
                                <div class="badge bg-secondary bg-gradient rounded-pill mb-2"><i class="bi bi-star-fill text-warning"></i> <?php echo $produit_evaluation ?></div>
                                <div class="h2 fw-bolder"><?php echo $produit_titre ?></div>
                                <p><?php echo $produit_description ?></p>

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
<?php } ?>


<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-2">

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- * * * * * * * * * * * * * * *-->


                    <?php
                    if (isset($_POST['add_contact'])) {
                        $contact_name = $_POST['contact_name'];
                        $contact_email = $_POST['contact_email'];
                        $contact_phone = $_POST['contact_phone'];


                        $contact_message = $_POST['contact_message'];
                        $noactive = "noactive";



                        $query = " INSERT INTO `reserve_produit` (`reserve_id`, `reserve_name`, `reserve_email`, `reserve_phone`, `reserve_id_produit`, `date`, `reserve_message`, `status`)
                                                               VALUES (NULL, '{$contact_name}', '{$contact_email}','{$contact_phone}' ,'{$id_pro}' ,now(),'{$contact_message}','{$noactive}')";
                        $add_contact = mysqli_query($conn, $query);
                        if (!$add_contact) {
                            die("QUERY FAILED" . mysqli_error($conn));
                        }
                    }
                    ?>


                    <form id="contactForm" method="POST" enctype="multipart/form-data">
                        <!-- Name input-->
                        <div class=" form-floating mb-3">
                            <input class="form-control" name="contact_name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                        </div>




                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="contact_email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                        </div>




                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="contact_phone" id="phone" type="tel" placeholder="(+212) 0618181155" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                        </div>




                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="contact_message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>

                            <!-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> -->

                        </div>




                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg " name="add_contact" type="reserver">Submit</button></div>
                    </form>















                </div>
                <div class="col-lg-6">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=e.g:35.485624053833284,-5.935020446777345+(ferm)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/en/measure-map-radius/">Map radius measure</a></div>
                </div>
            </div>
        </div>
        <!-- Contact cards-->
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                <div class="h5 mb-2">Chat with us</div>
                <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
            </div>
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                <div class="h5">Ask the community</div>
                <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
            </div>
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                <div class="h5">Support center</div>
                <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
            </div>
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                <div class="h5">Call us</div>
                <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Footer-->
<?php include "./include/footer.php" ?>