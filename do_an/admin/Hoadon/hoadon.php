<link rel="stylesheet" href="css/admincentent.css">
<script type="text/javascript" src="js/checkbox.js"></script>
<?php
	include ('../db/ketnoi.php');
	
    $select = "select * from hoadon";
    $query = mysqli_query($con,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="chitiethd">
	<div class="quanlysp">
		<h3>QUẢN LÝ HÓA ĐƠN</h3>

		<p>Có tổng <font color=red><b><?php echo $dem; ?></b></font> hóa đơn</p>
		
		<form action="trang1.php?act=xulyhoadon" method="post">
			<div id="checkhd">
				<p>
					<input type="submit" name="giaohang" value="Đã giao hàng" />
					<input type="submit" name="huy" value="Hủy" />
					<input type="submit" name="xoa" value="Xóa" />
				</p>
			</div>
	
	
	<table>

		<tr class='tieude_hienthi_sp'>
			<td width="30"><input type="checkbox" name="check"  class="checkbox" onclick="checkall('item', this)"></td>
			<td>Mã HD</td>
			<td>Họ Tên</td>
			<td>Địa Chỉ</td>
			<td>Điện Thoại</td>
			<td>Email</td>
			<td>Trạng thái</td>
			<td colspan=2>Active</td>
		</tr>

		<?php

			$sql = mysqli_query($con,"SELECT * FROM hoadon ORDER by mahd"); 			
		if($dem > 0)
			while ($bien = mysqli_fetch_array($sql))
			{
	?>
				<tr class="td_hienthi_tt" >
					<td ><input type="checkbox" name="id[]" class="item" class="checkbox" value="<?=$bien['mahd']?>"/></td>
					<td ><?php  echo $bien['mahd'] ?></td>
					<td ><?php echo $bien['hoten'] ?></td>
					<td ><?php echo $bien['diachi'] ?></td>
					<td >0<?php echo $bien['dienthoai'] ?></td>
					<td ><?php echo $bien['email'] ?></td>
					<td ><?php 
													if($bien['trangthai']==1) echo "Đang xử lý";
													else if($bien['trangthai']==2) echo"Đã giao hàng"; 
													else echo"Đã hủy đơn hàng";?>
					</td>
					<td class="active_hienthi_sp" style="width:70px;"><a href="trang1.php?act=cthd&mahd=<?php echo $bien['mahd']; ?> " style="float:left;">Chi tiết</a>

					</td>
				</tr>
	<?php 
		}

		else echo "<tr><td colspan='8'>Không có sản phẩm trong CSDL</td></tr>";

	?>
	</table>
	</form>
	</div>
	
</div>
