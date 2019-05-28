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
                                    Add User Account
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" id="addRoleForm" name="addRoleForm" action="">
                                    <fieldset>
                                         <div class="col-md-6">
                                            <label>Username:</label>
                                            <input maxlength="150" type="text" name="username" class="form-control" required="" style="color: black;"  />
                                            <label>Email:</label>
                                            <input maxlength="150" type="text" name="email" class="form-control" required="" style="color: black;"  />
                                            <label>User Role:</label>
                                             <select name="r_category[]" class="form-control" style="color: black;">
                                                       <option value="" selected disabled></option>
                                                        <?php  
                                                           $sqlemp= "SELECT * FROM `r_user_role`";
                                                           $results = mysqli_query($connection, $sqlemp) or die("Bad Query: $sql");
                                                                while($row = mysqli_fetch_assoc($results))
                                                                {
                                                                $roleID = $row['usr_ID'];
                                                                $role = $row['usr_desc'];
                                                          ?>
                                                         <option value="<?php echo $roleID ?>"><?php echo "$role"; ?></option>
                                                         <?php 
                                                             } 
                                                         ?>
                                           </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Password:</label>
                                            <input maxlength="150" type="password" name="pass" class="form-control" required="" style="color: black;"  />
                                            <label>Confirm Password:</label>
                                            <input maxlength="150" type="password" name="conpass" class="form-control" required="" style="color: black;"  />
                                            
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
                                                                                INNER JOIN  `r_user_role` AS USR WHERE ACC.acc_ID = USR.usr_ID");
                                             while($row = mysqli_fetch_assoc($view_query))
                                                    {
                                                        $ID = $row["acc_ID"];
                                                        $Username = $row["acc_username"];
                                                        $password = $row["acc_password"];
                                                        $Urole = $row["acc_user_role"];
                                                        $UNrole = $row["usr_desc"];
                                                        $Uemail = $row["acc_email"];
                                                        $active = $row["acc_active_flag"];

                                                    
                                            ?>      
                                                     <tr class="gradeX">
                                                            <td style="display: none"><?php echo $ID; ?></td>
                                                            <td width="30"><?php echo $Username; ?></td>
                                                            <td width="40"><?php echo $Uemail; ?></td>
                                                            <td width="10"><?php echo $UNrole; ?></td>
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