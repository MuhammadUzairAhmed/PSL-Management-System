<?php

include('include/database.php');
$remove=$_GET['remove'];
$query = "delete from sponsors where SID='$remove'";
if(mysqli_query($con,$query))
{
echo "<script>window.open('admin.php?deleted=your page is deleted!','_self')</script>";
}


?>