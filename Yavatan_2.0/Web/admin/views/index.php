<?php 
     include ("../utilities/Header.php");
     include ("../utilities/navibar.php");
     include ("../utilities/BaseJs.php");
?>

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
                                        <div class="col-lg-6">
                                            <div id="map1" style="width: 1000px; height: 500px;border:1px solid black;"></div>
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