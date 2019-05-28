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
                                <form class="form-horizontal" id="addRoleForm" name="addRoleForm" action="">
                                    <fieldset>
                                         <div class="col-md-6">
                                            <label>Group/Org Name:</label>
                                            <input maxlength="150" type="text" name="gname" class="form-control" required="" style="color: black;"  />
                                            <label>Group/Org Leader Assigned:</label>
                                            <input maxlength="150" type="text" name="gleader" class="form-control" required="" style="color: black;"  />
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
                                                         <option value="<?php echo $roleID ?>"><?php echo "$region"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                           </select>
                                        </div>
                                        <div class="col-md-6">
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
                                             <select name="gaffchurch" class="form-control" style="color: black;">
                                                       <option value="" selected disabled></option>
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
                                                <button type="submit" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_group`");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $gID = $row["grp_ID"];
                                                        $gname = $row["grp_name"];
                                                        $glead = $row["grp_leader"];
                                                        $greg = $row["grp_region"];
                                                        $gcity = $row["grp_city"];
                                                        $grlg = $row["grp_religion"];
                                                        $gchaff = $row["grp_church_affil"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $gID; ?></td>
                                                            <td width=""><?php echo $gname; ?></td>
                                                            <td width=""><?php echo $glead; ?></td>
                                                            <td width=""><?php echo $greg; ?></td>
                                                            <td width=""><?php echo $gcity; ?></td>
                                                            <td width=""><?php echo $grlg; ?></td>
                                                            <td width=""><?php echo $gchaff; ?></td>
                                                            <td style='width:20%'>
                                                                    <center>
                                                                    <a href="#delete" class="btn btn-warning">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         Edit
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete" class="btn btn-danger">
                                                                          <i class="livicon" data-name="trash" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         Archive
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