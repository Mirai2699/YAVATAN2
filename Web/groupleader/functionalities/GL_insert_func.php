<?php
    
    include('../../../db_con.php');
  

//MATERIAL MANAGEMENT CONFIGURATION


    ////////  Adding Group Material ///////
   if(isset($_POST['addeventmat']))
    {   
        
        $ev_mat_name = $_POST['ev_mat_name'];
        $ev_mat_quan = $_POST['ev_mat_quan'];
        $ev_mat_event = $_POST['ev_mat_event'];

        

        $insert = "INSERT INTO t_event_material (ev_mat_name, ev_mat_quantity, ev_mat_eventID, ev_mat_timestamp)     
                   VALUES ('$ev_mat_name','$ev_mat_quan','$ev_mat_event', CURRENT_TIMESTAMP )";
              
        mysqli_query($connection,$insert);
        
         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully added an item for this event!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/logistics.php';\",0);</script>";
    }

    ////////  Adding Group Material ///////
   else if(isset($_POST['addmat']))
    {   
        
        $mat_name = $_POST['mat_name'];
        $mat_desc = $_POST['mat_desc'];
        $mat_grpID = $_POST['mat_ID'];

        // echo $mat_name;
        // echo $mat_desc;
        // echo $mat_grpID;

        $insert = "INSERT INTO t_group_material (grp_mat_name, grp_mat_desc, grp_mat_grpID, grp_mat_timestamp)     
                   VALUES ('$mat_name',
                           '$mat_desc',
                           '$mat_grpID', 
                           CURRENT_TIMESTAMP)";
              
        mysqli_query($connection,$insert);
       
        // echo $insert;

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully added a group exclusive material!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/materials.php';\",0);</script>";
    }


    


?>


