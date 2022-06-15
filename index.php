<?php 
session_start();
if (!isset($_SESSION['username'])){
    header('Location:page/login.php');
}
include 'inc/koneksi.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IKNA YOGYAKARTA</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">&nbsp;Ikatan Keluarga Nasrani Amikom</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="img/ikna.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.php?page=dashevent">Event</a>
                            </li>
                            <li>
                                <a href="index.php?page=dashGall">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?page=event"><i class="fa fa-table "></i>Add Event</a>
                    </li>
                    <li>
                        <a href="index.php?page=gallery"><i class="fa fa-edit "></i>Add Gallery</a>
                    </li>
                    <li>
                        <a href="inc/logoutProses.php"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">

                <?php 
                if(isset($_GET['page'])){
                $page = $_GET['page'];

                switch ($page) {
                    case 'event':
                        include "page/admin_event.php";
                        break;
                    case 'gallery':
                        include "page/admin_gallery.php";
                        break;
                    case 'dashevent':
                        include "page/eventDash.php";
                        break;  
                    case 'dashGall':
                        include "page/galleryDAsh.php";
                        break;    
                    default:
                        include "page/eventDash.php";
                        break;
                }
                }else{
                    include "page/eventDash.php";
                }
                ?>

            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
