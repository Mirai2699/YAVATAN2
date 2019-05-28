<?php
	 include("../../../db_con.php");

	 $curryear = date("Y");
	 $currmonth = date("m");
	 $baseyear = ($curryear - 1);
	 //$grpID = $_SESSION['grpID'];
	 $grpID = 3;

	 
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
					

		// MUSICAL CONCERT EVENT TYPE BUDGET
					$musicalconcert = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_type = 'Musical Concert'");
					$musicbudget_count = mysqli_num_rows($musicalconcert);

					$musicbudget = mysqli_query($connection,"SELECT SUM(his_event_budget) as Total_esbdgt FROM `t_history_event` WHERE his_event_type = 'Musical Concert'");
					while($musical_est_row = mysqli_fetch_assoc($musicbudget))
		 			{
		 				$MusicEsttotal = $musical_est_row["Total_esbdgt"];
		 				
		 			}
		 				$music_est_average = $MusicEsttotal/$musicbudget_count;
		 				$DispMusicEstBgt = number_format($music_est_average, 2);


		 			$music_act_budget = mysqli_query($connection,"SELECT SUM(his_event_actual_budget) as Total_actbdgt FROM `t_history_event` WHERE his_event_type = 'Musical Concert'");
					while($musical_act_row = mysqli_fetch_assoc($music_act_budget))
		 			{
		 				$musical_act_total = $musical_act_row["Total_actbdgt"];
		 				
		 			}
		 				$music_act_average = $musical_act_total/$musicbudget_count;
		 				$DispMusicActBgt = number_format($music_act_average, 2);



		 // MEDICAL MISSION EVENT TYPE BUDGET
					$medical = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_type = 'Medical Mission'");
					$medicalbudget_count = mysqli_num_rows($medical);

					$medicalbudget = mysqli_query($connection,"SELECT SUM(his_event_budget) as Total_esbdgt FROM `t_history_event` WHERE his_event_type = 'Medical Mission'");
					while($medic_est_row = mysqli_fetch_assoc($medicalbudget))
		 			{
		 				$MedicEsttotal = $medic_est_row["Total_esbdgt"];
		 				
		 			}
		 				$medic_est_average = $MedicEsttotal/$medicalbudget_count;
		 				$DispMedicEstBgt = number_format($medic_est_average, 2);


		 			$medic_act_budget = mysqli_query($connection,"SELECT SUM(his_event_actual_budget) as Total_actbdgt FROM `t_history_event` WHERE his_event_type = 'Medical Mission'");
					while($medical_act_row = mysqli_fetch_assoc($medic_act_budget))
		 			{
		 				$medical_act_total = $medical_act_row["Total_actbdgt"];
		 				
		 			}
		 				$medic_act_average = $medical_act_total/$medicalbudget_count;
		 				$DispMedicActBgt = number_format($medic_act_average, 2);



		 // FEEDING PROGRAM EVENT TYPE BUDGET
					$feeding = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_type = 'Medical Mission'");
					$feedingbudget_count = mysqli_num_rows($feeding);

					$feedingbudget = mysqli_query($connection,"SELECT SUM(his_event_budget) as Total_esbdgt FROM `t_history_event` WHERE his_event_type = 'Feeding Program'");
					while($Feed_est_row = mysqli_fetch_assoc($feedingbudget))
		 			{
		 				$FeedEsttotal = $Feed_est_row["Total_esbdgt"];
		 				
		 			}
		 				$Feed_est_average = $FeedEsttotal/$feedingbudget_count;
		 				$DispFeedEstBgt = number_format($Feed_est_average, 2);


		 			$Feed_act_budget = mysqli_query($connection,"SELECT SUM(his_event_actual_budget) as Total_actbdgt FROM `t_history_event` WHERE his_event_type = 'Feeding Program'");
					while($feeding_act_row = mysqli_fetch_assoc($Feed_act_budget))
		 			{
		 				$feeding_act_total = $feeding_act_row["Total_actbdgt"];
		 				
		 			}
		 				$Feed_act_average = $feeding_act_total/$feedingbudget_count;
		 				$DispFeedActBgt = number_format($Feed_act_average, 2);



		  // PRAYER MEETING EVENT TYPE BUDGET
					$prayer = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_type = 'Prayer Meeting'");
					$prayerbudget_count = mysqli_num_rows($feeding);

					$prayerbudget = mysqli_query($connection,"SELECT SUM(his_event_budget) as Total_esbdgt FROM `t_history_event` WHERE his_event_type = 'Prayer Meeting'");
					while($Pray_est_row = mysqli_fetch_assoc($prayerbudget))
		 			{
		 				$PrayEsttotal = $Pray_est_row["Total_esbdgt"];
		 				
		 			}
		 				$Pray_est_average = $PrayEsttotal/$prayerbudget_count;
		 				$DispPrayEstBgt = number_format($Pray_est_average, 2);


		 			$Pray_act_budget = mysqli_query($connection,"SELECT SUM(his_event_actual_budget) as Total_actbdgt FROM `t_history_event` WHERE his_event_type = 'Prayer Meeting'");
					while($prayer_act_row = mysqli_fetch_assoc($Pray_act_budget))
		 			{
		 				$prayer_act_total = $prayer_act_row["Total_actbdgt"];
		 				
		 			}
		 				$Pray_act_average = $prayer_act_total/$prayerbudget_count;
		 				$DispPrayActBgt = number_format($Pray_act_average, 2);




		 	// CHARITY EVENT TYPE BUDGET
					$charity = mysqli_query($connection,"SELECT * FROM `t_history_event` WHERE his_event_type = 'Charity Event'");
					$charitybudget_count = mysqli_num_rows($charity);

					$charitybudget = mysqli_query($connection,"SELECT SUM(his_event_budget) as Total_esbdgt FROM `t_history_event` WHERE his_event_type = 'Charity Event'");
					while($Charity_est_row = mysqli_fetch_assoc($charitybudget))
		 			{
		 				$CharityEsttotal = $Charity_est_row["Total_esbdgt"];
		 				
		 			}
		 				$Charity_est_average = $CharityEsttotal/$charitybudget_count;
		 				$DispCharityEstBgt = number_format($Charity_est_average, 2);


		 			$Charity_act_budget = mysqli_query($connection,"SELECT SUM(his_event_actual_budget) as Total_actbdgt FROM `t_history_event` WHERE his_event_type = 'Charity Event'");
					while($charity_act_row = mysqli_fetch_assoc($Charity_act_budget))
		 			{
		 				$charity_act_total = $charity_act_row["Total_actbdgt"];
		 				
		 			}
		 				$Charity_act_average = $charity_act_total/$charitybudget_count;
		 				$DispCharityActBgt = number_format($Charity_act_average, 2);
		 			

		 	//TOTAL AVERAGE

		 			$EstBudgetTotalAverage = ($Charity_est_average + $music_est_average + $Pray_est_average + $Feed_est_average + $medic_est_average)/5;
		 			$displayestimation = number_format($EstBudgetTotalAverage,2);

		 			$ActBudgetTotalAverage = ($Charity_act_average + $music_act_average + $Pray_act_average + $Feed_act_average + $medic_act_average)/5;
		 			$displayactual = number_format($ActBudgetTotalAverage,2);



					//Budget Count and Manipulation:

					//$lessbudget_count = ;
					// $morebudget_count = ;
					// $equalbudget_count = ;

					// echo "less budget count: $lessbudget_count <br>";
					// echo "More budget count: $morebudget_count <br>";
					// echo "Equal budget count: $equalbudget_count <br>";
			
					if($lessbudget_count > $morebudget_count && $lessbudget_count >= $equalbudget_count)
					{
						
                        $goodfinance =  '<div class="col-lg-6">
                                      <i class="livicon  pull-right" data-name="money"" data-l="true" data-c="gray" data-hc="gray" data-s="180">
                                      </i>
                                  </div>
                                 <div class="col-lg-6">
                                     <h2>Seems like your are not Good in handling money...</h2>
                                                                                                    
                                      <p style="font-size: 14px">This evaluation and prediction is based from the classification analysis and inference of the past budget estimation and allocation for events, managed by this group.
                                      </p>
                                 </div>
                                 
                                 <div class="col-lg-12">
                                     <p style="font-size: 15px">
                                        <b>Overall Total Budget and Expenses Evaluation as of '.$currmonthletter.'  '.$curryear.'.</b><br>
                                     </p> 
                                     <p style="font-size: 13px">
                                        <b>The following values below are categorized based on event type.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                     	<th>
                                     		<tr>
                                     			<td>Event Type</td>
                                     			<td>Estimated Average Budget</td>
                                     			<td>Actual Average Expenses</td>
                                     		<tr>
                                     	<th>
                                     	<tbody>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Musical Concert:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispMusicEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispMusicActBgt.'</b></td>
	                                         </tr>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Medical Mission:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispMedicEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispMedicActBgt.'</b></td>
	                                         </tr>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Feeding Program:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispFeedEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispFeedActBgt.'</b></td>
	                                         </tr>
	                                          <tr class="gradeX">
	                                             <td style="width:30%"><b>Prayer Meeting:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispPrayEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispPrayActBgt.'</b></td>
	                                         </tr>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Charity Event:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispCharityEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispCharityActBgt.'</b></td>
	                                         </tr>
                                        </tbody>
                                     </table>

                                     <table class="" style="margin-top:15px">
                                     	<th>
                                     		<tr>
                                     			<td style="display:hidden">Statement</td>
                                     			<td style="display:hidden">Total Budget Estimate Average</td>
                                     			<td style="display:hidden">Total Actual Expense Average</td>
                                     		<tr>
                                     	<th>
                                     	<tbody>
	                                         <tr class="gradeX" style="margin-top: 10px">
	                                             <td style="width:30%"><b>Total Average:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$displayestimation.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$displayactual.'</b></td>
	                                         </tr>
	                                    </tbody>
                                     </table>
                                </div>
                               	<div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Evaluation and Analysis:</b><br>
                                         - You are not good in financial and budget management.<br>
                                         - Your actual expenses are greater than estimated budget, thus pushing your group into more liabilities.<br>
                                        
                                     </p> 
                                 </div>
                                <div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br>
                                         - It is suggested to find another appropriate practice of financial and budget management.<br>
                                         - You need to be more cautious in spending your budget, so can should be aligned to your estimation.<br>
                                         - In case you cant still manage it, you are greatly in need to hire a professional financial adviser.
                                     </p> 
                                 </div>
                            ';
					}
					else if($lessbudget_count < $morebudget_count && $morebudget_count >= $equalbudget_count)
					{
						
                        $goodfinance =  '<div class="col-lg-6">
                                      <i class="livicon  pull-right" data-name="piggybank" data-l="true" data-c="gray" data-hc="gray" data-s="180">
                                      </i>
                                  </div>
                                 <div class="col-lg-6">
                                     <h2>You have Accumulated Big Savings</h2>
                                                                                                    
                                      <p style="font-size: 14px">This evaluation and prediction is based from the classification analysis and inference of the past budget estimation and allocation for events, managed by this group.
                                      </p>
                                 </div>
                                 
                                 <div class="col-lg-12">
                                     <p style="font-size: 15px">
                                        <b>Overall Total Budget and Expenses Evaluation as of '.$currmonthletter.'  '.$curryear.'.</b><br>
                                     </p> 
                                     <p style="font-size: 13px">
                                        <b>The following values below are categorized based on event type.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                     	<th>
                                     		<tr>
                                     			<td>Event Type</td>
                                     			<td>Estimated Average Budget</td>
                                     			<td>Actual Average Expenses</td>
                                     		<tr>
                                     	<th>
                                     	<tbody>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Musical Concert:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispMusicEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispMusicActBgt.'</b></td>
	                                         </tr>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Medical Mission:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispMedicEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispMedicActBgt.'</b></td>
	                                         </tr>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Feeding Program:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispFeedEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispFeedActBgt.'</b></td>
	                                         </tr>
	                                          <tr class="gradeX">
	                                             <td style="width:30%"><b>Prayer Meeting:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispPrayEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispPrayActBgt.'</b></td>
	                                         </tr>
	                                         <tr class="gradeX">
	                                             <td style="width:30%"><b>Charity Event:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$DispCharityEstBgt.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$DispCharityActBgt.'</b></td>
	                                         </tr>
                                        </tbody>
                                     </table>

                                     <table class="" style="margin-top:15px">
                                     	<th>
                                     		<tr>
                                     			<td style="display:hidden">Statement</td>
                                     			<td style="display:hidden">Total Budget Estimate Average</td>
                                     			<td style="display:hidden">Total Actual Expense Average</td>
                                     		<tr>
                                     	<th>
                                     	<tbody>
	                                         <tr class="gradeX" style="margin-top: 10px">
	                                             <td style="width:30%"><b>Total Average:</b></td>
	                                             <td style="width:40%">&nbsp;<b>₱ '.$displayestimation.'</b></td>
	                                             <td style="width:30%">&nbsp;<b>₱ '.$displayactual.'</b></td>
	                                         </tr>
	                                    </tbody>
                                     </table>
                                </div>
                               	<div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Evaluation and Analysis:</b><br>
                                         - You are good in terms of financial and budget management.<br>
                                         - By having less actual expenses from the estimated budget, it will result to more savings.<br>
                                        
                                     </p> 
                                 </div>
                                <div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br>
                                         - It is suggested to retain the practice of your financial and budget management.<br>
                                         - By utilizing your savings, you can use it to provide extra resources for your group and for your events.<br>
                                        
                                     </p> 
                                 </div>
                            ';
					}
							 
					echo $goodfinance;

		                  
	     }

	 
?>