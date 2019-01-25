<?php
session_start();
if(!isset($_SESSION['email']))
{
	echo "<script >window.open('adminLogin.php','_self')</script>";
	
//echo "<script>alert('$_SESSION['email']' + '$_SESSION['sid']')</script>";
}
else
{
//echo $email = $_SESSION['email'];


?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Website Maker Description">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="ext_menu-d" data-rv-view="308">

    <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="http://index.php" class="navbar-logo"><img src="assets/images/psllogo-128x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption text-white" href="https://mobirise.com"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
					
				<li class="nav-item"><a class="nav-link link" href="player.php">Players</a></li>
				<li class="nav-item"><a class="nav-link link" href="home4.php">view_user</a></li>
				<li class="nav-item"><a class="nav-link link" href="home2.php">sponsors</a></li>
				<li class="nav-item"><a class="nav-link link" href="home3.php?logout">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Logout</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<?php
if(isset($_GET['logout']))
{
	include('adminLogout.php');
}
?>

<section class="engine"><a href="https://mobirise.co/j">how to design your own website for free</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-1e" data-rv-view="424" style="background-image: url(assets/images/r-1920x1080.jpg);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">ADMIN PANEL</h1>
                    <p class="mbr-section-lead lead">Admin can select the sponsors by click on the button given below. The "DONE" Button will be show after select 4 sponsors.<br>Note: Admin can select only 4 sponsors not less than 4 / not more than 4.</p>
                   
					<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
	<tr><td align='center' colspan='6'bgcolor='green'><h2>Sponsors List</h2></td></tr>
      <tr bgcolor="black" style="color:white;">
  <th>ID</th>
<th>NAME</th>
<th>BUDGET</th>
<th>QUALIFICATION</th>
<th>TEAM ID</th>
<th>NOT SELECT</th>

      </tr>
    </thead>
    <tbody>

      <tr >

<?php
include("include/database.php");
$query = "select * from sponsors";
$run = mysqli_query($con,$query);
while($row = mysqli_fetch_array($run))
{
$p_id = $row[0];
$p_title=$row[1];
$x = $row[2];
$y=$row[5];
$z=$row[6];

//$p_desc=substr($row[2],0,100);
?>
<td style="opacity:0.7;background-color:black;color:white;" ><?php echo $p_id ?></td>
<td style="opacity:0.7;background-color:black;color:white;" ><?php echo $p_title ?></td>
<td style="opacity:0.7;background-color:black;color:white;" ><?php echo $x ?></td>
<td style="opacity:0.7;background-color:black;color:white;" ><?php echo $y ?></td>
<td style="opacity:0.7;background-color:black;color:white;" ><?php echo $z ?></td>
<td style="opacity:0.7;background-color:black;color:white;" ><?php echo "<p><a href='remove.php?remove=$p_id'>reject</a></p>"?></td>
 </tr>
	  <?php } ?>
	  
	  <?php 
$check = "select COUNT(SID) AS spon from sponsors";
$crun = mysqli_query($con,$check);
$x = mysqli_fetch_array($crun);
$try = $x['spon'];

if($try == 4 && $try > 0)
{ 
echo "<script>alert('You Successfully selected  '+'$try'+ ' sponsors.. ')</script>";
?>
<div class="mbr-section-btn"><a class="btn btn-lg btn-black" href="home3.php">DONE SPONSORS</a> 
					
					</div>
<!--<h2><a href='home3.php' style="color:white;">DONE</a></h2>-->
<?php 
} 
 
?>
	   
	   

    </tbody>
  </table>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>

    

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-1d" data-rv-view="427" style="background-color: rgb(0, 0, 0); padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="assets/images/psllogo-128x128.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>
1234 Street Name<br>
City, AA 99999</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>
Email: support@psl.com<br>
Phone: +1 (0) 000 0000 001<br>
Fax: +1 (0) 000 0000 002</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Links</strong><br>PSL<br>PSL<br>PSL</p>
            </div>

        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-1c" data-rv-view="428" style="background-color: rgb(0, 0, 0); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container text-xs-center">
        <p>Copyright (c) 2018 PSL.</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
<?php } ?>