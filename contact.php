<?php include "./include/head.php" ?>
<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">contact nous </h1>
                <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- * * * * * * * * * * * * * * *-->


                    <?php
                    if (isset($_POST['add_contact'])) {
                        $contact_name = $_POST['contact_name'];
                        $contact_email = $_POST['contact_email'];
                        $contact_phone = $_POST['contact_phone'];


                        $contact_message = $_POST['contact_message'];




                        $query = " INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`, `contact_date`)
                                                          VALUES (NULL, '{$contact_name}', '{$contact_email}','{$contact_phone}' , '{$contact_message}' ,now())";
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
                        <div class="d-grid"><button class="btn btn-primary btn-lg " name="add_contact" type="submit">Submit</button></div>
                    </form>















                </div>
                <div class="col-lg-6">
                    <div style="width: 100%"><iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=e.g:35.485624053833284,-5.935020446777345+(ferm)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/en/measure-map-radius/">Map radius measure</a></div>
                </div>
            </div>
        </div>
        <!-- Contact cards-->
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                <div class="h5 mb-2">Discute avec nous</div>
                <p class="text-muted mb-0">
                    Discutez en direct avec l'un de nos spécialistes de l'assistance.</p>
            </div>
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                <div class="h5">commentaire </div>
                <p class="text-muted mb-0">Laissez-nous votre commentaire.</p>
            </div>
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                <div class="h5">produit</div>
                <p class="text-muted mb-0">Parcourir les produits et les commentaires</p>
            </div>
            <div class="col">
                <div class="feature bg-secondary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                <div class="h5">Appelez-nous</div>
                <p class="text-muted mb-0">
                    pendant les heures normales de bureau au (212) 618-181155</p>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Footer-->
<?php include "./include/footer.php" ?>