<?php

session_start();

if (!isset($_SESSION['customer_email'])) {

    echo "<script>window.open('../checkout.php','_self')</script>";
} else {




    include("includes/db.php");

    include("functions/functions.php");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Tài khoản của tôi</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">

        <link href="styles/bootstrap.min.css" rel="stylesheet">

        <link href="styles/style.css" rel="stylesheet">

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>

        <div id="top">
            <!-- top Starts -->

            <div class="container">
                <!-- container Starts -->

                <div class="col-md-6 offer">
                    <!-- col-md-6 offer Starts -->

                    <a href="#" class="btn btn-success btn-sm">
                        <?php

                        if (!isset($_SESSION['customer_email'])) {

                            echo "Xin chào";
                        } else {

                            echo "Xin chào : " . $_SESSION['customer_email'] . "";
                        }


                        ?>
                    </a>

                    <a href="#">
                        Tổng giá: <?php total_price(); ?>, Tổng sản phẩm<?php items(); ?>
                    </a>

                </div><!-- col-md-6 offer Ends -->

                <div class="col-md-6">
                    <!-- col-md-6 Starts -->
                    <ul class="menu">
                        <!-- menu Starts -->

                        <li>
                            <a href="../customer_register.php">
                                Đăng ký
                            </a>
                        </li>

                        <li>
                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='../checkout.php' >Tài khoản</a>";
                            } else {

                                echo "<a href='my_account.php?my_orders'>Tài khoản</a>";
                            }


                            ?>
                        </li>

                        <li>
                            <a href="../cart.php">
                                Giỏ hàng
                            </a>
                        </li>

                        <li>
                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='../checkout.php'> Đăng nhập </a>";
                            } else {

                                echo "<a href='logout.php'> Đăng xuất </a>";
                            }

                            ?>
                        </li>

                    </ul><!-- menu Ends -->

                </div><!-- col-md-6 Ends -->

            </div><!-- container Ends -->
        </div><!-- top Ends -->

        <div class="navbar navbar-default" id="navbar">
            <!-- navbar navbar-default Starts -->
            <div class="container">
                <!-- container Starts -->

                <div class="navbar-header">
                    <!-- navbar-header Starts -->

                    <a class="navbar-brand home" href="../index.php">
                        <!--- navbar navbar-brand home Starts -->

                        <img src="images/ecom-store-logo.png" alt="computerfever logo" class="hidden-xs">
                        <img src="images/ecom-store-logo-mobile.png" alt="computerfever logo" class="visible-xs">

                    </a>
                    <!--- navbar navbar-brand home Ends -->

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                        <span class="sr-only">Chuyển đổi điều hướng  </span>

                        <i class="fa fa-align-justify"></i>

                    </button>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                        <span class="sr-only">Tìm kiếm</span>

                        <i class="fa fa-search"></i>

                    </button>


                </div><!-- navbar-header Ends -->

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- navbar-collapse collapse Starts -->

                    <div class="padding-nav">
                        <!-- padding-nav Starts -->

                        <ul class="nav navbar-nav navbar-left">
                            <!-- nav navbar-nav navbar-left Starts -->

                            <li>
                                <a href="../index.php"> Trang chủ </a>
                            </li>

                            <li>
                                <a href="../shop.php"> Shop </a>
                            </li>

                            <li class="active">
                                <?php

                                if (!isset($_SESSION['customer_email'])) {

                                    echo "<a href='../checkout.php' >Tài khoản</a>";
                                } else {

                                    echo "<a href='my_account.php?my_orders'>Tài khoản</a>";
                                }


                                ?>
                            </li>

                            <li>
                                <a href="../cart.php"> Giỏ hàng </a>
                            </li>




                            <li>
                                <a href="../contact.php"> Liên hệ </a>
                            </li>

                        </ul><!-- nav navbar-nav navbar-left Ends -->

                    </div><!-- padding-nav Ends -->

                    <a class="btn btn-primary navbar-btn right" href="../cart.php">
                        <!-- btn btn-primary navbar-btn right Starts -->

                        <i class="fa fa-shopping-cart"></i>

                        <span> <?php items(); ?> Sản phẩm </span>

                    </a><!-- btn btn-primary navbar-btn right Ends -->

                    <div class="navbar-collapse collapse right">
                        <!-- navbar-collapse collapse right Starts -->

                        <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

                            <span class="sr-only">Tìm kiếm</span>

                            <i class="fa fa-search"></i>

                        </button>

                    </div><!-- navbar-collapse collapse right Ends -->

                    <div class="collapse clearfix" id="search">
                        <!-- collapse clearfix Starts -->

                        <form class="navbar-form" method="get" action="results.php">
                            <!-- navbar-form Starts -->

                            <div class="input-group">
                                <!-- input-group Starts -->

                                <input class="form-control" type="text" placeholder="Search" name="user_query" required>

                                <span class="input-group-btn">
                                    <!-- input-group-btn Starts -->

                                    <button type="submit" value="Search" name="search" class="btn btn-primary">

                                        <i class="fa fa-search"></i>

                                    </button>

                                </span><!-- input-group-btn Ends -->

                            </div><!-- input-group Ends -->

                        </form><!-- navbar-form Ends -->

                    </div><!-- collapse clearfix Ends -->

                </div><!-- navbar-collapse collapse Ends -->

            </div><!-- container Ends -->
        </div><!-- navbar navbar-default Ends -->


        <div id="content">
            <!-- content Starts -->
            <div class="container">
                <!-- container Starts -->

                <div class="col-md-12">
                    <!--- col-md-12 Starts -->

                    <ul class="breadcrumb">
                        <!-- breadcrumb Starts -->

                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>

                        <li>Tài khoản</li>

                    </ul><!-- breadcrumb Ends -->



                </div>
                <!--- col-md-12 Ends -->

                <div class="col-md-12">
                    <!-- col-md-12 Starts -->

                    <?php

                    $c_email = $_SESSION['customer_email'];

                    $get_customer = "select * from customers where customer_email='$c_email'";

                    $run_customer = mysqli_query($con, $get_customer);

                    $row_customer = mysqli_fetch_array($run_customer);

                    $customer_confirm_code = $row_customer['customer_confirm_code'];

                    $c_name = $row_customer['customer_name'];

                    if (!empty($customer_confirm_code)) {

                    ?>

                        <div class="alert alert-danger">
                            <!-- alert alert-danger Starts -->

                         <!-- <strong> Cảnh báo! </strong> Vui lòng xác nhận email của bạn và nếu bạn chưa nhận được email xác nhận của mình, hãy gửi lại email -->

                            <a href="my_account.php?send_email" class="alert-link">

                                Gửi lại email

                            </a>

                        </div><!-- alert alert-danger Ends -->

                    <?php } ?>

                </div><!-- col-md-12 Ends -->

                <div class="col-md-3">
                    <!-- col-md-3 Starts -->

                    <?php include("includes/sidebar.php"); ?>

                </div><!-- col-md-3 Ends -->

                <div class="col-md-9">
                    <!--- col-md-9 Starts -->

                    <div class="box">
                        <!-- box Starts -->

                        <?php

                        if (isset($_GET[$customer_confirm_code])) {

                            $update_customer = "update customers set customer_confirm_code='' where customer_confirm_code='$customer_confirm_code'";

                            $run_confirm = mysqli_query($con, $update_customer);

                            echo "<script>alert('Email của bạn đã được xác nhận')</script>";

                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                        }

                        if (isset($_GET['send_email'])) {

                            $subject = "Thông báo xác nhận email";

                            $from = "1221nhung1221@gmail.com";

                            $message = "

<h2>
Xác nhận Email bởi Ecom.com $c_name
</h2>

<a href='localhost/ecom/customer/my_account.php?$customer_confirm_code'>

Bấm vào đây để xác nhận email

</a>

";

                            $headers = "From: $from \r\n";

                            $headers .= "Content-type: text/html\r\n";

                            mail($c_email, $subject, $message, $headers);

                            echo "<script>alert('Email xác nhận của bạn đã được gửi cho bạn, hãy kiểm tra hộp thư đến của bạn')</script>";

                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                        }



                        if (isset($_GET['my_orders'])) {

                            include("my_orders.php");
                        }

                        if (isset($_GET['pay_offline'])) {

                            include("pay_offline.php");
                        }

                        if (isset($_GET['edit_account'])) {

                            include("edit_account.php");
                        }

                        if (isset($_GET['change_pass'])) {

                            include("change_pass.php");
                        }

                        if (isset($_GET['delete_account'])) {

                            include("delete_account.php");
                        }

                        if (isset($_GET['my_wishlist'])) {

                            include("my_wishlist.php");
                        }

                        if (isset($_GET['delete_wishlist'])) {

                            include("delete_wishlist.php");
                        }

                        ?>

                    </div><!-- box Ends -->


                </div>
                <!--- col-md-9 Ends -->

            </div><!-- container Ends -->
        </div><!-- content Ends -->



        <?php

        

        ?>

        <script src="js/jquery.min.js"> </script>

        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
<?php } ?>