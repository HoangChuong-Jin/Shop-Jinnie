<?php 
  include("view/top.php");
  include("view/carousel.php");
?>

<!-- Order -->
    <div id="order" style="margin-top: 150px;">
      <div class="container-fluid">
        <div class="nd">
          <div class="nd-order">
            <div class="container mt-3">
              <div class="what">What will you buy today?</div>
              <br>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#all">&nbsp;All &nbsp;</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tuito">BIG BAG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tuitrung">MEDIUM BAG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tuinho">SMALL BAG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#phukien">ACCESSORY</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#hot">HOT</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div id="all" class="tab-pane active"><br>
                  <?php
                  foreach($loaisanpham as $l):
                  ?>
                      <h2 class="slideanim" style="text-align: center;"><a href="?action=xemloaisanpham&maloai=<?php echo $l["id"];?>"> <?php echo $l["tenloai"];?></a></h2>
                      <div class="row">
                      <?php
                      foreach($sanpham as $m):
                        if($m["loaisanpham_id"]== $l["id"]){
                      ?>
                          <div id="card" class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 px-2 p-2 slideanim">
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
                                  <a href="?action=xemchitiet&id=<?php echo $m["id"]; ?>" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Xem chi tiết"><i class="bi bi-exclamation-circle"></i></a>
                                 
                                </div>
                              </div>
                            </div>
                      <?php 
                      }
                        endforeach;
                      ?>
                  </div>
                  <?php
                      endforeach;
                  ?>

                  <br>

                  <div id="xemthem" class="d-flex justify-content-center"><a href="?action=xemtatcasanpham" type="button" class="btn col-sm-4" style="border-color: #FD5961;">XEM THÊM</a></div>

                  <br>
                </div>
                <div id="tuito" class=" tab-pane fade"><br>
                  <?php include("tuito.php"); ?>
                </div>
                <div id="tuitrung" class=" tab-pane fade"><br>
                  <?php include("tuitrung.php"); ?>
                </div>
                <div id="tuinho" class=" tab-pane fade"><br>
                  <?php include("tuinho.php"); ?>
                </div>
                <div id="phukien" class=" tab-pane fade"><br>
                  <?php include("phukien.php"); ?>
                </div>
                <div id="hot" class=" tab-pane fade"><br>
                  <?php include("topview.php"); ?>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<br>


<!--===========================================-->

<?php include("view/bottom.php"); ?>