<?php
    include("db_con.php");
?>
<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>YAVATAN | Member Registration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="resources/assets/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="resources/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="resources/assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="resources/assets/css/one-page-parallax/style.min.css" rel="stylesheet" />
    <link href="resources/assets/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
    <link href="resources/assets/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
    <link href="resources/assets/img/icon/YAVATAN Title.png" rel="icon" />


    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="resources/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->


    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -
    <link href="resources/assets/assetsext/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->


</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51" style="background-image: url(resources/assets/img/downloads/bg1.jpg); background-size: cover; opacity: 60%">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top" style="background-color: white">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header" >
                    <div class="navbar-brand">
                        <img src="resources/assets/logo/[LIGHT] Yavatan_04.png"  alt="YAVATAN" style="size: 200px"  />
                    </div>

                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                 <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Homepage.php"><i class='fa fa-home'></i>&nbsp; BACK TO HOME</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->
        

            <!-- begin container -->
            <div class="container" style="text-align: left; margin-top: 10%;">
                            <div class="panel" style="background-color: white">
                                <form class="" id="addRoleForm" method="POST" action="Web/volunteer/functionalities/volun_registration.php">
                                    <fieldset>
                                        <div class="form-group">
                                            
                                            <div class="col-md-12" style="margin-top: 10px">
                                                <div class="col-md-12" style="margin-top: 5px; background-color: gray;">
                                                    <div style="padding: 2px; background-color: black; margin-bottom: 10px"></div>
                                                    <h2 style="color:white;">Personal Information</h2>
                                                    <div style="padding: 2px; background-color: black"></div>
                                                </div>
                                                <div class="col-md-12" style="margin-top: 15px">
                                                    <div class="col-md-4">
                                                        <label><b>Last Name:</b></label>
                                                        <input maxlength="150" type="text" name="volun_lname" class="form-control" required="" style="color: black;"  />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><b>Middle Name: (Optional)</b></label>
                                                        <input maxlength="150" type="text" name="volun_mname" class="form-control" required="" style="color: black;"  />
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><b>First Name:</b></label>
                                                        <input maxlength="150" type="text" name="volun_fname" class="form-control" required="" style="color: black;"  />
                                                   </div>
                                                </div>

                                                <div class="col-md-12" style="margin-top: 10px">
                                                <div class="col-md-4">
                                                    <label><b>Gender:</b></label>
                                                    <select name="volun_gender" class="form-control" style="color: black;" required>
                                                           <option value="" selected disabled>*Select Gender</option>
                                                           <option value="Male">Male</option>
                                                           <option value="Female">Female</option>
                                                            
                                                  </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label><b>Birthdate:</b></label>
                                                    <input type="date" name="volun_bday"  class="form-control" required/>
                                                </div>
                                                <div class="col-md-4">
                                                      <label><b>Related Religion:</b></label>
                                                      <select name="volun_rlg" class="form-control" style="color: black;">
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
                                                </div>
                                                <div class="col-md-12" style="margin-top: 10px">
                                                <div class="col-md-4">
                                                    <label><b>Region:</b></label>
                                                         <select name="volun_rgn" class="form-control" style="color: black;">
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
                                                    <label><b>City:</b></label>
                                                    <select name="volun_city" class="form-control" style="color: black;">
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
                                                <div class="col-md-4">
                                                    <label><b>Contact #:</b></label>
                                                    <input maxlength="11" type="text" name="volun_contact" class="form-control" required="" style="color: black;"  />
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="margin-top: 50px; background-color: gray;">
                                                <div style="padding: 2px; background-color: black; margin-bottom: 10px"></div>
                                                <h2 style="color:white;">Account Information</h2>
                                                <div style="padding: 2px; background-color: black"></div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px"> 

                                                <?php  
                                                    {
                                                            
                                                    $result = mysqli_query($connection, "SELECT MAX(volun_ID) FROM t_volunteer");
                                                    $row = mysqli_fetch_array($result);
                                                    $last = $row[0];
                                                    $finalid = $last + 1;

                                                ?>

                                                <input type="hidden" name="volun_ID" value="<?php echo $finalid; ?>">
                                                <?php } ?>

                                                <div class="col-md-6">
                                                <label><b>Username:</b></label>
                                                <input maxlength="150" type="text" name="volun_username" class="form-control" required="" style="color: black;"  />
                                                <label><b>Email:</b></label>
                                                <input maxlength="150" type="text" name="volun_email" class="form-control" required="" style="color: black;"  />
                                               
                                            </div>
                                            <div class="col-md-6">
                                                <label><b>Password:</b></label>
                                                <input maxlength="150" id="volun_password" type="password" name="volun_pass" class="form-control" required="" style="color: black;"  />
                                                <label><b>Confirm Password:</b></label>
                                                <input maxlength="150" id="volun_conpassword" type="password" name="volun_conpass" class="form-control" required="" style="color: black;"  />
                                                
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-right" style="margin-bottom:20px">
                                                <button type="submit" name="register" class="btn btn-info" style="font-size: 16px">
                                                    <i class='fa fa-user'></i>
                                                    &nbsp; 
                                                    Create Account
                                                    &nbsp;
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
            </div>
            <!-- end container -->
    </div>
    <!-- end #page-container -->
     <!-- begin #footer -->
    <div class="footer" style="height: 5px; width: 100%; position: absolute;">
                &copy; Copyright Yavatan 2018 <br />
    </div>
        <!-- end #footer -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="resources/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="resources/assets/plugins/bootstrap3/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="resources/assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="resources/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
    <script src="resources/assets/js/one-page-parallax/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();
        });
    </script>

        <script type="text/javascript">
        var password = document.getElementById("volun_password")
       ,confirmPassword = document.getElementById("volun_conpassword");

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
</body>
</html>
