<?php
session_start();
if(!isset($_SESSION['email']))
{
	echo "<script >window.open('home3.php','_self')</script>";
	

}
else
{
$email = $_SESSION['email'];
$sponsor_id = $_SESSION['sid'];
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
  <title>Batting Coach</title>
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
<?php
if(isset($_GET['logout']))
{
	include('sponlogout.php');
}
?>
<section id="ext_menu-24" data-rv-view="528">

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

<section class="engine"><a href="https://mobirise.co/c">free web page maker</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-21" data-rv-view="516" style="background-image: url(assets/images/pic03-612x408.jpg); padding-top: 80px; padding-bottom: 80px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">BATTING COACH</h3>
                <div class="lead">Welcome : <?php echo $email;?> Your Id Is: <?php echo $sponsor_id;?></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section__container article" id="header3-3j" data-rv-view="1162" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">PSL</h3>
                <small class="mbr-section-subtitle">PSL Will Be Started On Feb 22, 2018</small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article mbr-parallax-background" id="msg-box3-22" data-rv-view="519" style="background-image: url(assets/images/k-1600x1132.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                      		<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
      <tr bgcolor="black" style="color:white;">
<th>ID</th>
<th>NAME</th>
<th>COUNTRY</th>
<th>BUDGET</th>

      </tr>
    </thead>
    <tbody>

      <tr  >
	  	<?php
		include("include/database.php");
//$page = $_GET['view_teams'];
$query = "select * from coach";

$run = mysqli_query($con,$query);

while($row = mysqli_fetch_array($run))
{
$p_id = $row[0];
$p_title=$row[1];
$x = $row[2];
$z=$row[4];



//$p_desc=substr($row[2],0,100);
?>
  <td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_id?></td> 
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $p_title ?></td>
<td style="opacity:0.7;background-color:black;color:white;"><?php echo $x ?></td>
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
         <form action='' method='POST'>
	
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                		<div class="container">
  
  <div class="table-responsive">          
  <table class="table table-warning" >
    <thead>
      <tr bgcolor="black" style="color:white;">
  <th colspan="5"><h2><center>PLAYER SELECTION FORM</center></h2></th>

      </tr>
<tr bgcolor="black" >
  <td colspan="7" ><center><input style="width:65%;border-radius:5px;" type='text'  name='sid' value="<?php echo $sponsor_id ?>" disabled></td>
	  
	  </tr>
	  <tr bgcolor="black" >
  <td colspan="7" ><center><input style="width:65%;border-radius:5px;" required type='text' name='tid' placeholder="Coach ID E.G: 7"></td>
	  
	  </tr>
	  
	  
	  
	  <tr bgcolor="black" style="color:white;">
  <td colspan='7'><center><input type="submit" name='submit' value='submit' style="color:white;background-color:black;border-radius:5px;width:40%;"></td>	  
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
</form>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-25" data-rv-view="530" style="background-color: rgb(0, 0, 0); padding-top: 30px; padding-bottom: 30px;">
    
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

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-26" data-rv-view="532" style="background-color: rgb(0, 0, 0); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
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
  
  
  
  
  
  <?php
		if(isset($_POST['submit']))
		{
		
		//$sponsor_id = @$_GET['coach'];

		
		$x = $_POST['sid'];
		$y=$_POST['tid'];
		//echo "<script>alert('$y' )</script>";
		
		
		
		
		//check coaches budget
		$coach = "select * from coach where COID = '$y'";
			$runscoach = mysqli_query($con,$coach);
		$execCoach = mysqli_fetch_array($runscoach);
		$cid = $execCoach[0];
		$coacheBudget = $execCoach[4];
		$coachName = $execCoach[1];
	
		//echo "<script>alert('$coaches')</script>";
		
		//check sponsor budget
			//this is for sponosors budget
		
		
		if( $cid != '' || $cid != null){
		$query3 = "select * from sponsors where SID = '$sponsor_id' ";
		$runs = mysqli_query($con,$query3);
		$rowss = mysqli_fetch_array($runs);
	    $budget = $rowss[2];
		
	$result = $budget - $coacheBudget;
	
	//this is for boughtd coach
		$send_into_bought_coach = "insert into bought_coach(SID,COID) values('$sponsor_id','$y')";
		$BoughtPlayers = mysqli_query($con,$send_into_bought_coach);
//		echo "<script>alert('coach bought')</script>";
	
	     	
			$check = "select count(COID) AS total from bought_coach  where SID = '$sponsor_id' ";
$checked =  mysqli_query($con,$check);
$Crun = mysqli_fetch_array($checked);
$try = $Crun['total'];
  //		echo "<script>alert('$try')</script>";
		if($try > 1){

	echo "<script>alert('you cannot bought '+ '$try' + ' batting coaches')</script>";
	//echo "<h1><a href='bowlCoach.php?coach=$sponsor_id'>Coach</a></h1>";
	echo "<script>window.open('bowlCoach.php?inserted=a new page insert','_self')</script>";	
	}
else
{

	if( $result > 0 )
{	
				//update sponsors budget
		$updateSponsorsBudget = "update sponsors set SBUDGET='$result' where SID='$sponsor_id'";
		$updated = mysqli_query($con,$updateSponsorsBudget);
		//echo "<script>alert('sponsor updated')</script>";	
		
		//update sponsors budget
		$updateSponsorsBudget = "update bought_players set COID = '$y' ,BattingCoach = '$coachName' where SID='$sponsor_id'";
		$updated = mysqli_query($con,$updateSponsorsBudget);
		//echo "<script>alert('coach updated')</script>";
		
		
		//delete players after bought
		$deletePlayer = "delete from coach where COID='$y'";
		$deleted = mysqli_query($con,$deletePlayer);
		echo "<script>alert('you successfully bought '+ '$try' + ' batting coach')</script>";
	echo "<script>window.open('bowlCoach.php?inserted=a new page insert','_self')</script>";
}
else
{
echo "<script>alert('u dont have enoigh money to buy coach please recharge your amount')</script>";
}


}
		}
		else
		{
			echo "<script>alert('Please Insert Correct Coach Id')</script>";	
		}
		}
		
		?>
		
  
  
  </body>
</html>
<?php } ?>