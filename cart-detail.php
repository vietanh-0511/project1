<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chi tiết giỏ hàng</title>
    <SCRIPT LANGUAGE="JavaScript">
        function confirmAction() {
            return confirm("This product will be deleted?")
        }
    </SCRIPT>

    <style>

    </style>
</head>

<body>
    <?php

    if (isset($_SESSION["GioHang"])) {

        include("include/open.php");
        $sql = "select * from product";
        $result = mysqli_query($conn, $sql);
    ?>
        <form method="POST" action="update-cart.php">
            <center>
                <h2>Cart</h2>
                <table border="1px" cellspacing="0" width="80%" bordercolor="#FFFFFF">
                    <tr>
                        <th height="94">Code</th>
                        <th>Image</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                        <th></th>
                    </tr>
                    <?php
                    $tongtien = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $dongia = 0;
                        $ma = $row["Code"];
                        if (isset($_SESSION["GioHang"][$ma])) {
                    ?>
                            <tr bordercolor="#FFFFFF" bgcolor="">
                                <td><?php echo ($row["Code"]); ?></td>
                                <td align="center"><img src="<?php echo ("product-images/" . $row["Image"]); ?>" height="150pxx" ; width="150px" /></td>
                                <td><?php echo ($row["Item"]); ?></td>
                                <td><?php echo number_format($row["Price"]) . "$"; ?></td>
                                <td><input type="number" name="arrSL[]" min="1" max="100" value="<?php echo ($_SESSION["GioHang"][$ma]); ?>" style="width: 80%; float: left" />
                                    <input type="submit" value="" style="background-color:#D50000; color:#FFF;width: 20%; float: left; border-radius: 10px" />
                                </td>
                                <th><?php
                                                                                                    $dongia = ($_SESSION["GioHang"][$row["Code"]] * $row["Price"]);
                                                                                                    echo number_format($dongia) . " $</p>"; ?></th>
                                <th><a href=" delete-cart.php?Code=<?php echo ($row["Code"]); ?>" onclick="return confirmAction()">Delete</a></th>
                            </tr>

                    <?php
                                                                                                }
                                                                                                $tongtien = $tongtien + $dongia;
                                                                                                $_SESSION["tongtien"] = $tongtien;
                                                                                            }
                    ?>
                    </tr>
                </table>
            </center>
        </form>
        <table style="float:right">
            <tr>
            <tr>

                <td>Total:<h2><?php echo number_format($tongtien) . "$</p>"; ?></h2>
                </td>
            </tr>
        </table>


        <a href="home.php" style="text-decoration:none; color:#06C; font-weight:bold">Continue shopping</a>
        | <a href="home.php?tem=15">Confirm cart</a>


    <?php
                                include("include/close.php");
                            } else {
                                echo ("Your cart is empty!");
                            }
?>
</body>

</html>