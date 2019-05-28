<?php
    
    include('../../../db_con.php');
  

//GROUP MANAGEMENT CONFIGURATION


    ////////  Adding Group Material ///////
   if(isset($_POST['updategroup']))
    {   
        $grp_ID = $_POST['grp_ID'];
        $grp_name = $_POST['gname'];
        $grp_desc = $_POST['gdesc'];
        $grp_region = $_POST['gregion'];
        $grp_city = $_POST['gcity'];
        $grp_religion = $_POST['grlg'];
        $grp_church_affil = $_POST['gaffchurch'];

        

        $query = "UPDATE t_group SET grp_name = '$grp_name', grp_desc = '$grp_desc', grp_region = '$grp_region', grp_city = '$grp_city', grp_religion = '$grp_religion', grp_church_affil = '$grp_church_affil', grp_timestamp = NOW() WHERE grp_ID = $grp_ID";
              
        mysqli_query($connection,$query);
      
         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully updated group details!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/group.php';\",0);</script>";
    }



?>


