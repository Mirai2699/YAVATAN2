<?php 
     include ("../utilities/Header.php");
     // include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");
?>

<!-- Right side column. Contains the navbar and content of the page -->
        
        <!-- Right side column. Contains the navbar and content of the page -->
        <body style="background-color: #bdbdbd; ">
        <aside class="right-side strech" style="font-family:arial">
            <!-- Main content -->

            <section class="content-header">
                <h1>Welcome, <?php echo $_SESSION['Logged_In']; ?></h1>
            </section>
            <section class="content">
                 <form class="form-horizontal" action="#" id="addEventForm" name="addEventForm" novalidate>
                    <div class="clearfix"></div>
                    <div class="row">


                        <div class="col-md-3">
                            <div class="col-md-12" style="height: 50%">
                                <div class="panel-heading" style="background-color: green">
                                    <h3 class="panel-title" style="color: white">
                                        <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                         Suggested Events
                                    </h3>
                                </div>
                                <div class="panel-body" style="background-color: white">
                                    <div class="row" style="text-align: center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <!--For PHP-->
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        
                                        <!--For PHP-->
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px">
                                <div class="panel-heading" style="background-color: darkblue">
                                    <h3 class="panel-title" style="color: white">
                                        <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                         Suggested Groups
                                    </h3>
                                </div>
                                <div class="panel-body" style="background-color: white">
                                    <div class="row" style="text-align: center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <!--For PHP-->
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        
                                        <!--For PHP-->
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END OF LEFT SIDE-->

                        <!--START OF MIDDLE-->
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="screenshot" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Incoming Events
                                    </h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="box-body">
                                        <!--carousel starts-->
                                        <div class="row">
                                            <!-- The carousel -->
                                            <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
                                                <!-- Indicators -->
                                                <!-- <ol class="carousel-indicators">
                                                    <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                                                    <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
                                                </ol> -->

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img data-src="holder.js/2280x360/#418bca:#fff" class='img-responsive' alt="image">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header">Slide 1</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img data-src="holder.js/2280x360/#00bc8c:#fff" class='img-responsive' alt="image">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header">Slide 2</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img data-src="holder.js/2280x360/#EF6F6C:#fff" class='img-responsive' alt="image">
                                                        <div class="carousel-caption">
                                                            <h1 class="carousel-caption-header">Slide 3</h1>
                                                            <p class="carousel-caption-text hidden-sm hidden-xs">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
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

                        <!--RIGHT SIDE-->
                        <div class="col-md-3">
                            <div class="col-md-12" style="height: 50%">
                                <div class="panel-heading" style="background-color: maroon">
                                    <h3 class="panel-title" style="color: white">
                                        <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                         Enlisted Events
                                    </h3>
                                </div>
                                <div class="panel-body" style="background-color: white">
                                    <div class="row" style="text-align: center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <!--For PHP-->
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        
                                        <!--For PHP-->
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px">
                                <div class="panel-heading" style="background-color: orange">
                                    <h3 class="panel-title" style="color: white">
                                        <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                         Joined Groups
                                    </h3>
                                </div>
                                <div class="panel-body" style="background-color: white">
                                    <div class="row" style="text-align: center">
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                        <!--For PHP-->
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        <div class="panel panel-primary">
                                            <a id="data" data-toggle="modal" data-href="#responsive" href="#responsive" onclick="" title="Click to View">
                                                HAHAHAHA
                                            </a>
                                        </div> 
                                        
                                        <!--For PHP-->
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
            
                        <!-- 
                        Calendar for Events
                        <form class="form-horizontal" action="#" id="joinEventForm" name="joinEventForm" novalidate>
                            <div class="col-md-5">
                                <div class="box">
                                    <div class="box-body">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </form> -->

                       

            </section>
        </aside>
        <!-- right-side -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

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