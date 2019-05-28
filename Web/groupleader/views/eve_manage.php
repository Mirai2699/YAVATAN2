<?php
    
    include('../../../db_con.php');
  

//EVENT MANAGEMENT


    ////////  Adding Event ///////
   if(isset($_POST['addevent']))
    {   
        
        $ev_grp = $_POST['ev_grp'];
        $ev_gldr = $_POST['ev_gldr'];
        $ev_name = $_POST['ev_name'];
        $ev_desc = $_POST['ev_desc'];
        $ev_start = $_POST['ev_start'];
        $ev_end = $_POST['ev_end'];
        $ev_budget = $_POST['ev_budget'];
        $ev_rgn = $_POST['ev_rgn'];
        $ev_city = $_POST['ev_city'];
        $ev_type = $_POST['ev_type'];
        $ev_aud = $_POST['ev_aud'];

        $ev_dur = date_diff($ev_start,$ev_end);

       

        $insert = "INSERT INTO t_event
                          (
                           event_name, 
                           event_desc, 
                           event_bygrp,
                           event_leader, 
                           event_budget, 
                           event_start_date, 
                           event_end_date, 
                           event_day_duration, 
                           event_region, 
                           event_city, 
                           event_type, 
                           event_aud_desc,
                           event_status,
                           event_date_created,  
                           event_active_flag
                           )

                   VALUES (
                           '$ev_name',
                           '$ev_desc',
                           '$ev_grp', 
                           '$ev_gldr',
                           '$ev_budget',
                           '$ev_start',
                           '$ev_end',
                           '$ev_dur',
                           '$ev_rgn',
                           '$ev_city',
                           '$ev_type',
                           '$ev_aud',
                           'PENDING',
                            CURRENT_TIMESTAMP,
                            1 
                          )";


              
        mysqli_query($connection,$insert);
        echo $insert;
         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully added an event!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/events.php';\",0);</script>";
    }


    


?>


