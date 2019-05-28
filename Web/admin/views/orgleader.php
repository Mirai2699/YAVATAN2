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
                    <i class="livicon" data-name="laptop" data-size="25" data-loop="true" data-c="#00bc8c" data-hc="#00bc8c" ></i>
                    &nbsp; Group-Leader Management
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
                                    <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Group-Leader
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" action="../functionalities/insert_func.php" method="POST">
                                    <fieldset>
                                         <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label>Last Name:</label>
                                                <input maxlength="150" type="text" name="gl_lname" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            <div class="col-md-4">
                                                <label>Middle Name: (Optional)</label>
                                                <input maxlength="150" type="text" name="gl_mname" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            <div class="col-md-4">
                                                <label>First Name:</label>
                                                <input maxlength="150" type="text" name="gl_fname" class="form-control" required="" style="color: black;"  />
                                           </div>
                                        </div>


                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="col-md-4">
                                                <label>Gender:</label>
                                                <select name="gl_gender" class="form-control" style="color: black;" required>
                                                       <option value="" selected disabled>*Select Gender</option>
                                                       <option value="Male">Male</option>
                                                       <option value="Female">Female</option>
                                                        
                                              </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Birthdate:</label>
                                                <input type="date" name="gl_bday"  class="form-control" required
                                                    max="<?php $now = date('Y-m-d'); $agelimit =  date('Y-m-d',strtotime('-18 year'. $now)); echo $agelimit;?>"
                                                    />
                                           </div>
                                            <div class="col-md-4">
                                              <label>Related Religion:</label>
                                              <select name="gl_rlg" class="form-control" style="color: black;">
                                                       <option value="" selected disabled></option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `r_religion`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $rlg = $row['rlg_name'];
                                                          ?>
                                                         <option value="<?php echo $rlg ?>"><?php echo "$rlg"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                              </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="col-md-3">
                                                <label>Region:</label>
                                                     <select name="gl_rgn" class="form-control" style="color: black;">
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
                                                <label>City:</label>
                                                <select name="gl_city" class="form-control" style="color: black;">
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
                                                <label>Contact #:</label>
                                                <input maxlength="11" type="text" name="gl_contact" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            <div class="col-md-3">
                                                <label>Email Address:</label>
                                                <input maxlength="70" type="email" name="gl_email" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top: 10px">
                                                <button type="submit" name="addorgldr" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                    <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                    &nbsp; 
                                                    Save
                                                    &nbsp;
                                                </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" >
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Group-Leaders
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Group ID</th>
                                            <th>Name</th>
                                            <th>Birthdate</th>
                                            <th>Religion</th>
                                            <th>Region</th>
                                            <th>Contact</th>
                                            <th>Group Assigned</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_groupleader` AS grpld 
                                                                   LEFT JOIN t_group as grp ON grpld.grpld_group = grp.grp_ID");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $gl_ID   = $row["grpld_ID"];
                                                        $gl_lastn = $row["grpld_last_Name"];
                                                        $gl_firstn = $row["grpld_first_Name"];
                                                        $gl_middn  = $row["grpld_middle_Name"];
                                                        $gl_gender = $row["grpld_gender"];
                                                        $gl_bday  = $row["grpld_Birthdate"];
                                                        $gl_rlg = $row["grpld_religion"];
                                                        $gl_rgn = $row["grpld_region"];
                                                        $gl_city  = $row["grpld_city"];
                                                        $gl_contact = $row["grpld_contact"];
                                                        $gl_email = $row["grpld_email"];
                                                        $gl_group  = $row["grpld_group"];
                                                        $gl_actflg = $row["grpld_active_flag"];
                                                        $grp_name = $row["grp_name"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $gID; ?></td>
                                                            <td width=""><?php echo $gl_firstn.' '.$gl_lastn; ?></td>
                                                            <td width=""><?php echo $gl_bday; ?></td>
                                                            <td width=""><?php echo $gl_rlg; ?></td>
                                                            <td width=""><?php echo $gl_rgn; ?></td>
                                                            <td width=""><?php echo $gl_contact; ?></td>
                                                            <td width=""><?php echo $grp_name; ?></td>
                                                            <td width=""><?php echo $gl_actflg; ?></td>
                                                            <td style=''>
                                                                    <center>
                                                                    <a href="#edit<?php echo $gl_ID?>" data-toggle="modal" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                       
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete<?php echo $gl_ID?>" data-toggle="modal" class="btn btn-danger" title="Toggle Status">
                                                                          <i class="livicon" data-name="rotate-left" data-size="16" data-loop="true" data-c="#fff" data-hc="white" ></i>
                                                                         
                                                                    </a>            
                                                                    </center>
                                                           </td>
                                                    </tr>  

                                                    <?php 
                                                      } 
                                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php
                      $view_query = mysqli_query($connection,"SELECT * FROM `t_groupleader` AS grpld 
                                                  LEFT JOIN t_group as grp ON grpld.grpld_group = grp.grp_ID");
                      while($row = mysqli_fetch_assoc($view_query))
                            {
                                $gl_ID   = $row["grpld_ID"];
                                $gl_lastn = $row["grpld_last_Name"];
                                $gl_firstn = $row["grpld_first_Name"];
                                $gl_middn  = $row["grpld_middle_Name"];
                                $gl_gender = $row["grpld_gender"];
                                $gl_bday  = $row["grpld_Birthdate"];
                                $gl_rlg = $row["grpld_religion"];
                                $gl_rgn = $row["grpld_region"];
                                $gl_city  = $row["grpld_city"];
                                $gl_contact = $row["grpld_contact"];
                                $gl_email = $row["grpld_email"];
                                $gl_group  = $row["grpld_group"];
                                $gl_actflg = $row["grpld_active_flag"];
                                $grp_name = $row["grp_name"];

                                                    
                ?>     
                 <!--EDIT-->
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?php echo $gl_ID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <center>
                                <div class="modal-header" style="background-color: goldenrod">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Change Details 
                                        <i class="livicon" data-name="edit" data-s="35" data-c="white"></i></h5>
                                </div>
                            </center>
                                <div class="modal-body" style="height:670px;">
                                    <form action="../functionalities/update_func.php" method="POST">
                                        <input type="hidden" name="gl_ID" value="<?php echo $gl_ID?>" />
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="margin-bottom: 10px">
                                                <label>Last Name:</label>
                                                <input maxlength="150" type="text" name="gl_lname" class="form-control" required="" style="color: black;" 
                                                value="<?php echo $gl_lastn?>" />
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px">
                                                <label>Middle Name: (Optional)</label>
                                                <input maxlength="150" type="text" name="gl_mname" class="form-control" required="" style="color: black;" 
                                                value="<?php echo $gl_middn?>" />
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 10px">
                                                <label>First Name:</label>
                                                <input maxlength="150" type="text" name="gl_fname" class="form-control" required="" style="color: black;" 
                                                value="<?php echo $gl_firstn?>" />
                                           </div>
                                           
                                            <div class="col-md-12" style="margin-bottom: 10px">
                                              <label>Related Religion:</label>
                                              <select name="gl_rlg" class="form-control" style="color: black;">
                                                       <option value="<?php echo $gl_rlg ?>" selected><?php echo $gl_rlg ?></option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `r_religion`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $rlg = $row['rlg_name'];
                                                          ?>
                                                         <option value="<?php echo $rlg ?>"><?php echo "$rlg"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                              </select>
                                            </div>
                                             <div class="col-md-12" style="margin-bottom: 10px">
                                                <label>Region:</label>
                                                     <select name="gl_rgn" class="form-control" style="color: black;">
                                                               <option value="<?php echo $gl_rgn?>" selected><?php echo $gl_rgn?></option>
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
                                            <div class="col-md-12" style="margin-bottom: 10px">
                                                <label>City:</label>
                                                <select name="gl_city" class="form-control" style="color: black;">
                                                           <option value="<?php echo $gl_city?>" selected><?php echo $gl_city?></option>
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
                                            <div class="col-md-6" style="margin-bottom: 10px">
                                                <label>Contact #:</label>
                                                <input maxlength="11" type="text" name="gl_contact" class="form-control" required="" style="color: black;" 
                                                value="<?php echo $gl_contact?>" />
                                            </div>
                                            <div class="col-md-6" style="margin-bottom: 20px">
                                                <label>Email Address:</label>
                                                <input maxlength="70" type="email" name="gl_email" class="form-control" required="" style="color: black;" 
                                                value="<?php echo $gl_email?>" />
                                            </div>
                                            <br>
                                             <div class="col-lg-12" style="background-color: lightgray; margin-bottom: 20px">
                                              <label>Incase of Typographical Error, You can change the following:</label>
                                                <div class="col-md-6">
                                                    <label>Gender:</label>
                                                    <select name="gl_gender" class="form-control" style="color: black;" required>
                                                           <option value="<?php echo $gl_gender?>" selected><?php echo $gl_gender?></option>
                                                           <option value="Male">Male</option>
                                                           <option value="Female">Female</option>
                                                            
                                                  </select>
                                                </div>
                                                <div class="col-md-6" style="margin-bottom: 10px">
                                                    <label>Birthdate:</label>
                                                    <input type="date" name="gl_bday"  class="form-control" value="<?php echo $gl_bday?>"
                                                    max="<?php $now = date('Y-m-d'); $agelimit =  date('Y-m-d',strtotime('-18 year'. $now)); echo $agelimit;?>"
                                                    />
                                                </div>
                                            </div>
                                            <div class="panel" style="text-align: center; margin-top: 10px">
                                                <button type="submit" name="editgrpld" class="btn btn-success" style="font-size: 16px">
                                                  <i class="livicon" data-name="check" data-s="15" data-c="white"></i>
                                                 Update
                                                </button>
                                                &nbsp;&nbsp;&nbsp;
                                                <a data-dismiss="modal" class="btn btn-danger" style="font-size: 16px">
                                                  <i class="fa fa-close" data-s="15" data-c="white"></i>
                                                  Cancel
                                                </a>     
                                          </div>
                                        </div>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
                <!--DELETE-->
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete<?php echo $gl_ID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <center>
                                <div class="modal-header" style="background-color: maroon">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Are you sure you want to change its status?</h5>
                                </div>
                                <div class="modal-body" style="height:180px;">
                                    <form action="../functionalities/archive_func.php" method="POST">
                                        <input type="hidden" name="grpldID" value="<?php echo $gl_ID?>" />
                                        <div class="panel">
                                             <label>Change Status:</label>
                                                 <select name="grpldstat" class="form-control" style="color: black; width: 50%">
                                                     <option value="Active" selected>Active</option>
                                                     <option value="Inactive">Inactive</option>
                                                </select>
                                                <br>
                                              <button type="submit" name="arch_grpld" class="btn btn-success" style="font-size: 16px">
                                                <i class="livicon" data-name="check" data-s="15" data-c="white"></i>
                                                Confirm
                                              </button>
                                              &nbsp;&nbsp;&nbsp;
                                              <a data-dismiss="modal" class="btn btn-danger" style="font-size: 16px">
                                                <i class="fa fa-close" data-s="15" data-c="white"></i>
                                                Cancel
                                              </a>     
                                        </div>
                                    </form>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                 <?php } ?>
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