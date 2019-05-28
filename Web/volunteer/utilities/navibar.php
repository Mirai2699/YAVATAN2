

<div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">

            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    
                    <div class="clearfix"></div>
                    <hr>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="#">
                            <a href="index.php">
                                <i class="livicon" data-name="home" data-size="18" data-c="lightblue" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Home</span>
                            </a>
                        </li>

                        <hr>    

                        <li>
                            <a href="#">
                                <i class="livicon" data-name="check" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Enlisted Events</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <?php
                                       include("../../../db_con.php");

                                       $vID = $_SESSION['volun_ID'];

                                       $view_query = mysqli_query($connection,"SELECT * FROM `t_event_registration` as ER INNER JOIN `t_event` AS EVE ON ER.er_eventID = EVE.event_ID WHERE ER.er_volunID = '$vID' and EVE.event_status = 'PENDING' ");
                                         while($row = mysqli_fetch_assoc($view_query))
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
                                                  <li>
                                                       <a data-toggle="modal" href="#myevent'.$ev_ID.'">
                                                         >>   '.$ev_name.'
                                                      </a>
                                                  </li>';
                                                
                                             
                                
                                    ?>
                                    <div class="modal fade" id="myevent<?php echo $ev_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:green">
                                                        <h3 style="text-align: left; color: white">Joined Event Details</h3>
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


                                                                <p>
                                                                   <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#activities1Div" aria-expanded="false" aria-controls="activitiesDiv">Show Activities</button>
                                                                  &nbsp;  &nbsp;  &nbsp;
                                                                  <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#materials1Div" aria-expanded="false" aria-controls="activitiesDiv">Show Materials</button>
                                                                </p>

                                                                 <div class="row" style="background-color: #b3e5fc">
                                                                  <div class="col">
                                                                    <div class="collapse multi-collapse" id="activities1Div">
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
                                                                    <div class="collapse multi-collapse" id="materials1Div">
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
                                                        <div class="col-md-12">
                                                            <div class="col-md-5">
                                                                <a data-toggle="modal" href="#unregister" data-dismiss="modal" class="btn btn-danger" style="width: 90%">
                                                                    Cancel Registration
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a data-dismiss="modal" class="btn btn-default" style="background-color: #6e6e6e; color: #ffffff; width: 80%">      Close
                                                                </a>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="modal fade" id="unregister" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body" style="height: 140px">
                                                        <center>
                                                         <div class="col-md-12" style="font-size: 17px">
                                                            <p >
                                                             Are you sure you want to un-register to this event?
                                                            </p>  
                                                            <br>
                                                            <form role="form" action="../functionalities/joining.php" method="POST">
                                                                 <input type="hidden" name="volunID" value="<?php echo $vID?>">
                                                                 <input type="hidden" name="eventID" value="<?php echo $ev_ID?>">
                                                                    <button type="submit" class="btn btn-success" name="unjoinevent">Yes</button>
                                                                    &nbsp;&nbsp;
                                                                    <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                            </form>
                                                         </div>
                                                        </center>
                                                    </div>
                                                 </div>
                                             </div>
                                        </div> 

                                      <?php } ?>
                            </ul>
                        </li>
                        <!--JOINED GROUPS-->
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="users" data-c="orange" data-hc="lightorange" data-size="18" data-loop="true"></i>
                                <span class="title">Joined Groups</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                 <?php
                                       include("../../../db_con.php");
                                       $vID = $_SESSION['volun_ID'];
                                  
                                       $view_query = mysqli_query($connection,"SELECT * FROM `t_group` AS GRP INNER JOIN t_volunteer AS VLN
                                                                 INNER JOIN `t_groupleader` AS GL ON GRP.grp_leader = 
                                                                            GL.grpld_ID and GRP.grp_ID =  VLN.volun_group WHERE volun_ID = '$vID' ");
                                         while($row2 = mysqli_fetch_assoc($view_query))
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
                                                 '<li>
                                                       <a data-toggle="modal" href="#mygroup'.$gID.'">
                                                         >>   '.$gname.'
                                                      </a>
                                                  </li> ';
                                                 
                                              
                                                         
                                    ?>
                                    <div class="modal fade" id="mygroup<?php echo $gID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:darkorange">
                                                        <h3 style="text-align: left; color: white">My Group Details</h3>
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
                                                    <div class="modal-footer" style="text-align: center">
                                                     <div class="col-md-12">
                                                        <div class="col-md-5" >
                                                           <a data-toggle="modal" href="#outconfirmation" data-dismiss="modal" class="btn btn-danger" style="width: 90%">
                                                               Leave Group
                                                           </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a data-dismiss="modal" class="btn btn-default" style="background-color: #6e6e6e; color: #ffffff; width: 80%">      Close
                                                            </a>
                                                        </div>
                                                     </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="outconfirmation" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;" >
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="height: 130px">
                                                    <div class="modal-body">
                                                        <center>
                                                             <div class="col-md-12">
                                                                <p style="font-size: 17px">
                                                                 Are you sure you want to leave this group?
                                                                </p>
                                                                <form role="form" action="../functionalities/joining.php" method="POST">
                                                                     <input type="hidden" name="volunID" value="<?php echo $vID?>">
                                                                     <input type="hidden" name="grpID" value="<?php echo $gID?>">
                                                                     <br>
                                                                     <button type="submit" class="btn btn-success" name="ungroup">Yes</button>
                                                                      &nbsp; &nbsp;
                                                                     <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                                </form>
                                                                
                                                             </div>
                                                        </center>
                                                    </div>
                                                 </div>
                                             </div>
                                        </div>    
                                        <?php } ?>
                            </ul>
                        </li>
                        <?php
                                       include("../../../db_con.php");
                                       $vID = $_SESSION['volun_ID'];
                                       $view_query = mysqli_query($connection,"SELECT * FROM `t_volunteer` WHERE volun_ID = '$vID'");
                                         while($row = mysqli_fetch_assoc($view_query))
                                              {
                                                  $volunID = $row["volun_ID"];
                                                  $volunLname = $row["volun_last_Name"];
                                                  $volunFname = $row["volun_first_Name"];

                                                
                                                 echo 
                                                 '
                                                  <li>
                                                    <a href="attendance.php">
                                                    <i class="livicon" data-name="address-book" data-c="lightgreen" data-hc="lightblue" data-size="18" data-loop="true"></i>
                                                      <span class="title">
                                                      Add Attendance
                                                      </span>
                                                    </a>
                                                  </li>';
                                                
                                              }
                                
                                    ?>

                        <hr>

                        <li>
                            <a href="all_events.php">
                                <i class="livicon" data-name="calendar" data-c="yellow" data-hc="gold" data-size="18" data-loop="true"></i>
                                <span class="title">All Events</span>
                                
                            </a>
                        </li>
                        <li>
                            <a href="all_groups.php">
                                <i class="livicon" data-name="users" data-size="18" data-c="violet" data-hc="pink" data-loop="true"></i>
                                <span class="title">All Groups / Orgs</span>
                                
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>

