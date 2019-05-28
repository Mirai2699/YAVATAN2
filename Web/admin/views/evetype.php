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
                    <i class="livicon" data-name="gears" data-size="25" data-loop="true" data-c="orange" data-hc="red" ></i>
                    &nbsp;Event Type Management
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                <div class="clearfix"></div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="gears" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Event Type
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" action="../functionalities/insert_func.php" method="POST">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="role" style="text-align: left; margin-bottom: 10px">
                                                Event Type Description: 
                                            </label>
                                            <br>
                                            <div class="col-md-12">
                                                <input id="evetype" name="evetype" type="text" placeholder="Enter Event Type" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" name="addevetype" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                     <i class="livicon" data-name="gears" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Event Types
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Event ID</th>
                                            <th width="70%">Event Type</th>
                                            <th width="30%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `r_event_type` where ev_type_stat = 1");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ID = $row["ev_type_ID"];
                                                        $Name = $row["ev_type_name"];
                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ID; ?></td>
                                                            <td><?php echo $Name; ?></td>
                                                            <td style='width:150px'>
                                                                    <center>
                                                                    <a href="#edit<?php echo $ID?>" data-toggle="modal" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         Edit
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete<?php echo $ID?>" data-toggle="modal" class="btn btn-danger" title="Archive">
                                                                          <i class="livicon" data-name="trash" data-size="16" data-loop="true" data-c="#fff" data-hc="white" ></i>
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
                 <?php
                     $view_query = mysqli_query($connection,"SELECT * FROM `r_event_type`");
                         while($row = mysqli_fetch_assoc($view_query))
                           {
                               $ID = $row["ev_type_ID"];
                               $Name = $row["ev_type_name"];
                 ?> 
                 <!--EDIT-->
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?php echo $ID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <center>
                                <div class="modal-header" style="background-color: goldenrod">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Edit Details 
                                        <i class="livicon" data-name="edit" data-s="35" data-c="white"></i></h5>
                                </div>
                                <div class="modal-body" style="height:160px;">
                                    <form action="../functionalities/update_func.php" method="POST">
                                        <input type="hidden" name="evetype_ID" value="<?php echo $ID?>" />
                                        <div class="col-md-12">
                                              <label>Description:</label>
                                              <input type="text" class="form-control" name="evetype_name" value="<?php echo $Name?>" style="width: 50%">
                                              <br>
                                              <button type="submit" name="editevetype" class="btn btn-success" style="font-size: 15px">
                                                <i class="livicon" data-name="check" data-s="14" data-c="white"></i>
                                                Update
                                              </button>
                                              &nbsp;&nbsp;&nbsp;
                                              <a data-dismiss="modal" class="btn btn-danger" style="font-size: 15px">
                                                <i class="fa fa-close" data-s="14" data-c="white"></i>
                                                Cancel
                                              </a>     
                                        </div>
                                    </form>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <!--DELETE-->
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="delete<?php echo $ID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <center>
                                <div class="modal-header" style="background-color: maroon">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Are you sure you want to Archive this one?</h5>
                                </div>
                                <div class="modal-body" style="height:180px;">
                                    <form action="../functionalities/archive_func.php" method="POST">
                                        <input type="hidden" name="evetype_ID" value="<?php echo $ID?>" />
                                        <div class="col-md-12">
                                              <i class="livicon" data-name="trash" data-s="95" data-c="black" data-hc="gray"></i><br>
                                              <button type="submit" name="arch_evetype" class="btn btn-success" style="font-size: 25px">
                                                <i class="livicon" data-name="check" data-s="25" data-c="white"></i>
                                                Yes
                                              </button>
                                              &nbsp;&nbsp;&nbsp;
                                              <a data-dismiss="modal" class="btn btn-danger" style="font-size: 25px">
                                                <i class="fa fa-close" data-s="14" data-c="white"></i>
                                                No
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