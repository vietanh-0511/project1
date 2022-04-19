<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Documento sin t&iacute;tulo</title>
    <style type="text/css">

    </style>
</head>

<body>
    <center>
        <div class="container">

            <!-- product -->
            
            <table style="padding-top:30px" width="100%">
                <tr>
                    <?php
                    $from = ($trang - 1) * $sosp1trang;
                    $sql = "select * from product limit $from, $sosp1trang";
                    $result = mysqli_query($conn, $sql);
                    $dem = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $dem++
                    ?>
                        <td>
                            <table border="1" bordercolor="#FF9900" style="width: 100%">
                                <tr>
                                    <td>Code</td>
                                    <td>Item code</td>
                                    <td>Item</td>
                                    <td>Image</td>
                                    <td>Price</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["Code"]; ?></td>
                                        <td><?php echo $row["ItemCode"]; ?></td>
                                        <td><?php echo $row["Item"]; ?></td>
                                        <td>
                                            <center><img src="<?php echo "product-images/" . $row["Image"]; ?>" style="width:150px; height:150px;" />
                                            </center>
                                        </td>
                                        <td><?php echo $row["Price"]; ?>$</td>
                                        <td>
                                            <center><a href="admin.php?tem=3&Code=<?php echo $row["Code"]; ?>">
                                                    <img src="web-images/edit.png" ; style="height:50px; width:50px" />
                                                </a></center>
                                        </td>
                                        <td>
                                            <center><a href="product-delete.php?Code=<?php echo $row["Code"]; ?>" onclick="return confirm('Delete this product')">
                                                    <img src="web-images/download.png" ; style="height:50px; width:50px" />
                                                </a></center>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                            
                </tr>
                <tr>
            <?php
                        
                    }
            ?>
                </tr>
            </table>

            <?php
            $sql = "select * from product";
            $result1 = mysqli_query($conn, $sql);
            $demrow = mysqli_num_rows($result1);
            $sotrang = ceil($demrow / $sosp1trang);
            for ($t = 1; $t <= $sotrang; $t++) {
                echo "<a href='home.php?tem=2&trang=$t' style='color:blue; text-decoration:none'>$t&nbsp;&nbsp;</a>";
            }
            include("include/close.php");
            ?>


            <div id="product" style="width:auto; padding:50px">
                <a href="product-insert.php"><img src="Web-images/icons8-add-90.png" ; style="height:20px; width:auto" /></a>

            </div>

            <!-- register -->
            <div id="register" style="width:auto; padding:50px">
                <a href="customer-r-insert.php"><img src="Web-images/icons8-add-user-male-100.png" ; style="height:20px; width:auto" /></a>
                <?php
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "project1");
                $strSelectR = "select * from registered";
                $resultR = mysqli_query($conn, $strSelectR);
                ?>
                <form>
                    <table border="1" bordercolor="#00FFFF">
                        <tr>
                            <td>Code</td>
                            <td>Username</td>
                            <td>Password</td>
                            <td>Phone number</td>
                            <td>Email</td>
                            <td></td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($resultR)) {
                        ?>
                            <tr>
                                <td><?php echo $row["Code"]; ?></td>
                                <td><?php echo $row["Username"]; ?></td>
                                <td><?php echo $row["Password"]; ?></td>
                                <td><?php echo $row["PhoneNumber"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><a href="customer-r-delete.php?Code=<?php echo $row["Code"]; ?>" onclick="return confirm('Delete')">
                                        <img src="Web-images/download.png" ; style="height:20px; width:20px; padding:20px" />
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    mysqli_close($conn);
                    ?>
                </form>
            </div>

            <!-- customer -->
            <div id="customer" style="width:auto;padding:50px">
                <a href="#customer"><img src="Web-images/icons8-user-male-128.png" ; style="height:20px; width:auto" /></a>
                <?php
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "project1");
                $strSelectC = "select * from customers";
                $resultC = mysqli_query($conn, $strSelectC);
                ?>
                <form>
                    <table border="1" bordercolor="#C9BFE8">
                        <tr>
                            <td>Code</td>
                            <td>Bill code</td>
                            <td>Reiceiver name</td>
                            <td>Reiceiver number</td>
                            <td>Address</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($resultC)) {
                        ?>
                            <tr>
                                <td><?php echo $row["Code"]; ?></td>
                                <td><?php echo $row["BillCode"]; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Phonenumber"]; ?></td>
                                <td><?php echo $row["Address"]; ?></td>
                                <td><a href="customer-c-edit.php?Code=<?php echo $row["Code"]; ?>">
                                        <img src="web-images/edit.png" ; style="height:20px; width:20px; padding:20px" />
                                    </a>
                                </td>
                                <td><a href="customer-c-delete.php?Code=<?php echo $row["Code"]; ?>" onclick="return confirm('Delete')">
                                        <img src="Web-images/download.png" ; style="height:20px; width:20px; padding:20px " />
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    mysqli_close($conn);
                    ?>
                </form>
            </div>

        </div>
    </center>
</body>

</html>