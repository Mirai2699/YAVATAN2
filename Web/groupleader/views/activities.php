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
                    <i class="livicon" data-name="flag" data-size="25" data-loop="true" data-c="orange" data-hc="red" ></i>
                    &nbsp;Event Activities Management
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
                                    <i class="livicon" data-name="flag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Activities
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-bordered table-striped">                                
                                        <tr>
                                            <td>                          
                                                <form action="../functionalities/addactivities.php" method="POST">
                                                    <div class="form-content">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label>Event:</label>
                                                                <select name="act_eventID" class="form-control"  id="newunit" style="color: black;" >
                                                                    <option value="" selected="" disabled=""></option>
                                                                    <?php
                                                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_event` where event_status = 'PENDING' ");
                                                                            while($row = mysqli_fetch_assoc($view_query))
                                                                            {   
                                                                               $ev_ID = $row["event_ID"];
                                                                               $ev_name = $row["event_name"];
                                                                      ?>    
                                                                    <option value="<?php echo $ev_ID?>"><?php echo $ev_name ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                           
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p>
                                                                    <button type="button" id="btnAdd" class="btn btn-primary">      
                                                                    <i class="livicon" data-name="plus" data-size="17" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                    Add Activity
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="row group">                                                        
                                                             <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Activity Name</label>
                                                                    <input maxlength="150" type="text" name="act_name[]" class="form-control" required="" style="color: black;"  />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Time of Start</label>
                                                                    <input maxlength="150" type="time" name="act_time[]" class="form-control" required="" style="color: black;"  />
                                                                </div>
                                                            </div>
                                                             <div class="col-md-1">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-danger btnRemove" style="margin-top: 23px;"><i class="livicon" data-name="remove" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12 text-right">
                                                            <button type="submit" name="addact" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
                                                                <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                &nbsp; 
                                                                Save Activities
                                                                &nbsp;
                                                            </button>
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

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" >
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="flag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Event Activities
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Act ID</th>
                                            <th width="">Event Name</th>
                                            <th width="">Last Updated On</th>
                                            <th width="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM  `t_event_activity` AS act inner join `t_event` as  eve on act.act_event_ID = eve.event_ID GROUP BY eve.event_ID ");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $act_ID = $row["act_ID"];
                                                        $act_name = $row["act_name"];
                                                        $act_time = $row["act_time"];
                                                        $act_eventID = $row["act_event_ID"];
                                                        $event_name = $row["event_name"];
                                                        $event_ID  = $row["event_ID"];
                                                        $event_dcreated = $row["event_date_created"];
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $event_ID; ?></td>
                                                            <td><?php echo $event_name; ?></td>
                                                            <td><?php echo $event_dcreated; ?></td>
                                                            <td style='width:300px'>
                                                                <center>
                                                                    <a data-toggle="modal" href="#view<?php echo $event_ID ?>" class="btn btn-info" title="View">
                                                                            <i class="livicon" data-name="" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                            View Activities
                                                                    </a>
                                                                    &nbsp    
                                                                    <a data-toggle href="#delete" class="btn btn-danger" title="Archive">
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

                                 


                                <?php
                                    $view_query = mysqli_query($connection,"SELECT * FROM  `t_event_activity` AS act inner join `t_event` as  eve on act.act_event_ID = eve.event_ID GROUP BY eve.event_ID ");
                                      while($row = mysqli_fetch_assoc($view_query))
                                        {
                                          $act_ID = $row["act_ID"];
                                          $act_name = $row["act_name"];
                                          $act_time = $row["act_time"];
                                          $act_eventID = $row["act_event_ID"];
                                          $event_name = $row["event_name"];
                                          $event_ID  = $row["event_ID"];
                                          $event_dcreated = $row["event_date_created"];
                                ?>  
                                <div class="modal fade" id="view<?php echo $event_ID ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:navy">
                                                <h3 style="text-align: left; color: white">Event Activities</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12" style="text-align: left;">
                                                        <h3><?php echo $event_name;   ?></h3>
                                                        <hr>
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <th>Activity Name</th>
                                                                <th>Scheduled Time</th>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $view_query1 = mysqli_query($connection,"SELECT * FROM  `t_event_activity` WHERE act_event_ID = '$event_ID' ");
                                                                    while($row1 = mysqli_fetch_assoc($view_query1))
                                                                    {   
                                                                                                            
                                                                        $act2_ID = $row1["act_ID"];
                                                                        $act2_name = $row1["act_name"];
                                                                        $act2_time = $row1["act_time"];
                                                                        $act2_eventID = $row1["act_event_ID"];
                                                                                                        
                                                             ?>  
                                                                <tr class="gradeX">
                                                                    <td><?php echo $act2_name ?></td>
                                                                    <td><?php echo $act2_time ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                            </div>
                                                                   
                                        </div>
                                    </div>
                                </div> 

                                <?php } ?>
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