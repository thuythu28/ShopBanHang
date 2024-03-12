<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Shop</title>

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

                        echo "Xin chào ";
                    } else {

                        echo "Xin chào : " . $_SESSION['customer_email'] . "";
                    }


                    ?>
                </a>

                <a href="#">
                Tổng giá: <?php total_price(); ?>, Tổng số mặt hàng: <?php items(); ?>
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

                            echo "<a href='checkout.php' >Tài khoản của tôi</a>";
                        } else {

                            echo "<a href='customer/my_account.php?my_orders'>Tài khoản của tôi</a>";
                        }


                        ?>
                    </li>

                    <li>
                        <a href="cart.php">
                            Đi tới giỏ hàng
                        </a>
                    </li>

                    <li>
                        <?php

                        if (!isset($_SESSION['customer_email'])) {

                            echo "<a href='checkout.php'> Đăng nhập </a>";
                        } else {

                            echo "<a href='logout.php'> Đăng ký </a>";
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

                        <li class="active">
                            <a href="shop.php"> Shop </a>
                        </li>

                        <li>
                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "<a href='checkout.php' >Tài khoản </a>";
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

                    <li>Shop</li>

                </ul><!-- breadcrumb Ends -->



            </div>
            <!--- col-md-12 Ends -->

            <div class="col-md-3">
                <!-- col-md-3 Starts -->

                <?php include("includes/sidebar.php"); ?>

            </div><!-- col-md-3 Ends -->

            <div class="col-md-9">
                <!-- col-md-9 Starts --->

                <?php

                if (!isset($_GET['p_cat'])) {

                    if (!isset($_GET['cat'])) {

                        echo "

<div class='box'>

<h1>Shop</h1>



</div>

";
                    }
                }

                ?>

                <div class="row">
                    <!-- row Starts -->

                    <?php

                    if (!isset($_GET['p_cat'])) {

                        if (!isset($_GET['cat'])) {


                            $per_page = 6;

                            if (isset($_GET['page'])) {

                                $page = $_GET['page'];
                            } else {

                                $page = 1;
                            }

                            $start_from = ($page - 1) * $per_page;

                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

                            $run_products = mysqli_query($con, $get_products);

                            while ($row_products = mysqli_fetch_array($run_products)) {

                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];

                                echo "

<div class='col-md-4 col-sm-6 center-responsive' >

<div class='product' >

<a href='details.php?pro_id=$pro_id' >

<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<h3><a href='details.php?pro_id=$pro_id' >$pro_title</a></h3>

<p class='price' > $pro_price VĐN</p>

<p class='buttons' >

<a href='details.php?pro_id=$pro_id' class='btn btn-default' >Chi tiết</a>

<a href='details.php?pro_id=$pro_id' class='btn btn-primary'>

<i class='fa fa-shopping-cart' ></i> Thêm vào giỏ

</a>



</p>


</div>

</div>

</div>

";
                            }

                    ?>

                </div><!-- row Ends -->

                <center>
                    <!-- center Starts -->

                    <ul class="pagination">
                        <!-- pagination Starts -->


                <?php

                            $query = "select * from products";

                            $result = mysqli_query($con, $query);

                            $total_records = mysqli_num_rows($result);

                            $total_pages = ceil($total_records / $per_page);

                            echo "
<li><a href='shop.php?page=1' >" . 'First Page' . "</a></li>

";

                            for ($i = 1; $i <= $total_pages; $i++) {

                                echo "

<li><a href='shop.php?page=" . $i . "' >" . $i . "</a></li>

";
                            };

                            echo "

<li><a href='shop.php?page=$total_pages' >" . 'Last Page' . "</a></li>

";
                        }
                    }

                ?>



                    </ul><!-- pagination Ends -->

                </center><!-- center Ends -->

                <?php

                getpcatpro();

                getcatpro();

                ?>

            </div><!-- col-md-9 Ends --->


        </div><!-- container Ends -->
    </div><!-- content Ends -->



    <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>