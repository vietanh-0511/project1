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

        .text {
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
        <?php
        include("include/open.php");
        $sosp1trang = 16;
        if (isset($_GET["trang"])) {
            $trang = $_GET["trang"];
            settype($trang, "int");
        } else {
            $trang = 1;
        }
        ?>

        <table style="padding-top:30px" width="170px">
            <tr>
                <?php
                $from = ($trang - 1) * $sosp1trang;
                $sql = "select * from product where ItemCode = 7 limit $from, $sosp1trang";
                $result = mysqli_query($conn, $sql);
                $dem = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $dem++
                    ?>
                    <td>
                        <table height="150px" width="250px" align="center">
                            <div class="container-sp">
                                <a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src="<?php echo "product-images/" . $row["Image"]; ?>" style="width:180px; height:170px" class="image" /></a>
                                <a href="?tem=7&Code=<?php echo ($row["Code"]); ?>">
                                    <div class="overlay">
                                        <div class="text"><?php echo ($row["moTa"]); ?></div>
                                    </div>
                                </a>
                            </div>
                            <tr align="center">
                                <td><?php echo ($row["Item"]); ?></td>
                            </tr>
                            <tr align="center">
                                <td>
                                    <font color="#0033FF"><?php echo number_format($row["Price"]) . " $</p>"; ?></font>
                                </td>
                            </tr>
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
        $sql = "select * from product where ItemCode = 7";
        $result1 = mysqli_query($conn, $sql);
        $demrow = mysqli_num_rows($result1);
        $sotrang = ceil($demrow / $sosp1trang);
        for ($t = 1; $t <= $sotrang; $t++) {
            echo "<a href='home.php?tem=2&trang=$t' style='color:blue; text-decoration:none'>$t&nbsp;&nbsp;</a>";
        }
        include("include/close.php");
        ?>

    </body>
</center>

</html>