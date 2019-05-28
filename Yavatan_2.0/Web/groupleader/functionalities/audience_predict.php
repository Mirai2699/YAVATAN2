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
					 //$nearcity_count = 0;
					 
					 $compute = ($nearcity_count / $total_count) * 100;
					 // echo $compute;

					 if(49 > $compute)
					 {
					 	$lowprob =  '<div class="col-lg-4>
				                       <i class="livicon  pull-right" data-name="wifi-alt" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                     </div>
					                 <div class="col-lg-8">
					                      <h3>Get More Audiences!</h3>
					                                
					                      <p style="font-size: 11px">There are less people around your area than expected.</p>
					                      <p style="font-size: 11px">It is necessary to promote your events in other surrounding cities. 
					                      </p> 
					                      <p>For more details, click <a data-toggle="modal" href="#audience_details" style="color: yellow"><u>here.</u></a>
					                      </p>    
					                 </div>
					               ';

						echo $lowprob;
					 }
					 else if(50 == $compute)
					 {
					 	$midprob =  '<div class="col-lg-4>
				                       <i class="livicon  pull-right" data-name="user" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                     </div>
					                 <div class="col-lg-8">
					                      <h3>Your Audiences seems to be Hesistating...</h3>
					                                
					                      <p style="font-size: 11px">The people around your area are hesistating to travel to your event, considering the factor of its distance.</p>
					                      
					                      <p>For more details, click <a data-toggle="modal" href="#audience_details" style="color: yellow"><u>here.</u></a>
					                      </p>    
					                 </div>
					               ';

						echo $midprob;
					 }
					 else if(51 < $compute)
					 {
					 	$highprob =  '<div class="col-lg-4">
				                       <i class="livicon  pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="90"></i>
				                     </div>
					                 <div class="col-lg-8">
					                      <h3>You have Enough Audiences!</h3>
					                                
					                      <p style="font-size: 11px">The people around your area seems to be interested to your events, considering that it is very accessible for them.</p>
					                      <p>For more details, click <a data-toggle="modal" href="#audience_details" style="color: yellow"><u>here.</u></a>
					                      </p>    
					                 </div>
					               ';

						echo $highprob;
					 }


                  }

	 
?>