<?php 
     //Core Includes
     include ("../utilities/Header.php");
     include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");
     //Page Includes
     include ("../utilities/TablesJs.php");
?>
    <!--page level css -->
    <!--end of page level css-->

    <link href="../../../resources/web/vendors/modal/css/component.css" rel="stylesheet" />
    <link href="../../../resources/web/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="../../../resources/web/css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link href="../../../resources/web/css/pages/carousel.css" rel="stylesheet" />
    
    <script src="../../../resources/web/js/carousel.js"></script>
    <script src="../../../resources/web/vendors/modal/js/classie.js"></script>
    <script src="../../../resources/web/vendors/modal/js/modalEffects.js"></script>
    <script src="../../../resources/web/vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="../../../resources/web/vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="../../../resources/web/vendors/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../../resources/web/vendors/datatables/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" src="../../../resources/web/vendors/datatables/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="../../../resources/web/vendors/datatables/dataTables.scroller.min.js"></script>
    <script type="text/javascript" src="../../../resources/web/vendors/datatables/dataTables.bootstrap.js"></script>


    <link href="../../../resources/web/vendors/sweetalert/sweet-alert.css" rel="stylesheet" media="screen">
<!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header" style="background-color: lightyellow">
                <h1 style="font-family:calibri ">
                  &nbsp; Welcome, <?php echo $_SESSION['Logged_In']; ?>
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                 <!-- <form class="form-horizontal" action="#" id="addEventForm" name="addEventForm" novalidate> -->
                    <div class="clearfix"></div>
                    <div class="row">




                       <!--START OF MIDDLE-->
                        <div class="col-md-9">
                            <div class="panel panel-primary">
                               
                                <div class="panel-body">
                                    <div class="box-body" style="width: 100%">
                                        <!--carousel starts-->
                                        <!-- <div class="row" style="font-family: calibri;"> -->
                                            <!-- The carousel -->
                                            <!-- <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="../../../resources/assets/img/downloads/bg1.jpg" class='img-responsive' alt="image" style="width: 100%">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header" style="font-family: calibri">Welcome To Yavatan!</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Welcome to the Yavatan Community! You are now a member of the Digital Christian Mission Strategies Events Portal and Community. You can now access events through this website!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="../../../resources/assets/img/downloads/church4.jpg" class='img-responsive' alt="image" style="width: 100%">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header" style="font-family: calibri">Join Organizations!</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                By joining Organizations, you can now actively particiapte in many events and be friends with others!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="../../../resources/assets/img/downloads/accomp1.jpg" class='img-responsive' alt="image" style="width: 100%">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header" style="font-family: calibri">Help Others in the Community</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Being a volunteer doesn't stop in joining events and organizations! You can participate also in youth missions and join others as they help those people 
                                                                in need, and those people who needs gospel! <br>Enjoy your Yavatan Experience!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <!-- Controls -->
                                                <!-- <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a> -->

                                                <!-- Timer "progress bar" -->
                                                <!-- <hr class="transition-timer-carousel-progress-bar animate" /> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                        <!--carousel ends-->

                                        <!-- Calendar for Events -->
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-body">
                                                        <?php  
                                                            $data = array();
                                                             $vID = $_SESSION['volun_ID'];
                                                             $result_event = mysqli_query($connection,"SELECT * FROM `t_event_registration` as ER INNER JOIN `t_event` AS EVE ON ER.er_eventID = EVE.event_ID WHERE ER.er_volunID = '$vID'");
                                                            while($row_event = mysqli_fetch_assoc($result_event))
                                                            {
                                                             $data[] = array(
                                                              'id'   => $row_event["event_ID"],
                                                              'title'   => $row_event["event_name"],
                                                              'start'   => $row_event["event_start_date"],
                                                              'end'   => $row_event["event_end_date"]
                                                             );
                                                            }
                                                            ?>
                                                        <div id="calendar"></div>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END OF MIDDLE-->
                        
                          
                        
                        <!--START OF RIGHT SIDE-->
                        <div class="col-md-3">
                            <div class="col-md-12" style="height: 50%">
                                <div class="panel-heading" style="background-color: green">
                                    <h3 class="panel-title" style="color: white">
                                        <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                         Events Near You
                                    </h3>
                                </div>
                                <div class="panel-body" style="background-color: white">
                                    <p>Click for more details:</p>
                                    <div class="row" style="text-align: center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <!--For PHP-->
                                         <?php

                                               
                                          
                                               $view_query2 = mysqli_query($connection,"SELECT * FROM `t_event` AS EVE 
                                                                                        INNER JOIN `t_volunteer` as VLN
                                                                                            ON VLN.volun_city = EVE.event_city 
                                                                                        WHERE VLN.volun_ID = '$vID' AND event_status = 'PENDING'");
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
                                                            '<div class="panel panel-primary" style="background-color: #6e6e6e">
                                                                <a data-toggle="modal" href="#event'.$ev_ID.'"  title="Click to View" style="color: white">
                                                                    '.$ev_name.'
                                                                </a>
                                                            </div> ';
                                                        
                                                            
                                        ?>
                                        <div class="modal fade" id="event<?php echo $ev_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:green">
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
                                                                   <b>Region Location: </b> <?php echo $ev_rgn;   ?>
                                                                </p>
                                                                 <p style="font-size: 17px">
                                                                   <b>City Location: </b> <?php echo $ev_cty;   ?>
                                                                </p>
                                                                <p style="font-size: 17px">
                                                                   <b>Event Type:</b> <?php echo $ev_typ;   ?>
                                                                </p>

                                                                <p>
                                                                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#activitiesDiv" aria-expanded="false" aria-controls="activitiesDiv">Show Activities</button>
                                                                  &nbsp;  &nbsp;  &nbsp;
                                                                  <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#materialsDiv" aria-expanded="false" aria-controls="activitiesDiv">Show Materials</button>
                                                                </p>

                                                                <div class="row" style="background-color: #b3e5fc">
                                                                  <div class="col">
                                                                    <div class="collapse multi-collapse" id="activitiesDiv">
                                                                      <div class="card card-body">
                                                                        <br>
                                                                        <b>Activities for this event:</b>
                                                                        <br/>
                                                                        <table class="table table-bordered table-striped table-responsive">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Activity</th>
                                                                                    <th>Time</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $result_act = mysqli_query($connection,"SELECT * FROM  `t_event_activity` AS act inner join `t_event` as eve on act.act_event_ID = eve.event_ID where act.act_event_ID = '$ev_ID'");
                                                                                         while($row_act = mysqli_fetch_assoc($result_act))
                                                                                                {
                                                                                                    $act_ID = $row_act["act_ID"];
                                                                                                    $act_name = $row_act["act_name"];
                                                                                                    $act_time = $row_act["act_time"];
                                                                                                    $act_eventID = $row_act["act_event_ID"];
                                                                                                    $event_name = $row_act["event_name"];
                                                                                                    $event_ID  = $row_act["event_ID"];
                                                                                                    $event_dcreated = $row_act["event_date_created"];
                                                                                        ?>      
                                                                                <tr>
                                                                                    <td><?php echo $act_name; ?></td>
                                                                                    <td><?php echo $act_time; ?></td>
                                                                                </tr>
                                                                            <?php }?>
                                                                            </tbody>
                                                                        </table>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <br>
                                                                <div class="row" style="background-color: #c8e6c9">
                                                                  <div class="col" >
                                                                    <div class="collapse multi-collapse" id="materialsDiv">
                                                                      <div class="card card-body">
                                                                        <br>
                                                                        <b style="margin-top: 15px">Materials to be used for the event:</b>
                                                                        <br/>
                                                                        <table class="table table-bordered table-striped table-responsive">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Itineraries:</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $result_mat = mysqli_query($connection,"SELECT * FROM  `t_event_material` AS mat inner join `t_event` as eve on mat.ev_mat_eventID = eve.event_ID where mat.ev_mat_eventID = '$ev_ID'");
                                                                                         while($row_mat = mysqli_fetch_assoc($result_mat))
                                                                                                {
                                                                                                    $mat_ID = $row_mat["ev_mat_ID"];
                                                                                                    $mat_name = $row_mat["ev_mat_name"];
                                                                                                   
                                                                                        ?>      
                                                                                <tr>
                                                                                    <td><?php echo $mat_name; ?></td>
                                                                                </tr>
                                                                            <?php }?>
                                                                            </tbody>
                                                                        </table>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a data-toggle="modal" href="#register" data-dismiss="modal" class="btn btn-info">Register</a>
                                                        <button type="button" data-dismiss="modal" class="btn">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                         <div class="panel">
                                                           
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
                                                             
                                                         </div>
                                                    </div>
                                                 </div>
                                             </div>
                                        </div> 

                                        <?php } ?>  
                                    </div>
                                    </div>
                                  </div>
                               </div>




                            <div class="col-md-12" style="margin-top: 15px">
                                <div class="panel-heading" style="background-color: darkblue">
                                    <h3 class="panel-title" style="color: white">
                                        <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                         Suggested Groups
                                    </h3>
                                </div>
                                <div class="panel-body" style="background-color: white">
                                    <p>Click for more details:</p>
                                    <div class="row" style="text-align: center">

                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <!--For PHP-->
                                       <?php

                                               $vID = $_SESSION['volun_ID'];
                                          
                                               $IterateLine = 0;
                                                $view_query2 = mysqli_query($connection,"SELECT * FROM `t_volunteer` AS VLN 
                                                                                        INNER JOIN `t_group`  AS GRP 
                                                                                        INNER JOIN `t_groupleader` AS GL 
                                                                                                ON GRP.grp_leader = GL.grpld_ID and  
                                                                                                VLN.volun_religion = GRP.grp_religion 
                                                                                        WHERE VLN.volun_ID = '$vID' ");
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

                                                        if($IterateLine == 0)
                                                        {
                                                          echo '<div class="">';
                                                        }
                                                         echo 
                                                            '<div class="panel panel-primary" style="background-color:#6e6e6e">
                                                                <a data-toggle="modal" href="#responsive'.$gID.'"  title="Click to View" style="color:white">
                                                                    '.$gname.'
                                                                </a>
                                                            </div> ';
                                                          $IterateLine += 1;
                                                        if($IterateLine > 5)
                                                        {
                                                          echo '</div>';
                                                          $IterateLine = 0;
                                                        }
                                                            
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
                                                        <a data-toggle="modal" href="#confirmation" class="btn btn-primary">Join Group</a>
                                                        <button type="button" data-dismiss="modal" class="btn">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
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
                                                    </div>
                                                 </div>
                                             </div>
                                        </div>    
                                        <?php } ?>   

                                             

                                    </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                        <!--END OF RIGHT SIDE-->
            </section>
        </aside>
        <!-- right-side -->

    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    
<!-- PAGE SCRIPT AND CSS -->


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


        var d = 20,
            m = 7,
            y = 2018;
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                // right: 'month,agendaWeek,agendaDay'
                right: ''
            },
            buttonText: {
                prev: "<span class='fa fa-caret-left'></span>",
                next: "<span class='fa fa-caret-right'></span>",
                today: 'today',
                month: 'month',
                week: 'week',
                day: 'day'
            },
            events: <?php echo json_encode($data); ?>,
            eventClick:function(event)
                        {
                          var id = event.id;
                          $("#startTime").html(moment(event.start).format('MMM Do h:mm A'));
                            $("#endTime").html(moment(event.end).format('MMM Do h:mm A'));
                            $("#eventInfo").html(event.title);
                            $("#eventContent").dialog({ modal: true, title: event.title, width:350});
                        }
        });
    });
    </script>