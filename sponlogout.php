<?php
session_start();
session_destroy();
echo "<script >window.open('home3.php?logout=You are successfully logout ','_self')</script>";


?>