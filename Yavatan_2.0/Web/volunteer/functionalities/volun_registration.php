<?php
			    
    include("../../../db_con.php");

    ////////  Initialization of variables ///////

        $volun_lname = $_POST['volun_lname'];
        $volun_mname = $_POST['volun_mname'];
        $volun_fname = $_POST['volun_fname'];
        $volun_gender = $_POST['volun_gender'];
        $volun_bday = $_POST['volun_bday'];
        $volun_rlg = $_POST['volun_rlg'];
        $volun_rgn = $_POST['volun_rgn'];
        $volun_city = $_POST['volun_city'];
        $volun_contact = $_POST['volun_contact'];

        $volun_ID = $_POST['volun_ID'];
        $volun_username = $_POST['volun_username'];
        $volun_password = $_POST['volun_pass'];
        $volun_email = $_POST['volun_email'];
	  
    ////////  Adding Personal Information ///////

		$insertperson = "INSERT INTO t_volunteer (volun_last_Name, volun_first_Name, volun_middle_Name, volun_gender, volun_Birthdate,  volun_religion, volun_region, volun_city, volun_contact, volun_email, volun_constat, volun_active_flag)     
                         VALUES ('$volun_lname', '$volun_fname', '$volun_mname', '$volun_gender', '$volun_bday', '$volun_rlg', '$volun_rgn', 
                                 '$volun_city', '$volun_contact', '$volun_email', 0, 1)";
              
        mysqli_query($connection,$insertperson);

    ////////  Adding Account Information ///////

        $insertacc = "INSERT INTO t_account (acc_username, acc_password, acc_user_role, acc_email, acc_volunID, acc_active_flag)     
                        VALUES ('$volun_username', '$volun_password', 3, '$volun_email', '$volun_ID', 1)";
        mysqli_query($connection,$insertacc);
        

        // header('Location: ../views/welcome.php');

?>

<?php
        include ("../../../db_con.php");

            $volun_ID = $_POST['volun_ID'];
            $query = "SELECT * FROM t_account WHERE acc_volunID = '".$volun_ID."' ";

            $result = mysqli_query($connection,$query) or die(mysqli_error());
             if (mysqli_num_rows($result) > 0)
             {
             while($row = mysqli_fetch_assoc($result))
                 {
                     $user_id = $row['acc_ID'];
                     $UserName = $row['acc_username'];
                     $userrole = $row['acc_user_role'];
                     $email= $row['acc_email'];
                     $grpID = $row['acc_group'];
                     $volun_ID = $row['acc_volunID'];
                 }
                 echo 'OK!';
                 session_start();
                                          
                 $_SESSION['Logged_In'] = $UserName;
                 $_SESSION['UserRole'] = $userrole;
                 $_SESSION['email'] = $email;
                 $_SESSION['grpID'] = $grpID;
                 $_SESSION['volun_ID'] = $volun_ID;

                 if($_SESSION['UserRole'] == "3")
                 {
                                            
                     $header ='Location:../views/welcome.php? username='.$UserName.'';
                     header($header);
                 } 
                                          
                 // $query = "INSERT INTO pso_r_users_log (UL_LOGGED_TYPE,EP_ID) VALUES('$type','$employee')";
                 // mysqli_query($connection,$query);
                                          
             }
             else
             {
                                           
                 echo  "
                 <center>
                 <label style='color:red; font-weight: 10px; font-size: 15px'>Incorrect Username or Password!</label>
                 </center>";         
             }
?>