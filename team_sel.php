<!DOCTYPE html>
<html lang="en">

<head>
<title>PREMEIR SUPER LEAGUE</title>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
		    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/mystyles.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
body {
    background: url('y.jpeg');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;

	}
  .jumbotron {
    padding:70px 30px 70px 30px;
    margin:0px auto;
    background: white ;
    
}
  .p {font-size: 7px;}
  
.navbar {
      
      margin-bottom: 0;
      
      letter-spacing: 4px;
      opacity: 0.9;
  
  }
  
  

.navbar-inverse {

    background-color:#708090;
	color: #ffffff;

	 }
 
.carousel .item {
  height: 400px;
}

.carousel-inner img {
width: 100%; /* Set width to 100% */
      margin: auto;
}
.row-footer{
    background-color: #006400;
	color:black;
    margin:0px auto;
    padding: 20px 0px 20px 0px;
}
.container
{
border-radius:9px;
width:300px;
height:290px;
background-color: black;
  border: 1px solid black;
  opacity: 0.6;
  transition: width 2s, height 4s;

}
.container:hover{
width:400px;
height:320px;
}
</style>

</head>
<body >
		
				<script type="text/javascript">

function countDown(secs,elem)
{
var element = document.getElementById(elem);
element.innerHTML = "<center>"+"<h1>"+"Page closed in " + secs + " seconds"+"</h1>"+"</center>";
secs--;
if(secs < 0){
clearTimeout(timer);

element.innerHTML += window.open('admin.php?deleted=your page is deleted!','_self');


}

var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);

}
</script>





<div id="status"></div>
<script type="text/javascript"> countDown(30,"status")</script>


<?php		
include("include/database.php");

		if(isset($_GET['submit']))
		{
		
		
		$sid = $_GET['sid'];
$username  = $_GET['user'];
$password = $_GET['pass'];


$result =  mysql_query("select * from sponsors where SID='$sid' and SEMAIL='$username' and SPASS='$password'")
or die("failed to query db".mysql_error());
$row = mysql_fetch_array($result);
	if($row['SEMAIL'] == $username && $row['SPASS'] == $password && $row['SID'] == $sid)
{




echo "<center><a href='players.php?page3=$sid'><h2>CORRECT</h2></a>";








}

else
{
echo "failed to login";
header("Location: home3.php");
}
}

		
		
		
		?>
		
<p style="padding:127px"></p>		
		<div class="container">
  <h2>Login</h2>
  <hr>

    <form action="" method="GET">
    
	<div class="form-group">
      <div class="form-group">
      <label class="sr-only">S_ID:</label>
      <input type="text" class="form-control"  id="sid" name="sid" placeholder="Enter S_ID" value='<?php echo @$_GET['pages']; ?>'>
    </div>
      <input type="text" class="form-control" id="user" name="user" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label class="sr-only">Password:</label>
      <input type="password" class="form-control"  id="pass" name="pass" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default" value='login' name='submit' id='submit'>Submit</button>
  </form>
</div>

		
		
		
		</body>
		</html>
		
