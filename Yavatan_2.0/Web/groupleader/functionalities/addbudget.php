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



    $stmt = $dbh->prepare("INSERT INTO t_event_budget
                         (bdgt_particular,  
                          bdgt_amount, 
                          bdgt_date_spent,
                          bdgt_eventID, 
                          bdgt_timestamp
                         ) 
                         VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)");
    
    $stmt->bindParam(1, $ab_prtclr);
    $stmt->bindParam(2, $ab_amnt);
    $stmt->bindParam(3, $ab_dspent);
    $stmt->bindParam(4, $ab_ev_ID);

    $arr = $_POST; 

    for($i = 0; $i <= count($arr['ab_part'])-1;$i++)
    {
        $ab_prtclr = $arr['ab_part'][$i];
        $ab_amnt = $arr['ab_amount'][$i];
        $ab_dspent = $arr['ab_date'][$i];
        $ab_ev_ID = $arr['ab_eventID']; 

        
        $stmt->execute();
        

    }



    echo "<script type=\"text/javascript\">".
                  "alert
                  ('You have successfully recorded the events expenses!');".
                 "</script>";

    echo "<script>setTimeout(\"location.href = '../views/events.php';\",0);</script>";

?>