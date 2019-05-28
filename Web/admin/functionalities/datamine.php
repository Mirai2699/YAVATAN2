<?php
    
    include('../../../db_con.php');
  

//DATA MINING


    ////////  INSERT DATA MINE ///////
   if(isset($_POST['datamine']))
    {   

        $insert = "INSERT INTO t_datamine (dm_datelog)     
                   VALUES (CURRENT_TIMESTAMP)";

        $query1 = mysqli_query($connection,"UPDATE r_city SET city_timestamp = CURRENT_TIMESTAMP");
        $query2 = mysqli_query($connection,"UPDATE t_relperreg SET rpg_timestamp = CURRENT_TIMESTAMP");

        mysqli_query($connection,$insert);
         
         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully data mined!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/datamine.php';\",0);</script>";
    }


?>


