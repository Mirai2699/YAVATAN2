<?php
	 include("../../../db_con.php");

	 $curryear = date("Y");
	 $currmonth = date("m");
	 $baseyear = ($curryear - 1);
	 $grpID = $_SESSION['grpID'];
	 // echo$currmonth;


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
								$sunnydisp = '<div class="col-lg-4">
				                                <i class="livicon  pull-right" data-name="cloud-sun" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                            	</div>
					                            <div class="col-lg-8">
					                                <h3>Whats in the Weather?</h3>
					                                
					                                <p style="font-size: 11px">The Weather Prediction for this month will be sunny and fair.</p>
					                                <p style="font-size: 11px">It is a good month for outdoor events and activities
					                                </p> 
					                                <p>For more details, click <a data-toggle="modal" href="#weather_details" style="color: yellow"><u>here.</u></a>
					                                </p>    
					                            </div>
					                          ';

								echo $sunnydisp;
							}

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS CLOUDY
							else if($sunny_count == $rainy_count && $sunny_count == $fair_count && $sunny_count == $windy_count && 
							        $sunny_count == $cloudy_count && $sunny_count == $windy_count  && $rainy_count == $sunny_count)
							{
								$cloudydisp = '<div class="col-lg-4">
				                                <i class="livicon  pull-right" data-name="cloud" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                            	</div>
					                            <div class="col-lg-8">
					                                <h3>Whats in the Weather?</h3>
					                                
					                                <p style="font-size: 11px">The Weather Prediction for this month will be Cloudy and Fairly Windy.</p>
					                                <p style="font-size: 11px">It can be good month for outdoor events and activities
					                                </p> 
					                                <p>For more details, click <a data-toggle="modal" href="#weather_details" style="color: yellow"><u>here.</u></a>
					                                </p>    
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
								$rainydisp = '<div class="col-lg-4">
				                                <i class="livicon  pull-right" data-name="cloud-rain" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                            	</div>
					                            <div class="col-lg-8">
					                                <h3>Whats in the Weather?</h3>
					                                
					                                <p style="font-size: 11px">The Weather Prediction for this month will be Rainy.</p>
					                                <p style="font-size: 11px">It is not advised to create outdoor events and activities.
					                                </p> 
					                                <p>For more details, click <a data-toggle="modal" href="#weather_details" style="color: yellow"><u>here.</u></a>
					                                </p>    
					                            </div>
					                          ';

								echo $rainydisp;
							}

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS STORMY
							else if($sunny_count < $rainy_count && $sunny_count <= $fair_count && $sunny_count <= $windy_count && 
							        $sunny_count <= $cloudy_count && $rainy_count >= $windy_count || $sunny_count < $stormy_count &&
							    	$rainy_count < $stormy_count || $stormy_count == $windy_count && $fair_count < $windy_count)
							{
								$stormydisp = '<div class="col-lg-4">
				                                <i class="livicon  pull-right" data-name="cloud-bolts" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                            	</div>
					                            <div class="col-lg-8">
					                                <h3>Whats in the Weather?</h3>
					                                
					                                <p style="font-size: 11px">The Weather Prediction for this month will be Stormy, with Strong Winds and Heavy Rains.</p>
					                                <p style="font-size: 11px">It is not advised to create events in the said area.
					                                </p> 
					                                <p>For more details, click <a data-toggle="modal" href="#weather_details" style="color: yellow"><u>here.</u></a>
					                                </p>    
					                            </div>
					                          ';

								echo $stormydisp;
							}

							//TO DETERMINE IF THE WEATHER FOR THIS MONTH IS UNPREDICTABLE (IF NO CONDITION SATISFIES)
							else
							{
								$unpredictdisp = '<div class="col-lg-4">
				                                <i class="livicon  pull-right" data-name="eye-close" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                            	</div>
					                            <div class="col-lg-8">
					                                <h3>Whats in the Weather?</h3>
					                                
					                                <p style="font-size: 11px">The Weather Prediction seems to be Unpredictable.</p>
					                                <p style="font-size: 11px">Since the weather is unpredictable, it depends on your decision if you want to create events for this month.
					                                </p> 
					                                <p>For more details, click <a data-toggle="modal" href="#weather_details" style="color: yellow"><u>here.</u></a>
					                                </p>    
					                            </div>
					                          ';

								echo $unpredictdisp;
							}
							           
                            
                        }
?>