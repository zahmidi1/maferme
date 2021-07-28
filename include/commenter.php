<!-- Comment with nested comments-->


<?php

$query = "SELECT * FROM comment WHERE comment_pro_id = {$p_id} AND comment_status = 'active'";
$select_all = mysqli_query($conn, $query);



while ($row = mysqli_fetch_assoc($select_all)) {



    $comment_nom = $row['comment_nom'];

    $comment_content = $row['comment_content'];
    $comment_date = $row['comment_date'];



?>




    <div class="d-flex mb-4">
        <!-- Parent comment-->
        <div class="flex-shrink-0"><img width="75PX" class="rounded-circle" src="./image_db/commenter_img.jpg" alt="..." /></div>
        <div class="ms-3">
            <div class="fw-bold"><?php echo $comment_nom ?></div><span><?php echo $comment_date ?></span>
            <p><?php echo $comment_content ?></p>
        </div>
    </div>
<?php } ?>
<!-- Single comment-->

</div>
</div>

<!-- Comment form-->

<form method="POST">
    <!-- Name input-->
    <h5 class="fw-bolder fs-5 mt-4 mb-4"> ajouter commenter </h5>
    <div class="form-floating mb-3">
        <input class="form-control" id="name" name="comment_nom" type="text" placeholder="Enter your name..." data-sb-validations="required" />
        <label for="name">Full name</label>
    </div>
    <!-- Email address input-->
    <div class="form-floating mb-3">
        <input class="form-control" id="email" name="comment_emil" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
        <label for="email">Email address</label>
    </div>

    <!-- commenter input-->
    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" name="comment_content" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
        <label for="message">Message</label>
    </div>

    <!-- Submit Button-->
    <div class="d-grid"><button class="btn btn-primary btn-lg " name="create_comment" id="submitButton" type="submit">commenter</button></div>
</form>



<?php

if (isset($_POST['create_comment'])) {
    $p_id = $_GET['p_id'];
    $comment_nom = $_POST['comment_nom'];
    $comment_emil = $_POST['comment_emil'];
    $comment_content = $_POST['comment_content'];



    $query = " INSERT INTO `comment` (comment_id, comment_pro_id,comment_status, comment_nom, comment_emil, comment_content, comment_date)
    VALUES (NULL, '{$p_id}', 'noactive', '{$comment_nom}','{$comment_emil}' , '{$comment_content}',now())";
    $add_produit = mysqli_query($conn, $query);
    if (!$add_produit) {
        die("QUERY FAILED" . mysqli_error($conn));
    }


    $query = "UPDATE produit SET produit_comment = produit_comment +1 WHERE produit_id = $p_id ";
    $update_comment_pro = mysqli_query($conn, $query);
    if (!$update_comment_pro) {
        die("QUERY FAILED" . mysqli_error($conn));
    }
}
?>