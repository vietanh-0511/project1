<script language="javascript">
    function kt() {
        var loi = true;
        var matkhau = document.getElementById("pass");
        var txtPass = document.getElementById("txtPass");
        if (document.getElementById("txtPass").value != document.getElementById("pass").value) {
            document.getElementById("errMKC").innerHTML = "<br/>Mật khẩu cũ không chính xác";
            txtPass.focus();
            return;
            loi = (loi && false);
        } else {
            document.getElementById("errMKC").innerHTML = "";
        }
        var pass = document.getElementById("txtMKM");
        var TC = /^[a-z A-Z_0-9-+]{8,20}$/;
        if (document.getElementById("txtMKM").value == "") {
            document.getElementById("errPass").innerHTML = "<br/>Mật khẩu không để trống ";
            txtMKM.focus();
            return;
            loi = (loi && false);
        } else if (!TC.test(txtMKM.value)) {
            document.getElementById("errPass").innerHTML = "<br/>Mật khẩu phải từ 8 đến 20 kí tự ";
            txtMKM.focus();
            return;
            loi = (loi && false);
        } else {
            document.getElementById("errPass").innerHTML = "";
            txtMKM.style.backgroundColor = "white";
        }
        var rePass = document.getElementById("rePass");
        if (document.getElementById("rePass").value != document.getElementById("txtMKM").value) {
            document.getElementById("errrePass").innerHTML = "<br/>Mật khẩu không chính xác";
            rePass.focus();
            return;
            loi = (loi && false);
        } else {
            document.getElementById("errrePass").innerHTML = "";
        }
        if (loi == true) {
            document.getElementById("Form").submit();
        }
    }
</script>
</head>
<center>

    <body>
        <fieldset style="width:50%; border:inset; border-left-width:7px; border-top-width:4px; border-right-width:5px; margin-top:80px; height:auto">
            <legend>
                <font style="color:#F00; text-transform:uppercase">
                    <h3>Change your password</h3>
                </font>
            </legend>
            <form method="post" action="" id="Form">
                <table>
                    <tr>
                        <td><input type="hidden" value="<?php echo ($_SESSION["Code"]); ?>" /></td>
                    </tr>
                    <tr>
                        <td>Account</td>
                        <td><input type="text" value="<?php echo ($_SESSION["UID"]); ?>" disabled="disabled" style="border-color:#CCC" /></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" id="pass" value="<?php echo ($_SESSION["PWD"]); ?>" /><span id="errMK" style="color:#F00; font-size:small"></span></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" id="txtPass" value="" name="OldPass" style="border-color:#CCC" /><span id="errMKC" style="color:#F00; font-size:small"></span></td>
                    </tr>
                    <tr>
                        <td>New password</td>
                        <td><input type="password" id="txtMKM" value="" name="NewPass" style="border-color:#CCC" /><span id="errPass" style="color:#F00; font-size:small"></span></td>
                    </tr>
                    <tr>
                        <td>Confirm new </td>
                        <td><input type="password" id="rePass" value="" style="border-color:#CCC" /><span id="errrePass" style="color:#F00; font-size:small"></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="Update" onClick="kt()" style="border-color:#F00; background-color:#F00; color:#FFF" /></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <?php

        if (isset($_POST["NewPass"])) {
            $matkhaumoi = $_POST["NewPass"];
            include("include/open.php");
            $sqlCP = "UPDATE `members` SET `Password` = '$matkhaumoi' where `Code`={$_SESSION['CustomerCode']}";
            mysqli_query($conn, $sqlCP);
            ?>
            <script language="javascript">
                alert("Your password changed successfully");
            </script>
        <?php
            include("include/close.php");
        }
        ?>
    </body>
</center>