<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Documento sin t&iacute;tulo</title>
    <script language="javascript">
        function validateform() {
            var txtUID = document.getElementById("txtUID");
            var divUIDError = document.getElementById("divUIDError");
            var UID = txtUID.value
            if (UID.length < 6 || UID.length > 12) {
                divUIDError.innerHTML = "Username's length is betweeen 6 and 12 characters";
                txtUID.focus();
                return false;
            } else
                divUIDError.innerHTML = "";


            var txtPWD = document.getElementById("txtPWD");
            var divPWDError = document.getElementById("divPWDError");
            var PWD = txtPWD.value
            if (PWD.length == 0 || PWD.length >= 20) {
                divPWDError.innerHTML = "Password's length must under 21 characters";
                txtPWD.focus();
                return false;
            } else
                divPWDError.innerHTML = "";


            var txtPWD = document.getElementById("txtPWD");
            var txtPWD1 = document.getElementById("txtPWD1");
            var divPWD1Error = document.getElementById("divPWD1Error");
            if (txtPWD1.value != txtPWD.value) {
                divPWD1Error.innerHTML = "Password incorrect";
                txtPWD1.focus();
                return false;
            } else
                divPWDError.innerHTML = "";


            var txtPN = document.getElementById("txtPN");
            var divPNError = document.getElementById("divPNError");
            var Pn = txtPN.value;
            var Standard = /^0[1-9][0-9]{8,8}$/;
            if (!Standard.test(Pn)) {
                divPNError.innerHTML = "Phone number is incorrect!!!";
                txtPN.focus();
                return false;
            } else
                divSdtlError.innerHTML = "";


            //kiem tra email dung dinh dang
            var txtEmail = document.getElementById("txtEmail");
            var divEmailError = document.getElementById("divEmailError");
            var tcEmail = /^[\w]+@[\w]+.[\w]+.?[\w]+$/;
            if (!tcEmail.test(txtEmail.value) || txtEmail.value.length == 0) {
                divEmailError.innerHTML = "email incorrect!!";
                txtEmail.focus();
                return false;
            } else
                divEmailError.innerHTML = "";

        }
    </script>

</head>

<body>
    <div class="signup" style="width: 80%; padding-left: 15%;">
        <fieldset>
            <legend>
                <h3 style="font-size: 50px">Add member</h3>
            </legend>
            <form method="POST" action="signup-processing.php">
                <i class="fa fa-user"></i> Username
                <input placeholder="username" type="text" name="txtUID" id="txtUID" />
                <div id="divUIDError" style="color:#F00"></div>

                <i class="fa fa-key"></i> Password
                <input placeholder="password" type="password" name="txtPWD" id="txtPWD" />
                <div id="divPWDError" style="color:#F00"></div>

                <i class="fa fa-key"></i> Enter password again<br>
                <input placeholder="password" type="password" name="txtPWD" id="txtPWD1" />
                <div id="divPWD1Error" style="color:#F00"></div>

                <i class="fa fa-phone"></i> Phone number
                <input placeholder="0948283729" type="text" name="txtPN" id="txtPN" />
                <div id="divPNError" style="color:#F00"></div>


                <div id="divCityError" style="color:#F00;"></div>

                <i class="fa fa-envelope"></i> Email
                <input placeholder="abc@gmail.com" type="text" name="txtEmail" id="txtEmail" />
                <div id="divEmailError" style="color:#F00"></div>

                <input id="submit" type="submit" value="register" onclick="return validateform()" />
                <center><a href="home.php?tem=17">Already have an account</a></center>

            </form>
        </fieldset>
    </div>


</body>

</html>