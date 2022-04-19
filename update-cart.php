
<?php
session_start();
if (isset($_POST["arrSL"])) {

    $arrSl = array();
    $arrSl = $_POST["arrSL"];
    $gioHang = array();
    $gioHang = $_SESSION["GioHang"];
    $dem = 0;
    foreach ($gioHang as $Code => $sl) {
        $_SESSION["GioHang"][$Code] = $arrSl[$dem];
        $dem++;
    }
    header("location:home.php?tem=3");
} else {
    header("Location:home.php?tem=3");
}
?>
