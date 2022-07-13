<!DOCTYPE html>
<html>
<head>
  	<title>Đăng nhập</title>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
      <link rel="shortcut icon" href="../public/images/icon/short-icon.svg" />
      <link rel="stylesheet" type="text/css" href="../public/css/scrollbar.css" />
    <style>
		body{
			background-color: #FBCACC;
		}
	</style>
</head>
<body>
		<nav class="navbar navbar-light sticky-top" style="background-color: #FD5961;">
			<div class="container">
				<a class="navbar-brand" href="../../index.php">
					<img src="../public/images/icon/logo_jinnie.svg" width="100" height="50" class="d-inline-block align-top" alt="" />
                </a>
				
			</div>
		</nav>
<div class="card">
	
	<div class="card-body">
		<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            <i class="bi bi-question-circle-fill"></i> <?php echo $error_message; ?> <a href="#back" onclick="history.go(-1); return false;" style="color: #FD5961;">Quay lại trang trước</a>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</div>
</body>
</html>
