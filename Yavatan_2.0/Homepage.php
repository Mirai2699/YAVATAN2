<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>YAVATAN | Keeping Us Together</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="resources/parallax/assets/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="resources/parallax/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="resources/parallax/assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="resources/parallax/assets/css/one-page-parallax/style.min.css" rel="stylesheet" />
    <link href="resources/parallax/assets/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
    <link href="resources/parallax/assets/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
    <link href="resources/parallax/assets/img/icon/YAVATAN Title.png" rel="icon" />


	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->   
	<script src="resources/parallax/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->


    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -
    <link href="resources/parallax/assets/assetsext/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->


</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                      <img src="resources/parallax/assets/logo/[LIGHT] Yavatan_04.png"  alt="Ryan Teller" style="size: 250px"  /> 
                        <!-- <span class="brand-text">
                            <span class="text-theme">Yavatan</span>
                        </span> -->
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" data-click="scroll-to-target">HOME</a></li>
                        <li><a href="#about" data-click="scroll-to-target">ABOUT US</a></li>
                        <li><a href="#events" data-click="scroll-to-target">UPCOMING EVENTS</a></li>
                        <li><a href="#accomp" data-click="scroll-to-target">ACCOMPLISHMENTS</a></li>
                        <li><a href="#organization" data-click="scroll-to-target">ORGANIZATIONS</a></li>
                        <li><a href="#service" data-click="scroll-to-target">SERVICES</a></li>
                        <li><a href="#contact" data-click="scroll-to-target">CONTACT</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->
        
        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="resources/parallax/assets/img/downloads/bg1.jpg" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>Welcome to Yavatan</h1>
                <h3>Digital Christian Mission Strategies</h3>
                <p style="color: white; font-size: 12px">
                    Have already an account? Check out the latest updates and sign-in!<br>
                    Don't have an account yet? Join us and Register!
                </p>
               <!--  <a href="index.php" class="btn btn-theme">Sign In</a> --> 
               <a href="#" class="btn btn-theme">Sign In</a> 
                <a href="#modal-dialog"  data-toggle="modal" class="btn btn-outline">Register Now</a><br />
                <br />
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->
        <!-- #modal-dialog -->
                               <!-- #modal-dialog -->
        <div class="modal fade" id="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: red"><b>×</b></button> -->
                        <h4 class="modal-title">Join Us Now and Be a Volunteer!</h4>
                    </div>
                    <div class="modal-body">
                          <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <h4 class="panel-title">Please fill-in the following fields:</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" action="#" id="addUser" name="addUser" data-source="#" novalidate>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Full Name * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Fullname" data-parsley-required="true" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="email">Email Address * :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="email" id="email" name="email" data-parsley-type="Email" placeholder="Email" data-parsley-required="true" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">Contact *:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="contact" name="contact" data-parsley-type="number" placeholder="(XXX) XXXX XXX"  data-parsley-required="true" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">Address *:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="address" name="address" data-parsley-type="number" placeholder="e.g. Quezon City"  data-parsley-required="true" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">Username *:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="username" name="username" data-parsley-type="number" placeholder="e.g. Username"  data-parsley-required="true" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="website">Password *:</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" id="password" name="password" data-parsley-type="number" placeholder="e.g. *******"  data-parsley-required="true" required />
                                    </div>
                                </div>
                                <div style="text-align: right">
                                    <input type="hidden" id="act" name="act" value="add">
                                    <button type="submit" class="btn btn-sm btn-success" style="margin: 10px">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-danger m-r-5" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- begin #about -->
        <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">About Us</h2>
                <p class="content-desc">
                   Who are we, what we do, and what we want for you.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <!-- begin about -->
                        <div class="about">
                            <h3>About Us</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Vestibulum posuere augue eget ante porttitor fringilla. 
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
                            </p>
                        </div>
                        <!-- end about -->

                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                         <!-- begin about -->
                        <div class="about">
                            <h3>Mission</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Vestibulum posuere augue eget ante porttitor fringilla. 
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
                            </p>
                        </div>
                        <!-- end about -->
                        <!-- end about-author -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-12">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Vision</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Vestibulum posuere augue eget ante porttitor fringilla. 
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
                            </p>
                        </div>
                        <!-- end about -->
                        <!-- end skills -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
    
        <!-- begin #milestone -->
        <div id="milestone" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="resources/parallax/assets/img/bg/bg-milestone.jpg" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
               
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="4">1</div>
                            <div class="title">Gospel Conversation</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="4">1</div>
                            <div class="title">Exposed</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="4">1</div>
                            <div class="title">Prayed to Receive</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                     <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="2">1</div>
                            <div class="title">Followed up</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #milestone -->
        
        <!-- begin #team -->
        <div id="events" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Upcoming Events</h2>
                <!-- begin row -->
                <div class="row">


                    <!-- begin col-3 -->
                    <div class="col-md-6">
                          <div id="calendar"></div>        
                    </div>
                    <!-- end col-4 -->

                    <!-- begin col-3 
                    <div class="col-md-3">
                        <!-- begin team 
                        <div class="team">             
                            <img src="assets/img/downloads/event 1.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Jesus Saves!</h3>
                                <p style="font-size: 16px">Location:  Greater Lagro, Quezon City</p>
                                <p style="font-size: 14px">Contact Person: Ms. SJ Lambino <br> Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                 
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/event 1.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Jesus Saves!</h3>
                                <p style="font-size: 16px">Location:  Greater Lagro, Quezon City</p>
                                <p style="font-size: 14px">Contact Person: Ms. SJ Lambino <br> Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/event2.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Jesus Saves!</h3>
                                <p style="font-size: 16px">Location:  Greater Lagro, Quezon City</p>
                                <p style="font-size: 14px">Contact Person: Ms. SJ Lambino <br> Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/event3.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Jesus Saves!</h3>
                                <p style="font-size: 16px">Location:  Greater Lagro, Quezon City</p>
                                <p style="font-size: 14px">Contact Person: Ms. SJ Lambino <br> Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/event4.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Jesus Saves!</h3>
                                <p style="font-size: 16px">Location:  Greater Lagro, Quezon City</p>
                                <p style="font-size: 14px">Contact Person: Ms. SJ Lambino <br> Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                   
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </div>
        <!-- end #team -->
        
        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="resources/parallax/assets/img/bg/bg-quote.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
           
        </div>
        <!-- end #quote -->
        
         <!-- begin #team -->
        <div id="accomp" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Accomplishments</h2>
                <p class="content-desc">
                   These are the  finished events and other recognition received by our members and organizations across the nation.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/accomp1.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">CoC Outreach Program</h3>
                                <p style="font-size: 14px">Located near Greater Lagro, Quezon City, on September 21, 2018</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/accomp2.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">STM's Bible Study</h3>
                                <p style="font-size: 14px">Located near Greater Lagro, Quezon City, on September 21, 2018</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/accomp3.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Lord God Conference</h3>
                               <p style="font-size: 14px">Located near Greater Lagro, Quezon City, on September 21, 2018</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                            <img src="resources/parallax/assets/img/downloads/accomp4.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Jesus Our Savior Prayer Meeting</h3>
                               <p style="font-size: 14px">Located near Greater Lagro, Quezon City, on September 21, 2018</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #team -->
        
        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="resources/parallax/assets/img/bg/bg-quote.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> Whoever you are, wherever you are, <br />
                        we're here for you whenever you need us.  
                        <i class="fa fa-quote-right"></i>
                        <small>Kaby Lake, Yavatan Innovator</small>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->


        <!-- beign #service -->
        <div id="organization" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Organizations</h2>
                <p class="content-desc">
                    In our system, we allow different organizations that provides help to the people in spiritual way, <br>
                    and allows volunteers to provide manpower in outreach programs 
                </p>
                <!-- begin row -->
                <div class="row">
                    <!--begin col-3-->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                                <img src="resources/parallax/assets/img/downloads/church1.jpg"  alt="Ryan Teller" style="width: 90%" />
                            <div class="info">
                                <h3 class="name">Christ Our Church</h3>
                                <p style="font-size: 16px">Located at Greater Lagro, Quezon City</p>
                                <p style="font-size: 14px">Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                     <!--begin col-3-->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                                <img src="resources/parallax/assets/img/downloads/church2.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">St. Michael's Cathedral</h3>
                                <p style="font-size: 16px">Located at Kamuning, Quezon City</p>
                                <p style="font-size: 14px">Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                     <!--begin col-3-->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                                <img src="resources/parallax/assets/img/downloads/church3.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">Saviour's Chapel</h3>
                                <p style="font-size: 16px">Located at Sta. Mesa, Manila</p>
                                <p style="font-size: 14px">Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->
                     <!--begin col-3-->
                    <div class="col-md-3">
                        <!-- begin team -->
                        <div class="team">             
                                <img src="resources/parallax/assets/img/downloads/church4.jpg"  alt="Ryan Teller" style="width: 100%" />
                            <div class="info">
                                <h3 class="name">The Way of Jesus Society</h3>
                                <p style="font-size: 16px">Located at Fairview, Quezon City</p>
                                <p style="font-size: 14px">Contact #: 09123456789</p>
                            </div>                     
                        </div>
                        <!-- end team -->
                    </div>
                    <!-- end col-3 -->

                </div>
                <!-- end row -->
                
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->



         <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="resources/parallax/assets/img/bg/bg-client.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            
        </div>
        <!-- end #quote -->









         <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Services</h2>
                <p class="content-desc">
                    Yavatan provides quality services that makes its community more active and consistent in serving the poeple.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-3">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Free Membership Registration</h4>
                                <p class="desc">Duis in lorem placerat, iaculis nisi vitae, ultrices tortor. Vestibulum molestie ipsum nulla. Maecenas nec hendrerit eros, sit amet maximus leo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-3">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-bullhorn"></i></div>
                            <div class="info">
                                <h4 class="title">Always Updated</h4>
                                <p class="desc">Etiam nulla turpis, gravida et orci ac, viverra commodo ipsum. Donec nec mauris faucibus, congue nisi sit amet, lobortis arcu.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-3">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-file"></i></div>
                            <div class="info">
                                <h4 class="title">Accurate Information</h4>
                                <p class="desc">Ut vel laoreet tortor. Donec venenatis ex velit, eget bibendum purus accumsan cursus. Curabitur pulvinar iaculis diam.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-3">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i class="fa fa-heart"></i></div>
                            <div class="info">
                                <h4 class="title">Trusted Partners</h4>
                                <p class="desc">Integer consectetur, massa id mattis tincidunt, sapien erat malesuada turpis, nec vehicula lacus felis nec libero. Fusce non lorem nisl.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
        
        <!-- beign #action-box -->
        <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="resources/parallax/assets/img/downloads/reg2.jpg" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-9 col-sm-9">
                        <div class="icon-large text-theme">
                            <i class="fa fa-bullhorn"></i>
                        </div> 
                        <h3>Always be Updated!</h3>
                        <p style="color: white">
                           You can check out our website and stay tune to our upcoming events and be one of the volunteers!
                        </p>
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3">
                        <a href="#home" class="btn btn-outline btn-block">Count Me In!</a>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #action-box -->


        <!-- begin #contact -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Contact Us</h2>
               
                <!-- begin row -->
                <div class="row" style="text-align: center">
                    <!-- begin col-6 -->
                    <div class="col-md-12" data-animation="true" data-animation-type="fadeInLeft">
                        <h3>Do you have any other inquires? Suggestions? <br>Feel Free to Talk to Us!</h3>
                       
                        <p>
                            <strong>Yavatan Org</strong><br />
                            Don Fabian, Commonwealth,<br />
                            Quezon City<br />
                            <span class="phone">Contact #: +63 123456789</span><br />
                            Email: <a href="yavatansupport@google">yavatansupport@google.com</a>
                        </p>
                    </div>
                    <!-- end col-6 -->
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #contact -->
        
        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <div class="footer-brand">
                   <img src="resources/parallax/assets/logo/[DARK] Yavatan_04.png"  alt="Ryan Teller" style="width:20%"  /> 
                </div>
                <p>
                    &copy; Copyright Yavatan 2018 <br />
                   
                </p>
                <!-- <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                    <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                </p> -->
            </div>
        </div>
        <!-- end #footer -->
        
        
    </div>
    <!-- end #page-container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="resources/parallax/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="resources/parallax/assets/plugins/bootstrap3/js/bootstrap.min.js"></script>
	<script src="resources/parallax/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="resources/parallax/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
	<script src="resources/parallax/assets/js/one-page-parallax/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
    <!-- <script src="resources/parallax/vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="resources/parallax/vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script> -->


    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <!-- <script src="resources/parallax/assets/assetsext/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script> -->
    <!-- <script src="resources/parallax/assets/assetsext/js/calendar.demo.min.js"></script> -->
    <script src="resources/parallax/assets/assetsext/js/apps.min.js"></script> -->
    <!-- ================== END PAGE LEVEL JS ================== -->

	

</body>
</html>
