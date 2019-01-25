<?php
session_start();
if(!isset($_SESSION['emails']))
{
	echo "<script >window.open('home3.php','_self')</script>";
	

}
else
{
 $email = $_SESSION['emails'];
$sponsor_id = $_SESSION['sids'];
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
  <title>sponsor profile</title>
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
<section id="ext_menu-2j" data-rv-view="627">

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
					
					<li class="nav-item"><a class="nav-link link" href="sponlogout.php?logout">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Logout</a></li></ul>
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
	include('sponlogout.php');
}
?>


<section class="engine"><a href="https://mobirise.co/g">how to create a website for free</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-2g" data-rv-view="615" style="background-image: url(assets/images/afridi-zalmi-1920x1080.jpg); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">SPONSORS PROFILE</h3>
                <div class="lead">WELCOM TO YOUR PROFILE</div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section article" id="msg-box3-2h" data-rv-view="618" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                      		<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
	<tr bgcolor="black" style="color:white;">
  <th colspan="5" bgcolor='green' ><h2><center>SELECTED TEAMS PLAYERS AND COACHES</center></h2></th>

      </tr>
      <tr bgcolor="black" style="color:white;">
<th><center>ID</th>
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
$query = "select * from bought_players where SID = '$sponsor_id' ";

$run = mysqli_query($con,$query);

while($row = mysqli_fetch_array($run))
{
$p_id = $row[1];
$p_title=$row[4];
$x = $row[6];
$z=$row[8];
$y = $row[9];



//$p_desc=substr($row[2],0,100);
?>
  <td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_id?></td> 
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_title ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $x ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $z ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $y ?></td>
      </tr>
	  <?php } ?>
	   
	   

    </tbody>
  </table>
  </div>
</div>

            </div>
        </div>
    </div>
	
	
	
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                      		<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
	<tr bgcolor="black" style="color:white;">
  <th colspan="7" bgcolor='green' ><h2><center>YOUR INFORMATION</center></h2></th>

      </tr>
      <tr bgcolor="black" style="color:white;">
<th><center>ID</th>
<th><center>NAME</th>
<th><center>BUDGET</th>
<th><center>EMAIL</th>
<th><center>PASSWORD</th>
<th><center>QUALIFICATION</th>

      </tr>
    </thead>
    <tbody>

      <tr  >
	  	<?php
		include("include/database.php");
//$page = $_GET['view_teams'];
$query = "select * from sponsors where SID = '$sponsor_id' ";

$run = mysqli_query($con,$query);

while($row = mysqli_fetch_array($run))
{
$p_id = $row[0];
$p_title=$row[1];
$x = $row[2];
$z=$row[3];
$y = $row[4];
$h = $row[5];



//$p_desc=substr($row[2],0,100);
?>
  <td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_id?></td> 
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_title ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $x ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $z ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $y ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $h ?></td>
      </tr>
	  <?php } ?>
	   
	   

    </tbody>
  </table>
  </div>
</div>

            </div>
        </div>
    </div>
	
	
	
	
	
	
	<?php
	$sponsor = "select * from sponsors where SID = '$sponsor_id'";
	$run = mysqli_query($con,$sponsor);
	while($row = mysqli_fetch_array($run))
	{
	$a = $row[1];
	$b = $row[2];
	$c = $row[3];
	$d = $row[4];
	$e = $row[5];
	?>
	<form action='' method='POST'>
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                		<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
      <tr bgcolor="black" style="color:white;">
  <th colspan="5" bgcolor='green'><h2><center>SPONSOR EDIT PROFILE  FORM</center></h2></th>

      </tr>
<tr bgcolor="black" >
<td style="color:white;">ID :</td>
  <td  ><center><input style="width:65%;border-radius:5px;" type='text'  name='sid' value="<?php echo $sponsor_id ?>" disabled ></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">NAME :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='text' name='sname' value="<?php echo $a ?>"></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">BUDGET :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='text' name='sbudget' value="<?php echo $b ?>"></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">EAIL :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='text' name='semail' value="<?php echo $c ?>"></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">PASSWORD :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='text' name='spass' value="<?php echo $d ?>"></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">QUALIFICATION :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='text' name='squalification' value="<?php echo $e ?>"></td>
	  
	  </tr>
	  
	  
	  
	  <tr bgcolor="black" style="color:white;">
	  <td style="color:white;">Click to Update</td>
  <td colspan ='7'><center><input type="submit" name='update' value='Update' style="align:right;color:white;background-color:black;border-radius:5px;width:40%;"></td>	  
	  </tr>
	  
    </thead>
    <tbody>

       
	   

    </tbody>
  </table>
  </div>
</div>

            </div>
        </div>
    </div>
	
	<?php } ?>
	
         
</form>
</section>


<?php
if(isset($_POST['update']))
{
$a = $_POST['sname'];
$b = $_POST['sbudget'];
$c = $_POST['semail'];
$d = $_POST['spass'];
$e = $_POST['squalification'];

$update = "update sponsors set SNAME = '$a' , SBUDGET = '$b' , SEMAIL = '$c' , SPASS = '$d' , SQUALIFICATION = '$e' where SID = '$sponsor_id' ";
$run = mysqli_query($con,$update);
echo "<script>alert('Your Profile Id Updated Successfully!')</script>";
		echo "<script>window.open('sponProfile.php?inserted=a new page insert','_self')</script>";
}

?>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-2k" data-rv-view="629" style="background-color: rgb(0, 0, 0); padding-top: 30px; padding-bottom: 30px;">
    
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

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2l" data-rv-view="631" style="background-color: rgb(0, 0, 0); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
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
<?php } ?>