<?php
$idsp = $_GET['idsp'];
$rows = mysqli_query($con, "SELECT * FROM sanpham WHERE id_sp=$idsp");
while ($row = mysqli_fetch_array($rows)) {
?>
	<div class="chitietsp">
		<div class="ctsp">
			<h2>CHI TIẾT SẢN PHẨM</h2>
			<div class="content_ctsp">
				<div class="anh">
					<a href="uploads/<?php echo $row['anh_sp'] ?>" style="width: 300px; height: 300px">
						<img src="uploads/<?php echo $row['anh_sp'] ?>" style="width: 250px;height: 250px" alt="">
					</a>
				</div>
				<div class="giasp">
					<ul>
						<p><?php echo $row['ten_sp']; ?></p>
						<li>
							<span>
								<b>Giá:
									<font color="red"><?php echo number_format(($row['gia_sp'] * ((100 - $row['giakhuyenmai_sp']) / 100)), 0, ",", ".") ?>
									</font>
								</b>
							</span>
						</li>
						<li>Tình Trạng:
							<?php
							$dem = $row['soluong_sp'] - $row['daban'];
							if ($dem > 0) {
								echo "Số Sản Phẩm Còn (" . $dem . ")";
							} else {
								echo "Hết hàng.";
							}
							?>
						</li>
						<form action="index.php?act=cart&action=add&idsp=<?php echo $row['id_sp']; ?>" method="post">
							<li>Số Lượng Mua: <input type="text" name="soluongmua" size="1" value="1"></li>
							<li>
								<?php
								if ($dem <= 0) {
									echo "<a href='index.php'><input type='text' value='về trang chủ' class='inputmuahang'></a>";
								} else { ?>
									<input type="submit" value="Cho Vào Giỏ" name="chovaogio" class="inputmuahang">
								<?php }
								?>
							</li>
						</form>
					</ul>
				</div>
			</div>
			<div class="tinhnang">
				<div class="tdtinhnang">
					<ul class="tabs">
						<li><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>">Tính Năng</a></li>
					</ul>
				</div>
				<div id="tab1">
					<?php echo $row['chitiet_sp'] ?>
				</div>
			</div>
		</div>
	</div>
	<?php
	$sql = "SELECT * FROM comments WHERE post_id = $idsp";
	$commentRows = mysqli_query($con, $sql);
	$comments = array();
	while ($row = $commentRows->fetch_assoc()) {
		$comments[] = $row;
	}

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];

		$addCommentSQLl = "INSERT INTO comments (post_id, name, comment) VALUES ('$idsp', '$name', '$comment')";
		$con->query($addCommentSQLl);

		$sql = "SELECT * FROM comments WHERE post_id = $idsp";
		$commentRows = mysqli_query($con, $sql);
		$comments = array();
		while ($row = $commentRows->fetch_assoc()) {
			$comments[] = $row;
		}
	}
	?>
	<h2>Comments</h2>
	<ul>
		<?php foreach ($comments as $comment) : ?>
			<li>
				<strong><?php echo $comment['name']; ?>:</strong>
				<?php echo $comment['comment']; ?>
			</li>
		<?php endforeach; ?>
	</ul>

	<h2>Add a Comment</h2>
	<form method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name"><br>

		<label for="comment">Comment:</label>
		<textarea name="comment" id="comment"></textarea><br>

		<input type="submit" name="submit" value="Submit">
	</form>
<?php
}
?>