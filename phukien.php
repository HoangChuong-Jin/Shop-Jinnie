<h2 class="slideanim" style="text-align: center;"><a>Accessory</a></h2>
                      <div class="row">
                      <?php
                      foreach($sanpham as $m):
                        if($m["loaisanpham_id"]== 4){
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