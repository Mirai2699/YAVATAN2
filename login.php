<!DOCTYPE html>
<html>

<head>
    <title>YAVATAN | Log-In</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="resources/web/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="resources/web/css/pages/login2.css" rel="stylesheet" />
    <link href="resources/web/vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <link href="parallax/assets/img/icon/YAVATAN Title.png" rel="icon" />
    <!-- styles of the page ends-->
</head>

<body>
    <div class="container" style="padding: 10px; background-color: #ffffff">
        
    </div>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div style="background-color: #424242; height: 50px; text-align: right">
                        <a href="Homepage.php">
                            <button style="margin: 7px;" type="button" class="btn btn-default"> 
                               <i class="livicon" data-name="home" data-size="18" data-c="#424242" data-hc="#9e9e9e" data-loop="true"></i>
                                Back to Home
                            </button>
                        </a>
                    </div>
                    
                    <div class="panel-heading">
                         <img src="parallax/assets/logo/[LIGHT] Yavatan_04.png"  alt="YAVATAN" style="width:100%"  /> 
                    </div>
                    <div id="container"></div>
                    <div style="background-color: #424242; height: 1px">
                    </div>

                    <div class="panel-body">
                        <form accept-charset="UTF-8" id="loginform" name="loginform"  method="POST">
                            <center><p style="font-size: 18px">Sign In</p></center>
                            <?php
                                      include ("db_con.php");
                                        
                                        if(isset($_POST['yavlog']))
                                        {
                                          $username = $_POST['username'];
                                          $password = $_POST['password'];
                                          
                                          $query = "SELECT * FROM t_account WHERE acc_username = '".$username."' and acc_password = '".$password."'";

                                          $result = mysqli_query($connection,$query) or die(mysqli_error());
                                          if (mysqli_num_rows($result) > 0)
                                          {
                                           while($row = mysqli_fetch_assoc($result))
                                             {
                                               $user_id = $row['acc_ID'];
                                               $UserName = $row['acc_username'];
                                               $userrole = $row['acc_user_role'];
                                               $email= $row['acc_email'];
                                               $grpID = $row['acc_group'];
                                               $volunID = $row['acc_volunID'];
                                               $grpldID = $row['acc_grpldID'];
                                             }
                                             echo 'OK!';

                            
                                          session_start();
                                          

                                           $_SESSION['Logged_In'] = $UserName;
                                           $_SESSION['UserRole'] = $userrole;
                                           $_SESSION['email'] = $email;
                                           $_SESSION['grpID'] = $grpID;
                                           $_SESSION['volun_ID'] = $volunID;
                                           $_SESSION['grpldID'] = $grpldID;

                                          if($_SESSION['UserRole'] == "1")
                                          {
                                            $header ='Location:Web/admin/views/index.php? username='.$UserName.'';
                                            header($header);
                                          }
                                          else if($_SESSION['UserRole'] == "2")
                                          {
                                            
                                            $header ='Location:Web/groupleader/views/index.php? username='.$UserName.'';
                                            header($header);
                                          } 
                                          else if($_SESSION['UserRole'] == "3")
                                          {
                                            
                                            $header ='Location:Web/volunteer/views/index.php? username='.$UserName.'';
                                            header($header);
                                          } 
                                          
                                         
                                         // $query = "INSERT INTO pso_r_users_log (UL_LOGGED_TYPE,EP_ID) VALUES('$type','$employee')";
                                         // mysqli_query($connection,$query);
                                          
                                        }
                                else
                                        {
                                           
                                            echo  "
                                            <center>
                                            <label style='color:red; font-weight: 10px; font-size: 15px'>Incorrect Username or Password!</label>
                                            </center>";         
                                            }
                                      }
                                ?>
                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="at" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="User Name" name="username" id="username" type="text" />
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" class="minimal-blue">
                                        Remember Me
                                    </label>
                                </div>
                                <button type="submit" name="yavlog" class="btn btn-lg btn-primary btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- global js -->
    <script src="resources/web/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="resources/web/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="resources/web/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="resources/web/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="resources/web/js/TweenLite.min.js"></script>
    <script src="resources/web/vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(document).mousemove(function(event) {
            TweenLite.to($('body'), .5, {css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}});
        });

        //Flat red color scheme for iCheck
        $('input[type="checkbox"].minimal-blue').iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });
    </script>
    <!-- end of page level js-->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#loginform').on('submit', (function (e)
        {
            e.preventDefault();
            $.ajax({
                async: true,
                url: $('#loginform').data('source'), 
                type: "POST",        
                data: $('#loginform').serialize(), 
                dataType: 'json',
                cache: false, 
                success: function(data)
                {
                    if(data['IsError'] == 0)
                    {
                        window.location.replace(data['url']);
                    }
                },
                error: function(data)
                {
                    alert('Wrong Credentials');
                }
            });
        }));
    });
</script> -->
<script src="parallax/hc/code/highcharts.js"></script>
<script src="parallax/hc/code/highcharts-more.js"></script>




        <script type="text/javascript">


/**
 * Get the current time
 */
function getNow() {
    var now = new Date();

    return {
        hours: now.getHours() + now.getMinutes() / 60,
        minutes: now.getMinutes() * 12 / 60 + now.getSeconds() * 12 / 3600,
        seconds: now.getSeconds() * 12 / 60
    };
}

/**
 * Pad numbers
 */
function pad(number, length) {
    // Create an array of the remaining length + 1 and join it with 0's
    return new Array((length || 2) + 1 - String(number).length).join(0) + number;
}

var now = getNow();

// Create the chart
Highcharts.chart('container', {

    chart: {
        type: 'gauge',
        plotBackgroundColor: null,
        plotBackgroundImage: null,
        plotBorderWidth: 0,
        plotShadow: false,
        height: 200
    },

    credits: {
        enabled: false
    },

    title: {
        text: ''
    },

    pane: {
        background: [{
            // default background
        }, {
            // reflex for supported browsers
            backgroundColor: Highcharts.svg ? {
                radialGradient: {
                    cx: 0.5,
                    cy: -0.4,
                    r: 1.9
                },
                stops: [
                    [0.5, 'rgba(255, 255, 255, 0.2)'],
                    [0.5, 'rgba(200, 200, 200, 0.2)']
                ]
            } : null
        }]
    },

    yAxis: {
        labels: {
            distance: -20
        },
        min: 0,
        max: 12,
        lineWidth: 0,
        showFirstLabel: false,

        minorTickInterval: 'auto',
        minorTickWidth: 1,
        minorTickLength: 5,
        minorTickPosition: 'inside',
        minorGridLineWidth: 0,
        minorTickColor: '#666',

        tickInterval: 1,
        tickWidth: 2,
        tickPosition: 'inside',
        tickLength: 10,
        tickColor: '#666',
        title: {
            text: 'Powered by<br/>Highcharts',
            style: {
                color: '#BBB',
                fontWeight: 'normal',
                fontSize: '8px',
                lineHeight: '10px'
            },
            y: 10
        }
    },

    tooltip: {
        formatter: function () {
            return this.series.chart.tooltipText;
        }
    },

    series: [{
        data: [{
            id: 'hour',
            y: now.hours,
            dial: {
                radius: '60%',
                baseWidth: 4,
                baseLength: '95%',
                rearLength: 0
            }
        }, {
            id: 'minute',
            y: now.minutes,
            dial: {
                baseLength: '95%',
                rearLength: 0
            }
        }, {
            id: 'second',
            y: now.seconds,
            dial: {
                radius: '100%',
                baseWidth: 1,
                rearLength: '20%'
            }
        }],
        animation: false,
        dataLabels: {
            enabled: false
        }
    }]
},

    // Move
    function (chart) {
        setInterval(function () {

            now = getNow();

            if (chart.axes) { // not destroyed
                var hour = chart.get('hour'),
                    minute = chart.get('minute'),
                    second = chart.get('second'),
                    // run animation unless we're wrapping around from 59 to 0
                    animation = now.seconds === 0 ?
                        false : {
                            easing: 'easeOutBounce'
                        };

                // Cache the tooltip text
                chart.tooltipText =
                    pad(Math.floor(now.hours), 2) + ':' +
                    pad(Math.floor(now.minutes * 5), 2) + ':' +
                    pad(now.seconds * 5, 2);


                hour.update(now.hours, true, animation);
                minute.update(now.minutes, true, animation);
                second.update(now.seconds, true, animation);
            }

        }, 1000);

    });

/**
 * Easing function from https://github.com/danro/easing-js/blob/master/easing.js
 */
Math.easeOutBounce = function (pos) {
    if ((pos) < (1 / 2.75)) {
        return (7.5625 * pos * pos);
    }
    if (pos < (2 / 2.75)) {
        return (7.5625 * (pos -= (1.5 / 2.75)) * pos + 0.75);
    }
    if (pos < (2.5 / 2.75)) {
        return (7.5625 * (pos -= (2.25 / 2.75)) * pos + 0.9375);
    }
    return (7.5625 * (pos -= (2.625 / 2.75)) * pos + 0.984375);
};

        </script>
</body>
</html>