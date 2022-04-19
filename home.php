<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="top" style="height: 50px; width: 100%; border-bottom: black 1px solid;">
        <div id="logo" style="width: 30%; float: left;font-size: 30px;"><a href="home.php">ROYAL FRUITS</a></div>

        <div id="trs" style="float: right; font-size:30px;padding: 5px;width: 60%;">
            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:black">


                <?php
                            if (isset($_SESSION["UID"])) {
                                $user = $_SESSION["UID"];
                            ?>

                            Account:
                            <a href="home.php?tem=12" style="text-decoration: none; color:black">
                            <?php
                                echo " $user!!!";
                            }
                            ?>
                            
                        </a>
            </div>


            <div style="float:right; font-family:Arial, Helvetica, sans-serif">
                <?php
                if (!isset($_SESSION["UID"])) {
                ?>
                    <a href="?tem=17" style="text-decoration:none; color:black">login</a>
                <?php
                }
                ?>
            </div>
            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
                <a href="?tem=3" style="text-decoration:none; color:black">
                    cart</a>
            </div>
            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
                <a href="?tem=16" style="text-decoration:none; color:black;">
                    about </a>
            </div>
            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
                <a href="home.php" style="text-decoration:none; color:black">
                    home </a>
            </div>
        </div>
    </div>


    <div id="left" style="width: 15%; float: left;z-index: 139;">
        <div class="showmenu" style="float: left; width: 100%; padding:20px 0px 100px">
            <!--show menu ở đây -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <ul>
                    <div id="search" style="width: 100%; float: left;padding-bottom: 15px;">
                        <form action="?tem=4" method="post">

                            <input type="text" name="txtSearch" placeholder="search" size="20px" style=" width: 70%;
                                                                                        float: left;
                                                                                        border-radius: 20px;
                                                                                        overflow:parent ;
                                                                                        padding: 10px;" />
                            <input type="submit" value="S" name="search" style=" width: 17%;
                                                                    float: left;
                                                                    border-radius: 20px;
                                                                    padding: 10px;
                                                                    color: black" />

                        </form>
                    </div>
                    <li id="fruits"><a href="?tem=18">Fruits</a></li>
                    <li id="nuts"><a href="?tem=19">Nutrition nuts</a></li>
                    <li id="drinks"><a href="?tem=20">Drinks</a></li>
                    <li id="snacks"><a href="?tem=21">Snacks</a></li>
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "290px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>

            <table>
                <?php
                include("include/open.php");
                $sql = "select * from product where Code=8";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);

                ?>
                <tr align="center">
                    <td>
                <tr align="center">
                    <td style="font-size: 40px;">
                        <strong>Suggestion</strong>
                    </td>
                </tr>
                <tr align="center">
                    <td><a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src="<?php echo "product-images/" . $row["Image"]; ?>" height="120px" /></a></td>
                </tr>
                <tr align="center">
                    <td><?php echo ($row["Item"]); ?></td>
                </tr>
                <tr align="center">
                    <td>
                        <font color="#0033FF"><?php echo number_format($row["Price"]) . "$</p>"; ?></font>
                    </td>
                </tr>
                </td>
                </tr>
                <?php
                include("include/open.php");
                $sql = "select * from product where Code=10";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);

                ?>
                <tr>
                    <td>
                <tr align="center">
                    <td><a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src="<?php echo "product-images/" . $row["Image"]; ?>" height="120px" /></a></td>
                </tr>
                <tr align="center">
                    <td><?php echo ($row["Item"]); ?></td>
                </tr>
                <tr align="center">
                    <td>
                        <font color="#0033FF"><?php echo number_format($row["Price"]) . "$</p>"; ?></font>
                    </td>
                </tr>
                </td>
                </tr>
                <?php
                include("include/open.php");
                $sql = "select * from product where Code=7";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);

                ?>
                <tr>
                    <td>
                <tr align="center">
                    <td><a href="?tem=7&Code=<?php echo ($row["Code"]); ?>"><img src="<?php echo "product-images/" . $row["Image"]; ?>" height="120px" /></a></td>
                </tr>
                <tr align="center">
                    <td><?php echo ($row["Item"]); ?></td>
                </tr>
                <tr align="center">
                    <td>
                        <font color="#0033FF"><?php echo number_format($row["Price"]) . "$</p>"; ?></font>
                    </td>
                </tr>

                </td>
                </tr>
                <?php
                include("include/close.php");
                ?>
            </table>

        </div>

    </div>
    <div id="content" se="width: 70%; float: left;">
        <?php
        if (isset($_GET["tem"])) {
            $tem = $_GET["tem"];
            switch ($tem) {
                case 1:
                    include("sign-up.php");
                    break;
                case 2:
                    include("showproduct.php");
                    break;
                case 3:
                    include("cart-detail.php");
                    break;
                case 4:
                    include("search.php");
                    break;
                case 5:
                    include("credit-card.php");
                    break;
                case 6:
                    include("Logout.php");
                    break;
                case 7:
                    include("product-detail.php");
                    break;
                case 9:
                    include("datHang.php");
                    break;
                case 10:
                    include("formDH.php");
                    break;
                case 11:
                    include("change-pass.php");
                    break;
                case 12:
                    include("U-info.php");
                    break;
                case 14:
                    include("O-history.php");
                    break;
                case 15:
                    include("checkout-form.php");
                    break;
                case 16:
                    include("about.php");
                    break;
                case 17:
                    include("login.php");
                    break;
                case 18:
                    include("fruits.php");
                    break;
                case 19:
                    include("nuts.php");
                    break;
                case 20:
                    include("drinks.php");
                    break;
                case 21:
                    include("snack.php");
                    break;
            }
        } else {
            include("showproduct.php");
        }

        ?>
    </div>
    <div id="right" style="width: 15%; float: left; padding-top: 20px   ;">
        <?php
        include("ads.html");
        ?>

    </div>
    <div class="footer" style="height: 100px; width: 100%;  ">
<?php
include("footer.html");
?>
    </div>


</body>

</html>