<?php
$Code = $_GET["MCode"];
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "project1");
$strDelete = "delete from members where Code=$Code";
mysqli_query($conn, $strDelete);
mysqli_close($conn);
header("Location:admin.php");
