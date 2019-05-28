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
                    <i class="livicon" data-name="search" data-size="25" data-loop="true" data-c="violet" data-hc="darkviolet" ></i>
                    &nbsp;Data Mining
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                <div class="clearfix"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: darkviolet; color: white">
                                <h3 class="panel-title" >
                                    <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Data Mine
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" action="../functionalities/datamine.php" method="POST">
                                    <fieldset>
                                        <div class="form-group" style="text-align: center">
                                            <label class="col-md-12 control-label" for="role" style="text-align:center; margin-bottom: 10px">
                                                Data Mining Trigger:<br> This button allows you to data mine the data of cities and religions per regions. 
                                            </label>
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" name="datamine" class="btn btn-responsive btn-info btn-lg" style="font-size: 16px; background-color: darkviolet">
                                                    &nbsp; 
                                                    Gather Data
                                                    &nbsp;
                                                    <br>
                                                    <i class="livicon" data-name="search" data-size="60" data-loop="true" data-c="#fff" data-hc="white"></i>
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
                            <div class="panel-heading" style="background-color: green; color: white">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="search" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   Data Mining Logs
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Data-Mine ID</th>
                                            <th>Data Mine Log</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_datamine`");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ID = $row["dm_id"];
                                                        $log = $row["dm_datelog"];
                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                        <td><?php echo $ID; ?></td>
                                                        <td><?php echo $log; ?></td>
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