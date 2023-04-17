<?php
	if(isset($_GET['idnd'])){
		$idnd=$_GET['idnd'];	
	}else $idnd='';
?>
<div class="chitiethd">
	<h2>LỊCH SỬ ĐƠN HÀNG</h2>
	<div class="hd">
		<div class="hoadon">				
			<?php
			$sql_select = mysqli_query($con,"SELECT * FROM hoadon WHERE hoadon.idnd='$idnd' GROUP BY hoadon.mahd");
			?> 
			<table c class="table">
				<tr>
					<th>Thứ tự</th>
					<th>Mã Đơn Hàng</th>
					<th>Tên Khách Hàng</th>
					<th>Ngày đặt</th>
					<th>xem chi tiet</th>
				</tr>
				<?php
				$i = 0;
				while($row_donhang = mysqli_fetch_array($sql_select)){ 
				$i++;				
				?> 
				<tr>
						<td><?php echo $i; ?></td>			
						<td><?php echo $row_donhang['mahd']; ?></td>
						<td><?php echo $row_donhang['hoten']; ?></td>
						<td><?php echo $row_donhang['ngaydathang'] ?></td>
						<td class="active_hienthi_sp" style="width:70px;">
							<a href="index.php?act=cthd&mahd=<?php echo $row_donhang['mahd']; ?> ">Chi tiết</a>
						</td>				
				</tr>
				<?php 
				}
				?> 
			</table>
		</div>
	</div>
</div>