<?php 
     include ("../../../db_con.php");
     session_start();
        $type = $_SESSION['UserRole'];
        if(!isset($_SESSION['UserName']) && $type!="3"){
          header('Location: 404.html?err=1');
        }
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Yavatan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="../../../resources/web/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../../../resources/web/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../resources/web/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="../../../resources/web/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="../../../resources/web/css/metisMenu.css" rel="stylesheet" type="text/css"/>    
    <link rel="stylesheet" href="../../../resources/web/vendors/animate/animate.min.css">
    <!-- end of global css -->
    <!-- page level css -->
    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="vendors/jvectormap/jquery-jvectormap.css" />
  	<link href="../../../resources/Yavatan Logos/YAVATAN Title.png" rel="icon" />  
    <link rel="stylesheet" href="css/only_dashboard.css" />
    <!--end of page level css-->
</head>
<!--header start-->
<body class="skin-josh">
    <header class="header">
        
    </header>