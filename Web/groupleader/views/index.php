<?php 
     include ("../utilities/Header.php");
     include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");

    include('../../../db_con.php');
    mysqli_set_charset($connection, 'utf8');
    $query = "SELECT E.event_ID, E.event_name, E.event_city, C.city_lat, C.city_lng, (SELECT COUNT(er_ID) FROM t_event_registration WHERE er_eventID = E.event_ID) as num_volunteer, 
    (SELECT COUNT(ev_atnd_ID) FROM t_event_attendance WHERE ev_atnd_eventID = E.event_ID) as num_attendee,
    (SELECT COUNT(ev_atnd_status) FROM t_event_attendance WHERE ev_atnd_status = 'Gospel Conversation' AND ev_atnd_eventID = E.event_ID) as num_gospel,
    (SELECT COUNT(ev_atnd_status) FROM t_event_attendance WHERE ev_atnd_status = 'Exposed' AND ev_atnd_eventID = E.event_ID) as num_exposed,
    (SELECT COUNT(ev_atnd_status) FROM t_event_attendance WHERE ev_atnd_status = 'Prayed to Receive' AND ev_atnd_eventID = E.event_ID) as num_prc,
    (SELECT COUNT(ev_atnd_status) FROM t_event_attendance WHERE ev_atnd_status = 'Followed Up' AND ev_atnd_eventID = E.event_ID) as num_followup FROM t_event E INNER JOIN r_city C ON C.city_name = E.event_city
                GROUP BY E.event_ID, E.event_name, E.event_city, C.city_lat, C.city_lng";

    $result = mysqli_query($connection,$query) or die(mysqli_error());
    $array_json = array();
    $city_arr = array();
    while ($row = mysqli_fetch_assoc($result)) { 
        $city = $row["event_city"];
        $e_title = $row["event_name"];
        $num_volunteers = $row["num_volunteer"];
        $num_attendees = $row["num_attendee"];
        $num_gospel = $row["num_gospel"];
        $num_exposed = $row["num_exposed"];
        $num_prc = $row["num_prc"];
        $num_followup = $row["num_followup"];
        $lat = $row["city_lat"];
        $lng = $row["city_lng"];
        if(count($array_json) > 0)
        {
            if(in_array($lat,$array_json) && in_array($lng,$array_json))
            $lat = $lat+ 0.01;
            $lng = $lng+ 0.01;
        }


        //get location online
            // Create a stream 
            // $opts = array('http'=>array('header'=>"User-Agent: StevesCleverAddressScript 3.7.6\r\n"));
            // $context = stream_context_create($opts);

            //get LAT and LNG from address
            // $jsonurl = "https://nominatim.openstreetmap.org/search/".rawurlencode($city)."?format=json&addressdetails=1&limit=1&polygon_svg=1&email=sarahjoy18@gmail.com";
            // $json = file_get_contents($jsonurl,false, $context);
            // $geolocation = json_decode($json);
            // $address = $geolocation[0]->display_name;
            // $lat = $geolocation[0]->lat;
            // $lng = $geolocation[0]->lon;

            $city_arr = array('lat' =>  $lat, 
                              'lng' => $lng, 
                              'event_title' => $e_title,
                              'location' => $city,
                              'num_volunteers' => $num_volunteers,
                              'num_attendees' => $num_attendees,
                              'num_gospel' => $num_gospel,
                              'num_exposed' => $num_exposed,
                              'num_prc' => $num_prc,
                              'num_followup' => $num_followup

                            );
            array_push($array_json, $city_arr);

    }

?>
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" -->
<link rel="stylesheet" href="../../../resources/assets/plugins/leaflet/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>

   <!-- Make sure you put this AFTER Leaflet's CSS -->
    <!-- <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" -->
 <script src="../../../resources/assets/plugins/leaflet/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin="">
</script>


<!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome to Dashboard</h1>
                <ol class="breadcrumb">
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-9 text-right">
                                            <span>Gospel Conversations</span>
                                            <div class="number" id="myTargetElement1">
                                                <?php
                                                    $sql="SELECT * FROM t_event_attendance  WHERE ev_atnd_status = 'Gospel Conversation' ";

                                                    if ($result=mysqli_query($connection,$sql))
                                                        {
                                                        // Return the number of rows in result set
                                                        $rowcount=mysqli_num_rows($result);
                                                        echo $rowcount;
                                                        }
                                                    else 
                                                        echo 0;

                                                ?>
                                            </div>
                                        </div>
                                        <i class="livicon  pull-right" data-name="comments" data-l="true" data-c="#fff" data-hc="#fff" data-s="50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Exposed</span>
                                            <div class="number" id="myTargetElement2">
                                                <?php
                                                    $sql="SELECT * FROM t_event_attendance WHERE ev_atnd_status = 'Exposed' ";

                                                    if ($result=mysqli_query($connection,$sql))
                                                        {
                                                        // Return the number of rows in result set
                                                        $rowcount=mysqli_num_rows($result);
                                                        echo $rowcount;
                                                        }
                                                    else 
                                                        echo 0;

                                                ?>
                                            </div>
                                        </div>
                                        <i class="livicon pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-8 pull-left">
                                            <span>Prayed to Receive</span>
                                            <div class="number" id="myTargetElement3">
                                                <?php
                                                    $sql="SELECT * FROM t_event_attendance WHERE ev_atnd_status = 'Prayed To Receive' ";

                                                    if ($result=mysqli_query($connection,$sql))
                                                        {
                                                        // Return the number of rows in result set
                                                        $rowcount=mysqli_num_rows($result);
                                                        echo $rowcount;
                                                        }
                                                    else 
                                                        echo 0;

                                                ?>
                                            </div>
                                        </div>
                                        <i class="livicon pull-right" data-name="user-flag" data-l="true" data-c="#fff" data-hc="#fff" data-s="60"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">   
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Followed Up</span>
                                            <div class="number" id="myTargetElement4">
                                                <?php
                                                    $sql="SELECT * FROM t_event_attendance WHERE ev_atnd_status = 'Followed Up' ";

                                                    if ($result=mysqli_query($connection,$sql))
                                                        {
                                                        // Return the number of rows in result set
                                                        $rowcount=mysqli_num_rows($result);
                                                        echo $rowcount;
                                                        }
                                                    else 
                                                        echo 0;

                                                ?>

                                            </div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--START OF WEATHER PREDICTION-->
                    <div class="col-lg-4 margin_10 animated fadeInLeftBig" style="height: 220px">
                        <div class="no-radius" style="height: 200px; background-color: darkviolet; color: white">
                          <?php 
                             include("../functionalities/weather_predict.php");
                           ?> 
                        </div>
                    </div>
                        <div class="modal fade" id="weather_details" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: " >
                            <div class="modal-dialog" style="width: 50% ">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: darkviolet; color: white">
                                        <h2>Weather Prediction Details</h2>
                                    </div>
                                    <div class="modal-body" >
                                        <div class="panel">
                                               <?php
                                                    include("../functionalities/weather_view_predict.php");
                                               ?>
                                        </div>
                                   </div>
                                   <div class="modal-footer" style="margin-top: 70%">
                                       <button data-dismiss="modal" class="btn btn-primary">Close</button>
                                   </div>
                               </div>
                            </div>
                        </div>
                    <!--END OF WEATHER PREDICTION-->

                    <!--START OF ATTENDANCE PREDICTION-->
                    <div class="col-lg-4 margin_10 animated fadeInDownBig" style="height: 220px">
                        <div class="no-radius" style="height: 200px; background-color: goldenrod; color: white">
                           <?php 
                             include("../functionalities/audience_predict.php");
                           ?> 
                        </div>
                    </div>
                    <div class="modal fade" id="audience_details" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: " >
                         <div class="modal-dialog" style="width: 50% ">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: goldenrod; color: white">
                                    <h2>Audience Prediction Details</h2>
                                </div>
                                <div class="modal-cbody">
                                    <div class="panel">
                                               <?php
                                                    include("../functionalities/audience_view_predict.php");
                                               ?>
                                    </div>
                                </div>
                                <div class="modal-footer" style="margin-top: 71%">
                                    <button data-dismiss="modal" class="btn btn-primary">Close</button>
                                </div>
                            </div>
                         </div>
                    </div>
                    <!--END OF ATTENDANCE PREDICTION-->

                     <!--START OF BUDGET PREDICTION-->
                    <div class="col-lg-4 margin_10 animated fadeInRightBig" style="height: 220px">
                        <div class="no-radius" style="height: 200px; background-color: navy; color: white">
                           <?php 
                             include("../functionalities/budget_predict.php");
                           ?> 
                        </div>
                    </div>
                    <div class="modal fade" id="budget_details" tabindex="-1" role="dialog" aria-hidden="false" style="display:none; margin-top: " >
                         <div class="modal-dialog" style="width: 50% ">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: navy; color: white">
                                    <h2>Budget Evaluation and Prediction Details</h2>
                                </div>
                                <div class="modal-cbody">
                                    <div class="panel">
                                               <?php
                                                    include("../functionalities/budget_view_predict.php");
                                               ?>
                                    </div>
                                </div>
                                <div class="modal-footer" style="margin-top: 81%">
                                    <button data-dismiss="modal" class="btn btn-primary">Close</button>
                                </div>
                            </div>
                         </div>
                    </div> 
                    <!--END OF BUDGET PREDICTION-->
                </div>










                <script src="../../../resources/web/highcharts/highcharts.js"></script>
                <script src="../../../resources/web/highcharts/modules/data.js"></script>
                <script src="../../../resources/web/highcharts/modules/exporting.js"></script>
                
               
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Predictive Analysis for Number of Attendees per City
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                        <div class="col-md-12">
                                            <div id="daterep" style="width: 100%; height: 500px;border:1px solid black;"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('daterep', {
                                                    chart: {
                                                        type: 'line'
                                                    },
                                                    title: {
                                                        text: 'Monthly Collective Number of Attendees in All Events<br>(Previous Year, Current Year, and Prediction the for Current Year)'
                                                    },
                                                    subtitle: {
                                                        text: 'Monthly Collective Number of Attendees in All Events in Year <?php  $curryear = date("Y");   $baseyear = ($curryear - 1); echo $baseyear?>,<br> the actual current collective count for this year, and the Predicted Collective Number of Attendees for Events in Year <?php echo date("Y")?>'
                                                    },
                                                    xAxis: {
                                                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                                                    },
                                                    yAxis: {
                                                        title: {
                                                            text: 'Total Number of Attendees'
                                                        }
                                                    },

                                                    plotOptions: {
                                                        line: {
                                                            dataLabels: {
                                                                enabled: true
                                                            },
                                                            enableMouseTracking: true
                                                        }
                                                    },
                                                    series: [{
                                                        name: 'Number of attendees per events in year <?php $curryear = date("Y");
                                                                $baseyear = ($curryear - 1); echo $baseyear?>',
                                                        data: [
                                                              <?php
                                                                $curryear = date("Y");
                                                                $baseyear = ($curryear - 1);

                                                                $view_query2 = mysqli_query($connection,"SELECT DISTINCT month(his_event_end_date) AS Month_End, monthname(his_event_end_date) AS Month_Name from t_history_event WHERE year(his_event_end_date) = ".$baseyear." ORDER BY month(his_event_end_date) ASC");
                                                                    while($row2 = mysqli_fetch_assoc($view_query2))
                                                                        {   
                                                                            $eventMonth = $row2["Month_End"];
                                                                            $eventMonthName = $row2["Month_Name"];
                                                              ?>
                                                            {
                                                                    name: '<?php
                                                                              echo $eventMonthName; 
                                                                           ?>',
                                                                    y: <?php 
                                                                          $view_query3 = mysqli_query($connection,"SELECT his_event_attendees AS attendees, SUM(his_event_attendees) AS attendees_Quantity from t_history_event WHERE month(his_event_end_date) = ".$eventMonth." AND year(his_event_end_date) = ".$baseyear." ");
                                                                          while($row3 = mysqli_fetch_assoc($view_query3))
                                                                              {
                                                                                $eventMonthQty = $row3["attendees_Quantity"];
                                                                                echo($eventMonthQty);
                                                                              }
                                                                       ?>
                                                            },
                                                              <?php
                                                              }
                                                              ?>
                                                              ]
                                                    },
                                                    {
                                                        name: 'Actual number of attendees per events for year <?php $curryear = date    ("Y"); echo $curryear?>',
                                                        data: [
                                                              <?php
                                                                $curryear = date("Y");

                                                                $view_query2 = mysqli_query($connection,"SELECT DISTINCT month(his_event_end_date) AS Month_End, monthname(his_event_end_date) AS Month_Name from t_history_event WHERE year(his_event_end_date) = ".$curryear." ORDER BY month(his_event_end_date) ASC");
                                                                    while($row2 = mysqli_fetch_assoc($view_query2))
                                                                        {   
                                                                            $eventMonth = $row2["Month_End"];
                                                                            $eventMonthName = $row2["Month_Name"];
                                                              ?>
                                                            {
                                                                    name: '<?php
                                                                              echo $eventMonthName; 
                                                                           ?>',
                                                                    y: <?php 
                                                                          $view_query3 = mysqli_query($connection,"SELECT his_event_attendees AS attendees, SUM(his_event_attendees) AS attendees_Quantity from t_history_event WHERE month(his_event_end_date) = ".$eventMonth." AND year(his_event_end_date) = ".$curryear." ");
                                                                          while($row3 = mysqli_fetch_assoc($view_query3))
                                                                              {
                                                                                $eventMonthQty = $row3["attendees_Quantity"];
                                                                                echo($eventMonthQty);
                                                                              }
                                                                       ?>
                                                            },
                                                              <?php
                                                              }
                                                              ?>
                                                              ]
                                                    },
                                                    {
                                                        name: 'Expected number of attendees per events for year <?php $curryear = date    ("Y"); echo $curryear?>',
                                                        data: [
                                                              <?php
                                                                $curryear = date("Y");
                                                                $baseyear = ($curryear - 1);

                                                                $view_query2 = mysqli_query($connection,"SELECT DISTINCT month(his_event_end_date) AS Month_End, monthname(his_event_end_date) AS Month_Name from t_history_event WHERE year(his_event_end_date) = ".$baseyear." ORDER BY month(his_event_end_date) ASC");
                                                                    while($row2 = mysqli_fetch_assoc($view_query2))
                                                                        {   
                                                                            $eventMonth = $row2["Month_End"];
                                                                            $eventMonthName = $row2["Month_Name"];
                                                              ?>
                                                            {
                                                                    name: '<?php
                                                                              echo $eventMonthName; 
                                                                           ?>',
                                                                    y: <?php 


                                                         $view_city = mysqli_query($connection,"SELECT DISTINCT grp_city FROM `t_group` where grp_city = 'Quezon City, National Capital Region (NCR)' ");
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
                                                                         $finalcompute = number_format($compute,0);

                                                                          $view_query3 = mysqli_query($connection,"SELECT his_event_attendees AS attendees, SUM(his_event_attendees) AS attendees_Quantity from t_history_event WHERE month(his_event_end_date) = ".$eventMonth." AND year(his_event_end_date) = ".$baseyear." ");
                                                                          while($row3 = mysqli_fetch_assoc($view_query3))
                                                                              {
                                                                                $eventMonthQty = $row3["attendees_Quantity"];
                                                                                $prediction = $eventMonthQty + $finalcompute;
                                                                                echo($prediction);
                                                                              }
                                                                        }
                                                                       ?>
                                                            },
                                                              <?php
                                                              }
                                                              ?>
                                                              ]
                                                    }
                                                  ]

                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Map
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                        <div class="col-md-12">
                                            <div id="map1" style="width: 100%; height: 500px;border:1px solid black;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                   Collective Data of Religions Per Region
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="demo-container">
                                    <div class="col-lg-12">
                                        <div id="inventory" style="width: 100%; height: 400px"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('inventory', {
                                                chart: {
                                                    type: 'column'
                                                },
                                                title: {
                                                    text: 'Religion Per Regions'
                                                },
                                                subtitle: {
                                                    text: 'This chart displays the collective highest percentage of religions per region.'
                                                },
                                                xAxis: {
                                                    type: 'category',
                                                    title: {
                                                        text: null
                                                    },
                                                    min: 0,
                                                    scrollbar: {
                                                        enabled: true
                                                    },
                                                    tickLength: 0
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: 'Total religion per regions'
                                                    }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.2f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: Total of <b>{point.y:.2sf}</b><br/>'
                                                },

                                                series: [
                                                    {
                                                        name: "Religion Per Region",
                                                        colorByPoint: true,
                                                        data: [
                                                            <?php
                                                                $view_query = mysqli_query($connection,"SELECT rpg_region, rpg_religion FROM `t_relperreg` ");
                                                                    while($row = mysqli_fetch_assoc($view_query))
                                                                        {   
                                                                            $InvCategory = $row["rpg_religion"];
                                                                            $region = $row["rpg_region"];
                                                                            //$InvQty = $row["Quantity"];
                                                            ?> 
                                                                {
                                                                    name: '<?php echo $region.'  '.$InvCategory ?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT DISTINCT rpg_rate AS rate FROM `t_relperreg` WHERE rpg_religion = '$InvCategory' and rpg_region = '$region'");
                                                                        while($row2 = mysqli_fetch_assoc($view_query2))
                                                                            {   
                                                                                $InvQty = $row2["rate"];
                                                                                echo ($InvQty);
                                                                            }
                                                                       ?>,
                                                                    drilldown: '<?php echo $region?>',
                                                                },
                                                            <?php
                                                            }
                                                            ?>
                                                        ]
                                                    }
                                                ]
                                            });
                                            </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="clearfix"></div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Event Per Region
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                        <div class="col-md-12">
                                            <div id="eventregion" class="flotChart"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('eventregion', {
                                                chart: {
                                                    type: 'column'
                                                },
                                                title: {
                                                    text: 'Events Per Region'
                                                },
                                                
                                                xAxis: {
                                                    type: 'category',
                                                    title: {
                                                        text: null
                                                    },
                                                    min: 0,
                                                    scrollbar: {
                                                        enabled: true
                                                    },
                                                    tickLength: 0
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: null
                                                    }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.0f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: Total of <b>{point.y:.0sf}</b><br/>'
                                                },

                                                series: [
                                                    {
                                                        name: "Events Per Region",
                                                        colorByPoint: true,
                                                        data: [
                                                            <?php
                                                                $view_query = mysqli_query($connection,"SELECT DISTINCT event_region FROM `t_event` ");
                                                                    while($row = mysqli_fetch_assoc($view_query))
                                                                        {   
                                                                            $region = $row["event_region"];
                                                                            //$InvQty = $row["Quantity"];
                                                            ?> 
                                                                {
                                                                    name: '<?php echo $region?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT COUNT(event_region) AS rate FROM `t_event` WHERE event_region = '$region'");
                                                                        while($row2 = mysqli_fetch_assoc($view_query2))
                                                                            {   
                                                                                $InvQty = $row2["rate"];
                                                                                echo ($InvQty);
                                                                            }
                                                                       ?>,
                                                                    drilldown: '<?php echo $region ?>',
                                                                },
                                                            <?php
                                                            }
                                                            ?>
                                                        ]
                                                    }
                                                ]
                                            });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Frequency of Events Per Group
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                        <div class="col-md-12">
                                            <div id="groupregion" class="flotChart"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('groupregion', {
                                                chart: {
                                                    type: 'bar'
                                                },
                                                title: {
                                                    text: 'Frequency of Events Per Group'
                                                },
                                                
                                                xAxis: {
                                                    type: 'category',
                                                    title: {
                                                        text: null
                                                    },
                                                    min: 0,
                                                    scrollbar: {
                                                        enabled: true
                                                    },
                                                    tickLength: 0
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: null
                                                    }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.0f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>:Total of  <b>{point.y:.0sf}</b><br/>'
                                                },

                                                series: [
                                                    {
                                                        name: "Events Per Group",
                                                        colorByPoint: true,
                                                        data: [
                                                            <?php
                                                                $view_query = mysqli_query($connection,"SELECT DISTINCT grp_name, event_bygrp FROM `t_event` AS EVE INNER JOIN `t_group` AS GRP ON EVE.event_bygrp = GRP.grp_ID ");
                                                                    while($row = mysqli_fetch_assoc($view_query))
                                                                        {   
                                                                            $bygrp = $row["event_bygrp"];
                                                                            $name = $row["grp_name"];
                                                                            //$InvQty = $row["Quantity"];
                                                            ?> 
                                                                {
                                                                    name: '<?php echo $name?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT COUNT(event_bygrp) AS rate FROM `t_event` WHERE event_bygrp = '$bygrp'");
                                                                        while($row2 = mysqli_fetch_assoc($view_query2))
                                                                            {   
                                                                                $InvQty = $row2["rate"];
                                                                                echo ($InvQty);
                                                                            }
                                                                       ?>,
                                                                    drilldown: '<?php echo $bygrp ?>',
                                                                },
                                                            <?php
                                                            }
                                                            ?>
                                                        ]
                                                    }
                                                ]
                                            });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Volunteers and Contacts Per Region
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                         <div class="col-lg-6">
                                            <div id="volunteer" class="flotChart"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('volunteer', {
                                                chart: {
                                                    type: 'pie'
                                                },
                                                title: {
                                                    text: 'Volunteers Per Region'
                                                },
                                                
                                                xAxis: {
                                                    type: 'category',
                                                    title: {
                                                        text: null
                                                    },
                                                    min: 0,
                                                    scrollbar: {
                                                        enabled: true
                                                    },
                                                    tickLength: 0
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: null
                                                    }
                                                },
                                                legend: {
                                                    enabled: true
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.0f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: Total of <b>{point.y:.0sf}</b> <br/>'
                                                },

                                                series: [
                                                    {
                                                        name: "Number of Volunteers Per Region",
                                                        colorByPoint: true,
                                                        data: [
                                                            <?php
                                                                $view_query = mysqli_query($connection,"SELECT DISTINCT volun_region FROM `t_volunteer` ");
                                                                    while($row = mysqli_fetch_assoc($view_query))
                                                                        {   
                                                                            $region = $row["volun_region"];
                                                                            //$InvQty = $row["Quantity"];
                                                            ?> 
                                                                {
                                                                    name: '<?php echo $region?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT COUNT(volun_ID) AS rate FROM `t_volunteer` WHERE volun_region = '$region' ");
                                                                        while($row2 = mysqli_fetch_assoc($view_query2))
                                                                            {   
                                                                                $InvQty = $row2["rate"];
                                                                                echo ($InvQty);
                                                                            }
                                                                       ?>,
                                                                    drilldown: '<?php echo $region ?>',
                                                                },
                                                            <?php
                                                            }
                                                            ?>
                                                        ]
                                                    }
                                                ]
                                            });
                                            </script>
                                        </div>

                                        <div class="col-lg-6">
                                            <div id="contact" class="flotChart"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('contact', {
                                                chart: {
                                                    type: 'pie'
                                                },
                                                title: {
                                                    text: 'Contacts Per Region'
                                                },
                                                
                                                xAxis: {
                                                    type: 'category',
                                                    title: {
                                                        text: null
                                                    },
                                                    min: 0,
                                                    scrollbar: {
                                                        enabled: true
                                                    },
                                                    tickLength: 0
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: null
                                                    }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.0f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: Total of <b>{point.y:.0sf}</b> <br/>'
                                                },

                                                series: [
                                                    {
                                                        name: "Number of Contacts Per Region",
                                                        colorByPoint: true,
                                                        data: [
                                                            <?php
                                                                $view_query = mysqli_query($connection,"SELECT volun_region, COUNT(*) FROM `t_volunteer` WHERE volun_constat = 1 GROUP BY volun_region, volun_constat");
                                                                    while($row = mysqli_fetch_assoc($view_query))
                                                                        {   
                                                                            $region = $row["volun_region"];
                                                                            //$InvQty = $row["Quantity"];
                                                            ?> 
                                                                {
                                                                    name: '<?php echo $region?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT COUNT(*) AS rate FROM `t_volunteer` WHERE volun_constat = 1 and volun_region = '$region' ");
                                                                        while($row2 = mysqli_fetch_assoc($view_query2))
                                                                            {   
                                                                                $InvQty = $row2["rate"];
                                                                                echo ($InvQty);
                                                                            }
                                                                       ?>,
                                                                    drilldown: '<?php echo $region ?>',
                                                                },
                                                            <?php
                                                            }
                                                            ?>
                                                        ]
                                                    }
                                                ]
                                            });
                                            </script>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
               

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Ethnic(s) Per Region
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="demo-container">
                                    <div class="col-lg-12">
                                        <div id="epr" class="flotChart"></div>
                                        <script type="text/javascript">
                                        // Create the chart
											Highcharts.chart('epr', {
											    chart: {
											        type: 'column'
											    },
											    title: {
											    	text: 'Ethnic Group per Region'
											    },
											    subtitle: {
											        text: 'This chart displays the ethnic groups per region'
											    },
											    xAxis: {
											        type: 'category'
											    },
											    yAxis: {
											        title: {
											            text: 'Total ethnic group percentage'
											        }

											    },
											    legend: {
											        enabled: false
											    },
											    plotOptions: {
											        series: {
											            borderWidth: 0,
											            dataLabels: {
											                enabled: true,
											                format: '{point.y:.1f}%'
											            }
											        }
											    },

											    tooltip: {
											        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
											        pointFormat: '<span style="color:{point.color}">{point.name}</span>:  Total of <b>{point.y:.2f}%</b><br/>'
											    },

											    series: [{
											        name: 'Ethnic Group Per Region',
											        colorByPoint: true,
											        data: [{
											            name: 'Northern Mindanao',
											            y: 35.59,
											            drilldown: 'Northern Mindanao'
											        }, {
											            name: 'Davao Region',
											            y: 37.76,
											            drilldown: 'Davao Region'
											        }, {
											            name: 'SOCCSKSARGEN',
											            y: 31.58,
											            drilldown: 'SOCCSKSARGEN'
											        }, {
											            name: 'Zamboanga Peninsula',
											            y: 33.10,
											            drilldown: 'Zamboanga Peninsula'
											        }, {
											            name: 'ARMM',
											            y: 26.40,
											            drilldown: 'ARMM'
											        }, {
											            name: 'CARAGA',
											            y: 25.67,
											            drilldown: 'CARAGA'
											        }]
											    }],
											    drilldown: {
											        series: [{
											            name: 'Rate',
											            id: 'Northern Mindanao',
											            data: [
											                [
											                    'Cebuano',
											                    35.59
											                ]
											            ]
											        }, {
											            name: 'Rate',
											            id: 'Davao Region',
											            data: [
											                [
											                    'Cebuano',
											                    37.76
											                ]
											            ]
											        }, {
											            name: 'Rate',
											            id: 'SOCCSKSARGEN',
											            data: [
											                [
											                    'Hiligaynon / Ilonggo',
											                    31.58
											                ]
											            ]
											        }, {
											            name: 'Rate',
											            id: 'Zamboanga Peninsula',
											            data: [
											                [
											                    'Bisaya',
											                    33.10
											                ]
											            ]
											        }, {
											            name: 'Rate',
											            id: 'ARMM',
											            data: [
											                [
											                    'Maranao',
											                    26.40
											                ]
											            ]
											        }, {
											            name: 'Rate',
											            id: 'CARAGA',
											            data: [
											                [
											                    'Surigaonon',
											                    25.67
											                ]
											            ]
											        }]
											    }
											});
										</script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Language Per Region
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="demo-container">
                                    <div class="col-lg-12">
                                        <div id="relreg" style="width: 100%; height: 400px"></div>
                                            <script type="text/javascript">
                                                Highcharts.chart('relreg', {
                                                chart: {
                                                    type: 'column'
                                                },
                                                title: {
                                                    text: 'Language Per Regions'
                                                },
                                                subtitle: {
                                                    text: 'This chart displays the languages spoken per region.'
                                                },
                                                xAxis: {
                                                    type: 'category',
                                                    title: {
                                                        text: null
                                                    },
                                                    min: 0,
                                                    scrollbar: {
                                                        enabled: true
                                                    },
                                                    tickLength: 0
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: 'Total Language spoken percentage'
                                                    }
                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.2f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: Total of <b>{point.y:.2sf}</b><br/>'
                                                },

                                                series: [
                                                    {
                                                        name: "Language Per Region",
                                                        colorByPoint: true,
                                                        data: [
                                                            <?php
                                                                $view_query = mysqli_query($connection,"SELECT lang_name, lang_region FROM `t_language` ");
                                                                    while($row = mysqli_fetch_assoc($view_query))
                                                                        {   
                                                                            $InvCategory = $row["lang_name"];
                                                                            $region = $row["lang_region"];
                                                                            //$InvQty = $row["Quantity"];
                                                            ?> 
                                                                {
                                                                    name: '<?php echo $InvCategory.' '.$region ?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT DISTINCT lang_rate AS rate FROM `t_language` WHERE lang_name = '$InvCategory' and lang_region = '$region'");
                                                                        while($row2 = mysqli_fetch_assoc($view_query2))
                                                                            {   
                                                                                $InvQty = $row2["rate"];
                                                                                echo ($InvQty);
                                                                            }
                                                                       ?>,
                                                                    drilldown: '<?php echo $InvCategory ?>',
                                                                },
                                                            <?php
                                                            }
                                                            ?>
                                                        ]
                                                    }
                                                ]
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Religion(s) in Mindanao
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="demo-container">
                                    <div class="col-lg-12">
                                        <div id="rm" class="demo-placeholder1"></div>
                                        <script type="text/javascript">

										// Create the chart
										Highcharts.chart('rm', {
										    chart: {
										        type: 'column'
										    },
										    title: {
										    	text: 'Religion(s) in Mindanao'
										    },
										    subtitle: {
                                                    text: 'This chart displays the religions in Mindanao.'
                                                },
										    xAxis: {
										        type: 'category'
										    },
										    yAxis: {
										        title: {
										            text: 'Total religion percentage'
										        }

										    },
										    legend: {
										        enabled: false
										    },
										    plotOptions: {
										        series: {
										            borderWidth: 0,
										            dataLabels: {
										                enabled: true,
										                format: '{point.y:.2f}%'
										            }
										        }
										    },

										    tooltip: {
										        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
										        pointFormat: '<span style="color:{point.color}">{point.name}</span>:  Total of <b>{point.y:.2f}%</b> <br/>'
										    },

										    series: [{
										        name: 'Religion',
										        colorByPoint: true,
										        data: [{
										            name: 'Roman Catholic',
										            y: 60.9
										        }, {
										            name: 'Islam',
										            y: 40.44
										        }, {
										            name: 'Evangelical',
										            y: 15.34
										        }, {
										            name: 'Aglipayan',
										            y: 22.16
										        }, {
										            name: 'Iglesia ni Cristo',
										            y: 31.66
										        }, {
										            name: 'Seventh Day Adventist',
										            y: 11.65
										        }]
										    }]
										});


										</script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

<!-- PAGE SCRIPT AND CSS -->
<script>
    var map = L.map('map1').setView([14.6760413, 121.0437003], 10);

    var markers = [];

    var results = <?php echo json_encode($array_json); ?>;
    console.log(results.length);
    for (var i = 0; i < results.length; i++) {
        var popup_desc = "<h4>"+results[i].event_title
                        +"</h4>"+results[i].location+"<br/><b>No. of Volunteers: </b>"
                        +results[i].num_volunteers+"<br/><b>No. of Attendees: </b>"
                        +results[i].num_attendees+"<br/><b>Gospel Conversation: </b>"
                        +results[i].num_gospel+"<br/><b>Exposed: </b>"
                        +results[i].num_exposed+"<br/><b>Prayed to Receive: </b>"
                        +results[i].num_prc+"<br/><b>Followed Up: </b>"
                        +results[i].num_followup;

          var marker = L.marker(L.latLng(parseFloat(results[i].lat), parseFloat(results[i].lng)));
          marker.bindPopup(popup_desc);
          markers.push(marker);
    }


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; YAVATAN'
    }).addTo(map);
    var group = L.featureGroup(markers).addTo(map);

    setTimeout(function () {
      map.fitBounds(group.getBounds());
    }, 1000);
</script>