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
                    &nbsp; Group/Organization Management
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
                                    Add Group/Organization
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" action="../functionalities/insert_func.php" method="POST">
                                    <fieldset>
                                         <div class="col-md-6">
                                            <?php  
                                                {
                                                        
                                                $result = mysqli_query($connection, "SELECT MAX(grp_ID) FROM t_group");
                                                $row = mysqli_fetch_array($result);
                                                $last = $row[0];
                                                $finalid = $last + 1;

                                            ?>

                                            <input type="hidden" name="gID" value="<?php echo $finalid; ?>">
                                            <?php } ?>

                                            <label>Group/Org Name:</label>
                                            <input maxlength="150" type="text" name="gname" class="form-control" required="" style="color: black;"  />
                                             <label>Group/Org Description:</label>
                                             <textarea id="textarea" name="gdesc" class="form-control" maxlength="250" rows="9" value="">
                                            </textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Group/Org Leader Assigned:</label>
                                             <select name="gleader" class="form-control" style="color: black;" required="">
                                                       <option value="" selected disabled></option>
                                                       <option value="N/A">N/A</option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `t_groupleader`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $grpldID = $row['grpld_ID'];
                                                                $grpldlast = $row['grpld_last_Name'];
                                                                $grpldfirst = $row['grpld_first_Name'];
                                                                $wname = $grpldfirst.' '.$grpldlast;

                                                          ?>
                                                         <option value="<?php echo $grpldID ?>"><?php echo "$wname"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                            </select>

                                            <label>Group/Org Region:</label>
                                             <select name="gregion" class="form-control" style="color: black;">
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
                                            <label>Group/Org City Location:</label>
                                            <select name="gcity" class="form-control" style="color: black;">
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
                                            <label>Related Religion:</label>
                                             <select name="grlg" class="form-control" style="color: black;">
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
                                            <label>Affiliated Church:</label>
                                             <select name="gaffchurch" class="form-control" style="color: black;" required="">
                                                       <option value="" selected disabled></option>
                                                       <option value="N/A">N/A</option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `t_church`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $affcc = $row['chr_name'];
                                                          ?>
                                                         <option value="<?php echo $affcc ?>"><?php echo "$affcc"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                            </select>
                                            
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top: 10px">
                                                <button type="submit" name="addorg" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                    Manage Groups/Organizations
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Group ID</th>
                                            <th>Group Name</th>
                                            <th>Group Leader</th>
                                            <th>Group Region Location</th>
                                            <th>Group City Location</th>
                                            <th>Related Religion</th>
                                            <th>Chruch Affiliation</th>
                                            <th>Status</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_group` AS grp 
                                                                    LEFT JOIN t_groupleader AS grpld ON 
                                                                    grp.grp_leader = grpld.grpld_ID");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $gID = $row["grp_ID"];
                                                        $gname = $row["grp_name"];
                                                        $glead = $row["grp_leader"];
                                                        $greg = $row["grp_region"];
                                                        $gcity = $row["grp_city"];
                                                        $grlg = $row["grp_religion"];
                                                        $grstat = $row["grp_stat"];
                                                        $gchaff = $row["grp_church_affil"];
                                                        $gleadLname = $row["grpld_last_Name"];
                                                        $gleadFname = $row["grpld_first_Name"];
                                                        $gleadwname = $gleadFname.' '.$gleadLname;
                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $gID; ?></td>
                                                            <td width=""><?php echo $gname; ?></td>
                                                            <td width=""><?php echo $gleadwname; ?></td>
                                                            <td width=""><?php echo $greg; ?></td>
                                                            <td width=""><?php echo $gcity; ?></td>
                                                            <td width=""><?php echo $grlg; ?></td>
                                                            <td width=""><?php echo $gchaff; ?></td>
                                                            <td width=""><?php echo $grstat; ?></td>
                                                            <td style='width:10%'>
                                                                <center>
                                                                    <a href="#edit<?php echo $gID?>" data-toggle="modal" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete<?php echo $gID?>" data-toggle="modal" class="btn btn-danger" title="Toggle Status">
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
                    $view_query = mysqli_query($connection,"SELECT * FROM `t_group` AS grp 
                                                            LEFT JOIN t_groupleader AS grpld ON 
                                                            grp.grp_leader = grpld.grpld_ID");
                    while($row = mysqli_fetch_assoc($view_query))
                    {
                        $gID = $row["grp_ID"];
                        $gname = $row["grp_name"];
                        $gdesc = $row["grp_desc"];
                        $glead = $row["grp_leader"];
                        $greg = $row["grp_region"];
                        $gcity = $row["grp_city"];
                        $grlg = $row["grp_religion"];
                        $gchaff = $row["grp_church_affil"];
                        $gleadLname = $row["grpld_last_Name"];
                        $gleadFname = $row["grpld_first_Name"];
                        $gleadwname = $gleadFname.' '.$gleadLname;
                        $gldr = $row['grpld_ID'];
                                                    
                 ?> 
                 <!--EDIT-->
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?php echo $gID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                                <center>
                                <div class="modal-header" style="background-color: goldenrod">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Edit Details 
                                        <i class="livicon" data-name="edit" data-s="35" data-c="white"></i></h5>
                                </div>
                                </center>
                                <div class="modal-body" style="height:580px;">
                                    <form action="../functionalities/update_func.php" method="POST">
                                        <input type="hidden" name="gID" value="<?php echo $ID?>" />
                                        <div class="col-md-12">
                                              <fieldset>
                                                
                                                <div class="col-md-12">
                                                    <input type="hidden" name="gID" value="<?php echo $gID; ?>">
                                                    <div class="col-md-12">
                                                        <label>Group/Org Name:</label>
                                                        <input maxlength="150" type="text" name="gname" class="form-control" required="" style="color: black;" value="<?php echo $gname?>" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Group/Org Description:</label>
                                                        <textarea id="textarea" name="gdesc" class="form-control" maxlength="250" rows="4" value="<?php echo $gdesc?>" >
                                                        <?php echo $gdesc?></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Group/Org Leader Assigned:</label>
                                                         <select name="gleader" class="form-control" style="color: black;" required="">
                                                                   <option value="N/A">N/A</option>
                                                                   <option selected value="<?php echo $gldr?>"><?php echo $gleadwname?></option>
                                                                   
                                                                    <?php  
                                                                       $sqlemp= "SELECT * FROM `t_groupleader`";
                                                                       $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                            while($row = mysqli_fetch_assoc($results))
                                                                            {
                                                                            $grpldID = $row['grpld_ID'];
                                                                            $grpldlast = $row['grpld_last_Name'];
                                                                            $grpldfirst = $row['grpld_first_Name'];
                                                                            $wname = $grpldfirst.' '.$grpldlast;

                                                                      ?>
                                                                     <option value="<?php echo $grpldID ?>"><?php echo "$wname"; ?></option>
                                                                     <?php 
                                                                         } 
                                                                     ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Group/Org Region:</label>
                                                         <select name="gregion" class="form-control" style="color: black;">
                                                                    <option value="<?php echo $greg?>" selected><?php echo $greg?></option>
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
                                                    <div class="col-md-12">
                                                        <label>Group/Org City Location:</label>
                                                        <select name="gcity" class="form-control" style="color: black;">
                                                                   <option value="<?php echo $gcity?>" selected><?php echo $gcity?></option>
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
                                                    <div class="col-md-12">
                                                        <label>Related Religion:</label>
                                                         <select name="grlg" class="form-control" style="color: black;">
                                                                   <option value="<?php echo $grlg?>" selected><?php echo $grlg?></option>
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
                                                    <div class="col-md-12">
                                                        <label>Affiliated Church:</label>
                                                         <select name="gaffchurch" class="form-control" style="color: black;" required="">
                                                                   <option value="N/A">N/A</option>
                                                                   <option value="<?php echo $gchaff?>" selected><?php echo $gchaff?></option>
                                                                    <?php  
                                                                       $sqlemp= "SELECT * FROM `t_church`";
                                                                       $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                            while($row = mysqli_fetch_assoc($results))
                                                                            {
                                                                            $affcc = $row['chr_name'];
                                                                      ?>
                                                                     <option value="<?php echo $affcc ?>"><?php echo "$affcc"; ?></option>
                                                                     <?php 
                                                                         } 
                                                                     ?>
                                                        </select>
                                                    </div>
                                              </fieldset>
                                              <br>
                                              <div class="col-md-12" style="text-align: right">
                                                  <button type="submit" name="editgrp" class="btn btn-success" style="font-size: 15px">
                                                    <i class="livicon" data-name="check" data-s="14" data-c="white"></i>
                                                    Update
                                                  </button>
                                                  &nbsp;&nbsp;&nbsp;
                                                  <a data-dismiss="modal" class="btn btn-danger" style="font-size: 15px">
                                                    <i class="fa fa-close" data-s="14" data-c="white"></i>
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
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete<?php echo $gID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <center>
                                <div class="modal-header" style="background-color: maroon">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Are you sure you want to change its status?</h5>
                                </div>
                                <div class="modal-body" style="height:180px;">
                                    <form action="../functionalities/archive_func.php" method="POST">
                                        <input type="hidden" name="grpID" value="<?php echo $gID?>" />
                                        <div class="panel">
                                             <label>Change Status:</label>
                                                 <select name="grpstat" class="form-control" style="color: black; width: 50%">
                                                     <option value="Active" selected>Active</option>
                                                     <option value="Inactive">Inactive</option>
                                                </select>
                                                <br>
                                              <button type="submit" name="arch_grp" class="btn btn-success" style="font-size: 16px">
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