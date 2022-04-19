
<?php
session_start();

if (isset($_GET["Code"])) {
	$Code = $_GET["Code"];
	if (isset($_SESSION["GioHang"])) {
		if (isset($_SESSION["GioHang"][$Code])) {
			$_SESSION["GioHang"][$Code]++;
		} else {
			$_SESSION["GioHang"][$Code] = 1;
		}
	} else {
		
		$_SESSION["GioHang"][$Code] = 1;
	}

	header("Location:home.php?tem=2");
	//echo count($_SESSION["GioHang"]);
	//echo $_SESSION["GioHang"][$Code];
}
?>
