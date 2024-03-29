<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

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

                        echo "Xin chào: " . $_SESSION['customer_email'] . "";
                    }


                    ?>

                </a>

                <a href="#">
                    Tổng giá: <?php total_price(); ?>, Tổng sản phẩm <?php items(); ?>
                </a>

            </div><!-- col-md-6 offer Ends -->

            <div class="col-md-6">
                <!-- col-md-6 Starts -->
                <ul class="menu">
                    <!-- menu Starts -->

                    <li>
                        <a href="customer_register.php">
                            Đăng ký
                        </a>
                    </li>

                    <li>
                        <?php

                        if (!isset($_SESSION['customer_email'])) {

                            echo "<a href='checkout.php' >Tài khoản</a>";
                        } else {

                            echo "<a href='customer/my_account.php?my_orders'>Tài khoản</a>";
                        }


                        ?>
                    </li>

                    <li>
                        <a href="cart.php">
                            Giỏ hàng
                        </a>
                    </li>

                    <li>
                        <?php

                        if (!isset($_SESSION['customer_email'])) {

                            echo "<a href='checkout.php'>Đăng nhập </a>";
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

                <a class="navbar-brand home" href="index.php">
                    <!--- navbar navbar-brand home Starts -->

                    <img src="images/logo1.png" alt="ecom logo" class="hidden-xs" width="50px" height="50px">
                    <img src="images/logo1.png" alt="ecom logo" class="visible-xs" width="50px" height="50px">

                </a>
                <!--- navbar navbar-brand home Ends -->

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Chuyển đổi điều hướng </span>

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
                            <a href="index.php"> Trang chủ </a>
                        </li>

                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>

                        <li>
                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='checkout.php' >Tài khoản</a>";
                            } else {

                                echo "<a href='customer/my_account.php?my_orders'>Tài khoản</a>";
                            }


                            ?>
                        </li>

                        <li>
                            <a href="cart.php"> Giỏ hàng </a>
                        </li>

                        <li>
                            <a href="contact.php"> Liên hệ </a>
                        </li>

                    </ul><!-- nav navbar-nav navbar-left Ends -->

                </div><!-- padding-nav Ends -->

                <a class="btn btn-primary navbar-btn right" href="cart.php">
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

                    <li>Đăng ký</li>

                </ul><!-- breadcrumb Ends -->



            </div>
            <!--- col-md-12 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->



            </div><!-- col-md-3 Ends -->

            <div class="col-md-10">
                <!-- col-md-12 Starts -->

                <div class="box">
                    <!-- box Starts -->

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <center>

                            <h3>Nhập email của bạn bên dưới </h3>

                        </center>

                    </div><!-- box-header Ends -->

                    <div align="center">
                        <!-- center div Starts -->

                        <form action="" method="post">
                            <!-- form Starts -->

                            <input type="email" class="form-control" name="c_email" placeholder="Nhập email của bạn">

                            <br>

                            <input type="submit" name="forgot_pass" class="btn btn-primary" value="Gửi mật khẩu của tôi">

                        </form><!-- form Ends -->

                    </div><!-- center div Ends -->

                </div><!-- box Ends -->

            </div><!-- col-md-10 Ends -->


        </div><!-- container Ends -->
    </div><!-- content Ends -->


    <?php

    if (isset($_POST['forgot_pass'])) {

        $c_email = $_POST['c_email'];

        $sel_c = "select * from customers where customer_email='$c_email'";

        $run_c = mysqli_query($con, $sel_c);

        $count_c = mysqli_num_rows($run_c);

        $row_c = mysqli_fetch_array($run_c);

        $c_name = $row_c['customer_name'];

        $c_pass = $row_c['customer_pass'];

        if ($count_c == 0) {

            echo "<script> alert('Xin lỗi, chúng tôi không tìm thấy email của bạn') </script>";

            exit();
        } else {

            $message = "

<h1 align='center'> Chúng tôi đã gửi mật khẩu cho bạn </h1>

<h2 align='center'> Dear $c_name </h2>

<h3 align='center'>

Mật khẩu của bạn là : <span> <b>$c_pass</b> </span>

</h3>

<h3 align='center'>

<a href='localhost/ecom/checkout.php'>
 
Bấm vào đây để đăng nhập tài khoản của bạn 
 
</a>

</h3>

";

            $from = "1221nhung1221@gmail.com";

            $subject = "Mật khẩu của bạn";

            $headers = "Từ: $from\r\n";

            $headers .= "Content-type: text/html\r\n";

            mail($c_email, $subject, $message, $headers);

            echo "<script> alert('Mật khẩu của bạn đã được gửi cho bạn, hãy kiểm tra hộp thư đến của bạn ') </script>";

            echo "<script>window.open('checkout.php','_self')</script>";
        }
    }

    ?>



    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>