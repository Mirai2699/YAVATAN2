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
                    <i class="livicon" data-name="map" data-size="25" data-loop="true" data-c="orange" data-hc="red" ></i>
                    &nbsp; Logistics Management
                </h1>
                <ol class="breadcrumb">
                </ol>
            </section>
             <section class="content">
                <div class="clearfix"></div>
                    <div class="col-md-9">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Event's Logistics
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" method="POST" action="../functionalities/GL_insert_func.php">
                                    <fieldset>
                                        

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Event:</label>
                                                <select name="ev_mat_event" class="form-control"  id="newunit" style="color: black;" >
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
                                           
                                        <div class="col-md-7">
                                            <label class="control-label" for="role" style="text-align: left;">
                                                Item: 
                                            </label>
                                            <input id="material" name="ev_mat_name" type="text" placeholder="Item Name" class="form-control" required/>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label" for="role" style="text-align: left;">
                                                Quantity: 
                                            </label>
                                            <input id="quan" name="ev_mat_quan" type="number" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right" style="margin-top: 10px">
                                                <button type="submit" name="addeventmat" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                     <i class="livicon" data-name="map" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Manage Logistics
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">City ID</th>
                                            <th width="">Item Name</th>
                                            <th width="">Needed Quantity</th>
                                            <th width="">For Event</th>
                                            <th width="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_event_material` AS evmat INNER JOIN `t_event` AS event ON evmat.ev_mat_eventID = event.event_ID");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $mat_ID = $row["ev_mat_ID"];
                                                        $mat_name = $row["ev_mat_name"];
                                                        $mat_quan = $row["ev_mat_quantity"];
                                                        $mat_event = $row["ev_mat_eventID"];
                                                        $event_name = $row["event_name"];
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ID; ?></td>
                                                            <td><?php echo $mat_name; ?></td>
                                                            <td><?php echo $mat_quan; ?></td>
                                                            <td><?php echo $event_name; ?></td>
                                                            <td style='width:180px'>
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