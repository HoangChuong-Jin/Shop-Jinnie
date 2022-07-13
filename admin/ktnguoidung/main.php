<?php include("../view/top.php"); ?>
<div class="page-content p-3" id="content">
  <!-- Toggle button -->
  <!-- Toggle button -->
	&nbsp;&nbsp;&nbsp;&nbsp;<button id="sidebarCollapse" type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">
		<i class="fa fa-bars mr-1" style="color: #FD5961;"></i>
	</button>
    <div class="container-fluid" id="top">
        <div>
            <h2 class="display-4 slideX" style="font-weight: bold;">Trang quản trị shop Jinnie.</h2>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mb-3" style="max-width: 22rem;">
                        <div class="card-body text-white bg-info">
                            <img style="float: left" src="../public/images/shopping.png" alt="">
                            <h1 class="card-text text-right"><?php echo $demdh;?></h1>
                            <h5 class="card-title text-right">Đơn hàng mới!</h5>
                        </div>
                        <div class="card-footer text-right bg-transparent border-info"><a href="../qldonhang/index.php?opttrangthai=0&action=timkiem">Xem chi tiết<i class="bi bi-chevron-double-right"></i></a></div>
                    </div>
                </div>
                <div class="col-sm-4">          
                    <div class="card mb-3" style="max-width: 22rem;">
                    <div class="card-body text-white" style="background-color: #FF3BF1;">
                        <img style="float: left" src="../public/images/sp.png" width="55" alt="">
                        <h1 class="card-text text-right"><?php echo $demsp;?></h1>
                        <h5 class="card-title text-right">Sản phẩm</h5>
                    </div>
                    <div class="card-footer text-right bg-transparent border-danger"><a href="../qlsanpham/index.php">Xem chi tiết<i class="bi bi-chevron-double-right"></i></a></div>
                    </div>
                </div>  

                <div class="col-sm-4">          
                    <div class="card mb-3" style="max-width: 22rem;">
                    <div class="card-body text-white" style="background-color: #265AA3;">
                        <img style="float: left" src="../public/images/ht.png" width="70" alt="">
                        <h1 class="card-text text-right"><?php echo $demsphh;?></h1>
                        <h5 class="card-title text-right">Sản phẩm hết hàng</h5>
                    </div>
                    <div class="card-footer text-right bg-transparent border-danger"><a href="../qlsanpham/index.php?action=xemhh">Xem chi tiết<i class="bi bi-chevron-double-right"></i></a></div>
                    </div>
                </div> 

                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mb-3" style="max-width: 22rem;">
                        <div class="card-body text-white" style="background-color: #EF5F1F;">
                            <img style="float: left" src="../public/images/tn.png" width="60" alt="">
                            <h1 class="card-text text-right"><?php echo $thunhap;?>.đ</h1>
                            <h5 class="card-title text-right">Doanh thu</h5>
                        </div>
                        <div class="card-footer text-right bg-transparent border-info"><a href="../qldonhang/index.php?opttrangthai=3&action=timkiem">Xem chi tiết<i class="bi bi-chevron-double-right"></i></a></div>
                    </div>
                </div>
                <div class="col-sm-4">          
                    <img src="../public/images/muasam.gif" width="400" style="padding-right: 5%!important;">
                </div>  

                 <div class="col-sm-4">
                    <div class="card mb-3" style="max-width: 22rem;">
                        <div class="card-body text-white bg-warning ">
                            <img style="float: left" src="../public/images/kh.png" width="60" alt="">
                            <h1 class="card-text text-right"><?php echo $demnd;?></h1>
                            <h5 class="card-title text-right">Khách hàng</h5>
                        </div>
                        <?php
                        if($_SESSION["nguoidung"]["loai"]==1)
                            {
                        ?>
                        <div class="card-footer text-right bg-transparent border-warning"><a href="../qlnguoidung/index.php?action=l3">Xem chi tiết<i class="bi bi-chevron-double-right"></i></a></div>
                        <?php 
                            }else{
                        ?>
                        <div class="card-footer text-right bg-transparent border-warning">Xem chi tiết<i class="bi bi-chevron-double-right"></i></div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
  
    <div class=""></div>
        
    </div>

</div>
<?php include("../view/bottom.php"); ?>

