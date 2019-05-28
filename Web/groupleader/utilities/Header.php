<?php 
     include ("../../../db_con.php");
     session_start();
        $type = $_SESSION['UserRole'];
        if(!isset($_SESSION['UserName']) && $type!="2"){
          header('Location: 404.html?err=1');
        }
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Yavatan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="../../../resources/web/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../../../resources/web/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../resources/web/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="../../../resources/web/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="../../../resources/web/css/metisMenu.css" rel="stylesheet" type="text/css"/>    
    <link rel="stylesheet" href="../../../resources/web/vendors/animate/animate.min.css">
    <!-- end of global css -->
    <!-- page level css -->
    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="vendors/jvectormap/jquery-jvectormap.css" />
    <link href="../../../resources/Yavatan Logos/YAVATAN Title.png" rel="icon" />  
    <link rel="stylesheet" href="css/only_dashboard.css" />
    <!--end of page level css-->
</head>
<!--header start-->
<body class="skin-josh">
    <header class="header">
        <div class="logo">
            <img src="../../../resources/Yavatan Logos/[MONO_DARK] Yavatan.png" style="width: 214px; height: 42px;" alt="Yavatan">

        </div>

        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                            <?php  
                                    include('../../../db_con.php');

                                    $sql = "SELECT * FROM t_account WHERE acc_username = '".$_SESSION['Logged_In']."'";
                                    $result = mysqli_query($connection, $sql);

                                   while ($row = mysqli_fetch_array($result)) 
                                   {
                                    $pic = $row['acc_picture'];

                                     if($pic != NULL)
                                     {
                                         echo '<img src="'.$pic.'" width="35" class="img-circle img-responsive pull-left" height="35" alt="">';
                                     }
                                     else if ($pic == NULL)
                                         echo '<img src="../../../Yavatan_Profiles/default.png" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">';
                                   }
                                  ?> 
                           
                            <div class="riot">
                                <div>
                                    <?php echo $_SESSION['Logged_In']; ?>
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <?php  
                                    include('../../../db_con.php');

                                    $sql = "SELECT * FROM t_account WHERE acc_username = '".$_SESSION['Logged_In']."'";
                                    $result = mysqli_query($connection, $sql);

                                   while ($row = mysqli_fetch_array($result)) 
                                   {
                                    $pic = $row['acc_picture'];

                                     if($pic != NULL)
                                     {
                                         echo '<img src="'.$pic.'" class="img-responsive img-circle" alt="">';
                                     }
                                     else if ($pic == NULL)
                                         echo '<img src="../../../Yavatan_Profiles/default.png" class="img-responsive img-circle" alt="User Image">';
                                   }
                                  ?> 
                                <p class="topprofiletext"><?php echo $_SESSION['Logged_In']; ?></p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#Change" data-toggle="modal">
                                        <i class="livicon" data-name="key" data-s="18"></i>
                                        Change Password
                                    </a>
                                </div>
                                <div class="pull-left">
                                    <a href="#logout" data-toggle="modal">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--LOGOUT-->
        <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="logout" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <center>
                        <div class="modal-header" style="background-color: maroon">
                            <h4 class="modal-title" style="font-size: 25px; color: white; ">Are You Sure You Want to Logout?</h4>
                        </div>
                        <div class="modal-body" style="height:90px;">
                            <div class="col-md-12">

                                  <a href="../../../logout.php" class="btn btn-success" style="font-size: 25px">
                                    <i class="livicon" data-name="sign-out" data-s="25" data-c="white"></i>
                                    Yes
                                  </a>
                                  &nbsp;&nbsp;&nbsp;
                                  <a data-dismiss="modal" class="btn btn-danger" style="font-size: 25px">
                                    <i class="fa fa-close" data-s="14" data-c="white"></i>
                                    No
                                  </a>     
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!--CHANGE PASSWORD-->
        <div aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Change" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-size: 25px"><i  class="fa fa-key"></i>   Change Password</h4>
                    </div>
                    <div class="modal-body" style="height:350px;">
                        <form role="form" method="POST" action="../functionalities/Pass_func.php">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <?php  
                                     include('../../../db_con.php');

                                      $sql = "SELECT * FROM t_account  WHERE acc_username = '".$_SESSION['Logged_In']."'";
                                      $result = mysqli_query($connection, $sql);
                                      while ($row = mysqli_fetch_array($result)) 
                                       { 
                                         $uid = $row['acc_ID'];
                                         $uuser = $row['acc_username'];
                                         $upass = $row['acc_password'];
                                                                        
                                    ?>

                                    <div class="col-md-12">
                                        <input style="color: black;" type="text" name="ID" class="hidden" required="" maxlength="25" value="<?php echo $uid; ?>" />
                                        <div class="col-md-12">
                                           <div class="form-group">
                                                <label style="font-size: 15px">Current Password:</label>
                                                <input style="color: black;" id="oldpassword" type="password" name="OldPass" class="form-control input-frield" required="" value="<?php echo $upass; ?>"disabled/>
                                            </div>
                                        </div>
                                    <?php
                                         }
                                    ?> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label style="font-size: 15px">New Password:</label>
                                            <input style="color: black;" id="password" type="password" name="Pass" class="form-control input-frield" required="" data-toggle="password" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label style="font-size: 15px">Confirm Password:</label> 
                                            <input style="color: black;" id="confirmPassword" type="password" name="ConPass" class="form-control" required="" maxlength="50" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="square-red single-row">
                                            <div class="checkbox ">
                                                <input id="check" type="checkbox" onclick="showPass();"  style="background-color: maroon">
                                                <label style="font-size: 15px">Show Password</label> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="padding: 1px; margin-bottom: 10px; background-color: gray;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success" name="Save"">
                                           <i  class="fa fa-check"></i>   Save
                                        </button>&nbsp&nbsp&nbsp
                                        <button data-dismiss="modal" class="btn btn-default" style="background-color: maroon; color: white" name="cancel" ><i  class="fa fa-times"></i>  Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                 </div>
        </div>
    </header>
        <!--Show Password-->
    <script type="text/javascript">
    function showPass()
    {
      var pass = document.getElementById('password');
      var oldpass = document.getElementById('oldpassword');
      var confpass = document.getElementById('confirmPassword');
      if(document.getElementById('check').checked)
      {
        pass.setAttribute('type','text');
        oldpass.setAttribute('type','text');
        confpass.setAttribute('type','text');
      }
      else
      {
        pass.setAttribute('type','password');
        oldpass.setAttribute('type','password');
        confpass.setAttribute('type','password');
      }  
    }    
    </script>
    <!--Password Validation-->
    <script type="text/javascript">
        var password = document.getElementById("password")
       ,confirmPassword = document.getElementById("confirmPassword");

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