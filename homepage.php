<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>homepage</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script language="javascript">
		$(document).ready(function() {
			$('#apple').click(function() {
				$('#content').load('Apple.php');
			});
			$('#trangchu').click(function() {
				$('#content').load('TrangChu.php');

			});
			$('#apple1').click(function() {
				$('#content').load('Apple.php');

			});
			$('#samsung').click(function() {
				$('#content').load('Samsung.php');

			});
			$('#dienthoai').click(function() {
				$('#content').load('DienThoai.php');

			});
			$('#tablets').click(function() {
				$('#content').load('tablets.php');

			});
			$('#xiaomi').click(function() {
				$('#content').load('Xiaomi.php');

			});
			$('#oppo').click(function() {
				$('#content').load('oppo.php');

			});
			$('#samsung2').click(function() {
				$('#content').load('Samsung.php');

			});
			$('#xiaomi2').click(function() {
				$('#content').load('Xiaomi.php');

			});
			$('#oppo2').click(function() {
				$('#content').load('oppo.php');

			});
			$('#tainghe').click(function() {
				$('#content').load('tainghe.php');

			});
			$('#oplung').click(function() {
				$('#content').load('oplung.php');

			});
			$('#duoi5tr').click(function() {
				$('#content').load('duoi5tr.php');

			});

			$('#gia').click(function() {
				$('#content').load('5den10tr.php');

			});
			$('#10den20').click(function() {
				$('#content').load('10den20tr.php');

			});
			$('#tren20').click(function() {
				$('#content').load('tren20tr.php');

			});
			$('#dienthoai').click(function() {
				$('#content').load('DienThoai.php');

			});
			$('#dienthoai').click(function() {
				$('#content').load('DienThoai.php');

			});
		});
	</script>


</head>

<body onload="banner()">
	<div id="main">
		<div id="header" style=" width: 100%;
            height: 100px;
            background: linear-gradient(to top, #ebfffa, #ebfffa, white);
            margin: 0px;
            padding: 0px;">
			<div id="logo">
				<a href="">
					<img src="Web-images/logo.png" style=" height: 100px;
                        width: auto; 
                        float: left;
                        margin: 0px;
                        padding: 0px;" />
				</a>
			</div>
			<div id="top" style="line-height:60px; font-size:20px">
				<div style="float:right; margin-right:30px; font-family:Arial, Helvetica, sans-serif; color:#CCC">
					<a href="?tem=3" style="text-decoration:none; color:black">
						Cart <img src="cart.png" height="25px" style="float:right; padding-top:15px" />
					</a>
				</div>

				<div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
					<?php
					if (isset($_SESSION["tenDN"])) {
						?>
						<a href="?tem=6" style="text-decoration:none; color:#FFF"> Đăng xuất</a> &nbsp;|
					<?php
					}
					?>
				</div>

				<div style="float:right; font-family:Arial, Helvetica, sans-serif">
					<?php
					if (isset($_SESSION["tenDN"])) {
						?>
						<a href="?tem=11" style="text-decoration:none; color:#FFF">Đổi mật khẩu|</a>
					<?php
					}
					?>
				</div>

				<div style="float:right; font-family:Arial, Helvetica, sans-serif">
					<?php
					if (!isset($_SESSION["tenDN"])) {
						?>
						<a href="?tem=17" style="text-decoration:none; color:black">Login |</a>
					<?php
					}
					?>
				</div>

				<div style="float:right; font-family:Arial, Helvetica, sans-serif">
					<?php
					if (isset($_SESSION["tenDN"])) {
						?>
						<a href="?tem=12" style="text-decoration:none; color:#FFF">
							<img src="../Admin/Anh/585e4bf3cb11b227491c339a.png" height="25px" style="margin-top:20px" />
						</a>
					<?php
					}
					?>
				</div>
				<!-- search-->
				<form action="?tem=4" method="post">
					<div style="float: left;
                    width: 60%;
                    height: 100%;
                    padding:25px;
                    padding-left:150px " class="search"><a href="#">
							<input type="text" name="txtTim" placeholder="Search here" size="20px" style=" width: 60%;
                                                                                        float: left;
                                                                                        border-radius: 20px;
                                                                                        overflow: hidden;
                                                                                        padding: 10px;" />
							<input type="submit" value="Search" name="search" style=" width: 15%;
                                                                    float: left;
                                                                    border-radius: 20px;
                                                                    padding: 10px;" />
					</div>
				</form>
			</div>
			<!-- slide -->
			<div id="banner">
				<script language="javascript">
					var i = 0;
					var anh = ["slide.jpg", "slide1.jpg", "slide2.jpg"];

					function banner() {
						if (i == 3)
							i = 0;
						document.getElementById("slide").src = "Web-images/" + anh[i];
						i++;
						setTimeout("banner()", 2000);
					}
				</script>
				<img id="slide" style="height:300px; width:100%" />
			</div>

			<!-- menu -->
			<div id="menu">
				<div id='cssmenu'>
					<ul>
						<li id="trangchu"><a href='#'><span>Trang chủ</span></a></li>
						<li id="apple"><a href='#'><span>mnu1</span></a></li>
						<li id="samsung"><a href='#'><span>mnu2</span></a></li>
						<li class='active has-sub'><a href='#'><span>mnu3</span></a>
							<ul>
								<li class='has-sub' id="xiaomi"><a href='#'><span>mnu4</span></a>

								</li>
								<li class='has-sub' id="oppo"><a href='#'><span>mnu5</span></a>

								</li>
							</ul>
						</li>
						<li class='active has-sub'><a href='#'><span>Giá</span></a>
							<ul>
								<li class='has-sub' id="duoi5tr"><a href='#'><span>Dưới 5 triệu</span></a>

								</li>
								<li class='has-sub' id="gia"><a href='#'><span>Từ 5 đến 10 triệu</span></a>

								</li>
								<li class='has-sub' id="10den20"><a href='#'><span>Từ 10 đến 20 triệu</span></a>

								</li>
								<li class='has-sub' id="tren20"><a href='#'><span>Trên 20 triệu</span></a>

								</li>
							</ul>
						</li>
						<li class='last' id="history">
							<?php
							if (isset($_SESSION["tenDN"])) {
								?>
								<a href='?tem=14'><span>Lịch sử mua hàng</span></a>
							<?php
							}
							?></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
			<div id="left">
				<!-- menu left-->

				<table>
					<?php
					include("include/open.php");
					$sql = "select * from product where product.Code=8";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($result);

					?>
					<tr align="center">
						<td>
					<tr align="center">
						<td><img src="logo.png" width="50%" /></td>
					</tr>
					<tr align="center">
						<td><a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src=<?php echo ($row["Image"]); ?> height="120px" /></a></td>
					</tr>
					<tr align="center">
						<td><?php echo ($row["Item"]); ?></td>
					</tr>
					<tr align="center">
						<td>
							<font color="#0033FF"><?php echo number_format($row["Price"]) . "USD</p>"; ?></font>
						</td>
					</tr>
					</td>
					</tr>
					<?php
					include("include//open.php");
					$sql = "select * from product where product.Code=10";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($result);

					?>
					<tr>
						<td>
					<tr align="center">
						<td><a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src=<?php echo ($row["Image"]); ?> height="120px" /></a></td>
					</tr>
					<tr align="center">
						<td><?php echo ($row["Item"]); ?></td>
					</tr>
					<tr align="center">
						<td>
							<font color="#0033FF"><?php echo number_format($row["Price"]) . "VNĐ</p>"; ?></font>
						</td>
					</tr>
					</td>
					</tr>
					<?php
					include("include/open.php");
					$sql = "select * from product where product.Code=7";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_array($result);

					?>
					<tr>
						<td>
					<tr align="center">
						<td><a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src=<?php echo ($row["Image"]); ?> height="120px" /></a></td>
					</tr>
					<tr align="center">
						<td><?php echo ($row["Item"]); ?></td>
					</tr>
					<tr align="center">
						<td>
							<font color="#0033FF"><?php echo number_format($row["Price"]) . "VNĐ</p>"; ?></font>
						</td>
					</tr>

					</td>
					</tr>
				</table>
				<?php
				include("include/close.php");
				?>
			</div>

			<div id="content">

				<?php
				if (isset($_GET["tem"])) {
					$tem = $_GET["tem"];
					switch ($tem) {
						case 1:
							include("DangKi.php");
							break;
						case 2:
							include("TrangChu.php");
							break;
						case 3:
							include("XemGioHang.php");
							break;
						case 4:
							include("search.php");
							break;
						case 5:
							include("oppo.php");
							break;
						case 6:
							include("DangXuat.php");
							break;
						case 7:
							include("ChiTietSP.php");
							break;
						case 9:
							include("datHang.php");
							break;
						case 10:
							include("formDH.php");
							break;
						case 11:
							include("changePass.php");
							break;
						case 12:
							include("profileKH.php");
							break;
						case 14:
							include("history.php");
							break;
						case 15:
							include("thongtin.php");
							break;
						case 16:
							include("DienThoai.php");
							break;
						case 17:
							include("DangNhap.php");
							break;
					}
				} else {
					include("showproduct.php");
				}

				?>

			</div>
			<div id="right">

			</div>
		</div>

		<div id="footer">
				

		</div>
	</div>

</body>

</html>