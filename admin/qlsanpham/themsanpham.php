<?php include("../view/top.php"); ?>
<div class="page-content p-3" id="content">
	<!-- Toggle button -->
	&nbsp;&nbsp;&nbsp;&nbsp;<button id="sidebarCollapse" type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">
		<i class="fa fa-bars text-primary mr-1"></i>
	</button>
	<div class="container">
		<div class="card">
			<h4 class="card-header">THÊM SẢN PHẨM</h4> 
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="index.php">
					
					<input type="hidden" name="action" value="xulythem">
					
					<div class="form-row">
						<div class="form-group col-sm-6">
						<label>Loại sản phẩm</label>
							<select class="form-control" name="optloaisanpham">
							<?php
							foreach($loaisanpham as $l):
							?>
								<option value="<?php echo $l["id"]; ?>"><?php echo $l["tenloai"]; ?></option>
							<?php
							endforeach;
							?>
							</select>
						</div>
						<div class="form-group col-sm-6">
							
						</div>
					</div>
					
					<div class="form-group">
						<label>Tên sản phẩm</label>
						<input class="form-control" type="text" name="tensanpham">
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>Giá gốc</label>
							<input class="form-control" type="number" name="giagoc" value="0">
						</div>
						<div class="form-group col-sm-6">
							<label>Giá bán</label>
							<input class="form-control" type="number" name="giaban" value="0">
						</div>
					</div>
					
					<div class="form-group">
						<label>Số lượng tồn</label>
						<input class="form-control" type="number" name="soluongton" value="0">
					</div>
					<div class="form-group">
						<label>Hình ảnh</label>
						<input class="form-control" type="file" name="filehinhanh">
					</div>
					<div class="form-group">
						<label>Mô tả</label>
						<textarea class="form-control ckeditor" id="mota" name="mota" name="mota"></textarea>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-success">Thêm mới</button>
						<button type="reset"  class="btn btn-warning"><a href="../qlsanpham/index.php" style="text-decoration: none; color: white;">Huỷ</a></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

	

<?php include("../view/bottom.php"); ?>
