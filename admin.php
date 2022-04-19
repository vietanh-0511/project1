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
        <div id="logo" style="width: 30%; float: left;font-size: 30px;"><a href="home.php">L0GO</a></div>

        <div id="trs" style="float: right; font-size:30px;padding: 5px;width: 60%;">
            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
                <?php
                if (isset($_SESSION["user"])) {
                    echo " Helo: $user";
                }
                ?>
            </div>
            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
                <?php
                if (isset($_SESSION["user"])) {
                ?>
                    <a href="?tem=6" style="text-decoration:none; color:black"> Đăng xuất</a> &nbsp;|
                <?php
                }
                ?>
            </div>
            <div style="float:right; font-family:Arial, Helvetica, sans-serif">
                <?php
                if (isset($_SESSION["user"])) {
                ?>
                    <a href="?tem=11" style="text-decoration:none; color:black">Đổi mật khẩu|</a>
                <?php
                }
                ?>
            </div>

            <div style="float:right; font-family:Arial, Helvetica, sans-serif">
                <?php
                if (isset($_SESSION["user"])) {
                ?>
                    <a href="?tem=12" style="text-decoration:none; color:#FFF"><img src="../Admin/Anh/585e4bf3cb11b227491c339a.png" height="25px" style="margin-top:20px" /></a>
                <?php
                }
                ?>
            </div>


            <div style="float:right; font-family:Arial, Helvetica, sans-serif; color:#CCC">
                <a href="" style="text-decoration:none; color:black">
                    Welcome to ADMIN PAGE</a>
            </div>
        </div>
    </div>


    <div id="left" style="width: 15%; float: left;z-index: 139;">
        <div class="showmenu" style="float: left; width: 100%; padding:20px 0px 100px">
            <!--show menu ở đây -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <ul>

                    <li id="fruits"><a href="?tem=2">Products</a></li>
                    <ul>
                        <a href="?tem=4">Add product</a>
                    </ul>
                    <li id="nuts"><a href="?tem=5">Members</a></li>
                    <ul>
                        <a href="?tem=1">Add members</a>
                    </ul>
                    <ul>

                    </ul>
                    <li id="drinks"><a href="?tem=7">Bills</a></li>
            </div>
            <span id="menu" style="font-size:30px;cursor:pointer; position: fixed;" onclick="openNav()">&#9776; menu</span>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "290px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>



        </div>

    </div>
    <div id="content" style="width: 70%; float: left;">
        <?php
        if (isset($_GET["tem"])) {
            $tem = $_GET["tem"];
            switch ($tem) {
                case 1:
                    include("member-insert.php");
                    break;
                case 2:
                    include("admin-product.php");
                    break;
                case 3:
                    include("product-update.php");
                    break;
                case 4:
                    include("product-insert.php");
                    break;
                case 5:
                    include("admin-members.php");
                    break;
                case 6:
                    include("member-update.php");
                    break;
                case 7:
                    include("admin-bills.php");
                    break;
                case 8:
                    include("bills-update.php");
                    break;
            }
        } else {
            include("admin-product.php");
        }

        ?>
    </div>
    <div id="right" style="width: 15%; float: left; padding-top: 20px   ;">


    </div>
    <div class="footer"></div>


</body>

</html>