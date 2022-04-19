<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Documento sin t&iacute;tulo</title>
</head>
<script language="javascript">
    //validateform
    function validateform() {
        var txtItem = document.getElementById("txtItem");
        var Item = txtItem.value
        if (Item.length == 0) {
            alert("Enter item's name!!!!");
            txtItem.focus();
            //txtTenabc.style.backgroundColor = "red";
            return false;
        }

        var txtImg = document.getElementById("txtImg");
        var Img = txtImg.value
        if (Img.length == 0) {
            alert("Image missing!!!!");
            txtImg.focus();
            return false;
        }

        var txtPrice = document.getElementById("txtPrice");
        if (txtPrice.value <= 0) {
            alert("Price must be higher than 0!!!!");
            txtPrice.focus();
            return false;
        }

        var cboType = document.getElementById("cboType");
        if (cboType.value == '0') {
            alert("You must pick one!!!!");
            cboType.focus();
            return false;
        }
    }
</script>

<body>
    <?php
    $Code = $_GET["Code"];
    include("include/open.php");
    $strSelect = "select * from bills where Code = $Code";
    //echo $strSelect;
    $result = mysqli_query($conn, $strSelect);
    $row = mysqli_fetch_array($result);

    ?>
    <form action="">
        <fieldset style="width:100%">
            <legend><img src="web-images/edit.png" ; style="width:auto; height:40px" /></legend>
            <table style="width: 100%">
                <tr>
                    <td>Code</td>
                    <td><input type="text" name="txtCode" readonly="readonly" value="<?php echo $row["Code"]; ?>" /></td>
                </tr>

                <tr>
                    <td>CustomerCode</td>
                    <td><input type="text" name="txtItem" id="txtItem" value="<?php echo $row["CustomerCode"]; ?>" /></td>
                </tr>

                <tr>
                    <td>RecipientName</td>
                    <td><input type="text" name="txtPrice" id="txtPrice" value="<?php echo $row["RecipientName"]; ?>" /></td>
                </tr>

                <tr>
                    <td>PhoneNumber</td>
                    <td><input type="text" name="txtImg" id="txtImg" value="<?php echo $row["PhoneNumber"]; ?>" /></td>
                </tr>

                <tr>
                    <td>ShippingAddress</td>
                    <td><input type="text" name="txtImg" id="txtImg" value="<?php echo $row["ShippingAddress"]; ?>" /></td>
                </tr>

                <tr>
                    <td>PaymentMethod</td>
                    <td><input type="text" name="txtImg" id="txtImg" value="<?php echo $row["PaymentMethod"]; ?>" /></td>
                </tr>

                <tr>
                    <td> Date</td>
                    <td><input type="text" name="txtImg" id="txtImg" value="<?php echo $row["Date"]; ?>" /></td>
                </tr>

                <tr>
                    <td>TotalCost</td>
                    <td><input type="text" name="txtImg" id="txtImg" value="<?php echo $row["TotalCost"]; ?>" /></td>
                </tr>

                <tr>
                    <td>OrderStatus</td>
                    <td><select name="cboStatus" id="cboStatus">
                            <option value="0"><?php echo $row["OrderStatus"] ?></option>
                            <?php
                            $strSelectOS = "select * from order-status";
                            $resultSelect = mysqli_query($conn, $strSelectOS);
                            while ($rowSelect = mysqli_fetch_array($resultSelect)) {
                            ?>
                                <option value="<?php echo $rowSelect["SCode"]; ?>"><?php echo $rowSelect["Status"]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"> <input type="submit" name="Up" value="Update" onclick="return validateform()" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
    if (isset($_GET["Up"])) {
        $Code = $_GET["txtCode"];
        $ItemCode = $_GET["cboType"];
        $Item = $_GET["txtItem"];
        $Price = $_GET["txtPrice"];
        $Image = $_GET["txtImg"];
        $strUpdate = "update product set ItemCode= '$ItemCode', 
								    Item= '$Item',
								    Price= '$Price',
								    Image= '$Image' where Code=$Code";
        mysqli_query($conn, $strUpdate);
        header("location:admin-product.php");
    }

    include("include/close.php");
    ?>
</body>

</html>