<?php

if(!isset($_SESSION['admin_email'])){
    echo "<script>windw.open('login.php','_self')</script>";
}

else{
     

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm danh mục sản phẩm

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Thêm danh mục sản phẩm

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" ><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Tiêu đề danh mục sản phẩm</label>

<div class="col-md-6" >

<input type="text" name="p_cat_title" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Chi tiết danh mục sản phẩm</label>

<div class="col-md-6" >

<textarea type="text" name="p_cat_desc" class="form-control" >

</textarea>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Thêm" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){
    $p_cat_title = $_POST['p_cat_title'];
    
    $p_cat_desc = $_POST['p_cat_desc'];
    
    $insert_p_cat = "insert into product_categories (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc')";
    
    $run_p_cat = mysqli_query ($con,$insert_p_cat);
    
    if ($run_p_cat){
        
         echo "<script>alert('Danh mục sản phẩm đã được thêm thành công!!!')</script>";
    
        echo "<script>window.open('index.php?view_p_cats','_self')</script>";
    
    }
}


?>



<?php } ?>