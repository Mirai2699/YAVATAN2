<?php 
     include ("../utilities/Header.php");
     include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");

    include('../../../db_con.php');
    mysqli_set_charset($connection, 'utf8');
    $query = "SELECT E.event_ID, E.event_name, E.event_city, C.city_lat, C.city_lng, COUNT(EA.ev_atnd_ID) as        num_volunteer FROM t_event E INNER JOIN r_city C ON C.city_name = E.event_city
                INNER JOIN t_event_attendance EA ON EA.ev_atnd_eventID = E.event_ID
                GROUP BY E.event_ID, E.event_name, E.event_city, C.city_lat, C.city_lng";
    $result = mysqli_query($connection,$query) or die(mysqli_error());
    $array_json = array();
    $city_arr = array();
    while ($row = mysqli_fetch_assoc($result)) { 
        $city = $row["event_city"];
        $e_title = $row["event_name"];
        $num_volunteers = $row["num_volunteer"];
        $num_contacts = rand();
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
                              'num_contacts' => $num_contacts
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
<style>
        #map1 { height: 100%;  width: 100%; }
</style>

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
                                            <div id="map1"></div>
                                        </div>
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
                                    Key Contacts
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                        <div class="col-lg-6">
                                            <div id="abc" class="flotChart"></div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div id="bcd" class="flotChart"></div>
                                        </div>
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
                                    Profile
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                         <div class="col-lg-6">
                                            <div id="efg" class="flotChart"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hij" class="flotChart"></div>
                                        </div>
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
                                    Region Details
                                </h3>
                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="demo-container">
                                        <div class="col-lg-4">
                                            <div id="klm" class="flotChart"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div id="nop" class="flotChart"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div id="qrs" class="flotChart"></div>
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
                                    Religion(s) Per Region
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="demo-container">
                                    <div class="col-lg-12">
                                        <div id="rpr" class="flotChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="piechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Language(s) Per Region
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="demo-container">
                                    <div class="col-lg-12">
                                        <div id="lpr" class="flotChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
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