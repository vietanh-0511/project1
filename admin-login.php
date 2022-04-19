<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .btnsignup {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
            /* remove underline from anchors */
        }

        .botlogin a:hover {
            background: pink;
            border: black 1px solid;
            color: black
        }
    </style>

</head>

<body>



    <div class="login" style="width: 80%; padding-left: 15%;">
        <div class="login-form">
            <form method="POST" action="">
                <div class="col">
                    <div class="hide-md-lg" style="text-align: center;">
                        <p style="font-size: 40px; font-weight: bolder;">Login</p>
                    </div>
                    <?php
                    if (isset($_GET["err"])) {
                        echo ("<center><font color='#FF0000' size='+1'>Username or password incorrect</font></center>");
                    }
                    ?>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>


    </div>

    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        include("include/open.php");

        $user = $_POST["username"];
        $pass = $_POST["password"];

        $sql = "select * from members where Username='$user' and Password='$pass'";
        $result = mysqli_query($conn, $sql);
        $demrow = mysqli_num_rows($result);
        if ($demrow > 0) {
            $row = mysqli_fetch_array($result);

            $_SESSION["UID"] = $user;
            $_SESSION["PWD"] = $pass;
            $_SESSION["CustomerCode"] = $row["Code"];
            include("Ham.php");
            chuyentrang("home.php?tem=2");
        } else {
            include("Ham.php");
            chuyentrang("home.php?tem=17&err=0");
        }

        include("include/close.php");
    }   ?>
</body>

</html>