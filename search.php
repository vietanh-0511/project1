<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <style>
        .container-search {
            position: relative;
            width: 50%;
            margin: auto
        }

        .image {
            display: block;
            width: 100px;
            height: 140px;
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
            transition: .5s ease;
            background-color: #FFF;

        }

        .container-search:hover .overlay {
            opacity: 1;
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
        <?php

        if (isset($_POST["search"])) {
            $search = $_POST["txtSearch"];
            include("include/open.php");
            $sql = "select * from product where Item like '%$search%'";
            $query_search = mysqli_query($conn, $sql);
        }
        ?>
        <p>Products found</p>
        <?php
        if ($count = mysqli_num_rows($query_search) == 0) { ?>
            <p>-------------------</p>
        <?php
        } else {
            ?>
            <table style="padding-top: 0px; width: 80%">
                <tr>
                    <?php
                        $dem = 0;
                        while ($rowsearch = mysqli_fetch_array($query_search)) {
                            $dem++;
                            ?>
                        <td>
                            <table height="150px" width="250px" align="center">
                                <div class="container-search">
                                    <a href="?tem=7&Code=<?php echo ($rowsearch["Code"]); ?>">
                                        <img src="<?php echo ("product-images/" . $rowsearch["Image"]); ?>" class="image" style="width:180px; height:170px" /></a>
                                    <a href="?tem=7&Code=<?php echo ($rowsearch["Code"]); ?>">
                                        <div class="overlay">
                                            <div class="textmt"><?php echo ($rowsearch["Description"]); ?></div>
                                        </div>
                                    </a>
                                </div>
                                <tr align="center">
                                    <td><?php echo ($rowsearch["Item"]); ?></td>
                                </tr>
                                <tr align="center">
                                    <td>
                                        <font color="#0033FF"><?php echo number_format($rowsearch["Price"]) . "$"; ?></font>
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
        }
        ?>
                </tr>
            </table>

            <?php

            include("include/close.php");
            ?>
    </body>
</center>

</html>