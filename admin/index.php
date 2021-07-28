<?php include "includes/admin_header.php" ?>

<!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    welcome to admin
                    <small><?php echo $_SESSION["user_nome"] ?></small>
                </h1>

                <?php include 'includes/admin_widgets.php' ?>
            </div>
        </div>


    </div>
</div>

<!-- footer -->

<?php include "includes/admin_footer.php" ?>