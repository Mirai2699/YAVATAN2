
<?php 
     //Core Includes
     include ("../utilities/Header.php");
     include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");
     //Page Includes
     include ("../utilities/TablesJs.php");
?>

<!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header" style="background-color: lightyellow">

                <h1 style="font-family:calibri ">
                  <i class="livicon" data-name="users" data-size="25" data-loop="true" data-c="black" data-hc="gray"></i>
                  &nbsp;All Groups
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                 <form class="form-horizontal" action="#" id="addEventForm" name="addEventForm" novalidate>
                    <div class="clearfix"></div>
                    <div class="row">
              <!--BOTTOM PART-->
                        <div class="col-md-12">
                            <?php

                              $vID = $_SESSION['volun_ID'];
                              $view_query2 = mysqli_query($connection,"SELECT * FROM `t_group` AS GRP LEFt JOIN `t_groupleader` AS GL ON GRP.grp_leader = GL.grpld_ID  ");
                                while($row2 = mysqli_fetch_assoc($view_query2))
                                     {
                                         $gID = $row2["grp_ID"];
                                         $gname = $row2["grp_name"];
                                         $gdesc = $row2["grp_desc"];
                                         $gldr = $row2["grp_leader"];
                                         $greg = $row2["grp_region"];
                                         $gcity = $row2["grp_city"];
                                         $grlg = $row2["grp_religion"];
                                         $gchr = $row2["grp_church_affil"];
                                         $grpld_lname = $row2["grpld_last_Name"];
                                         $grpld_fname = $row2["grpld_first_Name"];

                                    echo 
                                    '  
                                    <a data-toggle="modal" href="#responsive'.$gID.'">
	                                    <div class="col-md-5" style="background-color: white; margin:10px">
	                                            <div class="col-md-4">
	                                                <img src="../../../resources/assets/img/downloads/event 1.jpg" class="img-responsive" alt="image" style="margin-top:15px">
	                                            </div> 
	                                            <div class="col-md-8">
	                                                <h1 class="carousel-caption-header">'.$gname.'</h1>
	                                                <p class="carousel-caption-text hidden-sm hidden-xs">
	                                                '.$gdesc.'
	                                                </p>
	                                            </div> 
	                                      </div>
	                                 </a>
                                    ';
                                                         
                                 
                            ?>
                             <div class="modal fade" id="responsive<?php echo $gID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:navy">
                                                        <h3 style="text-align: left; color: white">Group Details</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12" style="text-align: left;">
                                                                <h3><?php echo $gname;   ?></h3>
                                                                <hr>
                                                                <p style="font-size: 17px">
                                                                   <b>Description:</b> <?php echo $gdesc;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Head-In-Charge:</b> <?php echo $grpld_fname.' '.$grpld_lname;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Religion:</b> <?php echo $grlg;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Located at region:</b> <?php echo $greg;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Located at City:</b> <?php echo $gcity;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Affiliated Church:</b> <?php echo $gchr;   ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a data-toggle="modal" href="#confirmation" class="btn btn-primary" data-dismiss="modal">Join Group</a>
                                                        <button type="button" data-dismiss="modal" class="btn">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <center>
                                                             <div class="panel">
                                                                <i class="livicon" data-name="user" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                <p style="font-size: 17px">
                                                                 Are you sure you want to join this group?
                                                                </p>
                                                                <form role="form" action="../functionalities/joining.php" method="POST">
                                                                     <input type="hidden" name="volunID" value="<?php echo $vID?>">
                                                                     <input type="hidden" name="grpID" value="<?php echo $gID?>">
                                                                     <button type="submit" class="btn btn-success" name="joingroup">Yes</button>
                                                                      <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                                </form>
                                                                 &nbsp;
                                                                
                                                             </div>
                                                        </center>
                                                    </div>
                                                 </div>
                                             </div>
                                        </div>    
                                        <?php } ?>   
 
                        </div>
                        <!--END OF BOTTOM PART-->
                        


            </section>
        </aside>
        <!-- right-side -->

    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    
<!-- PAGE SCRIPT AND CSS -->
<link href="../../../resources/web/css/pages/carousel.css" rel="stylesheet" />
<script src="../../../resources/web/js/carousel.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 4000
        });

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
    </script>