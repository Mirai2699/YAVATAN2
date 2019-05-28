
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
                  <i class="livicon" data-name="calendar" data-size="25" data-loop="true" data-c="black" data-hc="gray"></i>
                  &nbsp;All Incoming Events
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
                                $view_query2 = mysqli_query($connection,"SELECT * FROM `t_event` where event_status = 'PENDING'");
                                 while($row = mysqli_fetch_assoc($view_query2))
                                {
                                    $ev_ID = $row["event_ID"];
                                    $ev_name = $row["event_name"];
                                    $ev_desc = $row["event_desc"];
                                    $ev_grp = $row["event_bygrp"];
                                    $ev_ldr = $row["event_leader"];
                                    $ev_bdgt = $row["event_budget"];
                                    $ev_stdt = $row["event_start_date"];
                                    $ev_endt = $row["event_end_date"];
                                    $ev_ddur = $row["event_day_duration"];
                                    $ev_rgn = $row["event_region"];
                                    $ev_cty = $row["event_city"];
                                    $ev_typ = $row["event_type"];
                                    $ev_aud = $row["event_aud_desc"];
                                    $ev_wthr = $row["event_weather"];
                                    $ev_stat = $row["event_status"];
                                    $ev_dtcrt = $row["event_date_created"];
                                    $ev_actflg = $row["event_active_flag"];

                                    echo 
                                    '  
                                    <a data-toggle="modal" href="#event'.$ev_ID.'">
	                                    <div class="col-md-5" style="background-color: white; margin:10px">
	                                            <div class="col-md-4">
	                                                <img src="../../../resources/assets/img/downloads/event 1.jpg" class="img-responsive" alt="image" style="margin-top:15px">
	                                            </div> 
	                                            <div class="col-md-8">
	                                                <h1 class="carousel-caption-header">'.$ev_name.'</h1>
	                                                <p class="carousel-caption-text hidden-sm hidden-xs">
	                                                '.$ev_desc.'
	                                                </p>
	                                            </div> 
	                                      </div>
	                                 </a>
                                    ';
                                                         
                                 
                            ?>
                            <div class="modal fade" id="event<?php echo $ev_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:navy">
                                                        <h3 style="text-align: left; color: white">Event Details</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12" style="text-align: left;">
                                                                <h3><?php echo $ev_name;   ?></h3>
                                                                <hr>
                                                                <p style="font-size: 17px">
                                                                   <b>Description:</b> <?php echo $ev_desc;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Date Start:</b> <?php echo $ev_stdt;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Date End:</b> <?php echo $ev_endt;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Located at region:</b> <?php echo $ev_rgn;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Located at City:</b> <?php echo $ev_cty;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Event Type:</b> <?php echo $ev_typ;   ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a data-toggle="modal" href="#eventconf<?php echo $ev_ID ?>" class="btn btn-primary">Register</a>
                                                        <button type="button" data-dismiss="modal" class="btn">Close</button>
                                                    </div>
                                                       
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="eventconf<?php echo $ev_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                         <div class="panel">
                                                            <center>
                                                              <i class="livicon" data-name="address-book" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                              <p style="font-size: 17px">
                                                               Are you sure you want to register to this event?
                                                              </p>
                                                               <form role="form" action="../functionalities/joining.php" method="POST" class="form-horizontal">
                                                                   <input type="hidden" name="volunID" value="<?php echo $vID?>">
                                                                   <input type="hidden" name="eventID" value="<?php echo $ev_ID?>">
                                                                   <button type="submit" class="btn btn-success" name="joinevent">Yes</button>
                                                                   <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                              </form>
                                                               &nbsp;
                                                             </center>
                                                         </div>
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