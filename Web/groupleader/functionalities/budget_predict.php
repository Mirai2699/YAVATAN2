<?php
	 include("../../../db_con.php");

	 $curryear = date("Y");
	 $currmonth = date("m");
	 $baseyear = ($curryear - 1);
	 $grpID = $_SESSION['grpID'];
	 // $grpID = 3;

	 
	 // echo$currmonth;
	 $get_groupname = mysqli_query($connection,"SELECT DISTINCT his_event_bygrp, grp_name FROM `t_history_event` AS HISEVE INNER JOIN t_group AS GRP ON HISEVE.his_event_bygrp = GRP.grp_name where grp_ID = '$grpID' ");
		 while($row = mysqli_fetch_assoc($get_groupname))
		 {
		 	 $gname = $row["grp_name"];
			 //echo $gname;

		            $count_lessbudget = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_bygrp = '$gname' and his_event_budget < his_event_actual_budget ");
					$lessbudget_count = mysqli_num_rows($count_lessbudget);
				    //echo $lessbudget_count;	


				    $count_equalbudget = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_bygrp = '$gname' and his_event_budget = his_event_actual_budget ");
					$equalbudget_count = mysqli_num_rows($count_equalbudget);
				    //echo $equalbudget_count;	


				    $count_morebudget = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_bygrp = '$gname' and his_event_budget > his_event_actual_budget ");
					$morebudget_count = mysqli_num_rows($count_morebudget);
				    //echo $morebudget_count;	
					

					//Budget Count and Manipulation:

					$lessbudget_count = 2;
					$morebudget_count = 44;
					$equalbudget_count = 7;

					// echo "less budget count: $lessbudget_count <br>";
					// echo "More budget count: $morebudget_count <br>";
					// echo "Equal budget count: $equalbudget_count <br>";
							 
					if($lessbudget_count > $morebudget_count && $lessbudget_count >= $equalbudget_count)
					{
						$lowprob =  '<div class="col-lg-4">
							               <i class="livicon  pull-right" data-name="money" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
							             </div>
								            <div class="col-lg-8">
								                <h3>Seems like you cannot handle money properly!</h3>
								                                
								                <p style="font-size: 11px">You are always exceeding in your estimated budget.</p>
								                 
								                <p>For more details, click <a data-toggle="modal" href="#budget_details" style="color: yellow"><u>here.</u></a>
								                </p>    
								           </div>
								         ';

						echo $lowprob;
					}
					else if($lessbudget_count < $morebudget_count && $morebudget_count >= $equalbudget_count)
					{
						$highprob =  '<div class="col-lg-4">
							               <i class="livicon  pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
							             </div>
								            <div class="col-lg-8">
								                <h3>You have Good Financial Management!</h3>
								                                
								                <p style="font-size: 11px">You are very good in managing your budget and minimizing your expenses.</p>
								               
								                <p>For more details, click <a data-toggle="modal" href="#budget_details" style="color: yellow"><u>here.</u></a>
								                </p>    
								           </div>
								         ';

						echo $highprob;
					}
							 


		                  
	     }

	 
?>