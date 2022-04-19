<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Documento sin t&iacute;tulo</title>


	<style type="text/css">
		td {
			width: 30%;
		}
	</style>

</head>

<body>
	<?php
	$Code = $_SESSION["CustomerCode"];
	include("include/open.php");
	$strSelect = "select * from members where Code = '$Code'";
	$result = mysqli_query($conn, $strSelect);
	$rows = mysqli_fetch_array($result);
	?>
	<fieldset style="width: 98%; padding-top: 20px;">
		<legend style="text-align: left; font-size: 50px;">User</legend>
		<form method="POST" action="U-info-action.php">
			<table style="width: 100%;">
				<tr>
					<td>Username</td>
					<td colspan="4"><input type="text" value="<?php echo $rows["Username"]; ?>" readonly="readonly" name="Name" /></td>
				</tr>
				<tr>
					<td>Address</td>
					<td colspan="4"><input type="text" name="Adr" placeholder="Update your address" value="<?php echo $rows["Address"]; ?>" /></td>
				</tr>
				<tr>
					<td>Phone number</td>
					<td colspan="4"><input type="text" name="PN" placeholder="Update your phone number" value="<?php echo $rows["PhoneNumber"]; ?>" /></td>
				</tr>
				<tr>	
					<td>Email</td>
					<td colspan="4"><input type="text" name="Email" placeholder="Update your email" value="<?php echo $rows["Email"]; ?>" /></td>
				</tr>
				<tr>
					<td><input type="submit" value="update" onclick="validate()" name="UDU" /></td>
					<td><input type="submit" value="Change my password" name="CP" /></td>
					<td><input type="submit" value="logout" onclick="return confirm('rusure??')" name="LO" /></td>
					<td><input type="submit" value="Track my order" name="OH" /></td>
				</tr>
				<td>
					<?php
					include("include/close.php")
					?>
				</td>
			</table>
		</form>
	</fieldset>
</body>

</html>