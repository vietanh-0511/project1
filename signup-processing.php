<?php
    include("include/open.php");
    if(isset($_POST["txtUID"]) && isset($_POST["txtPWD"]) && isset($_POST["txtPN"]) && isset($_POST["txtEmail"]))
    $UID = $_POST["txtUID"];
    $PWD = $_POST["txtPWD"];
    $PN = $_POST["txtPN"];
    $Email = $_POST["txtEmail"];
    $insertsu = "insert into members(Username,Password,PhoneNumber,Email) values ('$UID','$PWD ','$PN','$Email')";
    mysqli_query($conn, $insertsu);
	include("Ham.php");
    chuyentrang("home.php?tem=2");
    include("include/close.php");
?>
<script>
alert("aljdnlc!");
</script>