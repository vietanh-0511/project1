<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION["UID"]) && isset($_SESSION["Code"])) {
        unset($_SESSION["Code"]);
        unset($_SESSION["UID"]);
        include("Ham.php");
        chuyentrang("home.php?tem=2");
    }

    ?>
</body>

</html>