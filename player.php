
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
  <title>players</title>
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


<section id="ext_menu-1j" data-rv-view="459">

    <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="home4.php" class="navbar-logo"><img src="assets/images/psllogo-128x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption text-white" href="home4.php"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
					<li class="nav-item"><a class="nav-link link" href="home4.php">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Back</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a href="https://mobirise.co/p">bootstrap menu</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-1n" data-rv-view="468" style="background-image: url(assets/images/y-1930x1287.jpg); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">PLAYERS</h3>
                           
            </div>
        </div>
    </div>

</section>

<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding" id="msg-box1-3h" data-rv-view="1157" style="background-color: rgb(242, 242, 242); padding-top: 30px; padding-bottom: 30px;">

    
    <div class="container">
        <div class="row">


            


            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up col-md-8 text-xs-center text-md-left">
                    <h2 class="mbr-info-subtitle mbr-section-subtitle">PSL Will Be Started On 22 Feb, 2018</h2>
                    <h3 class="mbr-info-title mbr-section-title display-2">PAKISTAN SUPER LEAGUE</h3>
                </div>

                <div class="mbr-table-cell col-md-4">
                    <div class="text-xs-center"><a class="btn btn-black" href="https://mobirise.com">LIVE PREMIUM</a></div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="mbr-section article mbr-parallax-background" id="msg-box3-20" data-rv-view="513" style="background-image: url(assets/images/k-1600x1132.jpg); padding-top: 120px; padding-bottom: 120px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                      		<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
      <tr bgcolor="black" style="color:white;">
  <th><center>SPONSOR</th>
<th><center>PLAYER</th>
<th><center>TEAM</th>
<th><center>BATTING COACH</th>
<th><center>BOWLING COACH</th>
      </tr>
    </thead>
    <tbody>

      <tr  >
	  	<?php
		include("include/database.php");
//$page = $_GET['view_teams'];
$query = "select * from bought_players";

$run = mysqli_query($con,$query);

while($row = mysqli_fetch_array($run))
{
$p_id = $row[2];
$p_title=$row[4];
$x = $row[6];
$y=$row[8];
$z=$row[9];



//$p_desc=substr($row[2],0,100);
?>
  <td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_id?></td> 
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_title ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $x ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $y ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $z ?></td>
      </tr>
	  <?php } ?>
	   
	   

    </tbody>
  </table>
  </div>
</div>

            </div>
        </div>
    </div>
         

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-1l" data-rv-view="464" style="background-color: rgb(0, 0, 0); padding-top: 30px; padding-bottom: 30px;">
    
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




<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-1m" data-rv-view="466" style="background-color: rgb(0, 0, 0); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container text-xs-center">
        <p>Copyright (c) 2018 PSL.</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
