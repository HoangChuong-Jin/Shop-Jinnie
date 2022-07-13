<?php include("../view/top.php"); ?>
<div class="page-content p-3" id="content">
	<!-- Toggle button -->
	&nbsp;&nbsp;&nbsp;&nbsp;<button id="sidebarCollapse" type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">
		<i class="fa fa-bars mr-1" style="color: #FD5961;"></i>
	</button>
	<div class="container">
		<div class="card">
			<h4 class="card-header">QUẢN LÝ NGƯỜI DÙNG</h4> 
			<div class="card-body">
				<a href="?action=themnguoidung" type="button" class="btn btn-primary"><i class="fa fa-plus-square" ></i> Thêm mới</a>
				<br> <br>
				<!-- Danh sách người dùng -->
				
				<div class="table-responsive-lg">
					<table id="PhanTrang" class="table table-sm table-hover table-bordered">
					<thead>
						<tr class="table-active">
							<th scope="col">Email</th>
							<th scope="col">Tên</th>
							<th scope="col">Số điện thoại</th>
							<th scope="col">Phân quyền</th>
							<th scope="col">Trạng thái</th>
							<th scope="col">Khóa</th>
							<th width="7%" scope="col">Sửa</th>
							<th width="7%" scope="col">Xoá</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($nguoidung as $nd): 
						echo "<tr>";
							echo "<td>{$nd['email']}</td>";
							echo "<td>{$nd['hoten']}</td>";
							echo "<td>{$nd['sodienthoai']}</td>";
							echo "<td>";
								if($nd["loai"]==1) 
									echo "<span class='badge badge-danger'>Quản trị</span>";
								elseif($nd["loai"]==2) 
									echo "<span class='badge badge-success'>Nhân viên</span>";
								else
									echo "<span class='badge badge-secondary'>Khách hàng</span>";
						
							echo "</td>";
							echo "<td>";
								if($nd["loai"]!=1) {
									if($nd["trangthai"]==1){
										echo "<span class='badge badge-primary'>Kích hoạt</span>";}
									else{
										echo "<span class='badge badge-danger'>Khóa</span>" ; }
								}
							echo "</td>";
							echo "<td>";
							if($nd["loai"]!=1) {
								if($nd["trangthai"]==1)
									echo "<a href='?action=khoa&trangthai=0&id={$nd["id"]}'>Khóa</a>";
								else  
									echo "<a href='?action=khoa&trangthai=1&id={$nd["id"]}'>Kích hoạt</a>";
							}
							echo "</td>";
							echo "<td><a class='btn btn-warning' href='index.php?action=suanguoidung&id={$nd['id']}'><i class='fa fa-pencil-square-o text-white'></i></a>";
							echo "</td>";
							echo "<td><a class='btn btn-danger' onclick='return confirm(\"Bạn chắn chắn muốn xóa người dùng {$nd['hoten']}?\")' href='index.php?action=xoanguoidung&id={$nd['id']}'><i class='fa fa-trash'></i></a></td>";
							echo "</tr>";
								endforeach;	
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("../view/bottom.php"); ?>
