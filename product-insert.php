<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Documento sin t&iacute;tulo</title>
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
            if (txtPrice.value <= '0') {
                alert("Price must be higher than 0!!!!");
                txtPrice.focus();
                return false;
            }

            var cboType = document.getElementById("cboType");
            if (cboType.value == "0") {
                alert("You must pick type!!!!");
                cboType.focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <form action="test.php">
        <fieldset style="width:100%">
            <legend style="border:#FF9900"><h3 style="font-size: 50px">Add Product</h3></legend>
            <table style="width: 100%">
                <tr>
                    <td>Item</td>
                    <td><input type="text" name="txtItem" id="txtItem" /></td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td><input type="file" name="txtImg" id="txtImg" /></td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td><input type="text" name="txtPrice" id="txtPrice" /></td>
                </tr>

                <tr>
                    <td>Item code</td>
                    <td><select name="cboType" id="cboType">
                            <option value="0">--- Select item type ---</option>
                            <?php
                            include("include/open.php");
                            $strSelectIC = "select *from categorize";
                            $resultSelect = mysqli_query($conn, $strSelectIC);
                            while ($rowSelect = mysqli_fetch_array($resultSelect)) {
                            ?>
                                <option value="<?php echo $rowSelect["Code"]; ?>"><?php echo $rowSelect["Type"]; ?></option>
                            <?php
                            }
                            include("include/close.php");
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="txtDes" id="txtDes"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="ISP" value="Insert" onclick="return validateform()" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
    
</body>

</html>