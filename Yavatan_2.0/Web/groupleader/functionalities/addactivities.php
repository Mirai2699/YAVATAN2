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

    $stmt = $dbh->prepare("INSERT INTO t_event_activity
                         (act_name, act_time, act_event_ID, act_timestamp) VALUES (?, ?, ?, CURRENT_TIMESTAMP)");
    
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $time);
    $stmt->bindParam(3, $eventID);

    $arr = $_POST; 
    for($i = 0; $i <= count($arr['act_name'])-1;$i++)
    {
        $name = $arr['act_name'][$i];
        $time = $arr['act_time'][$i];
        $eventID = $arr['act_eventID'];  
        $stmt->execute();

    }

    echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully added activities!');".
                 "</script>";
    echo "<script>setTimeout(\"location.href = '../views/activities.php';\",0);</script>";

?>