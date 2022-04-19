<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Documento sin t&iacute;tulo</title>
</head>
<script language="javascript">
    //validateform
    function validateform() {
        var txtBC = document.getElementById("txtBC");
        var BC = txtBC.value;
        if (BC.length == 0) {
            alert("No bill code :?");
            txtBC.focus();
            //txtTenabc.style.backgroundColor = "red";
            return false;
        }

        var txtRN = document.getElementById("txtRN");
        var Name = txtRN.value;
        if (Name.length == 0) {
            alert("Fill customer's name first!!");
            txtRN.focus();
            return false;
        }

        var txtPN = document.getElementById("txtPN");
        var Pn = txtPN.value;
        var Standard = /^[0-9]+$/;
        if (!Standard.test(Pn)) {
            alert("Phone number is wrong!!!");
            txtPN.focus();
            return false;
        }
        if (Pn.length != 10) {
            alert("Phone number is wrong!!!");
            txtPN.focus();
            return false;
        }

        var txtAddress = document.getElementById("txtAddress");
        if (txtAddress.value.length == 0) {
            alert("Fill the blank!!!!");
            txtAddress.focus();
            return false;
        }



    }
</script>


<body>
    <?php
    $MCode = $_GET["Code"];
    include("include/open.php");
    $strSelect = "select * from members where Code = $MCode";
    //echo $strSelect;
    $result = mysqli_query($conn, $strSelect);
    $row = mysqli_fetch_array($result);

    ?>
    <form action="">
        <fieldset style="width:400px">
            <legend><img src="project-images/edit.png" ; style="width:auto; height:40px" /></legend>
            <table>
                <tr>
                    <td>Code</td>
                    <td><input type="text" name="MCode" readonly="readonly" value="<?php echo $row["Code"]; ?>" /></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="USN" id="txtBC" value="<?php echo $row["Username"]; ?>" /></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="text" name="Pss" id="txtRN" value="<?php echo $row["Password"]; ?>" /></td>
                </tr>

                <tr>
                    <td>Phonenumber</td>
                    <td><input type="text" name="Pn" id="txtPN" value="<?php echo $row["PhoneNumber"]; ?>" /></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input type="text" name="txtAddress" id="txtAddress" value="<?php echo $row["Address"]; ?>" /></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name="Email" id="Email" value="<?php echo $row["Email"]; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="UPM" value="Update" onclick="return validateform()" /></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    if (isset($_GET["UPM"])) {
        $Code = $_GET["txtCode"];
        $user = $_GET["USN"];
        $pass = $_GET["Pss"];
        $Pn = $_GET["Pn"];
        $Add = $_GET["txtAddress"];
        $Email = $_GET["Email"];
        $strUpdate = "update members set Username='$user', 
								 	Password= '$pass', 
								 	PhoneNumber= '$Pn',
                                    Address= '$Add',
                                    Email = '$Email'  where Code = $Code";
        mysqli_query($conn, $strUpdate);
        header("Location:admin-members.php");
    }
    include("include/close.php")
    ?>
</body>

</html>