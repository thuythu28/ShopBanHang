<?php

session_start();

if (!isset($_SESSION['customer_email'])) {

    echo "<script>window.open('../checkout.php','_self')</script>";
} else {

    include("includes/db.php");

    include("functions/functions.php");

    if (isset($_GET['order_id'])) {

        $order_id = $_GET['order_id'];
    }

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Tài khoản của tôi </title>

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
                        Tổng giá: <?php total_price(); ?>, Tổng sản phẩm <?php items(); ?>
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
                                <a href="../contact.php">Liên hệ </a>
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

                            <span class="sr-only">Tim kiếm</span>

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

                        <li>Tài khoản của tôi</li>

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

                        <h1 align="center"> Vui lòng xác nhận thanh toán của bạn </h1>


                        <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
                            <!--- form Starts -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label>Hóa đơn</label>

                                <input type="text" class="form-control" name="invoice_no" required>

                            </div><!-- form-group Ends -->


                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label>Số tiền  gửi</label>

                                <input type="text" class="form-control" name="amount_sent" required>

                            </div><!-- form-group Ends -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label>Loại giao dịch:</label>

                                <select name="payment_mode" class="form-control">
                                    <!-- select Starts -->

                                    <option disabled>Loại giao dịch</option>
                                    <option>Vietcombank</option>
                                    <option>BIDV</option>
                                    <option>TPBank</option>


                                </select><!-- select Ends -->

                            </div><!-- form-group Ends -->

                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label>Mã giao dịch</label>

                                <input type="text" class="form-control" name="ref_no" required>

                            </div><!-- form-group Ends -->


                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label>Số tài khoản:</label>

                                <input type="text" class="form-control" name="code" required>

                            </div><!-- form-group Ends -->


                            <div class="form-group">
                                <!-- form-group Starts -->

                                <label>Ngày thanh toán:</label>

                                <input type="text" class="form-control" name="date" required>

                            </div><!-- form-group Ends -->

                            <div class="text-center">
                                <!-- text-center Starts -->

                                <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">

                                    <i class="fa fa-user-md"></i> Xác nhận thanh toán

                                </button>

                            </div><!-- text-center Ends -->

                        </form>
                        <!--- form Ends -->

                        <?php

                        if (isset($_POST['confirm_payment'])) {

                            $update_id = $_GET['update_id'];

                            $invoice_no = $_POST['invoice_no'];

                            $amount = $_POST['amount_sent'];

                            $payment_mode = $_POST['payment_mode'];

                            $ref_no = $_POST['ref_no'];

                            $code = $_POST['code'];

                            $payment_date = $_POST['date'];

                            $complete = "Complete";

                            $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

                            $run_payment = mysqli_query($con, $insert_payment);

                            $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

                            $run_customer_order = mysqli_query($con, $update_customer_order);

                            $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

                            $run_pending_order = mysqli_query($con, $update_pending_order);

                            if ($run_pending_order) {

                                echo "<script>alert('Thanh toán của bạn đã được nhận')</script>";

                                echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            }
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

<?php } ?>