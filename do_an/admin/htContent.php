<?php
include("../db/ketnoi.php");
	if(isset($_GET['act']))
	{
	//san pham
		if($_GET['act']=='sp')
			include('Sanpham/sanpham.php');
		elseif($_GET['act']=='themsp')
			include('Sanpham/them_sanpham.php');
		elseif($_GET['act']=='suasp')
			include('Sanpham/sua_sanpham.php');
		elseif($_GET['act']=='xlsp')
			include('xulysp.php');
	//danh muc
		elseif($_GET['act']=='dm')
			include('Danhmuc/danhmuc.php');
		elseif($_GET['act']=='themdm')
			include('Danhmuc/them_danhmuc.php');
		elseif($_GET['act']=='suadm')
			include('Danhmuc/sua_danhmuc.php');
	//hoa don
		elseif($_GET['act']=='hd')
			include('Hoadon/hoadon.php');
		elseif($_GET['act']=='cthd')
			include('Hoadon/chitiethoadon.php');
		elseif($_GET['act']=='xulyhoadon')
			include('xylydh.php');
	//nguoi dung
		elseif($_GET['act']=='nd')
			include('nguoidung.php');
			
	}else{
		?>
		<link rel="stylesheet" href="css/admincentent.css">
		<div id="admincon">
			<div id="sanphammoi">
				<table>
				<?php $ngay=date('Y-m-d'); ?>
					<tr class="sanphammoitheongay">
						<td colspan=6>Đơn hàng cần được xử lý</td>
					</tr>
					<tr class="tieudespmoi">
						<td>STT</td>
						<td>Họ tên</td>
						<td>Địa chỉ</td>
						<td>Điện thoại</td>
						<td>Ngày đặt hàng</td>
					</tr>
					<?php 
						$i=1;
						$sql=mysqli_query($con,"select * from hoadon where trangthai='1'");
						while($row=mysqli_fetch_array($sql)){
					?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['hoten'] ?></td>
						<td><?php echo $row['diachi'] ?></td>
						<td><?php echo $row['dienthoai'] ?></td>
						<td><?php echo $row['ngaydathang'] ?></td>
					</tr>
					<?php } ?>
					<tr>
						<td colspan=6 align="right" style="padding-right:20px; height:30px;">
							<a href="trang1.php?act=hd">Chi tiết</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
<?php	}
?>