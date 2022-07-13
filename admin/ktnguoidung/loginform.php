<!DOCTYPE html>
<html>
<head>
  	<title>Đăng nhập</title>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../public/css/color.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" ></script>
    <link rel="shortcut icon" href="../public/images/icon/short-icon.svg" />
    <link rel="stylesheet" type="text/css" href="../public/css/color.css" />
    <script src="../public/js/slide.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/css/slide.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/cursor.css" />
	<style>
		body{
			background-color: #FBCACC;
		}
	</style>
</head>
<body>
		<nav class="navbar navbar-light sticky-top" style="background-color: #FD5961">
			<div class="container">
				<a class="navbar-brand" href="../../index.php">
					<img src="../public/images/icon/logo_jinnie.svg" width="100" height="50" class="d-inline-block align-top" alt="" />
				</a>
			</div>
		</nav>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">

			</div>
			<div class="col-sm-6 slidee">
				<div class="card">
					<h4 class="card-header">ĐĂNG NHẬP</h4>
					<div class="card-body">
					<form method="post">
						<div class="form-group">
							<label for="email" >Email</label>
							
							<input type="email" class="form-control" id="email" name="txtemail" required>
							
						</div>
						<div class="form-group">
							<label for="inputPassword3">Mật khẩu</label>
							<input type="password" class="form-control" id="matkhau" name="txtmatkhau" required>	
						</div>
						
						<div class="form-group row">
							<div class="col-sm-6">
								<label for="">Bạn chưa có tài khoản?|
									<a href="index.php?action=dangky" style="color: #FD5961;">Đăng ký</a> 
								</label>
							</div>
							<div id="dangnhap" class="col-sm-6 ">
								<input type="hidden" name="action" value="xulydangnhap">
								<button type="submit" class="btn btn-block">Đăng nhập</button>
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