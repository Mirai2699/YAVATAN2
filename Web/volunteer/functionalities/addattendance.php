<?php  

    $user = 'root';
    $pass = '';
    $dbnm = 'yavatan_2';

    try 
    {
        $dbh = new PDO('mysql:host=localhost;dbname='.$dbnm, $user, $pass);
    } 
    catch (PDOException $e) 
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
if(isset($_POST["addatt"])){
    $stmt = $dbh->prepare("INSERT INTO t_event_attendance
                         (ev_atnd_L_name, 
                          ev_atnd_F_name, 
                          ev_atnd_age, 
                          ev_atnd_gender,
                          ev_atnd_contact, 
                          ev_atnd_date_attended, 
                          ev_atnd_eventID, 
                          ev_atnd_registrar,
                          ev_atnd_timestamp,
                          ev_atnd_status
                         ) 
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP, ?)");
    
    $stmt->bindParam(1, $lname);
    $stmt->bindParam(2, $fname);
    $stmt->bindParam(3, $age);
    $stmt->bindParam(4, $gender);
    $stmt->bindParam(5, $contact);
    $stmt->bindParam(6, $dateatt);
    $stmt->bindParam(7, $event);
    $stmt->bindParam(8, $registrar);
    $stmt->bindParam(9, $status);

    $arr = $_POST; 
    for($i = 0; $i <= count($arr['att_lname'])-1;$i++)
    {
        $lname = $arr['att_lname'][$i];
        $fname = $arr['att_fname'][$i];
        $age = $arr['att_age'][$i];
        $gender = $arr['att_gen'][$i];
        $contact = $arr['att_con'][$i];
        $status = $arr['att_status'][$i];        
        $dateatt = $arr['att_date']; 
        $event = $arr['att_eventID'];
        $registrar = $arr['att_registrar'];
        $stmt->execute();

    }

    echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully added the event attendees!');".
                 "</script>";
    echo "<script>setTimeout(\"location.href = '../views/attendance.php';\",0);</script>";
}
else if(isset($_POST["promotecontact"])){
  
}
?>