<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <style>
        .container-sp {
            position: relative;
            width: 50%;
            margin: auto
        }


        .image {
            display: block;
            width: 100px;
            height: 125px;
            margin-left: -20px;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 170px;
            width: 180px;
            opacity: 0;
            transition: 0.5s ease;
            background-color: #FFF;

        }

        .container-sp:hover .overlay {
            opacity: .8;
            margin-left: -20px;

        }

        .textmt {
            color: black;
            font-size: small;
            position: absolute;
            top: 5%;
            left: 5%;
            transform: translate(-0.5%, -0.5%);
            -ms-transform: translate(-0.5%, -0.5%);
        }
    </style>
</head>
<center>

    <body>
        <div id="register" style="width:auto; padding:50px">
           <h3 style="font-size: 50px">Members</h3>
            <?php
            $conn = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conn, "project1");
            $strSelectR = "select * from members";
            $resultR = mysqli_query($conn, $strSelectR);
            ?>
            <form>
                <table border="1" bordercolor="#00FFFF" style="width: 100%">
                    <tr>
                        <td>Code</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Phone number</td>
                        <td>Address</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($resultR)) {
                    ?>
                        <tr>
                            <td><?php echo $row["Code"]; ?></td>
                            <td><?php echo $row["Username"]; ?></td>
                            <td><?php echo $row["Password"]; ?></td>
                            <td><?php echo $row["PhoneNumber"]; ?></td>
                            <td><?php echo $row["Address"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><center><a href="admin.php?tem=6&Code=<?php echo $row["Code"]; ?>">
                                    <img src="web-images/edit.png" ; style="height:30px; width:30px;" />
                                </a></center>
                            </td>
                            <td><center><a href="delete.php?Code=<?php echo $row["Code"]; ?>" onclick="return confirm('Delete')">
                                    <img src="web-images/download.png" ; style="height:30px; width:30px" />
                                </a></center>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                mysqli_close($conn);
                ?>
            </form>
        </div>

    </body>
</center>

</html>