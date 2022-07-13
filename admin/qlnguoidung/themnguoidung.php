<?php include_once("../view/top.php"); ?>
<div class="page-content p-3" id="content">
	<!-- Toggle button -->
	&nbsp;&nbsp;&nbsp;&nbsp;<button id="sidebarCollapse" type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">
		<i class="fa fa-bars text-primary mr-1"></i>
	</button>
	<div class="container">
		<div class="card">
			<h4 class="card-header">THÊM NGƯỜI DÙNG</h4> 
			<div class="card-body">
					<form action="index.php?action=xulythem" method="post" onsubmit="return ktxacnhanmatkhau()" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-8">
								<div class="form-group">
									<label for="hoten">Họ và tên</label>
									<input type="text" class="form-control" id="hoten" name="hoten" required />
								</div>
								<div class="form-row">
									<div class="form-group col-sm-6">
										<label for="sodienthoai">Số điện thoại</label>
										<input type="number" class="form-control" id="sodienthoai" name="sodienthoai" required />
									</div>
									<div class="form-group col-sm-6">
										<label for="tendangnhap">Phân quyền</label>
										<select class="custom-select" id="optloai" name="optloai" required>
											<option value='1'selected>Quản trị</option>
											<option value='2'>Nhân viên</option>
										</select>
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email" required />
								</div>
								
								<div class="form-row">
									<div class="form-group col-sm-6">
									<label for="matkhau">Mật khẩu</label>
									<input type="password" class="form-control" id="matkhau" name="matkhau" required />
									</div>
									<div class="form-group col-sm-6">
										<label for="xacnhanmatkhau">Xác nhận mật khẩu</label>
										<div class="input-group-append">
											<input type="password" class="form-control" id="xacnhanmatkhau" name="xacnhanmatkhau" required >
											<button class="btn btn-primary" type="button"  id="showPassword"><i class="bi bi-eye-fill"></i></button>
											
										</div>
									</div>
								</div>
								
							</div>
							<div class="col-sm-4">
								<div class="text-center">
									<img id="output" class="img-thumnail" width="200" height="200">
									<p></p>
									<h5 >Hình đại diện</h5>
								</div>
								<input type="file"  name="fhinh" type="file" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
							</div>
						</div>
						<br>
						<button type="submit" class="btn btn-success">Thêm mới</button>
						<button type="reset" class="btn btn-warning">Huỷ</button>
					</form>
				
			</div>
		</div>
	</div>
</div>
<?php include_once("../view/bottom.php"); ?>
