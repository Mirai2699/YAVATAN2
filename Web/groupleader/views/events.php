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
                    <i class="livicon" data-name="calendar" data-size="25" data-loop="true" data-c="#00bc8c" data-hc="#00bc8c" ></i>
                    &nbsp; Events Management
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
                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Event Details
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" method="POST" action="../functionalities/eve_manage.php">
                                    <fieldset>
                                         <div class="col-md-12" style="margin-top: 10px">
                                         	<div style="display: none">
	                                             <?php  
                                                    {     
                                                      $grpID = $_SESSION['grpID'];
                                                      $grpldID = $_SESSION['grpldID'];
                                                   
                                                ?>
                                             	<label>Event By Group:</label>
	                                            <input maxlength="150" type="text" name="ev_grp" class="form-control" value="<?php echo $grpID?>"/>

	                                            <label>Event GLeader Assigned:</label>
	                                            <input maxlength="150" type="text" name="ev_gldr" class="form-control" value="<?php echo $grpldID?>"/>
                                                <?php } ?>
                                             </div>
                                             <div class="col-md-6">
	                                            <label>Event Name:</label>
	                                            <input maxlength="150" type="text" name="ev_name" class="form-control" required="" style="color: black;"  />
                                             </div>
                                             <div class="col-md-6">
	                                            <label>Event Description:</label>
	                                            <input maxlength="150" type="text" name="ev_desc" class="form-control" required="" style="color: black;"  />
	                                         </div>
                                         </div>
                                        <div class="col-md-12" style="margin-top: 10px"> 
                                        	<div class="col-md-3">
	                                          <label>Start Date:</label>
	                                            <input maxlength="150" type="date" name="ev_start" class="form-control" required="" style="color: black;"  />
	                                        </div>
	                                        <div class="col-md-3">
	                                            <label>End Date:</label>
	                                            <input maxlength="150" type="date" name="ev_end" class="form-control" required="" style="color: black;
	                                            "  />
                                            </div>
                                             <div class="col-md-3">
                                                <label>Estimated Budget:</label>
                                                 <input style="color: black;" type="number" name="ev_budget" class="form-control" required="" step="0.01" min="100" max="100000" />
                                            </div>
                                            <div class="col-md-3">
                                                <label>Target Number of Audience:</label>
                                                  <input style="color: black;" type="number" name="ev_numaud" class="form-control" required="" step="1" min="10" max="1000000" />
                                            </div>
                                         </div>
                                        
                                         <div class="col-md-12" style="margin-top: 10px">
                                            <div class="col-md-3">
	                                            <label>Event Region:</label>
	                                             <select name="ev_rgn" class="form-control" style="color: black;">
	                                                       <option value="" selected disabled></option>
	                                                        <?php  
	                                                           $sqlemp= "SELECT * FROM `r_region`";
	                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
	                                                                while($row = mysqli_fetch_assoc($results))
	                                                                {
	                                                                $region = $row['rgn_name'];
	                                                          ?>
	                                                         <option value="<?php echo $region ?>"><?php echo "$region"; ?></option>
	                                                         <?php 
	                                                             } 
	                                                         ?>
		                                           </select>
	                                        </div>
                                        	<div class="col-md-3">
	                                            <label>Event City Location:</label>
	                                            <select name="ev_city" class="form-control" style="color: black;">
	                                                       <option value="" selected disabled></option>
	                                                        <?php  
	                                                           $sqlemp= "SELECT * FROM `r_city`";
	                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
	                                                                while($row = mysqli_fetch_assoc($results))
	                                                                {
	                                                                $city = $row['city_name'];
	                                                          ?>
	                                                         <option value="<?php echo $city ?>"><?php echo "$city"; ?></option>
	                                                         <?php 
	                                                             } 
	                                                         ?>
	                                            </select>
                                            </div>
                                            <div class="col-md-3">
	                                            <label>Event Type:</label>
	                                             <select name="ev_type" id="evtype" class="form-control" onchange="gethousemodel" style="color: black;">
	                                                       <option value="" selected disabled></option>
	                                                        <?php  
	                                                           $sqlemp= "SELECT * FROM `r_event_type`";
	                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
	                                                                while($row = mysqli_fetch_assoc($results))
	                                                                {
	                                                                $evtype = $row['ev_type_name'];
	                                                          ?>
	                                                         <option value="<?php echo $evtype ?>"><?php echo "$evtype"; ?></option>
	                                                         <?php 
	                                                             } 
	                                                         ?>
	                                            </select>
	                                        </div>
	                                        <div class="col-md-3">
	                                            <label>Event Target Audience Type:</label>
	                                             <select name="ev_aud" class="form-control" style="color: black;">
	                                                       <option value="" selected disabled></option>
	                                                        <?php  
	                                                           $sqlemp = "SELECT * FROM `r_event_audience`";
	                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
	                                                                while($row = mysqli_fetch_assoc($results))
	                                                                {
	                                                                $auddesc = $row['ev_aud_desc'];
	                                                          ?>
	                                                         <option value="<?php echo $auddesc ?>"><?php echo "$auddesc"; ?></option>
	                                                         <?php 
	                                                             } 
	                                                         ?>
	                                            </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 text-right" style="margin-top: 10px">
                                                <a href="#confirmsave" data-toggle="modal" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                    <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                    &nbsp; 
                                                    Save
                                                    &nbsp;
                                                </a>
                                                <!-- <button type="submit" name="addevent" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                    <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                    &nbsp; 
                                                    Save
                                                    &nbsp;
                                                </button> -->
                                        </div>
                                    </fieldset>

                                    <div class="modal fade-in" id="confirmsave" tabindex="-1" aria-hidden="false" style="display:none;" >
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="height: 670px; width: 870px">
                                                <div class="modal-header" style="background-color: skyblue; color: white; text-align: center">
                                                    <h2>Event Creation Analysis</h2>
                                                </div>
                                                <div class="modal-body" >
                                                    <div class="panel" style="">
                                                        <h4 style="text-align: center">With the given analysis, you can create an event with the odds in your favor...</h4>
                                                        <div class="col-lg-12">
                                                        	
                                                            <?php 
                                                                  include("../functionalities/eve_predict.php");
                                                             ?>
                                                           <!--  <p style="font-size: 18px; text-align: center; margin-top: 5px">
                                                            	<b>
                                                            		Are You Sure You Want to Continue?
                                                            	</b>
                                                            </p> -->
                                                        </div>

                                                    </div>             
                                                </div>

                                                <div class="panel" style="text-align: center; margin-top: 400px">
                                                	<div class="panel" style="padding: 1px; background-color: #6e6e6e"></div>
                                                	<a data-toggle="modal" data-dismiss="modal" href="#ConfirmEventEntry" class="btn btn-success">
                                                		<i class="fa fa-check"></i>
                                                		Confirm Entry
                                                	</a>
                                                     
                                                     <button data-dismiss="modal" class="btn btn-danger">
                                                         <i class="fa fa-reply"></i>
                                                          Cancel
                                                     </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="ConfirmEventEntry" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:green">
                                                    <h3 style="text-align: center; color: white">
                                                    	Event Entry Confirmation
                                                	</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12" style="text-align: center;">
                                                        	<p style="font-size: 16px; margin: 10px">
                                                        		<b>
	                                                        		<i>
	                                                        		With this confirmation, it means that you agreed to the event prediction probabilities in succession or regardless to the outcome depending on your event setup specifications.
	                                                        		</i>
	                                                        		<br><br>
	                                                        		Are you sure you want to continue this event setup? 
	                                                        	</b>
                                                        	</p>
                                                            <button type="submit"  name="addevent" class="btn btn-success">
                                                               <i class="fa fa-check"></i>
                                                           	   Yes, Confirm the Entry
                                                     		</button>    
                                                     		&nbsp; &nbsp; &nbsp; 
                                                     		<a  data-toggle="modal" data-dismiss="modal" href="#confirmsave" class="btn btn-danger">
                                                     		   <i class="fa fa-close"></i>
                                                     		   No, Cancel the Entry
                                                     	    </a>    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>












<!--EVENT MODIFICATION AND CONFIRMATION-->

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" >
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Events
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Group ID</th>
                                            <th>Event Name</th>
                                            <th>Group Initiator</th>
                                            <th>Event Start Date</th>
                                            <th>City Location</th>
                                            <th>Event Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $groupID = $_SESSION['grpID'];
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_event` AS EVE INNER JOIN `t_groupleader` AS GLD ON EVE.event_leader = GLD.grpld_ID WHERE EVE.event_status = 'PENDING' and event_bygrp = '$grpldID' ");
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

                                                        $grpldlast = $row["grpld_last_Name"];
                                                        $grpldfirst = $row["grpld_first_Name"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ev_ID; ?></td>
                                                            <td width=""><?php echo $ev_name; ?></td>
                                                            <td width=""><?php echo $grpldfirst.' '.$grpldlast; ?></td>
                                                            <td width=""><?php echo $ev_stdt; ?></td>
                                                            <td width=""><?php echo $ev_cty; ?></td>
                                                            <td width=""><?php echo $ev_typ; ?></td>
                                                             <td width=""><?php echo $ev_stat; ?></td>
                                                            <td style='width:20%'>
                                                                    <center>
                                                                    <a data-toggle="modal" href="#budget<?php echo $ev_ID?>" class="btn btn-info">
                                                                         <i class="livicon" data-name="money" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="View Expenses"></i>
                                                                         
                                                                    </a>
                                                                    <a data-toggle="modal" href="#done<?php echo $ev_ID?>" class="btn btn-success">
                                                                         <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Mark as Done"></i>
                                                                         
                                                                    </a>
                                                                    <a data-toggle="modal" href="#edit<?php echo $ev_ID?>" class="btn btn-warning">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Modify Details"></i>
                                                                         
                                                                    </a>   
                                                                    <a data-toggle="modal" href="#delete" class="btn btn-danger">
                                                                          <i class="livicon" data-name="trash" data-size="16" data-loop="true" data-c="#fff" data-hc="white" title="Archive"></i>
                                                                         
                                                                    </a>            
                                                                    </center>
                                                           </td>
                                                    </tr>  

                                               

                                                <!--EDIT EVENT DETAILS-->
                                                <div class="modal fade" id="edit<?php echo $ev_ID?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: " >
                                                      <div class="modal-dialog" style="width: 80% ">
                                                          <div class="modal-content">
                                                            <div class="modal-header" style="background-color: goldenrod; color: white">
                                                                <h2>Edit Event Details</h2>
                                                            </div>
                                                              <div class="modal-body">
                                                                   <div class="panel">
                                                                      <form role="form" action="../functionalities/eve_manage.php" method="POST">
                                                                         <input type="hidden" name="volunID" value="<?php echo $volun_ID?>">
                                                                         <input type="hidden" name="ev_ID" value="<?php echo $ev_ID?>">
                                                                            <div class="panel" style="width: 100%; text-align: center; ">
                                           
                                                                            <div class="col-md-12" style="margin-top: 10px">
                                                                                 <div class="col-md-6">
                                                                                    <label>Event Name:</label>
                                                                                    <input maxlength="150" type="text" name="ev_name" class="form-control" required="" value="<?php echo $ev_name?>" style="color: black;"  />
                                                                                 </div>
                                                                                 <div class="col-md-6">
                                                                                    <label>Event Description:</label>
                                                                                    <input maxlength="150" type="text" name="ev_desc" class="form-control" required="" value="<?php echo $ev_desc?>" style="color: black;"  />
                                                                                 </div>
                                                                             </div>
                                                                             <div class="col-md-12" style="margin-top: 10px"> 
                                                                                <div class="col-md-3">
                                                                                  <label>Start Date:</label>
                                                                                    <input maxlength="150" type="date" name="ev_start" class="form-control" required="" value="<?php echo $ev_stdt?>" style="color: black;"  />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label>End Date:</label>
                                                                                    <input maxlength="150" type="date" name="ev_end" class="form-control" required="" value="<?php echo $ev_endt?>" style="color: black;
                                                                                    "  />
                                                                                </div>
                                                                                 <div class="col-md-3">
                                                                                    <label>Estimated Budget:</label>
                                                                                     <input style="color: black;" type="number" name="ev_budget" class="form-control" required="" step="0.01" min="100" max="15000" value="<?php echo $ev_bdgt ?>" />
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label>Target Number of Audience:</label>
                                                                                     <input style="color: black;" type="number" name="ev_numaud" class="form-control" required="" step="1" min="10" max="1000000" value="<?php echo $ev_bdgt ?>"/>
                                                                                </div>
                                                                             </div>
                                                                            
                                                                             <div class="col-md-12" style="margin-top: 10px; margin-bottom: 30px">
                                                                                <div class="col-md-3">
                                                                                    <label>Event Region:</label>
                                                                                     <select name="ev_rgn" class="form-control" style="color: black;">
                                                                                               <option value="<?php echo $ev_rgn?>" selected><?php echo $ev_rgn?></option>

                                                                                                <?php  
                                                                                                   $sqlemp= "SELECT * FROM `r_region`";
                                                                                                   $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                                                        while($row = mysqli_fetch_assoc($results))
                                                                                                        {
                                                                                                        $region = $row['rgn_name'];
                                                                                                  ?>
                                                                                                 <option value="<?php echo $region ?>"><?php echo "$region"; ?></option>
                                                                                                 <?php 
                                                                                                     } 
                                                                                                 ?>
                                                                                       </select>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label>Event City Location:</label>
                                                                                    <select name="ev_city" class="form-control" style="color: black;">
                                                                                               <option value="<?php echo $ev_cty?>" selected><?php echo $ev_cty?></option>
                                                                                                <?php  
                                                                                                   $sqlemp= "SELECT * FROM `r_city`";
                                                                                                   $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                                                        while($row = mysqli_fetch_assoc($results))
                                                                                                        {
                                                                                                        $city = $row['city_name'];
                                                                                                  ?>
                                                                                                 <option value="<?php echo $city ?>"><?php echo "$city"; ?></option>
                                                                                                 <?php 
                                                                                                     } 
                                                                                                 ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label>Event Type:</label>
                                                                                     <select name="ev_type" class="form-control" style="color: black;">
                                                                                               <option value="<?php echo $ev_typ?>" selected><?php echo $ev_typ?></option>
                                                                                                <?php  
                                                                                                   $sqlemp= "SELECT * FROM `r_event_type`";
                                                                                                   $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                                                        while($row = mysqli_fetch_assoc($results))
                                                                                                        {
                                                                                                        $evtype = $row['ev_type_name'];
                                                                                                  ?>
                                                                                                 <option value="<?php echo $evtype ?>"><?php echo "$evtype"; ?></option>
                                                                                                 <?php 
                                                                                                     } 
                                                                                                 ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label>Event Target Audience:</label>
                                                                                     <select name="ev_aud" class="form-control" style="color: black;">
                                                                                               <option value="<?php echo $ev_aud?>" selected><?php echo $ev_aud?></option>
                                                                                                <?php  
                                                                                                   $sqlemp = "SELECT * FROM `r_event_audience`";
                                                                                                   $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                                                        while($row = mysqli_fetch_assoc($results))
                                                                                                        {
                                                                                                        $auddesc = $row['ev_aud_desc'];
                                                                                                  ?>
                                                                                                 <option value="<?php echo $auddesc ?>"><?php echo "$auddesc"; ?></option>
                                                                                                 <?php 
                                                                                                     } 
                                                                                                 ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                   </div>
                                                                   <div class="panel" style="margin-top: 13%; text-align: right">
                                                                        <div style="margin-top: 10px">
                                                                                <button type="submit"  name="updateevent" class="btn btn-info">
                                                                                   <i class="fa fa-save"></i>
                                                                                   Save
                                                                               </button>
                                                                               <button data-dismiss="modal" class="btn btn-danger">
                                                                                   <i class="fa fa-close"></i>
                                                                                   Close
                                                                               </button>
                                                                        </div>
                                                                    </div>
                                                                  </form>

                                                              </div>
                                                           </div>
                                                       </div>
                                                    </div>

                                                   
                                                    <?php 
                                                      } 
                                                        ?>
                                    </tbody>
                                </table>



                                <!--START TEST-->
                                   <!--CHANGE STATUS-->
                                    <?php
                                        $groupID = $_SESSION['grpID'];
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_event` AS EVE INNER JOIN `t_groupleader` AS GLD ON EVE.event_leader = GLD.grpld_ID WHERE EVE.event_status = 'PENDING' and event_bygrp = '$grpldID' ");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ev_ID = $row["event_ID"];
                                                        $ev_name = $row["event_name"];
                                                        $ev_desc = $row["event_desc"];
                                                        $ev_grp = $row["event_bygrp"];
                                                        $ev_ldr = $row["event_leader"];
                                                        $ev_bdgt = $row["event_budget"];
                                                        $ev_numaud = $row["event_tarnum"];
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

                                                        $grpldlast = $row["grpld_last_Name"];
                                                        $grpldfirst = $row["grpld_first_Name"];

                                                    
                                            ?>  
                                             <!--VIEW BUDGET-->
                                                <div class="modal fade" id="budget<?php echo $ev_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                                        <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color:navy">
                                                                    <h3 style="text-align: left; color: white">Event Actual Expenses Breakdown</h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12" style="text-align: left;">
                                                                            <h3><?php echo $ev_name;   ?></h3>
                                                                            <hr>
                                                                            <table class="table table-striped">
                                                                                <thead>
                                                                                    <th>Particulars</th>
                                                                                    <th>Amount</th>
                                                                                    <th>Date Spent</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                            $view_query1 = mysqli_query($connection,"SELECT * FROM  `t_event_budget` WHERE bdgt_eventID = '$ev_ID' ");
                                                                                                 $total = 0;
                                                                                                 while($row1 = mysqli_fetch_assoc($view_query1))
                                                                                                        {   
                                                                                                            
                                                                                                            $bdgt1_ID = $row1["bdgt_ID"];
                                                                                                            $bdgt1_part = $row1["bdgt_particular"];
                                                                                                            $bdgt1_amount = $row1["bdgt_amount"];
                                                                                                            $bdgt1_date = $row1["bdgt_date_spent"];

                                                                                                            $total = ($total + $bdgt1_amount);
                                                                                                        
                                                                                        ?>  
                                                                                        <tr class="gradeX">
                                                                                            <td><?php echo $bdgt1_part?></td>
                                                                                            <td><?php echo '₱ ', $bdgt1_amount?></td>
                                                                                            <td><?php echo $bdgt1_date?></td>
                                                                                        </tr>
                                                                                        <?php } ?>
                                                                                </tbody>
                                                                            </table>
                                                                            <label>Total Amount: <?php echo '₱ ', $total; ?></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <!-- <a data-toggle="modal" href="#eventconf" class="btn btn-primary">Register</a> -->
                                                                    <button type="button" data-dismiss="modal" class="btn">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <!--CONFIRM EVENT DONE-->
                                                <div class="modal fade-in" id="done<?php echo $ev_ID?>" tabindex="-2" aria-hidden="false" style="display:none;" >
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-body" style="text-align: center">
                                                                    <div class="panel">
                                                                        <p style="font-size: 17px">
                                                                            Are you sure you want to mark this event as done?<br>
                                                                        </p>
                                                                        <i class="livicon" data-name="calendar" data-size="70" data-loop="true" data-c="black" data-hc="green" title="Archive"></i>

                                                                        <p style="font-size: 17px"><b><i>
                                                                            Before Marking this event as "DONE", please answer the following as an evaluation for the said event.</i></b>
                                                                        </p>
                                                                        <form role="form" action="../functionalities/eve_manage.php" method="POST">
                                                                            <input type="hidden" name="ev_ID" value="<?php echo $ev_ID ?>">
                                                                            <input type="hidden" name="ev_grp" value="<?php echo $ev_grp ?>">
                                                                            <input type="hidden" name="ev_gldr" value="<?php echo $ev_ldr ?>">
                                                                            <input type="hidden" name="ev_name" value="<?php echo $ev_name ?>">
                                                                          <input type="hidden" name="ev_numaud" value="<?php echo $ev_numaud ?>">
                                                                            <input type="hidden" name="ev_desc" value="<?php echo $ev_desc ?>">
                                                                            <input type="hidden" name="ev_start" value="<?php echo $ev_stdt ?>">
                                                                            <input type="hidden" name="ev_end" value="<?php echo $ev_endt ?>">
                                                                            <input type="hidden" name="ev_budget" value="<?php echo $ev_bdgt ?>">
                                                                            <input type="hidden" name="ev_rgn" value="<?php echo $ev_rgn ?>">
                                                                            <input type="hidden" name="ev_city" value="<?php echo $ev_cty ?>">
                                                                            <input type="hidden" name="ev_type" value="<?php echo $ev_typ ?>">
                                                                            <input type="hidden" name="ev_aud" value="<?php echo $ev_aud  ?>">


                                                                            <div class="col-md-12" style="margin-top: 10px; margin-bottom: 10px">
                                                                            <div class="col-md-6">
                                                                                        <label>How's the weather?</label>
                                                                                        <select name="ev_weather" class="form-control" style="color: black;">
                                                                                            <option value="" selected disabled></option>
                                                                                            <option value="Sunny">Sunny</option>
                                                                                            <option value="Cloudy">Cloudy</option>
                                                                                            <option value="Windy">Windy</option>
                                                                                            <option value="Fair">Fair</option>
                                                                                            <option value="Rainy">Rainy</option>
                                                                                            <option value="Stormy">Stormy</option>
                                                                                        </select>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label>What is the actual budget used?</label>
                                                                                <!--  <input style="color: black;" type="number" name="ev_act_bdgt" class="form-control" required="" step="0.01" min="100" max="100000" value="<?php echo $ev_act_bdgt ?>" /> -->
                                                                                <a data-toggle="modal" class="btn btn-primary" href="#actbudget<?php echo $ev_ID?>">Layout Budget</a>
                                                                                <!--CHANGE STATUS-->
                                                                                
                                                                            </div>
                                                                                 <?php 
                                                                                        $sqlemp = "SELECT * FROM `t_event_attendance` WHERE ev_atnd_eventID = '$ev_ID'";
                                                                                            if ($result=mysqli_query($connection,$sqlemp))
                                                                                            {
                                                                                            // Return the number of rows in result set
                                                                                            $rowcount=mysqli_num_rows($result);
                                                                                                              
                                                                                            ?>
                                                                                 <input type="hidden" name="ev_atts" value="<?php echo $rowcount?>">
                                                                                 <?php } ?>

                                                                                  <?php 
                                                                                       $view_query1 = mysqli_query($connection,"SELECT * FROM  `t_event_budget` WHERE bdgt_eventID = '$ev_ID' ");
                                                                                                 $total = 0;
                                                                                                 while($row1 = mysqli_fetch_assoc($view_query1))
                                                                                            {   
                                                                                                          
                                                                                              $bdgt1_amount = $row1["bdgt_amount"];
                                                                                              $total = ($total + $bdgt1_amount);
                                                                                            }               
                                                                                            ?>
                                                                                 <input type="hidden" name="ev_actualbdgt" value="<?php echo $total?>">
                                                                                
                                                                        </div>
                                                                        <button type="submit" class="btn btn-success" name="eventdone">
                                                                            <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="white" data-hc="white" title="Archive"></i>
                                                                            Mark as Done
                                                                        </button>
                                                                                                   &nbsp;
                                                                        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                
                                                <div class="modal fade-in" id="actbudget<?php echo $ev_ID?>" tabindex="-2" aria-hidden="false" style="display:none;" >
                                                <div class="modal-dialog">
                                                    <div class="modal-content" style="width: 130%">
                                                        <div class="modal-header" style="background-color: navy; color: white ">
                                                            <h3>Breakdown of Event Total Expenses</h3>
                                                        </div>
                                                        <div class="modal-body" style="text-align: left; background-color: white">
                                                                    <div class="panel">  
                                                                       <div class="adv-table">
                                                                        <table class="display table table-bordered table-striped">                                
                                                                            <tr>
                                                                                <td>                                        
                                                                        <form action="../functionalities/addbudget.php" method="POST">
                                                                            <div class="form-content">
                                                                                <input type="hidden" name="ab_eventID" value="<?php echo $ev_ID ?>">
                                                                                <div class="row" style="margin: 4px">
                                                                                    <div class="col-md-12">
                                                                                            <p>
                                                                                                <button type="button" id="btnAdd" class="btn btn-primary">      
                                                                                                <i class="livicon" data-name="plus" data-size="17" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                                                Add Particular
                                                                                                </button>
                                                                                            </p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row group">                                                        
                                                                                     <div class="col-md-4">
                                                                                        <div class="form-group">
                                                                                            <label>Particular:</label>
                                                                                            <input maxlength="225" type="text" name="ab_part[]" class="form-control" required="" style="color: black;"  />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <div class="form-group">
                                                                                            <label>Amount:</label>
                                                                                            <input name="ab_amount[]" type="number" class="form-control" required="" step="0.01" min="100" max="100000" />
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-4">
                                                                                        <div class="form-group">
                                                                                            <label>Date Spent:</label>
                                                                                            <input name="ab_date[]" type="date" class="form-control" required="" />
                                                                                        </div>
                                                                                    </div>
                                                                                     <div class="col-md-1">
                                                                                        <div class="form-group">
                                                                                            <button type="button" class="btn btn-danger btnRemove" style="margin-top: 23px;"><i class="livicon" data-name="remove" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                

                                                                               </div>
                                                                               <div class="form-group" style="margin-top: 5px;">
                                                                                    <div class="col-md-12 text-right" style="margin-bottom: 30px">
                                                                                        <button type="submit" name="addbudget" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px;  ">
                                                                                            <i class="livicon" data-name="calculator" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                                            &nbsp; 
                                                                                            Compute
                                                                                            &nbsp;
                                                                                        </button>
                                                                                        <button type="button" data-dismiss="modal" class="btn btn-priamry">Cancel</button>
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
                                                </div>
                                            </div>
                                        </div>
                                                <?php } ?>
                                <!--END TEST-->

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

    <script src="../assets/js/advanced-form.js"></script>
    <script src="../assets/js/jquery.multifield.min.js"></script> -->
    <script>


        $()

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

    </script>