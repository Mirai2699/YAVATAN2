 <?php
        include("../../../db_con.php");

        $curryear = date("Y");
        $currmonth = date("m");
        $currmonthletter = date("F");
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
                     // $cloudy_count = 1 ;
                     // $rainy_count  = 1 ;
                     // $windy_count  = 1 ;
                     // $stormy_count = 1 ;

                //TO DETERMINE IF THE WEATHER FOR THIS MONTH IS SUNNY
                if($sunny_count > $rainy_count && $sunny_count >= $fair_count && $sunny_count > $windy_count && 
                   $sunny_count > $cloudy_count && $sunny_count > $windy_count && $sunny_count > $stormy_count)
                {
                    $sunnydisp = '<div class="col-lg-6">
                                      <i class="livicon  pull-right" data-name="cloud-sun" data-l="true" data-c="gray" data-hc="gray" data-s="180">
                                      </i>
                                  </div>
                                 <div class="col-lg-6">
                                     <h2>This Months Weather seems to be Sunny and Hot.</h2>
                                                                                                    
                                      <p style="font-size: 14px">Base prediction of the weather for this month was accumulated from the recorded weather conditions in '.$currmonthletter.'  '.$baseyear.', and with comparison to the current weather forecast.
                                      </p>
                                 </div>
                                 <div class="col-lg-6">
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br>
                                         - Its a good month to create outside events and activities,<br>particularly in forests, beaches, and mountains.<br>
                                         - It is recommended to give notice to your members and attendees to bring umbrellas and apply sunscreens, to be used either for intense heat.
                                     </p> 
                                 </div>
                                 <div class="col-lg-6">
                                     <p style="font-size: 15px">
                                        <b>Weather Condition Record from <br>'.$currmonthletter.'  '.$baseyear.'.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Sunny Days:</td>
                                             <td style="width:40%">&nbsp;   '.$sunny_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Fair Days:</td>
                                             <td style="width:40%">&nbsp;   '.$fair_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Windy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$windy_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Cloudy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$cloudy_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Rainy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$rainy_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Stormy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$stormy_count.'</td>
                                         </tr>
                                     </table>
                                </div>
                            ';

                        echo $sunnydisp;
                }
                                                                                                

                 //TO DETERMINE IF THE WEATHER FOR THIS MONTH IS CLOUDY
                                                                            
                else if($sunny_count == $rainy_count && $sunny_count == $fair_count && $sunny_count == $windy_count && 
                        $sunny_count == $cloudy_count && $sunny_count == $windy_count  && $rainy_count == $sunny_count)
                                                                            
                {
                     $cloudydisp = '<div class="col-lg-6">
                                        <i class="livicon  pull-right" data-name="cloud" data-l="true" data-c="gray" data-hc="gray" data-s="190">
                                        </i>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2>This Months Weather seems to be Fair and Cloudy.</h2>
                                                                                                    
                                        <p style="font-size: 14px">Base prediction of the weather for this month was accumulated from the recorded weather conditions in '.$currmonthletter.'  '.$baseyear.', and with comparison to the current weather forecast.
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                    <br>
                                        <p style="font-size: 15px">
                                            <b>Formulated Advise/Suggestion:</b><br><br>
                                            - This month is ideal and recommended for to create outside events and activities.<br>
                                        </p> 
                                    </div>
                                    <div class="col-lg-6">
                                        <p style="font-size: 15px">
                                            <b>Weather Condition Record from <br>'.$currmonthletter.'  '.$baseyear.'.</b><br>
                                        </p> 
                                        <table class="" style="border:1px">
                                            <tr class="gradeX">
                                                <td style="width:60%">No. of Sunny Days:</td>
                                                <td style="width:40%">&nbsp;   '.$sunny_count.'</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td style="width:60%">No. of Fair Days:</td>
                                                <td style="width:40%">&nbsp;   '.$fair_count.'</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td style="width:60%">No. of Windy Days:</td>
                                                <td style="width:40%">&nbsp;   '.$windy_count.'</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td style="width:60%">No. of Cloudy Days:</td>
                                                <td style="width:40%">&nbsp;   '.$cloudy_count.'</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td style="width:60%">No. of Rainy Days:</td>
                                                <td style="width:40%">&nbsp;   '.$rainy_count.'</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td style="width:60%">No. of Stormy Days:</td>
                                                <td style="width:40%">&nbsp;   '.$stormy_count.'</td>
                                            </tr>
                                        </table>
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
                    $rainydisp = '<div class="col-lg-6">
                                    <i class="livicon  pull-right" data-name="umbrella" data-l="true" data-c="gray" data-hc="gray" data-s="120">
                                    </i>
                                    <i class="livicon  pull-right" data-name="cloud-rain" data-l="true" data-c="gray" data-hc="gray" data-s="120">
                                    </i>
                                 </div>
                                 <div class="col-lg-6">
                                     <h1>Bring Your Umbrellas and Wear Your Raincoats</h1>
                                                                                                    
                                     <p style="font-size: 14px">Base prediction of the weather for this month was accumulated from the recorded weather conditions in '.$currmonthletter.'  '.$baseyear.', and with comparison to the current weather forecast.
                                     </p>
                                 </div>
                                 <div class="col-lg-6">
                                 <br>
                                     <p style="font-size: 15px">
                                         <b>Formulated Advise/Suggestion:</b><br><br>
                                         - It is not advised to create outdoor events and activities.<br>
                                         - If it is inevitable, advise your members and attendees to bring their own umbrellas and wear their jackets/raincoats.
                                     </p> 
                                 </div>
                                 <div class="col-lg-6">
                                     <p style="font-size: 15px">
                                       <b>Weather Condition Record from <br>'.$currmonthletter.'  '.$baseyear.'.</b><br>
                                     </p> 
                                     <table class="" style="border:1px">
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Sunny Days:</td>
                                             <td style="width:40%">&nbsp;   '.$sunny_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Fair Days:</td>
                                             <td style="width:40%">&nbsp;   '.$fair_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Windy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$windy_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Cloudy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$cloudy_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Rainy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$rainy_count.'</td>
                                         </tr>
                                         <tr class="gradeX">
                                             <td style="width:60%">No. of Stormy Days:</td>
                                             <td style="width:40%">&nbsp;   '.$stormy_count.'</td>
                                         </tr>
                                     </table>
                                 </div>
                                ';

                    echo $rainydisp;
                }

                //TO DETERMINE IF THE WEATHER FOR THIS MONTH IS STORMY
                else  if($sunny_count < $rainy_count && $sunny_count <= $fair_count && $sunny_count <= $windy_count && $sunny_count <= $cloudy_count && $rainy_count >= $windy_count || $sunny_count < $stormy_count && $rainy_count < $stormy_count || $stormy_count == $windy_count && $fair_count < $windy_count)
                {
                     $stormydisp = '<div class="col-lg-5">
                                     <i class="livicon  pull-right" data-name="cloud-bolts" data-l="true" data-c="gray" data-hc="gray" data-s="130">
                                     </i>
                                     </div>
                                     <div class="col-lg-7">
                                         <h1>Dont Leave your House Yet!</h1>
                                                                                                    
                                         <p style="font-size: 14px">Base prediction of the weather for this month was accumulated from the recorded weather conditions in '.$currmonthletter.'  '.$baseyear.', and with comparison to the current weather forecast.
                                         </p>
                                     </div>
                                     <div class="col-lg-6">
                                     <br>
                                         <p style="font-size: 15px">
                                             <b>Formulated Advise/Suggestion:</b><br><br>
                                             - It is not advised to create events in the said area.<br>
                                             - It is recommended to stay in inside your homes.
                                         </p> 
                                     </div>
                                     <div class="col-lg-6">
                                         <p style="font-size: 15px">
                                             <b>Weather Condition Record from <br>'.$currmonthletter.'  '.$baseyear.'.</b><br>
                                         </p> 
                                         <table class="" style="border:1px">
                                             <tr class="gradeX">
                                                 <td style="width:60%">No. of Sunny Days:</td>
                                                 <td style="width:40%">&nbsp;   '.$sunny_count.'</td>
                                             </tr>
                                             <tr class="gradeX">
                                                 <td style="width:60%">No. of Fair Days:</td>
                                                 <td style="width:40%">&nbsp;   '.$fair_count.'</td>
                                             </tr>
                                             <tr class="gradeX">
                                                 <td style="width:60%">No. of Windy Days:</td>
                                                 <td style="width:40%">&nbsp;   '.$windy_count.'</td>
                                             </tr>
                                             <tr class="gradeX">
                                                 <td style="width:60%">No. of Cloudy Days:</td>
                                                 <td style="width:40%">&nbsp;   '.$cloudy_count.'</td>
                                             </tr>
                                             <tr class="gradeX">
                                                 <td style="width:60%">No. of Rainy Days:</td>
                                                 <td style="width:40%">&nbsp;   '.$rainy_count.'</td>
                                             </tr>
                                             <tr class="gradeX">
                                                 <td style="width:60%">No. of Stormy Days:</td>
                                                 <td style="width:40%">&nbsp;   '.$stormy_count.'</td>
                                             </tr>
                                         </table>
                                     </div>
                                    ';

                    echo $stormydisp;
                }

                //TO DETERMINE IF THE WEATHER FOR THIS MONTH IS UNPREDICTABLE (IF NO CONDITION SATISFIES)
                else
                {
                    $unpredictdisp = '<div class="col-lg-6">
                                        <i class="livicon  pull-right" data-name="eye-close" data-l="true" data-c="gray" data-hc="gray" data-s="150">
                                        </i>
                                        <i class="livicon  pull-right" data-name="eye-close" data-l="true" data-c="gray" data-hc="gray" data-s="150">
                                        </i>
                                      </div>
                                      <div class="col-lg-6">
                                          <h2>This Months Weather seems to be Unpredictable.</h2>
                                                                                                    
                                          <p style="font-size: 14px">Base prediction of the weather for this month was accumulated from the recorded weather conditions in '.$currmonthletter.'  '.$baseyear.', and with comparison to the current weather forecast.
                                          </p>
                                       </div>
                                       <div class="col-lg-6">
                                           <br>
                                           <p style="font-size: 15px">
                                               <b>Formulated Advise/Suggestion:</b><br><br>
                                               - Precautionaries are advised in creating outside events in the said area.<br>
                                               - It is recommended to give notice to your members and attendees to bring umbrellas, to be used either for intense heat or sudden rain.
                                           </p> 
                                       </div>
                                       <div class="col-lg-6">
                                           <p style="font-size: 15px">
                                               <b>Weather Condition Record from <br>'.$currmonthletter.'  '.$baseyear.'.</b><br>
                                           </p> 
                                           <table class="" style="border:1px">
                                               <tr class="gradeX">
                                                   <td style="width:60%">No. of Sunny Days:</td>
                                                   <td style="width:40%">&nbsp;   '.$sunny_count.'</td>
                                               </tr>
                                               <tr class="gradeX">
                                                   <td style="width:60%">No. of Fair Days:</td>
                                                   <td style="width:40%">&nbsp;   '.$fair_count.'</td>
                                               </tr>
                                               <tr class="gradeX">
                                                   <td style="width:60%">No. of Windy Days:</td>
                                                   <td style="width:40%">&nbsp;   '.$windy_count.'</td>
                                               </tr>
                                               <tr class="gradeX">
                                                   <td style="width:60%">No. of Cloudy Days:</td>
                                                   <td style="width:40%">&nbsp;   '.$cloudy_count.'</td>
                                               </tr>
                                               <tr class="gradeX">
                                                   <td style="width:60%">No. of Rainy Days:</td>
                                                   <td style="width:40%">&nbsp;   '.$rainy_count.'</td>
                                               </tr>
                                               <tr class="gradeX">
                                                   <td style="width:60%">No. of Stormy Days:</td>
                                                   <td style="width:40%">&nbsp;   '.$stormy_count.'</td>
                                               </tr>
                                          </table>
                                      </div>
                                      ';

                    echo $unpredictdisp;
                }
                                                                                       
                                                                            
        }
?>