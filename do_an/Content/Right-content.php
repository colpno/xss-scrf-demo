<div id="giohang">
	<div class="center1">
		<h4>GIỎ HÀNG</h4>
		<a href="index.php?act=cart"><img src="anh/giohang.png" alt="" title="Vào Giỏ Hàng" style="width: 150px;height: 100px;"></a>
		<?php
		$tongtien = 0;
		if (isset($_SESSION['giohang']))
			$count = count($_SESSION['giohang']);
		else $count = 0;
		if ($count == 0) {
		?>
			<p>Không Có Sản Phẩm</p>
		<?php
		} else {
		?>
			<p class="slgiohang">co <span><?= $count ?></span> Sản Phẩm Trong Giỏ Hàng</p>
			<p class="tiengh">
				<?php
				$sql = "SELECT * FROM sanpham WHERE id_sp IN(";
				foreach ($_SESSION['giohang'] as $id => $soluong) {
					if ($soluong > 0) {
						$sql .= $id . ",";
					}
				}
				if (substr($sql, -1, 1) == ',') {
					$sql = substr($sql, 0, -1);
				}
				$sql .= ' ) ORDER BY id_sp';
				$rows = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_array($rows)) {
					$tongtien += $_SESSION['giohang'][$row['id_sp']] * $row['gia_sp'] * ((100 - $row['giakhuyenmai_sp']) / 100);
				} ?>
				<?php echo number_format($tongtien, "0", ",", "."); ?> VNĐ

			</p>
		<?php
		} ?>
	</div>
</div>
<div id="timkiem">
	<div class="center1">
		<h4>TÌM KIẾM</h4>
		<div id="select">
			<form action="index.php?act=tk" method="get">
				<input type="hidden" name="act" value="tk">
				<input type="text" name="timkiem">
				<div id="select2">
					<select name="gia">
						<option value="0"> - Chọn giá - </option>
						<option value="1">
							< 1.000.000</option>
						<option value="2">1.000.000 - 3.000.000</option>
						<option value="3">3.000.000 - 5.000.000</option>
						<option value="4">5.000.000 - 8.000.000</option>
						<option value="5">8.000.000 - 10.000.000</option>
						<option value="6"> > 10.000.000</option>
						<input type="submit" name="btntk" value="Tìm kiếm" />
					</select>
				</div>
			</form>
		</div>
	</div>
</div>