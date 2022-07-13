<?php include_once("../view/top.php"); ?>
<div class="page-content p-3" id="content">
	<!-- Toggle button -->
	&nbsp;&nbsp;&nbsp;&nbsp;<button id="sidebarCollapse" type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">
		<i class="fa fa-bars text-primary mr-1"></i>
	</button>
	<div class="container">
		<div class="card">
			<h4 class="card-header">SỬA NGƯỜI DÙNG</h4> 
			<div class="card-body">
				<form  action="index.php?action=xulysua" method="post" onsubmit="return ktxacnhanmatkhau()" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-8">
							<div class="form-group">
								<label for="hoten">Họ và tên</label>
								<input type="text" class="form-control" name="hoten" readonly value="<?php echo $nguoidung["hoten"]; ?>"/>
							</div>
							<div class="form-row">
								<div class="form-group col-sm-6">
									<label for="sodienthoai">Số điện thoại</label>
									<input type="number" class="form-control"  name="sodienthoai" readonly value="<?php echo $nguoidung["sodienthoai"]; ?>" />
								</div>
								<div class="form-group col-sm-6">
									<label for="tendangnhap">Phân quyền</label>
									<select class="custom-select" name="optloai" required>
									<?php
										if($nguoidung['loai']==1){
											echo "<option value='1'selected>Quản trị</option>";
											echo "<option value='2'>Nhân viên</option>";
											echo "<option value='3'>Khách hàng</option>";
										}
										elseif($nguoidung['loai']==2){
											echo "<option value='1'>Quản trị</option>";
											echo "<option value='2'selected>Nhân viên</option>";
											echo "<option value='3'>Khách hàng</option>";
										}
										else
										{
											echo "<option value='1'>Quản trị</option>";
											echo "<option value='2'>Nhân viên</option>";
											echo "<option value='3'selected>Khách hàng</option>";
										}
									?>
									</select>
								</div>
							</div>
							
							
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" readonly value="<?php echo $nguoidung["email"]; ?>"/>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="text-center">
								<div id="hinh" class="form-group">
									<p>Ảnh đại diện</p>
									<?php if($nguoidung['loai']==1 or $nguoidung['loai']==2){?>
										<img src="../public/images/<?php if($nguoidung['hinhanh']==null){
											echo 'user.png'; 
										}else {
											echo $nguoidung['hinhanh'];
										}
										?>"  width="200px"><br><br>
									<?php }else {?>
										<img src="../../public/images/<?php if($nguoidung['hinhanh']==null){
											echo 'user.png'; 
										}else {
											echo $nguoidung['hinhanh'];
										}
										?>"  width="200px"><br><br>
									<?php }?>

								</div>
								
							</div>
						</div>
					</div>
					<input type="hidden" name="id" value="<?php echo $nguoidung["id"]; ?>">
					<button type="submit" class="btn btn-primary">Cập nhật</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once("../view/bottom.php"); ?>
