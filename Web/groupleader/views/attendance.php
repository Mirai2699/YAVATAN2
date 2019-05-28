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
            <section class="content-header">
                <h1 style="font-family:calibri ">
                    <i class="livicon" data-name="address-book" data-size="25" data-loop="true" data-c="orange" data-hc="red" ></i>
                    &nbsp;Attendance Management
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="address-book" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Event's Attendance
                                </h3>
                            </div>
                             <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-bordered table-striped">                                
                                        <tr>
                                            <td>                          
                                                <form action="../functionalities/addattendance.php" method="POST">
                                                    <div class="form-content">
                                                        <div class="col-md-9" style="margin-bottom: 20px">
                                                            <div class="col-md-5">
                                                                <label>Event:</label>
                                                                <select name="att_eventID" class="form-control"  id="newunit" style="color: black;" >
                                                                    <option value="" selected="" disabled=""></option>
                                                                    <?php
                                                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_event` where event_status = 'PENDING' ");
                                                                            while($row = mysqli_fetch_assoc($view_query))
                                                                            {   
                                                                               $ev_ID = $row["event_ID"];
                                                                               $ev_name = $row["event_name"];
                                                                      ?>    
                                                                    <option value="<?php echo $ev_ID?>"><?php echo $ev_name ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                             <div class="col-md-4">
                                                                <label>Date Attended:</label>
                                                                <input type="date" name="att_date" class="form-control" required="" style="color: black;"  />
                                                            </div>
                                                            <?php
                                                                    $glID = $_SESSION['grpldID'];
                                                                    $view_query = mysqli_query($connection,"SELECT * FROM `t_groupleader` where grpld_ID = '$glID' ");
                                                                            while($row = mysqli_fetch_assoc($view_query))
                                                                            {   
                                                                               $grpld_ID = $row["grpld_ID"];
                                                                               $grpld_lname = $row["grpld_last_Name"];
                                                                               $grpld_fname = $row["grpld_first_Name"];
                                                            ?>
                                                            <input type="hidden" name="att_registrar" value="<?php echo $grpld_fname.' '.$grpld_lname?>">
                                                            <?php } ?>
                                                        </div>
                                                       

                                                         <div class="row" style="margin: 4px">
                                                            <div class="col-md-12">
                                                                <p>
                                                                    <button type="button" id="btnAdd" class="btn btn-primary">      
                                                                    <i class="livicon" data-name="plus" data-size="17" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                    Add Attendee
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row group">                                                        
                                                             <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input maxlength="50" type="text" name="att_lname[]" class="form-control" required="" style="color: black;"  />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <input maxlength="50" type="text" name="att_fname[]" class="form-control" required="" style="color: black;"  />
                                                                </div>
                                                            </div>
                                                             <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <label>Age</label>
                                                                    <input maxlength="150" type="number" name="att_age[]" class="form-control" required="" style="color: black;"  />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Gender</label>
                                                                    <select name="att_gen[]" class="form-control" style="color: black;" >
                                                                    <option value="" selected="" disabled=""></option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Contact</label>
                                                                    <input maxlength="11" type="text" name="att_con[]" class="form-control" required="" style="color: black;"  />
                                                                </div>
                                                            </div>
                                                             <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <select name="att_status[]" class="form-control"  id="newunit" style="color: black;" >
                                                                        <option value="" selected="" disabled=""></option>
                                                                        <?php
                                                                            $view_query = mysqli_query($connection,"SELECT * FROM `r_steps` ");
                                                                                while($row = mysqli_fetch_assoc($view_query))
                                                                                {   
                                                                                   $step_ID = $row["step_ID"];
                                                                                   $step_desc = $row["step_desc"];                                                                         ?>    
                                                                        <option value="<?php echo $step_desc?>"><?php echo $step_desc ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-danger btnRemove" style="margin-top: 23px;"><i class="livicon" data-name="remove" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group" style="margin-top: 20px">
                                                        <div class="col-md-12 text-right">
                                                            <button type="submit" name="addact" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                                <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                &nbsp; 
                                                                Save Attendance
                                                                &nbsp;
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>  
                                            </td> 
                                        </tr>
                                    </table>
                                </div>
                           </div>
                        </div>
                    </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" >
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="address-book" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Attendance
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Act ID</th>
                                            <th width="">Event Name</th>
                                            <th width="">Last Updated On</th>
                                            <th width="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $grpID = $_SESSION['grpID'];
                                        $result = mysqli_query($connection,"SELECT * FROM  `t_event_attendance` AS att inner join `t_event` as                        eve on att.ev_atnd_ID = eve.event_ID GROUP BY eve.event_ID ");
                                             while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        
                                                        $act_eventID = $row["ev_atnd_ID"];
                                                        $event_name = $row["event_name"];
                                                        $event_aud  = $row["event_aud_desc"];
                                                        $event_type = $row["event_type"];
                                                        $event_ID  = $row["event_ID"];
                                                        $event_dcreated = $row["event_date_created"];
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $event_ID; ?></td>
                                                            <td><?php echo $event_name; ?></td>
                                                            <td><?php echo $event_dcreated; ?></td>
                                                            <td style='width:300px'>
                                                                    <center>
                                                                    <a data-toggle="modal" href="#view<?php echo $event_ID ?>" class="btn btn-info" title="View">
                                                                         <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         View Attendees
                                                                    </a>
                                                                    &nbsp    
                                                                    <a data-toggle href="#delete" class="btn btn-danger" title="Archive">
                                                                          <i class="livicon" data-name="trash" data-size="16" data-loop="true" data-c="#fff" data-hc="white" ></i>
                                                                          Archive
                                                                    </a>            
                                                                    </center>
                                                           </td>
                                                           <td>
                                                            <div class="modal fade" id="view<?php echo $event_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color:navy">
                                                                    <h3 style="text-align: left; color: white">Event Attendance</h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12" style="text-align: left;">
                                                                            <h2><?php echo $event_name;   ?></h2>
                                                                            <h4>A <?php echo $event_type;?> event for <?php echo $event_aud;?></h4>
                                                                            <hr>
                                                                            
                                                                            <table class="table table-bordered table-responsive table-striped" id="table2">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th style="display: none">Volunteer ID</th>
                                                                                        <th>Name</th>
                                                                                        <th>Age</th>
                                                                                        <th>Gender</th>
                                                                                        <th>Religion</th>
                                                                                        <th>Region</th>
                                                                                        <th>Contact</th>
                                                                                        <th>Added by</th>
                                                                                        <th>Status</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php
                                                                                $result1 = mysqli_query($connection,"SELECT * FROM  `t_event_attendance` WHERE ev_atnd_eventID = '$event_ID' ");
                                                                                     while($row1 = mysqli_fetch_assoc($result1))
                                                                                            {
                                                                                                $att_ID = $row1["ev_atnd_ID"];
                                                                                                $att_lname = $row1["ev_atnd_L_name"];
                                                                                                $att_fname = $row1["ev_atnd_F_name"];
                                                                                                $att_date = $row1["ev_atnd_date_attended"];
                                                                                                 $att_eventID = $row1["ev_atnd_eventID"];
                                                                                                 $att_age = $row1["ev_atnd_age"];
                                                                                                 $att_gender = $row1["ev_atnd_gender"];
                                                                                                 $att_religion = "";
                                                                                                 $att_region = "";
                                                                                                 $att_contact = $row1["ev_atnd_contact"];
                                                                                                 $att_registrar = $row1["ev_atnd_registrar"];
                                                                                                 $att_status = $row1["ev_atnd_status"];
                                                                                                 $att_constat = $row1["ev_atnd_constat"];
                                                                                               
                                                                               ?>  
                                                                                     <tr>
                                                                                        <td style="display: none"><?php echo $att_ID; ?></td>
                                                                                        <td width=""><?php echo $att_fname.' '.$att_lname; ?></td>
                                                                                        <td width=""><?php echo $att_age; ?></td>
                                                                                        <td width=""><?php echo $att_gender; ?></td>
                                                                                        <td width=""><?php echo $att_religion; ?></td>
                                                                                        <td width=""><?php echo $att_region; ?></td>
                                                                                        <td width=""><?php echo $att_contact; ?></td>
                                                                                        <td width=""><?php echo $att_registrar; ?></td>
                                                                                        <td width=""><?php echo $att_status; ?></td>
                                                                                        <td style=''>
                                                                                        <center>
                                                                                         <a data-toggle="modal" href="#changestatus<?php echo $att_ID?>" class="btn btn-success">
                                                                                             <i class="livicon" data-name="retweet" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Change Status"></i>
                                                                                        </a>
                                                                                        <?php if(!$att_constat) {?>
                                                                                        <a data-toggle="modal" href="#promote<?php echo $att_ID?>" class="btn btn-info">
                                                                                             <i class="livicon" data-name="upload-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Promote to Contact"></i>
                                                                                        </a>
                                                                                        <?php }
                                                                                        else {?>
                                                                                            <a data-toggle="modal" href="#sms<?php echo $att_ID?>" class="btn btn-warning">
                                                                                             <i class="livicon" data-name="mobile" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Send SMS"></i>
                                                                                        </a>
                                                                                        <?php }?>
                                                                                        </center>
                                                                                       </td>
                                                                                       <td>
                                                    <!--CHANGE STATUS-->
                                                    <div class="modal fade" id="changestatus<?php echo $att_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-body" style="text-align: center">
                                                                   <div class="panel">
                                                                      <i class="livicon" data-name="retweet" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                      <p style="font-size: 17px">
                                                                       Are you sure you want to change the status?
                                                                      </p>
                                                                      <form role="form" action="../functionalities/member.php" method="POST">
                                                                           <input type="hidden" name="att_ID" value="<?php echo $att_ID?>">
                                                                           <center>
                                                                             <div class="panel" style="width: 50%; text-align: center">
                                                                                <label>Status:</label>
                                                                                <select name="ev_atnd_status" class="form-control"  id="newunit" style="color: black;" >
                                                                                    <option value="" selected="" disabled=""></option>
                                                                                    <?php
                                                                                        $view_query = mysqli_query($connection,"SELECT * FROM `r_steps` ");
                                                                                            while($row = mysqli_fetch_assoc($view_query))
                                                                                            {   
                                                                                               $step_ID = $row["step_ID"];
                                                                                               $step_desc = $row["step_desc"];                                                                         ?>   
                                                                                    <option value="<?php echo $step_desc?>"><?php echo $step_desc ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                             </div>
                                                                            </center>
                                                                           <button type="submit" class="btn btn-success" name="changestat2">Confirm</button>
                                                                      </form>
                                                                       &nbsp;
                                                                       <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                                                                   </div>
                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>

                                                                            <!--PROMOTION--> 
                                                                            <div class="modal fade" id="promote<?php echo $att_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                                              <div class="modal-dialog">
                                                                                  <div class="modal-content">
                                                                                      <div class="modal-body" style="text-align: center">
                                                                                           <div class="panel">
                                                                                              <i class="livicon" data-name="upload-alt" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                                              <p style="font-size: 17px">
                                                                                               Are you sure you want to promote this to a contact?
                                                                                              </p>
                                                                                              <form role="form" action="../functionalities/member.php" method="POST">
                                                                                                   <input type="hidden" name="att_ID" value="<?php echo $att_ID; ?>">
                                                                                                   <button type="submit" class="btn btn-success" name="promotecontact2">Yes</button>
                                                                                              </form>
                                                                                               &nbsp;
                                                                                               <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                                                           </div>
                                                                                      </div>
                                                                                   </div>
                                                                               </div>
                                                                            </div>

                                                                        <!--SEND SMS--> 
                                                                        <div class="modal fade" id="sms<?php echo $att_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                                          <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                  <div class="modal-body">
                                                                                        <div class="panel panel-info filterable" style="overflow:auto;">
                                                                                             <div class="col-md-12" style="margin-left: 5px; margin-top: 10px; margin-bottom: 10px">
                                                                                                <h4>Your Announcement Message</h4>
                                                                                                <hr>
                                                                                                <div class="col-md-11">
                                                                                                    <textarea id="message1" class="form-control" maxlength="225" rows="10" placeholder="Your message here"></textarea>
                                                                                                </div>
                                                                                                <div class="col-md-1">
                                                                                                    <a data-toggle="modal" href="#sent" class="btn btn-primary" style="margin-top: 50px" onclick="sms();">
                                                                                                        <i class="livicon" data-name="message-out" data-size="25" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                                                                                        Send
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                                       </td>
                                                                                    </tr> 
                                                                                 <?php }?>
                                                                                </tbody>
                                                                            </table>
                                                                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="sms<?php echo $event_ID; ?>"><i class="livicon" data-name="message-out" data-size="25" data-c="#fff" data-hc="#fff" data-loop="true"></i>Send an SMS Announcement</button>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="collapse multi-collapse" id="sms<?php echo $event_ID; ?>">
                                                                                        <div class="card card-body">
                                                                                             <div class="col-md-12">
                                                                                                <h4>Your Announcement Message</h4>
                                                                                                    <div class="col-md-10">
                                                                                                        <input type="hidden" name="event_ID">
                                                                                                        <textarea class="form-control" maxlength="225" rows="10" name="message" id="message" placeholder="Your message here"></textarea>
                                                                                                    </div>
                                                                                                    <div class="col-md-1">
                                                                                                        <button data-toggle="modal" class="btn btn-primary" style="margin-top: 50px" name="sendsmsall" id="sendsmsall" onclick="sms();">
                                                                                                            <i class="livicon" data-name="message-out" data-size="25" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                                                                                            Send
                                                                                                        </button>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <div class="modal-footer">
                                                                    <!-- <a data-toggle="modal" href="#eventconf" class="btn btn-primary">Register</a> -->
                                                                     <button type="button" onclick="refresh()" data-dismiss="modal" class="btn">Close</button>
                                                                </div>       
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>  
                                                <?php } ?>
                                    </tbody>
                                </table>
                                <!--FOR PRESENTATION PURPOSES-->
<!--                              <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="sent" class="modal fade" style="margin-top: 100px">
                              <div class="modal-dialog">
                                <div class="modal-content" >
                                        <div class="modal-body" style="height:200px;">
                                            <center>
                                            <i class="livicon" data-name="message-out" data-size="70" data-c="lightgreen" data-hc="green" data-loop="true"></i>
                                                <h2>Your Message Has Been Sent!</h2>
                                                <div style="text-align: center">
                                                            <button data-dismiss="modal" class="btn btn-sm btn-danger" style="margin: 10px">Close</button>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                
            </section>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    
<!-- PAGE SCRIPT AND CSS -->
    <link rel="stylesheet" type="text/css" href="../../../resources/web/vendors/datatables/css/dataTables.colReorder.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../resources/web/vendors/datatables/css/dataTables.scroller.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../resources/web/vendors/datatables/css/dataTables.bootstrap.css" />

    <script src="../assets/js/advanced-form.js"></script>
    <script src="../assets/js/jquery.multifield.min.js"></script> -->
    <script>

        $('.form-content').multifield({
            section: '.group',
            btnAdd:'#btnAdd',
            btnRemove:'.btnRemove',
        });

        $(function(){
            $('select').on('change',function(){                        
                $('input[name=place]').val($(this).val());            
            });
        });

        $(function(){
            $('select').on('change',function(){                        
                $('input[name=reqperson]').val($(this).val());            
            });
        });

        $(function(){
            $('select').on('change',function(){                        
                $('input[name=asttypesss]').val($(this).val());            
            });
        });
         $(function(){
            $('table1').dataTable();           
            $('table2').dataTable();           
        });

    function sms(){
            $.ajax({
                url: 'https://start.engagespark.com/api/v1/messages/sms',
                type: 'post',
                data: {
                  "organization_id": 7605,
                  "recipient_type": "mobile_number",
                  "mobile_numbers": ["639266775062"],
                  "message": 'msg',
                  "sender_id": "engageSPARK"
                 },
                headers: {
                    "Authorization": 'Token 0a249ba6ac5b0573197027d8da0f4e5e85522f4b',   
                    "Content-type": 'json'  //for object property name, use quoted notation shown in second
                },
                dataType: 'application/json',
                success: function (data) {
                    alert('Message Sent!');
                },
                error: function (request, status, error) {
                     alert('You URL has been blocked by CORS policy: No Access-Control-Allow-Origin header is present on the requested resource');
                }
            });
         }
    </script>