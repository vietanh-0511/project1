<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    include("include/open.php");
    $display = 5;
    $code = $_SESSION["CustomerCode"];
    if (isset($_GET["page"]) && (int) $_GET["page"]) {
        $page = $_GET["page"];
    } else {
        $sqlHistory = "SELECT COUNT(*) FROM billdetail INNER JOIN bills on billdetail.BillCode=bills.Code
				  INNER JOIN product ON billdetail.ItemCode=product.Code where bills.CustomerCode=$code";
        $result1 = mysqli_query($conn, $sqlHistory);
        $rowH = mysqli_fetch_array($result1);
        $record = $rowH[0];
        if ($record > $display) {
            $page = ceil($record / $display);
        } else {
            $page = 1;
        }
    }
    $start = (isset($_GET["start"]) && (int) $_GET["start"]) ?$_GET["start"] : 0;
    if (isset($_SESSION["CustomerCode"])) {
        $code = $_SESSION["CustomerCode"];
        $sql = "SELECT product.Item, product.Image, product.Price, billdetail.BillCode, billdetail.Quantity, bills.Date FROM billdetail 
        INNER JOIN bills on billdetail.BillCode=bills.Code 
        INNER JOIN product ON billdetail.ItemCode=product.Code 
        where bills.CustomerCode=$code limit $start,$display";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
    ?>
            <br /><br />
            <center>
                <b>Your order</b>
                <table border="1" cellspacing="0" width="83%" height="110" bordercolor="#FFFFFF">
                    <tr bgcolor="#DD0000" style="color:#FFF; font-size:large" align="center">


                        <td width="62">Mã</td>
                        <td width="268">Tên sản phẩm</td>
                        <td width="191">Ảnh</td>
                        <td width="120">Số lượng</td>
                        <td width="152">Giá</td>
                        <td width="138">Đơn giá</td>
                        <td width="148">Ngày đặt</td>


                    </tr>
                    <?php

                    while ($rowH = mysqli_fetch_array($result)) {
                    ?>
                        <tr align="center" style="background-color:#F3F3F3">
                            <td><?php echo ($rowH["BillCode"]); ?></td>

                            <td><?php echo ($rowH["Item"]); ?></td>
                            <td><img src="<?php echo ($rowH["Image"]); ?>" height="50px" /></td>
                            <td><?php echo ($rowH["Quantity"]); ?></td>
                            <td><?php echo number_format($rowH["Price"]) . "$"; ?></td>
                            <td><?php $dongia = $rowH["Quantity"] * $rowH["Price"];
                                echo number_format($dongia) . "$"; ?></td>
                            <td><?php echo ($rowH["Date"]); ?></td>
                        </tr>
                    <?php
                    }

                    ?>
                </table>
                <?php
                if ($page > 1) {
                    $next = $start + $display;
                    $prev = $start - $display;
                    $current = ($start / $display) + 1;
                    if ($current != 1) {
                        echo "<a href='index.php?tem=14&start=$prev'>Trước</a>";
                    }
                    for ($i = 1; $i <= $page; $i++) {

                        echo "<a href='index.php?tem=14&start=" . ($display * ($i - 1)) . "'>$i&nbsp;&nbsp;</a>";
                    }
                    if ($current != $page) {
                        echo "<a href='index.php?tem=14&start=$next'>Tiếp</a>";
                    }
                }

                ?>
            </center>


    <?php
        }

        include("include/close.php");
    }

    ?>
</body>

</html>