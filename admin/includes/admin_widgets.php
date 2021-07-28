       <!-- /.row -->

       <div class="row">
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-primary">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-file-text fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">
                               <?php

                                $query = "SELECT * FROM produit";
                                $select_all = mysqli_query($conn, $query);
                                $produit_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$produit_counts}</div>";
                                ?>

                               <div>produit</div>
                           </div>
                       </div>
                   </div>
                   <a href="produit.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM comment";
                                $select_all = mysqli_query($conn, $query);
                                $comment_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$comment_counts}</div>";
                                ?>

                               <div>Comments</div>
                           </div>
                       </div>
                   </div>
                   <a href="comments.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM users";
                                $select_all = mysqli_query($conn, $query);
                                $users_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$users_counts}</div>";
                                ?>

                               <div> Users</div>
                           </div>
                       </div>
                   </div>
                   <a href="users.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-red">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-list fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">

                               <?php

                                $query = "SELECT * FROM categorie";
                                $select_all = mysqli_query($conn, $query);
                                $categorie_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$categorie_counts}</div>";
                                ?>


                               <div>Categories</div>
                           </div>
                       </div>
                   </div>
                   <a href="categorie.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-info">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-list fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">

                               <?php

                                $query = "SELECT * FROM rappelles";
                                $select_all = mysqli_query($conn, $query);
                                $rappelles_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$rappelles_counts}</div>";
                                ?>


                               <div>Rappelles</div>
                           </div>
                       </div>
                   </div>
                   <a href="rappelles.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM contact";
                                $select_all = mysqli_query($conn, $query);
                                $contact_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$contact_counts}</div>";
                                ?>

                               <div>message</div>
                           </div>
                       </div>
                   </div>
                   <a href="contact.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM reserve_produit";
                                $select_all = mysqli_query($conn, $query);
                                $reserve_produit_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$reserve_produit_counts}</div>";
                                ?>

                               <div> reserve_produit</div>
                           </div>
                       </div>
                   </div>
                   <a href="reserve.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="panel panel-red">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM reserve_produit WHERE  `status` = 'active'";
                                $select_all = mysqli_query($conn, $query);
                                $reserve_produit_active = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$reserve_produit_active}</div>";
                                ?>

                               <div> reserve produit avtive</div>
                           </div>
                       </div>
                   </div>
                   <a href="reserve.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
       </div>


       <!-- /.row -->

       <?php
        $query = "SELECT * FROM comment   WHERE  comment_status = 'active'";
        $select_all = mysqli_query($conn, $query);
        $comment_counts_active = mysqli_num_rows($select_all);

        ?>
       <?php
        $query = "SELECT * FROM rappelles ";
        $select_all = mysqli_query($conn, $query);
        $rappelles_counts = mysqli_num_rows($select_all);

        ?>
       <div class="row">
           <script type="text/javascript">
               google.charts.load('current', {
                   'packages': ['bar']
               });
               google.charts.setOnLoadCallback(drawChart);

               function drawChart() {
                   var data = google.visualization.arrayToDataTable([
                       ['date', 'count'],

                       <?php
                        $element = ['produit', 'categories', 'users', 'comments', 'comments active', 'rappelles', 'message', 'reserve produit', 'reserve active'];
                        $count = [$produit_counts, $categorie_counts,  $users_counts, $comment_counts, $comment_counts_active, $rappelles_counts, $contact_counts, $reserve_produit_counts, $reserve_produit_active];

                        for ($i = 0; $i < 9; $i++) {
                            echo "['{$element[$i]}'" . "," . "{$count[$i]}],";
                        }

                        ?>


                   ]);

                   var options = {
                       chart: {
                           title: '',
                           subtitle: '',
                       }
                   };

                   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                   chart.draw(data, google.charts.Bar.convertOptions(options));
               }
           </script>
           <div class="table-responsive">
               <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
           </div>

       </div>