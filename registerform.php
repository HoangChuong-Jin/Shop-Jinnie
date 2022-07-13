<!DOCTYPE html>
<html>
<head>
  	<title>Đăng ký</title>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="public/css/color.css" />
  	<script src="public/js/slide.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/slide.css" />
    <link rel="stylesheet" type="text/css" href="public/css/cursor.css" />
	<style>
		body{
			background-color: #FBCACC;
		}
	</style>
	<script src="public/js/shop.js"></script>
</head>
<body>
		<nav class="navbar navbar-light sticky-top" style="background-color: #FD5961">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="public/images/icon/logo_jinnie.svg" width="100" height="50" class="d-inline-block align-top" alt="" />
				</a>
			</div>
		</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">

			</div>
			<div class="col-sm-6">
				<div class="card slideX">
					<h4 class="card-header">ĐĂNG KÝ</h4>
					<div class="card-body">
					<form method="post" onsubmit="return ktxacnhanmatkhau()">
						<div class="form-group">
							<label for="email" >Email</label>	
							<input type="email" class="form-control" name="txtemail" required>
						</div>
                        <div class="form-group">
							<label for="hoten" >Họ tên</label>	
							<input type="text" class="form-control" name="txthoten" required>
						</div>
                        <div class="form-group">
							<label for="txtdienthoai" >Số điện thoại</label>	
							<input type="text" class="form-control" name="txtdienthoai" required>
						</div>
						<div class="form-group">
							<label for="inputPassword3">Mật khẩu</label>
							<input type="password" class="form-control" id="matkhau" name="txtmatkhau" required>	
						</div>
						<div class="form-group">
							<label for="inputPassword3">Xác nhận mật khẩu</label>
							<input type="password" class="form-control" id="xacnhanmatkhau" required>	
						</div>
						<div class="form-group row">
							<div class="col-sm-6">
							<label for="">Bạn có tài khoản? | <a href="index.php?action=dangnhap" style="color: #FD5961;">Đăng nhập</a></label>
							</div>
							<div id="dangky" class="col-sm-6 ">
								<input type="hidden" name="action" value="xulydangky">
								<button type="submit" class="btn btn-block">Đăng ký</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>