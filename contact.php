<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Liên hệ</title>

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
                    Tổng giá: <?php total_price(); ?>, Tổng hàng <?php items(); ?>
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

                            echo "<a href='checkout.php'> Đăng nhập </a>";
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

                        <li class="active">
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

                    <li>Liên hệ</li>

                </ul><!-- breadcrumb Ends -->



            </div>
            <!--- col-md-12 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <?php include("includes/sidebar.php"); ?>

            </div><!-- col-md-3 Ends -->


            <div class="col-md-9">
                <!-- col-md-9 Starts -->

                <div class="box">
                    <!-- box Starts -->

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <center>
                            <!-- center Starts -->

                            <h2>Liên hệ </h2>

                            <p class="text-muted">
                            Nếu bạn có bất kỳ câu hỏi hoặc đóng góp nào, xin vui lòng liên hệ với chúng tôi!

                            </p>

                        </center><!-- center Ends -->

                    </div><!-- box-header Ends -->

                    <form action="contact.php" method="post">
                        <!-- form Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Tên</label>

                            <input type="text" class="form-control" name="name" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Email</label>

                            <input type="text" class="form-control" name="email" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label> Chủ đề </label>

                            <input type="text" class="form-control" name="subject" required>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label>Nội dung </label>

                            <textarea class="form-control" name="message"> </textarea>

                        </div><!-- form-group Ends -->

                        <div class="text-center">
                            <!-- text-center Starts -->

                            <button type="submit" name="submit" class="btn btn-primary">

                                <i class="fa fa-user-md"></i> Gửi tin nhắn

                            </button>

                        </div><!-- text-center Ends -->

                    </form><!-- form Ends -->

                    <?php

                    if (isset($_POST['submit'])) {

                        // Admin receives email through this code

                        $sender_name = $_POST['name'];

                        $sender_email = $_POST['email'];

                        $sender_subject = $_POST['subject'];

                        $sender_message = $_POST['message'];

                        $receiver_email = "1221nhung1221@gmail.com";

                        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                        // Send email to sender through this code

                        $email = $_POST['email'];

                        $subject = "Chào mừng bạn đến trang web của chúng tôi";

                        $msg = "Tôi sẽ trả cho bạn sớm, cảm ơn bạn đã gửi email cho chúng tôi";

                        $from = "1221nhung1221@gmail.com";

                        mail($email, $subject, $msg, $from);

                        echo "<h2 align='center'>Tin nhắn của bạn đã được gởi đi thành công!</h2>";
                    }


                    ?>

                </div><!-- box Ends -->

            </div><!-- col-md-9 Ends -->



        </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>