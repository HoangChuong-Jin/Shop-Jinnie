<?php include("view/top.php"); ?>

<div class="container">  
  <h2 class="slidee" style="padding-top: 5px;">Các sản phẩm <?php echo $tenloai; ?></h2>  
  <div class="row"> 
    <!-- Các thương hiệu -->
    <?php
    if($sanpham != null){
      foreach($sanpham as $m):  
      ?>
      <div id="card" class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 px-2 p-2 slidee">
        <div class="card h-100">
          <div class="card p-2">
            <a href="index.php?action=xemchitiet&id=<?php echo $m["id"]; ?>">
              <img src="public/<?php echo $m['hinhanh']; ?>" class="card-img-top" />
            </a>
          </div>
          <div class="card-body p-2">
            <h5 class="card-text small"><?php echo $m['tensanpham']; ?></h5>
            <p class="card-text text-danger font-weight-bold"><?php echo number_format($m['giaban']); ?><u><sup>đ</sup></u></p>
          </div>
          <div class="card-footer p-2">
            <a href="?action=themvaogio&id=<?php echo $m["id"];?>&soluong=1" class="btn btn-sm btn-danger "><i class="bi bi-cart3"></i> Mua hàng</a>
            <a href="?action=xemchitiet&id=<?php echo $m["id"]; ?>" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Xem chi tiết"><i class="bi bi-exclamation-circle"></i> </a>
            
          </div>
        </div>
      </div>
      <?php 
      endforeach; 
      }
    else{
        echo "<p>Vui lòng xem danh mục khác...</p>";
    }
    ?>
  </div>
  <?php include("topview.php"); ?>
</div>
<br>
<div id="xemthem" class="d-flex justify-content-center"><a href="?action=xemtatcasanpham" type="button" class="btn col-sm-4 " style="border-color: #FD5961;">XEM THÊM</a></div>
<?php include("view/bottom.php"); ?>
  
