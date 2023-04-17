<div class="giohang">
	<h3>Giỏ Hàng Của Bạn</h3>
	<?php
	if (isset($_SESSION['giohang']))
		$count = count($_SESSION['giohang']);
	else $count = 0;
	$tongtien = 0;
	if ($count == 0)
		echo "Giỏ Hàng Của Bạn Chưa Có Sản Phẩm Nào.";
	else {
	?>
		<table>
			<tr class="tieudegiohang">
				<td><b>Tên Sản Phẩm</b></td>
				<td><b>Giá</b></td>
				<td><b>Số Lượng</b></td>
				<td><b>Thành Tiền</b></td>
				<td><b>Tùy Chọn</b></td>
				<?php
				$sql = "SELECT * FROM sanpham WHERE id_sp in(";
				foreach ($_SESSION['giohang'] as $stt => $soluong) {
					if ($soluong > 0) {
						$sql .= $stt . ",";
					}
				}
				if (substr($sql, -1, 1) == ',') {
					$sql = substr($sql, 0, -1);
				}
				$sql .= ' ) ORDER BY id_sp DESC';
				$rows = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_array($rows)) {
				?>
					<form action="index.php?act=cart&action=update&idsp=<?php echo $row['id_sp']; ?>" method="post" name="update">
			<tr class="giohangsanpham">
				<td>
					<p class="carta">
						<a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp']; ?>"><?php echo $row['ten_sp']; ?></a>
					</p>
				</td>
				<td>
					<?php
					echo number_format(($row['gia_sp'] * ((100 - $row['giakhuyenmai_sp']) / 100)), 0, ",", ".");
					?>
				</td>
				<td>
					<input type="text" name="sl" value="<?php echo $_SESSION['giohang'][$row['id_sp']] ?>" style="width: 30px;">
				</td>
				<td>
					<?php
					echo number_format(($row['gia_sp'] * ((100 - $row['giakhuyenmai_sp']) / 100)) * $_SESSION['giohang'][$row['id_sp']], 0, ",", ".")
					?>
				</td>
				<td>
					<p class="xoa">
						<input type="submit" name="huy" value="Xóa">
						<input type="submit" class="submit" value="Cập Nhập" name=" submit">
					</p>
				</td>
			</tr>
			</form>
		<?php $tongtien += $_SESSION['giohang'][$row['id_sp']] * ($row['gia_sp'] * ((100 - $row['giakhuyenmai_sp']) / 100));
				} ?>

		</tr>
		</table>
		<div class="xoatoanbo">
			<a href="index.php?act=cart&action=xoa"><button>Xóa Toàn Bộ</button></a>
			<p>Tổng Cộng: <span><?php echo number_format($tongtien, 0, ",", "."); ?></span> VNĐ</p>
		</div>
		<div class="ttmuahang">
			<p class="ttmuahangcon">
				<a href="index.php">Tiếp Tục Mua Hàng</a>
			</p>
			<p class="thanhtoan">
				<a href="index.php?act=cart&action=check">Thanh Toán</a>
			</p>
		</div>
	<?php
	}
	?>
</div>