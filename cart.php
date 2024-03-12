<?php

session_start();
include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng </title>

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
                    Tổng giá <?php total_price(); ?>, Tổng sản phẩm <?php items(); ?>
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

                        <li class="active">
                            <a href="cart.php">Giỏ hàng </a>
                        </li>

                        <li>
                            <a href="contact.php">Liên hệ </a>
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

                    <li>Giỏ hàng</li>

                </ul><!-- breadcrumb Ends -->



            </div>
            <!--- col-md-12 Ends -->


            <div class="col-md-9" id="cart">
                <!-- col-md-9 Starts -->

                <div class="box">
                    <!-- box Starts -->

                    <form action="cart.php" method="post" enctype="multipart-form-data">
                        <!-- form Starts -->

                        <h1> Giỏ hàng </h1>

                        <?php

                        $ip_add = getRealUserIp();

                        $select_cart = "select * from cart where ip_add='$ip_add'";

                        $run_cart = mysqli_query($con, $select_cart);

                        $count = mysqli_num_rows($run_cart);

                        ?>

                        <p class="text-muted"> Bạn hiện có <?php echo $count; ?> sản phẩm trong giỏ hàng </p>

                        <div class="table-responsive">
                            <!-- table-responsive Starts -->

                            <table class="table">
                                <!-- table Starts -->

                                <thead>
                                    <!-- thead Starts -->

                                    <tr>

                                        <th colspan="2">Sản phẩm</th>

                                        <th>Số lượng</th>

                                        <th>Đơn giá</th>

                                        <th>Size</th>

                                        <th colspan="1">Xóa</th>

                                        <th colspan="2"> Giá </th>


                                    </tr>

                                </thead><!-- thead Ends -->

                                <tbody>
                                    <!-- tbody Starts -->

                                    <?php

                                    $total = 0;

                                    while ($row_cart = mysqli_fetch_array($run_cart)) {

                                        $pro_id = $row_cart['p_id'];

                                        $pro_size = $row_cart['size'];

                                        $pro_qty = $row_cart['qty'];

                                        $get_products = "select * from products where product_id='$pro_id'";

                                        $run_products = mysqli_query($con, $get_products);

                                        while ($row_products = mysqli_fetch_array($run_products)) {

                                            $product_title = $row_products['product_title'];

                                            $product_img1 = $row_products['product_img1'];

                                            $only_price = $row_products['product_price'];

                                            $sub_total = $row_products['product_price'] * $pro_qty;

                                            $total += $sub_total;

                                    ?>

                                            <tr>
                                                <!-- tr Starts -->

                                                <td>

                                                    <img src="admin_area/product_images/<?php echo $product_img1; ?>">

                                                </td>

                                                <td>

                                                    <a href="#"> <?php echo $product_title; ?> </a>

                                                </td>

                                                <td>
                                                    <?php echo $pro_qty; ?>
                                                </td>

                                                <td>

                                                    <?php echo $only_price; ?> VNĐ

                                                </td>

                                                <td>

                                                    <?php echo $pro_size; ?>

                                                </td>

                                                <td>
                                                    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                                </td>

                                                <td>

                                                    <?php echo $sub_total; ?> VNĐ

                                                </td>

                                            </tr><!-- tr Ends -->

                                    <?php }
                                    } ?>

                                </tbody><!-- tbody Ends -->

                                <tfoot>
                                    <!-- tfoot Starts -->

                                    <tr>

                                        <th colspan="5"> Tổng tiền: </th>

                                        <th colspan="2"> <?php echo $total; ?> VNĐ </th>

                                    </tr>

                                </tfoot><!-- tfoot Ends -->

                            </table><!-- table Ends -->


                        </div><!-- table-responsive Ends -->


                        <div class="box-footer">
                            <!-- box-footer Starts -->

                            <div class="pull-left">
                                <!-- pull-left Starts -->

                                <a href="index.php" class="btn btn-default">

                                    <i class="fa fa-chevron-left"></i> Tiếp tục mua sắm

                                </a>

                            </div><!-- pull-left Ends -->

                            <div class="pull-right">
                                <!-- pull-right Starts -->

                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">

                                    <i class="fa fa-refresh"></i> Cập nhật giỏ hàng

                                </button>

                                <a href="checkout.php" class="btn btn-primary">

                                    Tiến hành đặt hàng <i class="fa fa-chevron-right"></i>

                                </a>

                            </div><!-- pull-right Ends -->

                        </div><!-- box-footer Ends -->

                    </form><!-- form Ends -->


                </div><!-- box Ends -->

                <?php

                function update_cart()
                {

                    global $con;

                    if (isset($_POST['update'])) {

                        foreach ($_POST['remove'] as $remove_id) {


                            $delete_product = "delete from cart where p_id='$remove_id'";

                            $run_delete = mysqli_query($con, $delete_product);

                            if ($run_delete) {
                                echo "<script>window.open('cart.php','_self')</script>";
                            }
                        }
                    }
                }

                echo @$up_cart = update_cart();



                ?>



                <div id="row same-height-row">
                    <!-- row same-height-row Starts -->

                    <div class="col-md-3 col-sm-6">
                        <!-- col-md-3 col-sm-6 Starts -->

                        <div class="box same-height headline">
                            <!-- box same-height headline Starts -->

                            <h3 class="text-center"> Có thể bạn cũng thích những sản phẩm này </h3>

                        </div><!-- box same-height headline Ends -->

                    </div><!-- col-md-3 col-sm-6 Ends -->

                    <?php

                    $get_products = "select * from products order by rand() LIMIT 0,3";

                    $run_products = mysqli_query($con, $get_products);

                    while ($row_products = mysqli_fetch_array($run_products)) {

                        $pro_id = $row_products['product_id'];

                        $pro_title = $row_products['product_title'];

                        $pro_price = $row_products['product_price'];

                        $pro_img1 = $row_products['product_img1'];

                        echo "

<div class='center-responsive col-md-3 col-sm-6 ' >

<div class='product same-height' >

<a href='details.php?pro_id=$pro_id' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<h3><a href='details.php?pro_id=$pro_id' >$pro_title</a></h3>

<p class='price' > $pro_price VNĐ</p>


</div>


</div>

</div>

";
                    }




                    ?>


                </div><!-- row same-height-row Ends -->


            </div><!-- col-md-9 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <div class="box" id="order-summary">
                    <!-- box Starts -->

                    <div class="box-header">
                        <!-- box-header Starts -->

                        <h3>Đơn hàng</h3>

                    </div><!-- box-header Ends -->

                    

                    <div class="table-responsive">
                        <!-- table-responsive Starts -->

                        <table class="table">
                            <!-- table Starts -->

                            <tbody>
                                <!-- tbody Starts -->

                                <tr>

                                    <td> Tổng giá</td>

                                    <th>  <?php echo $total; ?>VNĐ </th>

                                </tr>

                                <tr>

                                    <td>Phí vận chuyển</td>

                                    <th>VNĐ</th>

                                </tr>

                                <tr>

                                    <td>Thuế</td>

                                    <th>  VNĐ</th>

                                </tr>

                                <tr class="total">

                                    <td>Tổng</td>

                                    <th><?php echo $total; ?> VNĐ</th>

                                </tr>

                            </tbody><!-- tbody Ends -->

                        </table><!-- table Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- box Ends -->

            </div><!-- col-md-3 Ends -->

        </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>