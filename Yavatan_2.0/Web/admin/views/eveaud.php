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
                    &nbsp;Event Audience Management
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
                                    Add Event Audience Description
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" name="addRoleForm" action="">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="role" style="text-align: left; margin-bottom: 10px">
                                                Event Audience Description: 
                                            </label>
                                            <br>
                                            <div class="col-md-12">
                                                <input id="eveaud" name="eveaud" type="text" placeholder="Enter Event Audience" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                    Manage Audience Description
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Event ID</th>
                                            <th width="70%">Event Audience Description</th>
                                            <th width="30%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `r_event_audience`");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ID = $row["ev_aud_ID"];
                                                        $Name = $row["ev_aud_desc"];
                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ID; ?></td>
                                                            <td><?php echo $Name; ?></td>
                                                            <td style='width:150px'>
                                                                    <center>
                                                                    <a href="#delete" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         Edit
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete" class="btn btn-danger" title="Archive">
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