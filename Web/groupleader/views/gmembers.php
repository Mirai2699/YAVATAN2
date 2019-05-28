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
                    <i class="livicon" data-name="users" data-size="25" data-loop="true" data-c="orange" data-hc="red" ></i>
                    &nbsp; Group-Member Management
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                <div class="clearfix"></div>
            
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" >
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Group-Members
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Volunteer ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Region</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $grpID = $_SESSION['grpID'];
                                        $result = mysqli_query($connection,"SELECT * FROM `t_volunteer` where volun_group = '$grpID' and volun_constat = '0' and volun_active_flag = 1");
                                        
                                             while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        $volun_ID   = $row["volun_ID"];
                                                        $volun_lastn = $row["volun_last_Name"];
                                                        $volun_firstn = $row["volun_first_Name"];
                                                        $volun_middn  = $row["volun_middle_Name"];
                                                        $volun_gender = $row["volun_gender"];
                                                        $volun_bday  = $row["volun_Birthdate"];
                                                        $volun_rlg = $row["volun_religion"];
                                                        $volun_rgn = $row["volun_region"];
                                                        $volun_city  = $row["volun_city"];
                                                        $volun_contact = $row["volun_contact"];
                                                        $volun_email = $row["volun_email"];
                                                        $volun_group  = $row["volun_group"];
                                                        $volun_constat = $row["volun_constat"];
                                                        $volun_status = $row["volun_status"];
                                                        $volun_actflg = $row["volun_active_flag"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $volun_ID; ?></td>
                                                            <td width=""><?php echo $volun_firstn.' '.$volun_lastn; ?></td>
                                                            <td width=""><?php echo $volun_gender; ?></td>
                                                            <td width=""><?php echo $volun_rlg; ?></td>
                                                            <td width=""><?php echo $volun_rgn; ?></td>
                                                            <td width=""><?php echo $volun_contact; ?></td>
                                                            <td width=""><?php echo $volun_status; ?></td>
                                                            <td style=''>
                                                                    <center>
                                                                    <a data-toggle="modal" href="#changestat<?php echo $volun_ID?>" class="btn btn-success">
                                                                         <i class="livicon" data-name="retweet" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Change Status"></i>
                                                                    </a>
                                                                    <a data-toggle="modal" href="#promote<?php echo $volun_ID?>" class="btn btn-info">
                                                                         <i class="livicon" data-name="upload-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Promote to Contact"></i>
                                                                    </a>
                                                                    <a data-toggle="modal" href="#delete<?php echo $volun_ID?>" class="btn btn-danger">
                                                                          <i class="livicon" data-name="trash" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Archive"></i>
                                                                    </a>            
                                                                    </center>
                                                           </td>
                                                    </tr> 

                                                    <!--CHANGE STATUS-->
                                                    <div class="modal fade" id="changestat<?php echo $volun_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-body" style="text-align: center">
                                                                   <div class="panel">
                                                                      <i class="livicon" data-name="retweet" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                      <p style="font-size: 17px">
                                                                       Are you sure you want to change the member's status?
                                                                      </p>
                                                                      <form role="form" action="../functionalities/member.php" method="POST">
                                                                           <input type="hidden" name="volunID" value="<?php echo $volun_ID?>">
                                                                           <center>
                                                                             <div class="panel" style="width: 50%; text-align: center">
                                                                                <label>Member's Status:</label>
                                                                                <select name="volun_status" class="form-control"  id="newunit" style="color: black;" >
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
                                                                           <button type="submit" class="btn btn-success" name="changestat">Confirm</button>
                                                                      </form>
                                                                       &nbsp;
                                                                       <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                                                                   </div>
                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>

                                                    <!--PROMOTION--> 
                                                    <div class="modal fade" id="promote<?php echo $volun_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-body" style="text-align: center">
                                                                   <div class="panel">
                                                                      <i class="livicon" data-name="upload-alt" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                      <p style="font-size: 17px">
                                                                       Are you sure you want to promote this member to a contact?
                                                                      </p>
                                                                      <form role="form" action="../functionalities/member.php" method="POST">
                                                                           <input type="hidden" name="volunID" value="<?php echo $volun_ID?>">
                                                                           <button type="submit" class="btn btn-success" name="promotecontact">Yes</button>
                                                                      </form>
                                                                       &nbsp;
                                                                       <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                                   </div>
                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>
                                                    <!--ARCHIVE--> 
                                                    <div class="modal fade" id="delete<?php echo $volun_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-body" style="text-align: center">
                                                                   <div class="panel">
                                                                      <i class="livicon" data-name="trash" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                      <p style="font-size: 17px">
                                                                       Are you sure you want to archive this member?
                                                                      </p>
                                                                      <form role="form" action="../functionalities/member.php" method="POST">
                                                                           <input type="hidden" name="volunID" value="<?php echo $volun_ID?>">
                                                                           <button type="submit" class="btn btn-success" name="archivemember">Yes</button>
                                                                      </form>
                                                                       &nbsp;
                                                                       <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                                   </div>
                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>
                                                    <?php 
                                                      } 
                                                        
                                                  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                <!--START CONTACT TABLE-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable"  >
                            <div class="panel-heading" style="background-color: green">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="phone" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Group Contacts
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table2">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Volunteer ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Region</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        $grpID = $_SESSION['grpID'];


                                        $result = mysqli_query($connection,"SELECT * FROM `t_volunteer` where volun_group =
                                                   '$grpID' and volun_constat = 1 and volun_active_flag = 1 ");
                                             while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        $volun_ID   = $row["volun_ID"];
                                                        $volun_lastn = $row["volun_last_Name"];
                                                        $volun_firstn = $row["volun_first_Name"];
                                                        $volun_middn  = $row["volun_middle_Name"];
                                                        $volun_gender = $row["volun_gender"];
                                                        $volun_bday  = $row["volun_Birthdate"];
                                                        $volun_rlg = $row["volun_religion"];
                                                        $volun_rgn = $row["volun_region"];
                                                        $volun_city  = $row["volun_city"];
                                                        $volun_contact = $row["volun_contact"];
                                                        $volun_email = $row["volun_email"];
                                                        $volun_group  = $row["volun_group"];
                                                        $volun_constat = $row["volun_constat"];
                                                        $volun_status = $row["volun_status"];
                                                        $volun_actflg = $row["volun_active_flag"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $volun_ID; ?></td>
                                                            <td width=""><?php echo $volun_firstn.' '.$volun_lastn; ?></td>
                                                            <td width=""><?php echo $volun_gender; ?></td>
                                                            <td width=""><?php echo $volun_rlg; ?></td>
                                                            <td width=""><?php echo $volun_rgn; ?></td>
                                                            <td width=""><?php echo $volun_contact; ?></td>
                                                            <td width=""><?php echo $volun_status; ?></td>
                                                            <td style=''>
                                                                    <center>
                                                                    <a data-toggle="modal" href="#changestatus<?php echo $volun_ID?>" class="btn btn-success">
                                                                         <i class="livicon" data-name="retweet" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Change Status"></i>
                                                                    </a>
                                                                    <a data-toggle="modal" href="#remove<?php echo $volun_ID?>" class="btn btn-warning">
                                                                         <i class="livicon" data-name="download-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Remove from contacts"></i>
                                                                    </a>
                                                                           
                                                                    </center>
                                                           </td>
                                                    </tr> 

                                                    <!--CHANGE STATUS-->
                                                    <div class="modal fade" id="changestatus<?php echo $volun_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-body" style="text-align: center">
                                                                   <div class="panel">
                                                                      <i class="livicon" data-name="retweet" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                      <p style="font-size: 17px">
                                                                       Are you sure you want to change the member's status?
                                                                      </p>
                                                                      <form role="form" action="../functionalities/member.php" method="POST">
                                                                           <input type="hidden" name="volunID" value="<?php echo $volun_ID?>">
                                                                           <center>
                                                                             <div class="panel" style="width: 50%; text-align: center">
                                                                                <label>Member's Status:</label>
                                                                                <select name="volun_status" class="form-control"  id="newunit" style="color: black;" >
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
                                                                           <button type="submit" class="btn btn-success" name="changestat">Confirm</button>
                                                                      </form>
                                                                       &nbsp;
                                                                       <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                                                                   </div>
                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>

                                                    <!--PROMOTION--> 
                                                    <div class="modal fade" id="remove<?php echo $volun_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: 10%" >
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-body" style="text-align: center">
                                                                   <div class="panel">
                                                                      <i class="livicon" data-name="download-alt" data-size="70" data-loop="true" data-c="black" data-hc="gray"></i>
                                                                      <p style="font-size: 17px">
                                                                       Are you sure you want to remove this member from contacts?
                                                                      </p>
                                                                      <form role="form" action="../functionalities/member.php" method="POST">
                                                                           <input type="hidden" name="volunID" value="<?php echo $volun_ID?>">
                                                                           <button type="submit" class="btn btn-success" name="removecontact">Yes</button>
                                                                      </form>
                                                                       &nbsp;
                                                                       <button type="button" data-dismiss="modal" class="btn btn-danger">No</button>
                                                                   </div>
                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>
                                                   
                                                    <?php 
                                                      } 
                                                        ?>
                                    </tbody>
                                </table>
                            </div>
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