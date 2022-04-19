<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>
    <?php
    include("include/open.php");
    if (isset($_SESSION['UID'])) {
        $UID = $_SESSION['UID'];
        $query = "SELECT * FROM members WHERE Username = '$UID'";
        $array_kh = mysqli_query($conn, $query);
        $kh = mysqli_fetch_array($array_kh);
        $ma_kh = $_SESSION['CustomerCode'];
        $query = "SELECT 
                bills.Code,
                DATE_FORMAT(bills.Date, '%d / %m / %Y') as ngay_mua, 
                members.Username as ten_nguoi_dat, 
                members.PhoneNumber as sdt_nguoi_dat, 
                members.Address as dia_chi_nguoi_dat, 
                bills.RecipientName, 
                bills.PhoneNumber, 
                bills.ShippingAddress, 
                bills.TotalCost
                FROM bills 
                JOIN members on bills.CustomerCode = members.Code
                WHERE bills.CustomerCode = $ma_kh
                ";
        // die($query);
        $array_hoa_don = mysqli_query($conn, $query);
    }
    $query = "SELECT * FROM danh_muc";
    $array_danh_muc = mysqli_query($conn, $query);
    if (isset($_GET['ma_danh_muc'])) {
        $ma_danh_muc = $_GET['ma_danh_muc'];
        $query = "SELECT * FROM sp JOIN danh_muc ON sp.danh_muc = danh_muc.ma_danh_muc WHERE sp.danh_muc = $ma_danh_muc ";
    }


    ?>
    <div class="super_container">
        <?php
        // require_once 'template/header.php';
        // require_once 'template/menu.php';
        // require_once 'template/sidebar.php';
        // require_once 'template/home.php';
        // require_once 'template/categories.php';
        ?>
        <h3>Order history</h3>
        <div class="lich_su_giao_dich_table" style="color: black;">
            <table border="1" width="100%">
                <tr>
                    <td>Date</td>
                    <td>Recipient</td>
                    <td>TotalCost</td>
                    <td></td>
                </tr>
                <?php foreach ($array_hoa_don as $bills) : ?>
                    <tr>
                        <td><?php echo $bills['ngay_mua'] ?></td>
                        <td>
                            <?php echo $bills['RecipientName'] ?><br>
                            <?php echo $bills['PhoneNumber'] ?><br>
                            <?php echo $bills['ShippingAddress'] ?><br>
                        </td>
                        <td><?php echo number_format($bills['TotalCost']) . " $" ?></td>
                        <!--<td><a href="view_chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $hoa_don['ma_hoa_don'] ?>">Xem chi tiết đơn hàng</a></td> -->
                    </tr>0
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>