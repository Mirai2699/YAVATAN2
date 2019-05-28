<?php 
     include ("../utilities/Header.php");
     include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");

?>


<!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome, Administrator</h1>
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
                                                    $sql="SELECT * FROM t_volunteer WHERE volun_status = 'Gospel Conversed' ";

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
                                                    $sql="SELECT * FROM t_volunteer WHERE volun_status = 'Exposed' ";

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
                                                    $sql="SELECT * FROM t_volunteer WHERE volun_status = 'Prayed To Receive' ";

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
                                                    $sql="SELECT * FROM t_volunteer WHERE volun_status = 'Followed Up' ";

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
                                                        text: 'Monthly Collective Number of Attendees in All Events in Year <?php  $curryear = date("Y");   $baseyear = ($curryear - 1); echo $baseyear?><br>and the Expected Collective Number of Attendees for Events in Year <?php echo date("Y")?>'
                                                    },
                                                    subtitle: {
                                                        text: '<a href="">Click for more details</a>'
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
                                                                $view_query = mysqli_query($connection,"SELECT DISTINCT volun_region, volun_constat FROM `t_volunteer` WHERE volun_constat = 1");
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
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                   Religions Per Region
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
                                                    text: 'This chart displays the religions spoken per region.'
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
                                                                    name: '<?php echo $InvCategory.' '.$region ?>',
                                                                    y: <?php
                                                                    $view_query2 = mysqli_query($connection,"SELECT DISTINCT rpg_rate AS rate FROM `t_relperreg` WHERE rpg_religion = '$InvCategory' and rpg_region = '$region'");
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


                    <div class="col-lg-6">
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
