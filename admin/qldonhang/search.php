<?php include("../view/top.php"); ?>
<div class="page-content p-3" id="content">
	<!-- Toggle button -->
	&nbsp;&nbsp;&nbsp;&nbsp;<button id="sidebarCollapse" type="button" class="btn btn-light bg-white shadow-sm px-4 mb-4">
		<i class="fa fa-bars text-primary mr-1"></i>
	</button>
	<div class="container">
		<div class="card">
			<h4 class="card-header">QUẢN LÝ ĐƠN HÀNG</h4> 
			<div class="card-body">
				<form action="" method="GET" class="form-inline">

					<div class="form-group mb-3">
						<label>Trạng thái:&nbsp;</label>
						<select class="form-control mx-sm-2" name="opttrangthai">
							<option value="0">Chờ xử lý</option>
							<option value="1">Đã xác nhận</option>
							<option value="2">Đang giao hàng</option>
							<option value="3">Đã nhận</option>
							<option value="4">Hoàn lại</option>
							<option value="5">Đã huỷ</option>
						</select>
					</div>
					<div class="form-group mx-sm-2 mb-3">
						<input type="submit" value="Tìm kiếm" class="btn btn-primary">
						<input type="hidden" name="action" value="timkiem">
					</div>
					<div class="form-group mx-sm-2 mb-3">
						<a href="index.php"><h4><i class="bi bi-arrow-repeat"></i></h4></a>
					</div>
				</form>
				
				<div class="table-responsive-lg">
					<table id="PhanTrang" class="table table-hover table-sm table-bordered" width="100%">
						<thead>	
							<tr class="table-active bg-light">
								<th>Mã đơn hàng</th>
								<th>Khách hàng</th>
								<th>Địa chỉ giao hàng</th>
								<th>Ngày đặt</th>
								<th>Tổng tiền</th>
								<th>Ghi chú</th>
								<th>Trạng thái</th>
								<th>Huỷ đơn</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($data as $dh){
						?>
						<tr>
							<td class="small"><?php echo str_pad($dh["id"], 8, "0", STR_PAD_LEFT); ?></td>					
							<?php 
							//xuất tên khách hàng
							foreach($nguoidung as $nd):
								if($nd["id"]==$dh["nguoidung_id"])
								{
							?>
							<td class="small"><?php echo $nd["hoten"];?> </td>
							<?php
								}
							endforeach;//end
							?>
							<?php 
							//xuất địa chỉ
							foreach($diachi as $dc):
								if($dc["id"]==$dh["diachi_id"])
								{
							?>
							<td class="small"><?php echo $dc["diachi"];?></td>
							<?php
								}
							endforeach;//end
							?>
							<td class="small"><?php echo $dh["ngay"]; ?></td>
							<td><?php echo number_format($dh["tongtien"]); ?>đ</td>
							<td class="small"><?php echo $dh["ghichu"]; ?></td>
							<td><?php 
									if($dh["trangthai"]==0) 
										echo "<span class='badge badge-secondary'>Chờ xử lý</span>"; 
									else if($dh["trangthai"]==1)
										echo "<span class='badge badge-warning'>Đã xác nhận</span>";
									else if($dh["trangthai"]==2)
										echo "<span class='badge badge-primary'>Đang giao hàng</span>";
									else if($dh["trangthai"]==3)
										echo "<span class='badge badge-success'>Đã nhận</span>";
									else if($dh["trangthai"]==4)
										echo "<span class='badge badge-dark'>Hoàn lại</span>";
									else
										echo "<span class='badge badge-danger'>Đã huỷ</span>";
							?>
							</td>
							
							<?php 
							if($dh["trangthai"]!=4 && $dh["trangthai"]!=5 && $dh["trangthai"]!=3){
								?>
								<td><a class="text-danger" href="index.php?action=huydon&trangthai=5&id=<?php echo $dh["id"];?>"><i class="bi bi-x"></i>Huỷ</a></td>
							<?php 
							}
							else{
							?>
								<td></td>
							<?php
							}
							?>
							<td><a href="index.php?action=xemchitiet&id=<?php echo $dh["id"];?>" class="btn btn-primary" type="button"><i class='fa fa-pencil-square-o text-white'></i></a></td>
						</tr>
						<?php	
							}
						?>
						</tbody>
					</table>
					</div>
		</div>
	</div>
</div>

<?php include("../view/bottom.php"); ?>
