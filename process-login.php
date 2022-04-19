<?php
    
        include("include/open.php");

        $user = $_GET["email"];
        $pass = $_GET["password"];

        $sql = "select * from members where Username='$user' and Password='$pass'";
        $result = mysqli_query($conn, $sql);
        $dem_so_ban_ghi = mysqli_num_rows($result);
        if ($dem_so_ban_ghi == 1) {
            echo" login sucess";
        } else {
            echo " login failed";
        }
