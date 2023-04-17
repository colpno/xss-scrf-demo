<?php
	$sql="select * from theloai where dequi=2 order by id_tl";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
?>
	<div class="sanpham">
	<?php 
		$sql1="select * from sanpham where id_tl={$row['id_tl']} order by id_sp LIMIT 0,6";
		$kq=mysqli_query($con,$sql1);
		$dem=mysqli_num_rows($kq);
		if($dem>0){
	?>
		<h2><?php echo $row['ten_tl']; ?></h2>
		<div id="xemthem">
			<p><a href="index.php?madm=<?php echo $row['id_tl']; ?>">Xem thêm >></a></p>
		</div>
	<?php	}
	?>
	<div class="sanphamcon">
			<?php while($rows=mysqli_fetch_array($kq)){
			?>
			<div class="dienthoai">
				<?php
					if($rows['giakhuyenmai_sp'] > 0){
					
				?>
				<div class="moi">
					<h3>-<?php echo $rows['giakhuyenmai_sp']; ?>%</h3>
				</div>
				<?php } ?>
				<a href="index.php?act=ctsp&idsp=<?php echo $rows['id_sp'] ?>"><img src="uploads/<?php echo $rows['anh_sp']; ?>" alt=""></a>
				<p><a href="index.php?act=ctsp&idsp=<?php echo $rows['id_sp'] ?>"><?php echo $rows['ten_sp'] ?></a></p>
				<h4><?php echo number_format(($rows['gia_sp']*((100 - $rows['giakhuyenmai_sp'])/100)),0,",","."); ?></h4>
				<div class="button">
					<ul>
						<li>
							<h1>
								<a href="index.php?act=ctsp&idsp=<?php echo $rows['id_sp'] ?>" class="chitiet">
									<button>Chi Tiết</button>
								</a>
							</h1>
						</li>
						<li>
							<h5>
								<a href="index.php?act=cart&action=add&idsp=<?php echo $rows['id_sp'] ?>"><button>Cho Vào Giỏ</button></a>
							</h5>
						</li>
					</ul>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>