<?php
session_start();
    include("include/database.php");

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
  <title>Sponsor Login Form</title>
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


<section class="engine"><a href="https://mobirise.co/j">how to design your own website for free</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-after-navbar" id="header1-1e" data-rv-view="424" style="background-image: url(assets/images/r-1920x1080.jpg);">

    

	
	
	
	
	
	
	
	
	
    <div class="mbr-table-cell">

	<form action='' method='POST'>
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                		<div class="container">
  
  <div class="table-responsive" style="border-radius:20px;">          
  <table class="table table-warning" >
    <thead>
      <tr bgcolor="black" style="color:white;">
  <th colspan="5" bgcolor='green'><h2><center>Selection Of Players And Coach Form</center></h2></th>

      </tr>
<tr bgcolor="black" >
<td style="color:white;">ID :</td>
  <td  ><center><input style="width:65%;border-radius:5px;" type='text'  name="sid" value="<?php echo @$_GET['sponId']; ?>" disabled></td>
	  
	 
	  <tr bgcolor="black" >
	  <td style="color:white;">EMAIL :</td>
  <td ><center><input style="width:65%;border-radius:5px;"  required="required" pattern="[^ @]*@[^ @]*" type='text' name="email" placeholder="E.g: uzair@gmail.com" ></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">PASSWORD :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='password' required="required" maxlength="8" name="pass" placeholder="E.g: 12uzair"></td>
	  
	  </tr>
	  
	  
	  <tr bgcolor="black" style="color:white;">
	  <td style="color:white;">Click to Login</td>
  <td colspan ='7'><center><input type="submit" name='submit' value='Login' style="align:right;color:white;background-color:black;border-radius:5px;width:40%;"></td>	  
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




<form action='' method='POST'>
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                		<div class="container">
  
  <div class="table-responsive" style="border-radius:20px;">          
  <table class="table table-warning" >
    <thead >
      <tr bgcolor="black" style="color:white;">
  <th colspan="5" bgcolor='green' ><h2><center>Sponsor Profile Form</center></h2></th>

      </tr>
<tr bgcolor="black"  >
<td style="color:white;">ID :</td>
  <td  ><center><input style="width:65%;border-radius:5px;" type='text'  name="sids" value="<?php echo @$_GET['sponId']; ?>" disabled ></td>
	  
	</tr> 
	  <tr bgcolor="black" >
	  <td style="color:white;">EMAIL :</td>
  <td ><center><input style="width:65%;border-radius:5px;" required="required" pattern="[^ @]*@[^ @]*" type='text' name="emails" placeholder="E.g: uzair@gmail.com" ></td>
	  
	  </tr>
	  <tr bgcolor="black" >
	  <td style="color:white;">PASSWORD :</td>
  <td ><center><input style="width:65%;border-radius:5px;" type='password' required="required" maxlength="8" name="passs" placeholder="E.g: 12uzair"></td>
	  
	  </tr>
	  
	  
	  <tr bgcolor="black" style="color:white;">
	  <td style="color:white;">Click to Login</td>
  <td colspan ='7'><center><input type="submit" name='submits' value='Login' style="align:right;color:white;background-color:black;border-radius:5px;width:40%;"></td>	  
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

	
	
	
        

<hr>


    </div>

    

</section>


<?php
if(isset($_POST['submits']))
{
$a = $_POST['emails'];
$b = $_POST['passs'];
$c = @$_GET['sponId'];

$get = "select * from sponsors where SEMAIL = '$a' and SPASS = '$b' and SID = '$c' ";
$admin = mysqli_query($con,$get);
$chek_admin = mysqli_num_rows($admin);
if($chek_admin==1)
{
$_SESSION['emails']=$a;
$_SESSION['sids']=$c;
echo "<script >window.open('sponProfile.php?loggedin=You are successfully loggedin ','_self')</script>";
}
else
{
echo "<script >alert('wrong email or password')</script>";
}
}





if(isset($_POST['submit']))
{
$a = $_POST['email'];
$b = $_POST['pass'];
$c = @$_GET['sponId'];

$get = "select * from sponsors where SEMAIL = '$a' and SPASS = '$b' and SID = '$c' ";
$admin = mysqli_query($con,$get);
$chek_admin = mysqli_num_rows($admin);
if($chek_admin==1)
{
$_SESSION['email']=$a;
$_SESSION['sid']=$c;
echo "<script >window.open('players.php?loggedin=You are successfully loggedin ','_self')</script>";
}
else
{
echo "<script >alert('wrong email or password')</script>";
}
}


?>


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