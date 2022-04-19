<?php 
$Code = $_GET["Code"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"project1");
$strDelete = "delete from product where Code=$Code";
mysqli_query($conn,$strDelete);
mysqli_close($conn);
header("Location:admin.php");
