<?php 
 
     include ("../utilities/WelcomeHeader.php");
     // include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");
   
?>
	<head>
		<title>Welcome, New Member! </title>
	</head>
<!-- Right side column. Contains the navbar and content of the page -->
        
        <!-- Right side column. Contains the navbar and content of the page -->
        <body style="background-color: #6e6e6e; ">
        <aside class="right-side strech" style="font-family:arial">
            <!-- Main content -->
          <center>
            <section class="content-header" style="background-color: white">
            	<div class="panel" style="padding: 1px; background-color: #6e6e6e"></div>
            	<!-- <b style="margin-top: 5px; color: black">Welcome to</b><br> -->
               <img src="../../../resources/Yavatan Logos/[LIGHT] Yavatan_03.png" style="width: 274px; height: 52px;" alt="Yavatan">
            </section>

            <section class="content">
                 <form class="form-horizontal" action="#" id="addEventForm" name="addEventForm" novalidate>
                    <div class="clearfix" ></div>
                    <div class="row" style="margin-top: 2%">
                        <!--START OF MIDDLE-->
                        <div class="col-md-8" style="margin-left: 17%">
                            <div class="panel panel-primary">
                               
                                <div class="panel-body">
                                    <div class="box-body" style="width: 100%">
                                        <!--carousel starts-->
                                        <div class="row" style="font-family: calibri;">
                                            <!-- The carousel -->
                                            <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="../../../resources/assets/img/downloads/bg1.jpg" class='img-responsive' alt="image" style="width: 90%">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header" style="font-family: calibri">Welcome To Yavatan!</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Welcome to the Yavatan Community! You are now a member of the Digital Christian Mission Strategies Events Portal and Community. You can now access events through this website!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="../../../resources/assets/img/downloads/church4.jpg" class='img-responsive' alt="image" style="width: 90%">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header" style="font-family: calibri">Join Organizations!</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                By joining Organizations, you can now actively particiapte in many events and be friends with others!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img src="../../../resources/assets/img/downloads/accomp1.jpg" class='img-responsive' alt="image" style="width: 90%">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header" style="font-family: calibri">Help Others in the Community</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Being a volunteer doesn't stop in joining events and organizations! You can participate also in youth missions and join others as they help those people 
                                                                in need, and those people who needs gospel! <br>Enjoy your Yavatan Experience!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>

                                                <!-- Timer "progress bar" -->
                                                <hr class="transition-timer-carousel-progress-bar animate" />
                                            </div>
                                        </div>
                                        <!--carousel ends-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END OF MIDDLE-->

                    </center>
                   
                       

            </section>
        </aside>
        <center>
        	<a href="index.php" class="btn btn-success">
        		 <i class="livicon" data-name="angle-double-right" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
        		Continue to Homepage
        	</a>
        </center>
        
        <!-- right-side -->



<!-- PAGE SCRIPT AND CSS -->
<link href="../../../resources/web/css/pages/carousel.css" rel="stylesheet" />
<script src="../../../resources/web/js/carousel.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 4000
        });

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
    </script>