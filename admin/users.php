<?php include "includes/admin_header.php" ?>

<!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    users
                    <small><?php echo $_SESSION["user_nome"] ?></small>
                </h1>
            </div>
            <div class="col-lg-12">
                <?php
                if (isset($_GET["source"])) {
                    $source = $_GET["source"];
                } else {
                    $source = "";
                };
                switch ($source) {
                    case 'add_user.php';
                        include "includes/add_user.php";
                        break;
                    case 'update_user';

                        include "includes/update_user.php";
                        break;
                    default:
                        include "includes/view_all_user.php";
                        break;
                }

                ?>
            </div>
        </div>

    </div>
</div>

<!-- footer -->

<?php include "includes/admin_footer.php" ?>