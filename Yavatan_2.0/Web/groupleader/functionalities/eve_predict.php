<?php
	 include("../../../db_con.php");

	 $curryear = date("Y");
	 $currmonth = date("m");
	 $baseyear = ($curryear - 1);
	 $grpID = $_SESSION['grpID'];




	 
	 // echo$currmonth;

	 $view_city = mysqli_query($connection,"SELECT DISTINCT grp_city FROM `t_group` where grp_ID = '$grpID' ");
                  while($row = mysqli_fetch_assoc($view_city))
                  {
                  	 $groupcity = $row["grp_city"];
                  	 
                  	
                  	 $count_nearcity = mysqli_query($connection,"SELECT * FROM `t_volunteer` WHERE volun_city = '$groupcity' ");
					 $nearcity_count = mysqli_num_rows($count_nearcity);
					 //echo $nearcity_count;

					 $count_farcity = mysqli_query($connection,"SELECT * FROM `t_volunteer` WHERE volun_city != '$groupcity' ");
					 $farcity_count = mysqli_num_rows($count_farcity);
					 //echo $farcity_count;

					 $count_age = mysqli_query($connection,"SELECT volun_Birthdate FROM `t_volunteer`");

					 // $bdate = '1993-12-23';
					 // $age = date_diff(date_create($bdate), date_create('now'))->y;

					 // echo $age;

					 $count_male = mysqli_query($connection,"SELECT * FROM `t_volunteer` WHERE volun_city = '$groupcity' AND volun_gender = 'Male'");
					 $male_count = mysqli_num_rows($count_male);
					 // echo $male_count;

					 $count_female = mysqli_query($connection,"SELECT * FROM `t_volunteer` WHERE volun_city = '$groupcity' AND volun_gender = 'Female'");
					 $female_count = mysqli_num_rows($count_female);
					 // echo $female_count;


					 $population = mysqli_query($connection,"SELECT * FROM `t_volunteer` ");
					 $total_count = mysqli_num_rows($population);

					 //Manipulate Count
					 //$nearcity_count = 5;
					 
					 $compute = ($nearcity_count / $total_count) * 100;

                     $finalcompute = number_format($compute,2);
					 // echo $compute;

					 if(49 > $compute)
					 {  
					 	$finalverdict = "There is a low probability of enough audiences that will attend your events.";
					 	$lowprob =  ' <div class="col-md-12">
						 				<div class="col-lg-3">
					                       <i class="livicon  pull-right" data-name="wifi-alt" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
					                     </div>
						                 <div class="col-lg-3">
						                      <h3>Audience is not enough...</h3>
						                 </div>
						                 <div class="col-md-6" style="text-align:justify">
						                      <p style="font-size: 13px; margin-top: 20px">There are less people around your area than expected.
						                      </p>
						                      <p style="font-size: 13px">
						                      	<i>Probability Percentage of Expected Total Attendees:</i> 
						                      	<b>'.$finalcompute.'%</b></p>
						                      <p style="font-size: 13px">
						                      	<i>Prediction Analysis Verdict:</i>
						                      	<b>'.$finalverdict.'</b>
						                      </p>
						                     
						                 </div>
						                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
						               </div>
					               ';

						echo $lowprob;
					 }
					 else if(50 == $compute)
					 {   

					 	$finalverdict = "There is a 50/50 chance and probability count of enough count in event attendance.";
					 	$midprob =  '  <div class="col-md-12">
						 				<div class="col-lg-3">
					                       <i class="livicon  pull-right" data-name="user" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
					                     </div>
						                 <div class="col-lg-3">
						                      <h3>Audiences may hesistate...</h3>
						                 </div>
						                 <div class="col-md-6" style="text-align:justify">
						                      <p style="font-size: 13px; margin-top: 20px">The people around your area are hesistating to travel to your event, considering the factor of its distance.
						                      </p>
						                      <p style="font-size: 13px">
						                      	<i>Probability Percentage of Expected Total Attendees:</i> 
						                      	<b>'.$finalcompute.'%</b></p>
						                      <p style="font-size: 13px">
						                      	<i>Prediction Analysis Verdict:</i>
						                      	<b>'.$finalverdict.'</b>
						                      </p>
						                     
						                 </div>
						                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
						               </div>
					               ';

						echo $midprob;
					 }
					 else if(51 < $compute)
					 {  
					 	$finalverdict = "There is a high probability of enough or more count in event attendance.";
					 	$highprob =  ' <div class="col-md-12">
						 				<div class="col-lg-3">
					                       <i class="livicon  pull-right" data-name="users" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
					                     </div>
						                 <div class="col-lg-3">
						                      <h3>You may have enough audiences for this.</h3>
						                 </div>
						                 <div class="col-md-6" style="text-align:justify">
						                      <p style="font-size: 13px; margin-top: 20px">The type of people you selected may be expected to be enough or greater around your area.
						                      </p>
						                      <p style="font-size: 13px">
						                      	<i>Probability Percentage of Expected Total Attendees:</i> 
						                      	<b>'.$finalcompute.'%</b></p>
						                      <p style="font-size: 13px">
						                      	<i>Prediction Analysis Verdict:</i>
						                      	<b>'.$finalverdict.'</b>
						                      </p>
						                     
						                 </div>
						                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
						               </div>

					               ';

						echo $highprob;
					 }


                  }


       $view_year = mysqli_query($connection,"SELECT DISTINCT year(w_date) as L_DATE FROM `t_weather` WHERE year(w_date) = $baseyear");
                  while($row = mysqli_fetch_assoc($view_year))
                        {
                             $w_year = $row["L_DATE"];


                             // COUNT TOTAL NUMBER OF DAYS SUNNY	
                          	 $count_sunny = mysqli_query($connection,"SELECT * FROM `t_weather` as WTHR INNER JOIN `t_group` AS GRP ON WTHR.w_city = GRP.grp_city WHERE year(w_date) = $w_year and month(w_date) = $currmonth and GRP.grp_ID = '$grpID' and w_desc = 'Sunny';");
								 $sunny_count = mysqli_num_rows($count_sunny);
								 // echo $sunny_count;

							 // COUNT TOTAL NUMBER OF DAYS CLOUDY
							 $count_cloudy = mysqli_query($connection,"SELECT * FROM `t_weather` as WTHR INNER JOIN `t_group` AS GRP ON WTHR.w_city = GRP.grp_city WHERE year(w_date) = $w_year and month(w_date) = $currmonth and GRP.grp_ID = '$grpID' and w_desc = 'Cloudy';");
								 $cloudy_count = mysqli_num_rows($count_cloudy);
								 // echo $cloudy_count;

							 // COUNT TOTAL NUMBER OF DAYS WINDY
							 $count_windy = mysqli_query($connection,"SELECT * FROM `t_weather` as WTHR INNER JOIN `t_group` AS GRP ON WTHR.w_city = GRP.grp_city WHERE year(w_date) = $w_year and month(w_date) = $currmonth and GRP.grp_ID = '$grpID' and w_desc = 'Windy';");
								 $windy_count = mysqli_num_rows($count_windy);
								 // echo $windy_count;

							 // COUNT TOTAL NUMBER OF DAYS FAIR
							 $count_fair = mysqli_query($connection,"SELECT * FROM `t_weather` as WTHR INNER JOIN `t_group` AS GRP ON WTHR.w_city = GRP.grp_city WHERE year(w_date) = $w_year and month(w_date) = $currmonth and GRP.grp_ID = '$grpID' and w_desc = 'Fair';");
								 $fair_count = mysqli_num_rows($count_fair);
								 // echo $fair_count;

							 // COUNT TOTAL NUMBER OF DAYS RAINY
							 $count_rainy = mysqli_query($connection,"SELECT * FROM `t_weather` as WTHR INNER JOIN `t_group` AS GRP ON WTHR.w_city = GRP.grp_city WHERE year(w_date) = $w_year and month(w_date) = $currmonth and GRP.grp_ID = '$grpID' and w_desc = 'Rainy';");
								 $rainy_count = mysqli_num_rows($count_rainy);
								 // echo $rainy_count;

							 // COUNT TOTAL NUMBER OF DAYS STORMY                      
							 $count_stormy = mysqli_query($connection,"SELECT * FROM `t_weather` as WTHR INNER JOIN `t_group` AS GRP ON WTHR.w_city = GRP.grp_city WHERE year(w_date) = $w_year and month(w_date) = $currmonth and GRP.grp_ID = '$grpID' and w_desc = 'Stormy';");
								 $stormy_count = mysqli_num_rows($count_stormy);
								 // echo $stormy_count;    

						

							//WEATHER MANIPULATION
								// $sunny_count  = 1 ;
								// $fair_count   = 1 ;
								// $cloudy_count = 2 ;
								// $rainy_count  = 19 ;
								// $windy_count  = 18 ;
								// $stormy_count = 20 ;

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS SUNNY
							if($sunny_count > $rainy_count && $sunny_count >= $fair_count && $sunny_count > $windy_count && 
							   $sunny_count > $cloudy_count && $sunny_count > $windy_count && $sunny_count > $stormy_count)
							{
								$sunnydisp = '
											<div class="col-md-12">
								 				<div class="col-lg-3">
							                       <i class="livicon  pull-right" data-name="cloud-sun" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
							                     </div>
								                 <div class="col-lg-3">
								                      <h3>The Weather will be sunny and fair</h3>
								                 </div>
								                 <div class="col-md-6" style="text-align:justify">
								                      <p style="font-size: 13px; margin-top: 10px">
				                                         <b>Formulated Advise/Suggestion:</b><br>
				                                         - Its a good month to create outside events and activities,<br>particularly in forests, beaches, and mountains.<br>
				                                         - It is recommended to give notice to your members and attendees to bring umbrellas and apply sunscreens, to be used either for intense heat.
				                                     </p> 
								                 </div>
								                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
								            </div>
					                          ';

								echo $sunnydisp;
							}

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS CLOUDY
							else if($sunny_count == $rainy_count && $sunny_count == $fair_count && $sunny_count == $windy_count && 
							        $sunny_count == $cloudy_count && $sunny_count == $windy_count  && $rainy_count == $sunny_count)
							{
								$cloudydisp = '
											<div class="col-md-12">
								 				<div class="col-lg-3">
							                       <i class="livicon  pull-right" data-name="cloud" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
							                     </div>
								                 <div class="col-lg-3">
								                      <h3>The Weather will be Cloudy and fair</h3>
								                 </div>
								                 <div class="col-md-6" style="text-align:justify">
								                      <p style="font-size: 13px; margin-top: 10px">
				                                         <b>Formulated Advise/Suggestion:</b><br>
				                                        - This month is ideal and recommended for to create outside events and activities.
				                                     </p> 
								                 </div>
								                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
								            </div>
					                          ';

								echo $cloudydisp;
							}
						
							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS RAINY
							else if($sunny_count < $rainy_count && $sunny_count < $fair_count && $sunny_count < $windy_count && 
							        $sunny_count < $cloudy_count ||  $sunny_count < $stormy_count || $windy_count < $rainy_count &&
							    	$rainy_count > $sunny_count && $rainy_count > $fair_count && $rainy_count > $cloudy_count &&
							    	$rainy_count > $stormy_count)
							{
								$rainydisp = '

										   <div class="col-md-12">
								 				<div class="col-lg-3">
							                       <i class="livicon  pull-right" data-name="cloud-rain" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
							                     </div>
								                 <div class="col-lg-3">
								                      <h3>The Weather will be rainy</h3>
								                 </div>
								                 <div class="col-md-6" style="text-align:justify">
								                      <p style="font-size: 13px; margin-top: 10px">
				                                         <b>Formulated Advise/Suggestion:</b><br>
				                                         - It is not advised to create outdoor events and activities.<br>
				                                         - If it is inevitable, advise your members and attendees to bring their own umbrellas and wear their jackets/raincoats.
				                                     </p> 
								                 </div>
								                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
								            </div>

								          
					                          ';

								echo $rainydisp;
							}

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS STORMY
							else if($sunny_count < $rainy_count && $sunny_count <= $fair_count && $sunny_count <= $windy_count && 
							        $sunny_count <= $cloudy_count && $rainy_count >= $windy_count || $sunny_count < $stormy_count &&
							    	$rainy_count < $stormy_count || $stormy_count == $windy_count && $fair_count < $windy_count)
							{
								$stormydisp = '

											 <div class="col-md-12">
								 				<div class="col-lg-3">
							                       <i class="livicon  pull-right" data-name="cloud-bolt" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
							                     </div>
								                 <div class="col-lg-3">
								                      <h3>The Weather will be Stormy</h3>
								                 </div>
								                 <div class="col-md-6" style="text-align:justify">
								                      <p style="font-size: 13px; margin-top: 10px">
				                                         <b>Formulated Advise/Suggestion:</b><br>
				                                         - It is not advised to create events in the said area.<br>
			                                             - It is recommended to stay in inside your homes.
				                                     </p> 
								                 </div>
								                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
								            </div>

					                          ';

								echo $stormydisp;
							}

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS UNPREDICTABLE (IF NO CONDITION SATISFIES)
							else
							{
								$unpredictdisp = '

												 <div class="col-md-12">
									 				<div class="col-lg-3">
								                       <i class="livicon  pull-right" data-name="eye-close" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
								                     </div>
									                 <div class="col-lg-3">
									                      <h3>The Weather is Unpredictable</h3>
									                 </div>
									                 <div class="col-md-6" style="text-align:justify">
									                      <p style="font-size: 13px; margin-top: 10px">
					                                         <b>Formulated Advise/Suggestion:</b><br>
					                                          - Precautionaries are advised in creating outside events in the said area.<br>
				                                              - It is recommended to give notice to your members and attendees to bring umbrellas, to be used either for intense heat or sudden rain.
					                                     </p> 
									                 </div>
									                 <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
									            </div>
					                          ';

								echo $unpredictdisp;
							}
							           
                            
                        }

         
        ///// BUDGET PREDICTION ////


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

					// $lessbudget_count = ;
					// $morebudget_count = ;
					// $equalbudget_count = ;

					// echo "less budget count: $lessbudget_count <br>";
					// echo "More budget count: $morebudget_count <br>";
					// echo "Equal budget count: $equalbudget_count <br>";
							 
					if($lessbudget_count > $morebudget_count && $lessbudget_count >= $equalbudget_count)
					{
						$lowprob =  '
								         <div class="col-md-12">
									 		   <div class="col-lg-3">
								                   <i class="livicon  pull-right" data-name="money" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
								                </div>
									            <div class="col-lg-3">
									                      <h3>Seems like you cannot handle money properly!</h3>
									            </div>
									            <div class="col-md-6" style="text-align:justify">
									                <p style="font-size: 13px; margin-top: 10px">You are always exceeding in your estimated budget.</p>
									               <p><i>Recommended Estimated Budget: </i><b>₱ '.$displayestimation.'</b> </p>  
									           </div>
									            <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
									      </div>';

						echo $lowprob;
					}
					else if($lessbudget_count < $morebudget_count && $morebudget_count >= $equalbudget_count)
					{
						$highprob =  '
								         <div class="col-md-12">
									 		   <div class="col-lg-3">
								                   <i class="livicon  pull-right" data-name="money" data-l="true" data-c="#6e6e6e" data-hc="darkgrey" data-s="140"></i>
								                </div>
									            <div class="col-lg-3">
									                      <h3>You can proceed with this budget</h3>
									            </div>
									            <div class="col-md-6" style="text-align:justify">
									                <p style="font-size: 13px; margin-top: 10px">This amount of estimated budget is more than enough for this event type and number of target audience.</p>
									                <p style="font-size: 13px;">You can proceed around with this given amount of general budget estimation based on the previous collective expenses analysis.</p>
									               <p><i>Recommended Estimated Budget: </i><b>₱ '.$displayestimation.'</b> </p>  
									           </div>
									            <div class"row" style="padding:1px; background-color:#6e6e6e"></div>
									      </div>';

						echo $highprob;
					}
							 


		                  
	     }

	 
?>