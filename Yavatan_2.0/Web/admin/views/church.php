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
                    &nbsp;Church Management
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
                                    <i class="livicon" data-name="gears" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Church
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" name="addRoleForm" action="">
                                    <fieldset>
                                       
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="col-md-6">
                                                <label>Church Name:</label>
                                                <input maxlength="150" type="text" name="chr_name" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Church Contact:</label>
                                                <input maxlength="70" type="text" name="che_contact" class="form-control" required="" style="color: black;"  />
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top: 10px">
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
                                            <div class="col-md-4">
                                                <label>Region:</label>
                                                     <select name="gl_region" class="form-control" style="color: black;">
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
                                            <div class="col-md-4">
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
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12 text-right" style="margin-top: 10px">
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
                                    Manage Churches
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Religion ID</th>
                                            <th width="">Church Name</th>
                                            <th width="">Contact</th>
                                            <th width="">Religion</th>
                                            <th width="">Region</th>
                                            <th width="">City</th>
                                            <th width="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_church`");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ID = $row["chr_ID"];
                                                        $chr_nme = $row["chr_name"];
                                                        $chr_con = $row["chr_contact"];
                                                        $chr_rlg = $row["chr_religion"];
                                                        $chr_rgn = $row["chr_region"];
                                                        $chr_city = $row["chr_city"];
                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ID; ?></td>
                                                            <td><?php echo $chr_nme; ?></td>
                                                            <td><?php echo $chr_con; ?></td>
                                                            <td><?php echo $chr_rlg; ?></td>
                                                            <td><?php echo $chr_rgn; ?></td>
                                                            <td><?php echo $chr_city; ?></td>
                                                            <td style='width:150px'>
                                                                    <center>
                                                                    <a href="#delete" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete" class="btn btn-danger" title="Archive">
                                                                          <i class="livicon" data-name="trash" data-size="16" data-loop="true" data-c="#fff" data-hc="white" ></i>
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