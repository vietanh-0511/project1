<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <style>
        * {
            box-sizing: border-box;
        }




        .checkout-form {
            background-color: none;
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }



        .checkout {
            background-color: none;
            padding: 5px 20px 15px 20px;
            border-radius: 3px;
            float: left;
            width: 50%;
            border-right: aqua 1px solid;
            border-radius: 10px
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;

        }

        .icon-checkout {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btninfo {
            background-color: pink;
            color: white;
            padding: 10px;
            margin: 10px 0;
            border: none;
            width: 100%;
            cursor: pointer;
            font-size: 10px;
        }

        .btninfo:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        #tdstyle {
            height: 100px;
            padding: 15px
        }

        h3 {
            background: #ccc;
            line-height: 30px;
            padding: 10px;
            border-radius: 12px
        }
    </style>

    <script>
        function validatecheckform() {
            var txtName = document.getElementById("fname");
            var divTenError = document.getElementById("divTenError");
            var Name = txtName.value;
            if (Name.length == 0) {
                divTenError.innerHTML = "Enter your name!";
                txtName.focus();
                return false;
            } else
                divTenError.innerHTML = "";

            var Email = document.getElementById("email");
            var divMailError = document.getElementById("divMailError");
            var tcEmail = /^[\w]+@[\w]+.[\w]+.?[\w]+$/;
            if (!tcEmail.test(Email.value) || Email.value.length == 0) {
                divMailError.innerHTML = "email incorrect";
                Email.focus();
                return false;
            } else
                divMailError.innerHTML = "";

            var txtPn = document.getElementById("pn");
            var divPnError = document.getElementById("divPnError");
            var Pn = txtPn.value;
            var Standard = /^[0-9]+$/;
            if (!Standard.test(Pn) || Pn.length != 10) {
                divPnError.innerHTML = "Phone number is wrong!!!";
                txtPn.focus();
                return false;
            } else
                divPnError.innerHTML = "";

            var cboCity = document.getElementById("cboCity");
            var divCityError = document.getElementById("divCityError");
            if (cboCity.value == 0) {
                divCityError.innerHTML = "Choose your city";
                cboCity.focus();
                return false;
            } else
                divCityError.innerHTML = "";



            var txtAddress = document.getElementById("adr");
            var divAdrError = document.getElementById("divAdrError");
            if (txtAddress.value.length == 0) {
                divAdrError.innerHTML = "Enter your address!!!!";
                txtAddress.focus();
                return false;
            } else
                divAdrError.innerHTML = "";

        }
    </script>
</head>

<body>
    <div class="checkout-form" style="padding-top: 20px; width: 100%;">
        <div class="checkout">
            <form method="POST" action="processing.php">
                <div class="info">
                    <h3>Billing Address</h3>
                    <i class="fa fa-user"></i> Full Name
                    <input type="text" id="fname" name="fname" placeholder="John M. Doe">
                    <div id="divTenError" style="color:#F00;"></div>

                    <i class="fa fa-envelope"></i> Email
                    <input type="text" id="email" name="email" placeholder="john@example.com">
                    <div id="divMailError" style="color:#F00;"></div>


                    <i class="fa fa-phone"></i> Phone number
                    <input type="text" id="pn" name="pn" placeholder="0123456789">
                    <div id="divPnError" style="color:#F00;"></div>

                    <i class="fa fa-building-o"></i> City<br>
                    <select name="cboCity" id="cboCity" style="width: 100%; height: 30px">
                        <option value="0" style="color: lightgrey">--choose your city--</option>
                        <option value="1">Ha Noi</option>
                        <option value="2">Ho Chi Minh</option>
                    </select>
                    <div id="divCityError" style="color:#F00;"></div><br><br>

                    <i class="fa fa-address-card-o"></i> Address
                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                    <div id="divAdrError" style="color:#F00;"></div>

                    <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
                </div>

                <h3 style="border:plum 1px solid">Payment</h3>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style=" width: 100%; background: Yellow; font-size: 20px; line-height: 25px">
                                    Cash on delivery
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Please have your money ready by the day of delivery. Thankyou!!<br><br>
                                <input type="submit" name="COD" value="Place order" class="btninfo" onclick="return validatecheckform()" style="background-color: plum" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="cart" style="width: 50%; float: left; border-left:aqua 1px solid; border-radius: 10px">
            <div class="panel-heading">
                <h3>Review Order <div class="pull-right">
                        <small><a class="afix-1" href="?tem=3">Edit Cart</a></small></div>
                </h3>
            </div>
            <div class="panel-body">
                <?php
                if (isset($_SESSION["GioHang"])) {
                    include("include/open.php");
                    $sql = "select * from product";
                    $result = mysqli_query($conn, $sql);
                    $tongtien = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        $dongia = 0;
                        $ma = $row["Code"];
                        if (isset($_SESSION["GioHang"][$ma])) {
                ?>


                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img src="<?php echo ("product-images/" . $row["Image"]); ?>" height="100px" ; width="100px" />
                                </div>
                                <div class="col-sm-6 col-xs-6" style="line-height: 50px">
                                    <div class="col-xs-12"><?php echo ($row["Item"]); ?></div>
                                    <div class="col-xs-12"><small>Quantity:<?php echo ($_SESSION["GioHang"][$ma]); ?></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right" style="line-height: 100px">
                                    <?php $dongia = ($_SESSION["GioHang"][$row["Code"]] * $row["Price"]);
                                    echo number_format($dongia) . " $</p>"; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <hr />
                            </div>
                    <?php
                        }
                        $tongtien = $tongtien + $dongia;
                        $_SESSION["tongtien"] = $tongtien;
                    }
                    ?>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <small>Shipping</small>
                            <div class="pull-right"><span>-</span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <hr />
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <strong>Order Total</strong>
                            <div class="pull-right"><span><?php echo number_format($tongtien) . "$</p>"; ?></span></div>
                        </div>
                    </div>
                <?php
                } else {
                    echo ("Your cart is empty!");
                }
                ?>
            </div>

        </div>
    </div>


</body>

</html>