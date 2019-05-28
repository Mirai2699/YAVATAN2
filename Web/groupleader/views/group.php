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
                    &nbsp;Group Information Management
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
                                    Manage Group Details
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" action="../functionalities/group_manage.php" method="post">
                                    <fieldset>
                                        <?php
                                            $currgrp = $_SESSION['grpID'];
                                                                                        
                                            $view_query = mysqli_query($connection,"SELECT * FROM `t_group` where grp_ID = '$currgrp' ");
                                                 while($row = mysqli_fetch_assoc($view_query))
                                                        {       
                                                            $grp_ID = $row["grp_ID"];
                                                            $grp_name = $row["grp_name"];
                                                            $grp_desc = $row["grp_desc"];
                                                            $grp_rgn = $row["grp_region"];
                                                            $grp_city = $row["grp_city"];
                                                            $grp_rlg = $row["grp_religion"];
                                                            $grp_church = $row["grp_church_affil"];

                                                        
                                                    
                                            ?>    
                                            <input type="hidden" name="grp_ID" value="<?php echo  $grp_ID;?>"/>
                                        <div class="col-md-6">
                                            <label>Group/Org Name:</label>
                                            <input maxlength="150" type="text" name="gname" class="form-control" required="" 
                                            style="color: black;" value="<?php echo $grp_name ?>" />
                                            <label>Group Description:</label>
                                             <textarea id="textarea" name="gdesc" class="form-control" maxlength="200" rows="7" value=""><?php echo $grp_desc ?>
                                            </textarea>
                                        </div>


                                        <div class="col-md-6" style="margin-bottom: 15px">
                                            <label>Group/Org Region:</label>
                                             <select name="gregion" class="form-control" style="color: black;">
                                                       <option value="<?php echo $grp_rgn?>" selected=""><?php echo $grp_rgn?></option>
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
                                                       <option value="<?php echo $grp_city; ?>" selected><?php echo $grp_city; ?></option>
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
                                                       <option value="<?php echo $grp_rlg?>" selected><?php echo $grp_rlg?></option>
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
                                                       <option value="<?php echo $grp_church?>" selected><?php echo $grp_church?></option>
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
                                        <?php }?>
                                        <div class="form-group" style="margin-top: 15px">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" name="updategroup" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                    <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                    &nbsp; 
                                                    Save Changes
                                                    &nbsp;
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                <div class="clearfix"></div>

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