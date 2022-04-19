<?php
session_start();
if (isset($_POST["COD"])) {
	$cod = $_POST["COD"];
	echo("$cod");
	if (isset($_POST["fname"]) && isset($_POST["email"]) && isset($_POST["pn"]) && isset($_POST["cboCity"])  && isset($_POST["address"])  && isset($_POST["date"])) {
		include("include/open.php");
		$CCOde = $_SESSION["CustomerCode"];
		$name = $_POST["fname"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$pn = $_POST["pn"];
		$city = $_POST["cboCity"];
		$date = $_POST["date"];
		echo ("$CCOde");
		echo ("$name");
		echo ("$email");
		echo ("$address");
		echo ("$pn");
		echo ("$city");
		echo ("$date");
		//tinh tong tien
		$tongtien = 0;
		$_SESSION["GioHang"];
		include("include/open.php");
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$dongia = 0;
			$ma = $row["Code"];
			if (isset($_SESSION["GioHang"][$ma])) {
				$dongia = ($_SESSION["GioHang"][$row["Code"]] * $row["Price"]);
				$tongtien = $tongtien + $dongia;
				$_SESSION["tongtien"] = $tongtien;
				echo ("$tongtien");
			}
		}


		//insert vao bang hoa don,tao don hang
		include("include/open.php");
		$InsertBill = "INSERT INTO bills VALUES ('NULL','$CCOde', '$name', '$pn', '$address', 'Cash on delivery', '$date', '$tongtien',1)";
		mysqli_query($conn, $InsertBill);

		$BillCode = mysqli_insert_id($conn);
		echo("$BillCode");
		$gioHang = $_SESSION["GioHang"];
		foreach ($gioHang as $ma => $sl) {

			$InsertBillDetail = "INSERT INTO billdetail VALUES ('BillCode', '$ma','$sl')";
			mysqli_query($conn, $InsertBillDetail);
		}
		unset($_SESSION["GioHang"]);
		include("include/close.php");
	}
}
?>
<script language="javascript">
	alert("Đặt hàng thành công");
</script>
<?php
header("location:home.php");
?>