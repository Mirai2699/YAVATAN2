<?php
    
    include('../../../db_con.php');
  
    ////////  Joining a Group ///////
   if(isset($_POST['changestat']))
    {   
        
        $volun_ID = $_POST['volunID'];
        $volun_status = $_POST['volun_status'];


        $query1 = mysqli_query($connection,"UPDATE t_volunteer SET volun_status = '$volun_status' WHERE volun_ID = '$volun_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully change the member's status!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/gmembers.php';\",0);</script>";
    }
if(isset($_POST['changestat2']))
    {   
        
        $att_ID = $_POST['att_ID'];
        $ev_atnd_status = $_POST['ev_atnd_status'];


        $query1 = mysqli_query($connection,"UPDATE t_event_attendance SET ev_atnd_status = '$ev_atnd_status' WHERE ev_atnd_ID = '$att_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully change the attendee's status!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/attendance.php';\",0);</script>";
    }    

    else if(isset($_POST['promotecontact']))
    {   
       

        $volun_ID = $_POST['volunID'];


        $query2 = mysqli_query($connection,"UPDATE t_volunteer SET volun_constat = 1 WHERE volun_ID = '$volun_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully promoted this member!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/gmembers.php';\",0);</script>";
    }
    else if(isset($_POST['promotecontact2']))
    {   
       

        $att_ID = $_POST['att_ID'];


        $query2 = mysqli_query($connection,"UPDATE t_event_attendance SET ev_atnd_constat = 1 WHERE ev_atnd_ID = '$att_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully promoted this attendee!');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/attendance.php';\",0);</script>";
    }

    else if(isset($_POST['archivemember']))
    {   
       

        $volun_ID = $_POST['volunID'];


        $query2 = mysqli_query($connection,"UPDATE t_volunteer SET volun_active_flag = 0 WHERE volun_ID = '$volun_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have archived this member.');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/gmembers.php';\",0);</script>";
    }

    else if(isset($_POST['removecontact']))
    {   
       

        $volun_ID = $_POST['volunID'];


        $query2 = mysqli_query($connection,"UPDATE t_volunteer SET volun_constat = 0 WHERE volun_ID = '$volun_ID'"); 
       

         echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have removed this member from contacts.');".
                 "</script>";
         echo "<script>setTimeout(\"location.href = '../views/gmembers.php';\",0);</script>";
    }

?>
