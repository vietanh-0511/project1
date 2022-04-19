<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <style>
        .container-sp {
            position: relative;
            width: 50%;
            margin: auto
        }


        .image {
            display: block;
            width: 100px;
            height: 125px;
            margin-left: -20px;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 170px;
            width: 180px;
            opacity: 0;
            transition: 0.5s ease;
            background-color: #FFF;

        }

        .container-sp:hover .overlay {
            opacity: .8;
            margin-left: -20px;

        }

        .textmt {
            color: black;
            font-size: small;
            position: absolute;
            top: 5%;
            left: 5%;
            transform: translate(-0.5%, -0.5%);
            -ms-transform: translate(-0.5%, -0.5%);
        }
    </style>
</head>
<center>

    <body>
        <h3 style="font-size: 50px">Products</h3>
        <?php
        include("include/open.php");
        $sosp1trang = 10;
        if (isset($_GET["trang"])) {
            $trang = $_GET["trang"];
            settype($trang, "int");
        } else {
            $trang = 1;
        }
        ?>
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
                                    <td><center><a href="admin.php?tem=3&Code=<?php echo $row["Code"]; ?>">
                                            <img src="web-images/edit.png" ; style="height:50px; width:50px" />
                                        </a></center>
                                    </td>
                                    <td><center><a href="product-delete.php?Code=<?php echo $row["Code"]; ?>" onclick="return confirm('Delete this product')">
                                            <img src="web-images/download.png" ; style="height:50px; width:50px" />
                                        </a></center>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </td>
                    <?php
                    if ($dem % 4 == 0) {
                    ?>
            </tr>
            <tr>
        <?php
                    }
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
            echo "<a href='admin.php?tem=1&trang=$t' style='color:blue; text-decoration:none'>$t&nbsp;&nbsp;</a>";
        }
        include("include/close.php");
        ?>

    </body>
</center>

</html>