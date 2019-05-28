<?php
     include("../../../db_con.php");

     $curryear = date("Y");
     $currmonth = date("m");
     $baseyear = ($curryear - 1);
     $grpID = $_SESSION['grpID'];     

     
     // echo$currmonth;

     $view_city = mysqli_query($connection,"SELECT DISTINCT grp_city FROM `t_group` where grp_ID = '$grpID'");
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
                     //$nearcity_count = 4.5;

                     $compute = ($nearcity_count / $total_count) * 100;
                     $finalcompute = number_format($compute,2);
                     // echo $compute;

                     if(49 > $finalcompute)
                     {
                        $finalverdict = "There is a low probability of enough audiences that will attend your events.";
                        $lowprob =  '<div class="col-lg-6">
                                      <i class="livicon  pull-right" data-name="wifi-alt" data-l="true" data-c="gray" data-hc="gray" data-s="180">
                                      </i>
                                  </div>
                                 <div class="col-lg-6">
                                     <h2>Get more Audiences!</h2>
                                                                                                    
                                      <p style="font-size: 14px">This prediction is based from the classification analysis of the registered volunteers with residency in '.$groupcity.'.
                                      </p>
                                 </div>
                                 
                                 <div class="col-lg-12">
                                     <p style="font-size: 15px">
                                        <b>Audience Analysis for '.$currmonthletter.'  '.$curryear.'.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                         <tr class="gradeX">
                                             <td style="width:50%">City/Area Involved:</td>
                                             <td style="width:50%">&nbsp;<b> '.$groupcity.'</b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">No. of Expected Male Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$male_count.' Males</b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">No. of Expected Female Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$female_count.' Females</b></td>
                                         </tr>
                                          <tr class="gradeX">
                                             <td style="width:50%">Percentage No. of Expected Total Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$finalcompute.'% </b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">Prediction Analysis Verdict:</td>
                                             <td style="width:50%">&nbsp;<b> '.$finalverdict.'</b></td>
                                         </tr>
                                     </table>
                                </div>
                               
                                <div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br>
                                         - It is suggested to promote your events to your surrounding/neighbor cities.<br>
                                         - It is suggested to re-assess the setup of your event - make it more compatible to the people in the area to shift their interest.<br>
                                         - It is suggested to promote your events through social-media for more audience exposure and peruasion.<br>
                                     </p> 
                                 </div>
                            ';

                        echo $lowprob;
                     }
                     else if(50 == $finalcompute)
                     {
                        $finalverdict = "There is a 50/50 chance and probability count of enough count in event attendance.";
                        $midprob =  '<div class="col-lg-6">
                                      <i class="livicon  pull-right" data-name="user" data-l="true" data-c="gray" data-hc="gray" data-s="180">
                                      </i>
                                  </div>
                                 <div class="col-lg-6">
                                     <h2>The Audiences seems to be Hesistating...</h2>
                                                                                                    
                                      <p style="font-size: 14px">This prediction is based from the classification analysis of the registered volunteers with residency in '.$groupcity.'.
                                      </p>
                                 </div>
                                 
                                 <div class="col-lg-12">
                                     <p style="font-size: 15px">
                                        <b>Audience Analysis for '.$currmonthletter.'  '.$curryear.'.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                         <tr class="gradeX">
                                             <td style="width:50%">City/Area Involved:</td>
                                             <td style="width:50%">&nbsp;<b> '.$groupcity.'</b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">No. of Expected Male Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$male_count.' Males</b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">No. of Expected Female Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$female_count.' Females</b></td>
                                         </tr>
                                          <tr class="gradeX">
                                             <td style="width:50%">Percentage No. of Expected Total Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$finalcompute.'% </b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">Prediction Analysis Verdict:</td>
                                             <td style="width:50%">&nbsp;<b> '.$finalverdict.'</b></td>
                                         </tr>
                                     </table>
                                </div>
                               
                                <div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br>
                                         - It is suggested to promote your events to your surrounding/neighbor cities.<br>
                                         - It is suggested to promote your events through social-media for more audience exposure and persuasion.<br>
                                     </p> 
                                 </div>
                            ';


                        echo $midprob;
                     }
                     else if(51 < $finalcompute)
                     {  
                        $finalverdict = "There is a high probability of enough or more count in event attendance.";
                        $highprob =  '<div class="col-lg-6">
                                      <i class="livicon  pull-right" data-name="users" data-l="true" data-c="gray" data-hc="gray" data-s="180">
                                      </i>
                                  </div>
                                 <div class="col-lg-6">
                                     <h2>The Audiences for your Events are Enough.</h2>
                                                                                                    
                                      <p style="font-size: 14px">This prediction is based from the classification analysis of the registered volunteers with residency in '.$groupcity.'.
                                      </p>
                                 </div>
                                 
                                 <div class="col-lg-12">
                                     <p style="font-size: 15px">
                                        <b>Audience Analysis for '.$currmonthletter.'  '.$curryear.'.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                         <tr class="gradeX">
                                             <td style="width:50%">City/Area Involved:</td>
                                             <td style="width:50%">&nbsp;<b> '.$groupcity.'</b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">No. of Expected Male Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$male_count.' Males</b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">No. of Expected Female Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$female_count.' Females</b></td>
                                         </tr>
                                          <tr class="gradeX">
                                             <td style="width:50%">Percentage No. of Expected Total Attendees:</td>
                                             <td style="width:50%">&nbsp;<b> '.$finalcompute.'% </b></td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:50%">Prediction Analysis Verdict:</td>
                                             <td style="width:50%">&nbsp;<b> '.$finalverdict.'</b></td>
                                         </tr>
                                     </table>
                                </div>
                               
                                <div class="col-lg-12" style="margin-top:10px">
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br>
                                         - Having enough audience for your events, it is suggested that you must prepare enough materials for your attendees.<br>
                                         
                                     </p> 
                                 </div>
                            ';

                        echo $highprob;
                     }

                                                                                                                                                      
                                                                            
        }
?>