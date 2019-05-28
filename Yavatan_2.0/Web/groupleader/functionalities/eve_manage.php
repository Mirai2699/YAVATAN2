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
        $ev_numaud = $_POST['ev_numaud'];
        $ev_rgn = $_POST['ev_rgn'];
        $ev_city = $_POST['ev_city'];
        $ev_type = $_POST['ev_type'];
        $ev_aud = $_POST['ev_aud'];

        $event_sdate = date_create($ev_start);
        $event_edate = date_create($ev_end);
        $ev_dur = date_diff($event_sdate,$event_edate);

        $ev_dura =  $ev_dur->format("%a");
        

        $insert = "INSERT INTO t_event
                          (
                           event_name, 
                           event_desc, 
                           event_bygrp,
                           event_leader, 
                           event_budget, 
                           event_tarnum,
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
                           '$ev_numaud',
                           '$ev_start',
                           '$ev_end',
                           '$ev_dura',
                           '$ev_rgn',
                           '$ev_city',
                           '$ev_type',
                           '$ev_aud',
                           'PENDING',
                            CURRENT_TIMESTAMP,
                            1 
                          )";


              
        mysqli_query($connection,$insert);
        
         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully added an event!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/events.php';\",0);</script>";
    }

    ////////  Updating Event ///////
   else if(isset($_POST['updateevent']))
    {   
        $ev_ID = $_POST['ev_ID'];
        $ev_name = $_POST['ev_name'];
        $ev_desc = $_POST['ev_desc'];
        $ev_start = $_POST['ev_start'];
        $ev_end = $_POST['ev_end'];
        $ev_budget = $_POST['ev_budget'];
        $ev_rgn = $_POST['ev_rgn'];
        $ev_city = $_POST['ev_city'];
        $ev_type = $_POST['ev_type'];
        $ev_aud = $_POST['ev_aud'];

        $event_sdate = date_create($ev_start);
        $event_edate = date_create($ev_end);
        $ev_dur = date_diff($event_sdate,$event_edate);

        $ev_dura =  $ev_dur->format("%a");
        

        $update = "UPDATE t_event SET
                           event_name = '$ev_name', 
                           event_desc = '$ev_desc', 
                           event_budget = '$ev_budget', 
                           event_start_date = '$ev_start', 
                           event_end_date = '$ev_end', 
                           event_day_duration = '$ev_dura', 
                           event_region = '$ev_rgn', 
                           event_city = '$ev_city', 
                           event_type = '$ev_type', 
                           event_aud_desc = '$ev_aud',
                           event_status = 'PENDING',
                           event_date_created = CURRENT_TIMESTAMP,  
                           event_active_flag = 1 
                    
                    WHERE event_ID = $ev_ID";
              
        mysqli_query($connection,$update);
        
         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully changed the details!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/events.php';\",0);</script>";
    }

    ////////  Mark the Event Done ///////
   else if(isset($_POST['eventdone']))
    {   
        $ev_ID = $_POST['ev_ID'];


        $ev_grp = $_POST['ev_grp'];
        $ev_gldr = $_POST['ev_gldr'];
        $ev_name = $_POST['ev_name'];
        $ev_desc = $_POST['ev_desc'];
        $ev_start = $_POST['ev_start'];
        $ev_end = $_POST['ev_end'];
        $ev_numaud = $_POST['ev_numaud'];
        $ev_budget = $_POST['ev_budget'];
        $ev_rgn = $_POST['ev_rgn'];
        $ev_city = $_POST['ev_city'];
        $ev_type = $_POST['ev_type'];
        $ev_aud = $_POST['ev_aud'];
        $ev_weather = $_POST['ev_weather'];
        $ev_atts = $_POST['ev_atts'];
        $ev_act_bdgt = $_POST['ev_actualbdgt'];

        $event_sdate = date_create($ev_start);
        $event_edate = date_create($ev_end);
        $ev_dur = date_diff($event_sdate,$event_edate);

        $ev_dura =  $ev_dur->format("%a");
        

        $insert = "INSERT INTO t_history_event
                          (his_event_name, 
                           his_event_desc, 
                           his_event_bygrp,
                           his_event_leader, 
                           his_event_budget, 
                           his_event_numaud,
                           his_event_start_date, 
                           his_event_end_date, 
                           his_event_day_duration, 
                           his_event_region, 
                           his_event_city, 
                           his_event_type, 
                           his_event_aud_desc,
                           his_event_weather,
                           his_event_attendees,
                           his_event_actual_budget,
                           his_event_timestamp)
                   VALUES ('$ev_name',
                           '$ev_desc',
                           '$ev_grp', 
                           '$ev_gldr',
                           '$ev_budget',
                           '$ev_numaud',
                           '$ev_start',
                           '$ev_end',
                           '$ev_dura',
                           '$ev_rgn',
                           '$ev_city',
                           '$ev_type',
                           '$ev_aud',
                           '$ev_weather',
                           '$ev_atts',
                           '$ev_act_bdgt',
                            CURRENT_TIMESTAMP)";
        mysqli_query($connection,$insert);
        

       

        $update = "UPDATE t_event SET event_status = 'DONE' WHERE event_ID = $ev_ID";   
        mysqli_query($connection,$update);
        

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully mark the event done!');".
                 "</script>";
        echo "<script>setTimeout(\"location.href = '../views/events.php';\",0);</script>";
    }



    


?>


