<?php
include("configurations.php");

$conn=mysqli_connect($HOST,$USER,$PASSWORD);

$select_db = mysqli_select_db($conn,$DB_NAME); 

?>