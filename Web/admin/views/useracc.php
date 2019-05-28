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
                    &nbsp; Account Management
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
                                    Add User Account for Group-Leaders
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" method="POST" action="../functionalities/insert_func.php">
                                    <fieldset>
                                         <div class="col-md-6">
                                            <label>Username:</label>
                                            <input maxlength="150" type="text" name="acc_username" class="form-control" required="" style="color: black;"  />

                                            <!-- <label>Email:</label>
                                            <input maxlength="150" type="text" name="acc_email" class="form-control" required="" style="color: black;"  /> -->
                                            <label>Group Leader's Name:</label>
                                             <select name="acc_grpldr" class="form-control" style="color: black;">
                                                        <option value="" selected disabled></option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `t_groupleader`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $grpldID = $row['grpld_ID'];
                                                                $grpldlast = $row['grpld_last_Name'];
                                                                $grpldfirst = $row['grpld_first_Name'];
                                                                $wname = $grpldfirst.' '.$grpldlast;

                                                          ?>
                                                         <option value="<?php echo $grpldID ?>"><?php echo "$wname"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                           </select>

                                           <label>Upload Profile Picture</label>
                                           <input type="file" name="acc_pic" class="form"  style="height: 40px" />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Password:</label>
                                            <input maxlength="150" id="acc_password" type="password" name="acc_pass" class="form-control" required="" style="color: black;"  />
                                            <label>Confirm Password:</label>
                                            <input maxlength="150" id="acc_conpassword" type="password" name="acc_conpass" class="form-control" required="" style="color: black;"  />
                                            
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top: 10px">
                                                <button type="submit" name="addacc" class="btn btn-responsive btn-info btn-sm" style="font-size: 16px">
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
                                    Manage User Accounts
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="display: none">Account ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>User Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $view_query = mysqli_query($connection,"SELECT * FROM `t_account` AS ACC
                                                                                INNER JOIN  `r_user_role` AS USR WHERE ACC.acc_user_role = USR.usr_ID");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ID = $row["acc_ID"];
                                                        $Username = $row["acc_username"];
                                                        $password = $row["acc_password"];
                                                        $Urole = $row["acc_user_role"];
                                                        $UNrole = $row["usr_desc"];
                                                        $Uemail = $row["acc_email"];
                                                        $pic = $row["acc_picture"];
                                                        $active = $row["acc_active_flag"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ID; ?></td>
                                                            <td width="30"><?php echo $Username; ?></td>
                                                            <td width="40"><?php echo $Uemail; ?></td>
                                                            <td width="10"><?php echo $UNrole; ?></td>
                                                            <td width="5"><?php echo $active; ?></td>
                                                            <td style='width:20%'>
                                                                    <center>
                                                                    <a href="#edit<?php echo $ID?>" data-toggle="modal" class="btn btn-warning" title="Edit">
                                                                         <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                         Edit
                                                                    </a>
                                                                    &nbsp    
                                                                    <a href="#delete<?php echo $ID?>" data-toggle="modal" class="btn btn-danger" title="Toggle Status">
                                                                          <i class="livicon" data-name="rotate-left" data-size="16" data-loop="true" data-c="#fff" data-hc="white" ></i>
                                                                         Toggle Status
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
                    $view_query = mysqli_query($connection,"SELECT * FROM `t_account` AS ACC
                                                            INNER JOIN  `r_user_role` AS USR WHERE ACC.acc_ID = USR.usr_ID");
                          while($row = mysqli_fetch_assoc($view_query))
                                {
                                  $ID = $row["acc_ID"];
                                  $Username = $row["acc_username"];
                                  $password = $row["acc_password"];
                                  $Urole = $row["acc_user_role"];
                                  $UNrole = $row["usr_desc"];
                                  $Uemail = $row["acc_email"];
                                  $pic = $row["acc_picture"];
                                  $active = $row["acc_active_flag"];
                                                    
                 ?>  
                 <!--EDIT-->
                <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?php echo $ID?>" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" >
                            <center>
                                <div class="modal-header" style="background-color: goldenrod">
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Change Details 
                                        <i class="livicon" data-name="edit" data-s="35" data-c="white"></i></h5>
                                </div>
                                <div class="modal-body" style="height:360px;">
                                    <form action="../functionalities/update_func.php" method="POST">
                                        <input type="hidden" name="acc_ID" value="<?php echo $ID?>" />
                                        <div class="col-md-12">
                                           <label>Change Username:</label>
                                           <input maxlength="150" type="text" name="acc_username" class="form-control" required="" style="color: black;" />

                                           <br>
                                           <label>Change Profile Picture</label>
                                           <input type="file" name="acc_pic" class="form"  style="height: 40px"/>
                                           <br>
                                           <div class="col-md-6">
                                              <label>Change Password:</label>
                                              <input maxlength="150"  type="password" name="acc_pass" class="form-control" required="" style="color: black;"  />
                                           </div>
                                           <div class="col-md-6">
                                              <label>Confirm Password:</label>
                                              <input maxlength="150" type="password" name="acc_conpass" class="form-control" required="" style="color: black;"  />
                                          </div>
                                          <br>
                                          <div class="col-md-6">
                                             <label>Change User Role:</label>
                                             <select name="acc_grpldr" class="form-control" style="color: black;">
                                                  <option value="" selected disabled></option>
                                                  <option value="1">Administrator</option>
                                                  <option value="2">Group Leader</option>
                                             </select>
                                          </div>
                                           <div class="col-md-6">
                                             <label>Change Group:</label>
                                             <select name="acc_grp" class="form-control" style="color: black;">
                                                        <option value="" selected disabled></option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `t_group`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $grpID = $row['grp_ID'];
                                                                $grpname = $row['grp_name'];

                                                          ?>
                                                         <option value="<?php echo $grpID ?>"><?php echo "$grpname"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                           </select>
                                          </div>

                                          <div style="margin-top: 20px">
                                              <button type="submit" name="editacc" class="btn btn-success" style="font-size: 15px; margin-top: 10px">
                                                <i class="livicon" data-name="check" data-s="14" data-c="white"></i>
                                                Update
                                              </button>
                                              &nbsp;&nbsp;&nbsp;
                                              <a data-dismiss="modal" class="btn btn-danger" style="font-size: 15px; margin-top: 10px">
                                                <i class="fa fa-close" data-s="14" data-c="white"></i>
                                                Cancel
                                              </a>   
                                          </div>  
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
                                    <h5 class="modal-title" style="font-size: 25px; color: white; ">Are you sure you want to change its status?</h5>
                                </div>
                                <div class="modal-body" style="height:180px;">
                                    <form action="../functionalities/archive_func.php" method="POST">
                                        <input type="hidden" name="accID" value="<?php echo $ID?>" />
                                        <div class="panel">
                                             <label>Change Status:</label>
                                                 <select name="accstat" class="form-control" style="color: black; width: 50%">
                                                     <option value="Active" selected>Active</option>
                                                     <option value="Inactive">Inactive</option>
                                                </select>
                                                <br>
                                              <button type="submit" name="arch_acc" class="btn btn-success" style="font-size: 16px">
                                                <i class="livicon" data-name="check" data-s="15" data-c="white"></i>
                                                Confirm
                                              </button>
                                              &nbsp;&nbsp;&nbsp;
                                              <a data-dismiss="modal" class="btn btn-danger" style="font-size: 16px">
                                                <i class="fa fa-close" data-s="15" data-c="white"></i>
                                                Cancel
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

    <script type="text/javascript">
        var password = document.getElementById("acc_password")
       ,confirmPassword = document.getElementById("acc_conpassword");

        function validatePassword()
        {
          if(password.value != confirmPassword.value) 
          {
            confirmPassword.setCustomValidity("Passwords Don't Match");
            $('#myform').on('submit', function(ev) 
            {
                $('#myModal').modal('show');
            });

          } else 
          {
            confirmPassword.setCustomValidity(''); 
          }
        }

        password.onchange = validatePassword;
        confirmPassword.onkeyup = validatePassword;
    </script>