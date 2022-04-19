<?php
session_start();
if (isset($_POST["UDU"]) && isset($_POST["Adr"]) && isset($_POST["PN"]) && isset($_POST["Email"] )){
    $code = $_SESSION["CustomerCode"];
    $Address = $_POST["Adr"];
    $PhoneNumber = $_POST["PN"];
    $Email = $_POST["Email"];
    include("include/open.php");
    $strUpdate = "update members set Address ='$Address',PhoneNumber = '$PhoneNumber',Email = '$Email' where Code = $code";
    echo("$strUpdate");
    mysqli_query($conn,$strUpdate);
    include("include/close.php");
    header("Location:home.php?tem=12");
    echo("update success!!!");
} else if (isset($_POST["CP"])) {
    header("Location:home.php?tem=11");
} else if (isset($_POST["OH"])) {
    header("Location:home.php?tem=14");
} else if (isset($_POST["LO"])) {
    $_SESSION["UID"] = null;
    /*xoa bo gio hang
            $_SESSION["arrCode"] = null;
            $_SESSION["arrAmount"] = null;*/
    header("Location:home.php");
}
