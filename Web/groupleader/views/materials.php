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
                    <i class="livicon" data-name="briefcase" data-size="25" data-loop="true" data-c="orange" data-hc="red" ></i>
                    &nbsp; Materials Management
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
                                    <i class="livicon" data-name="briefcase" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Group Material
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" method="POST" action="../functionalities/GL_insert_func.php">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-md-12" style="margin-top: 10px">

                                            <!--Current Group ID-->
                                            <input type="hidden" name="mat_ID" value="<?php echo $currgrp = $_SESSION['grpID']; ?>">

                                            <div class="col-md-5">
                                                <label>Material Name:</label>
                                                <input maxlength="70" type="text" name="mat_name" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            <div class="col-md-7">
                                                <label>Description:</label>
                                                <input maxlength="70" type="text" name="mat_desc" class="form-control" required="" style="color: black;"  />
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" name="addmat" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                    <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                    &nbsp; 
                                                    Save
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" >
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="briefcase" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Group Materials
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Material ID</th>
                                            <th width="">Material Name</th>
                                            <th width="">Material Description</th>
                                            <th width="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_group_material`");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $grp_matID = $row["grp_mat_ID"];
                                                        $grp_matname = $row["grp_mat_name"];
                                                        $grp_matdesc = $row["grp_mat_desc"];
                                                        $grp_matgrpID = $row["grp_mat_grpID"];
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $grp_matID; ?></td>
                                                            <td><?php echo $grp_matname; ?></td>
                                                            <td><?php echo $grp_matdesc; ?></td>
                                                            <td style='width:200px'>
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