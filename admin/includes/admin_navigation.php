<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin</a>
    </div>
    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->




    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> produit<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="produit.php">show all produit</a>
                    </li>
                    <li>
                        <a href="produit.php?source=add_produit.php">add produit</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="categorie.php"><i class="fa fa-fw fa-wrench"></i> categorie</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-user"></i> User<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user" class="collapse">
                    <li>
                        <a href="users.php">show all users</a>
                    </li>
                    <li>
                        <a href="users.php?source=add_user.php">add user</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="rappelles.php"><i class="fa fa-fw fa-arrows-v"></i> rappelles</a>
            </li>

            <li class="">
                <a href="contact.php"><i class="fa fa-fw fa-users"></i> contact</a>
            </li>

            <li class="">
                <a href="comments.php"><i class="fa fa-fw fa-file"></i> comments</a>
            </li>

            <li class="">
                <a href="reserve.php"><i class="fa fa-fw fa-file"></i> réservation</a>
            </li>

            <li>
                <a href="./includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>


        </ul>

        <!-- Top Menu Items -->




    </div>
    <!-- /.navbar-collapse -->
</nav>