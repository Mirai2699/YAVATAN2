<?php
    
    include('../../../db_con.php');
  
    ////////  Joining a Group ///////
   if(isset($_POST['joinperson']))
    {   
        $g_ID = $_POST['grpID'];
        $volun_ID = $_POST['volunID'];


        $query1 = mysqli_query($connection,"UPDATE t_volunteer SET volun_group = '$g_ID' WHERE volun_ID = '$volun_ID'"); 
        $query2 = mysqli_query($connection,"UPDATE t_account SET acc_group = '$g_ID' WHERE acc_volunID = '$volun_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully Joined to the Group!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/index.php';\",0);</script>";
    }


    ////////  Joining a Group ///////
    else if(isset($_POST['ungroup']))
    {   
        $g_ID = $_POST['grpID'];
        $volun_ID = $_POST['volunID'];


        $query1 = mysqli_query($connection,"UPDATE t_volunteer SET volun_group = 0 WHERE volun_ID = '$volun_ID'"); 
        $query2 = mysqli_query($connection,"UPDATE t_account SET acc_group = 0 WHERE acc_volunID = '$volun_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have left the Group!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/index.php';\",0);</script>";
    }

    ////////  Register to an Event ///////
   else if(isset($_POST['joinevent']))
    {   
        $event_ID = $_POST['eventID'];
        $volun_ID = $_POST['volunID'];


       
        $insert = "INSERT INTO t_event_registration (er_eventID, er_volunID, er_date_joined)     
                         VALUES ('$event_ID', '$volun_ID', current_timestamp)";
              
        mysqli_query($connection,$insert);
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully Registered to the Event!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/index.php';\",0);</script>";
    }

     else if(isset($_POST['unjoinevent']))
    {   
        $event_ID = $_POST['eventID'];
        $volun_ID = $_POST['volunID'];


       
         $remove = "DELETE FROM t_event_registration WHERE er_eventID = '$event_ID' and er_volunID = '$volun_ID' ";
         // $remove = "DELETE FROM t_event_registration WHERE er_eventID = 2 and er_volunID = 5 ";
              
        mysqli_query($connection,$remove);
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have Un-registered to this Event!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/index.php';\",0);</script>";
    }

?>
