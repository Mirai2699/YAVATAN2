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
                                <form class="form-horizontal" id="addRoleForm" action="../functionalities/insert_func.php" method="POST">
                                    <fieldset>
                                       
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="col-md-6">
                                                <label>Church Name:</label>
                                                <input maxlength="150" type="text" name="chr_name" class="form-control" required="" style="color: black;"  />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Church Contact:</label>
                                                <input maxlength="70" type="text" name="chr_contact" class="form-control" required="" style="color: black;"  />
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top: 10px">
                                             <div class="col-md-4">
                                              <label>Related Religion:</label>
                                              <select name="chr_rlg" class="form-control" style="color: black;">
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


                                   <!--          <div class="col-md-4">
                                                <label>Region:</label>
                                                     <select name="chr_region" class="form-control" style="color: black;">
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
                                                <select name="chr_city" class="form-control" style="color: black;">
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
                                        </div> -->





                                         <?php 
                                            $categoryName = '';
                                         ?>
                                            <script type="text/javascript">
                                                function getCategory(val) {
                                                    console.log ("<?php echo $categoryName = '"+ val + "';?>"); 
                                                    // alert(pass);
                                                    console.log("<?php echo $categoryName ?>");

                                                    document.getElementById('itemdiv').style.display = 'block'; 
                                                     $.ajax({

                                                        url: 'retreiveItem.php'
                                                        ,data:{
                                                         category: val
                                                        }
                                                        ,type:'GET'
                                                        ,dataType: 'json'
                                                        ,success:function(data){ 
                                                        document.getElementById('ddItem').innerHTML = data.option;

                                                    },
                                                    error: function(){

                                                                 }
                                                             });
                                                                                                       
                                              }
                                             </script>

                                            <div class="col-md-4">
                                                <label>Region:</label>
                                                      <select id="ddCategory" name="chr_rgn" class="form-control" style="color: black;" required="" onchange="getCategory(this.value)" >
                                                               <option value="" selected disabled></option>
                                                                <?php  
                                                                   $sqlemp= "SELECT * FROM `r_region`";
                                                                   $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                        while($row = mysqli_fetch_assoc($results))
                                                                        {
                                                                        $reg = $row['rgn_name'];
                                                                  ?>
                                                                 <option value="<?php echo $reg ?>"><?php echo "$reg"; ?></option>
                                                                 <?php 
                                                                     } 
                                                                 ?>
                                                    
                                                   </select>
                                            </div>

                                            <div id="itemdiv" class="col-md-4">
                                                 <div class="form-group">
                                                    <label id="itemLabel">City:</label>
                                                      <select id="ddItem" name="chr_city" class="form-control" style="color: black;" required="">
                                                          <option selected disabled value=""> </option>
                                                      </select>
                                                 </div>
                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <div class="col-md-12 text-right" style="margin-top: 10px">
                                                <button type="submit" name="addchurch" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_church` where chr_stat = 1");
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
                                                                    <a href="#edit<?php echo $ID?>" data-toggle="modal" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete<?php echo $ID?>" data-toggle="modal" class="btn btn-danger" title="Archive">
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
                <?php
                       $view_query = mysqli_query($connection,"SELECT * FROM `t_church` ");
                          while($row = mysqli_fetch_assoc($view_query))
                                {
                                    $ID = $row["chr_ID"];
                                    $chr_nme = $row["chr_name"];
                                    $chr_con = $row["chr_contact"];
                                    $chr_rlg = $row["chr_religion"];
                                    $chr_rgn = $row["chr_region"];
                                    $chr_city = $row["chr_city"];
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
                                <div class="modal-body" style="height:290px;">
                                    <form action="../functionalities/update_func.php" method="POST">
                                      <fieldset>
                                          <input type="hidden" name="chr_ID" value="<?php echo $ID?>">
                                          <div class="col-md-12" style="margin-top: 10px">
                                              <div class="col-md-12">
                                                  <label>Church Name:</label>
                                                  <input maxlength="150" type="text" name="chr_name" class="form-control" required="" style="color: black;" value="<?php echo $chr_nme?>"  />
                                              </div>
                                          </div>
                                          <div class="col-md-12" style="margin-top: 10px">
                                               <div class="col-md-6">
                                                   <label>Church Contact:</label>
                                                   <input maxlength="70" type="text" name="chr_contact" class="form-control" required="" style="color: black;" value="<?php echo $chr_con?>" />
                                               </div>
                                               <div class="col-md-6">
                                                <label>Related Religion:</label>
                                                <select name="chr_religion" class="form-control" style="color: black;">
                                                         <option selected  value="<?php echo $chr_rlg?>"><?php echo $chr_rlg?></option>
                                                         
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
                                          </div>
                                          <div class="col-md-12" style="margin-top: 10px">
                                              <div class="col-md-6">
                                                  <label>Region:</label>
                                                       <select name="chr_region" class="form-control" style="color: black;">
                                                                 <option selected value="<?php echo $chr_rgn?>"><?php echo $chr_rgn?></option>
                                                               
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
                                              <div class="col-md-6">
                                                  <label>City:</label>
                                                  <select name="chr_city" class="form-control" style="color: black;">
                                                             <option selected value="<?php echo $chr_city?>"><?php echo $chr_city?></option>
                                                           
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
                                              <div class="col-md-12 text-center" style="margin-top: 10px">
                                                  <button type="submit" name="editchurch" class="btn btn-responsive btn-warning btn-sm" style="font-size: 16px">
                                                      <i class="livicon" data-name="save" data-size="19" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                      &nbsp; 
                                                      Save
                                                      &nbsp;
                                                  </button>
                                                  &nbsp;
                                                  <a data-dismiss="modal" class="btn btn-danger" style="font-size: 16px">
                                                    <i class="fa fa-close" data-s="14" data-c="white"></i>
                                                    Cancel
                                                  </a>
                                              </div>
                                          </div>
                                      </fieldset>
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
                                        <input type="hidden" name="church_ID" value="<?php echo $ID?>" />
                                        <div class="col-md-12">
                                              <i class="livicon" data-name="trash" data-s="95" data-c="black" data-hc="gray"></i><br>
                                              <button type="submit" name="arch_church" class="btn btn-success" style="font-size: 25px">
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