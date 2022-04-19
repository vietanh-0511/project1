<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    if (isset($_GET["Code"])) {
        $Code = $_GET["Code"];
        include("include/open.php");
        $sql = "select * from product where Code=$Code";
        $resultpd = mysqli_query($conn, $sql);
        $rowpd = mysqli_fetch_array($resultpd);
        ?>
        <table align="center" style="padding-top:70px" width="70%">
            <tr>
                <td rowspan="4">
                    <img src="<?php echo ("product-images/".$rowpd["Image"]); ?>" width="80%" height="auto" />
                </td>
                <td valign="top"><b>
                        <font size="+2"><?php echo ($rowpd["Item"]); ?></font>
                    </b></td>
            </tr>
            <tr>

                <td><b>
                        <font color="#FF0000" size="+2" face="Arial, Helvetica, sans-serif"><?php echo number_format($rowpd["Price"]) . "$</p>"; ?></font>
                    </b></td>
            </tr>
            <tr>

                <td><?php echo ($rowpd["Description"]); ?></td>
            </tr>
            <tr>

                <td><a href="cart.php?Code=<?php echo ($rowpd["Code"]); ?>" style="text-decoration:none; color:#F00; font-family:Arial, Helvetica, sans-serif">Add to cart</a></td>
            </tr>

        </table>
    <?php
        include("include/close.php");
    } else {
        ?>
        <meta http-equiv="refresh" content="0,home.php" />
    <?php
    }
    ?>
</body>

</html>