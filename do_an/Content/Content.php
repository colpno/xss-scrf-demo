<?php
	if(isset($_GET['action'])){
		$action=$_GET['action'];
	}else $action="";
	if(isset($_GET['act']))
	{
		if($_GET['act']=='dn')
			include('Giaodien/Dangphap.php');
		else if($_GET['act']=='dk')
			include('Giaodien/Dangky.php');
		else if($_GET['act']=='gt')
			include('Giaodien/Gioithieu.php');
		else if($_GET['act']=='sp')
			include('Giaodien/Sanpham.php');
		else if($_GET['act']=='pk')
			include('Giaodien/Phukien.php');
		else if($_GET['act']=='ht')
			include('Giaodien/Hotro.php');
		elseif($_GET['act']=='ctsp')
			include('Giaodien/Chitietsanpham.php');
		elseif($_GET['act']=='cart')
			include('Giohang/index.php');
		elseif($_GET['act']=='lsdh')
			include('Giaodien/lichsudonhang.php');
		elseif($_GET['act']=='tk')
			include('Giaodien/timkiem.php');
		elseif($_GET['act']=='cthd')
			include('Giaodien/chitiethoadon.php');
		else 
			echo "chua vao";
	}
	elseif(isset($_GET['madm'])){
		$sql = "SELECT * FROM sanpham WHERE id_tl='{$_GET['madm']}'";
		if(isset($_GET['madm'])){
			$sql.="WHERE id_tl='".$_GET['madm']."'";
		}
		if(!isset($_GET['page'])){
			$page=1;
		}else{
			$page =$_GET['page'];
		}
		$max_results = 9;
		$from =(($page * $max_results) - $max_results);
		$sql="SELECT * FROM sanpham WHERE id_tl='{$_GET['madm']}' LIMIT $from,$max_results";
		
		$query=mysqli_query($con,$sql);
		$total = mysqli_num_rows($query);
		if($total > 0){
		?>
		<div class="sanpham">
			<?php
			$sql1="SELECT * FROM theloai WHERE id_tl='{$_GET['madm']}'";
			$query1=mysqli_query($con,$sql1);
			$row1=mysqli_fetch_array($query1);
			?>
			<h2><?php echo $row1['ten_tl']; ?></h2>
			<div class="sanphamcon">
				<?php
					while($result=mysqli_fetch_array($query)){
				?>
				<div class="dienthoai">
					<?php
						if($result['giakhuyenmai_sp'] > 0){
					?>
					<div class="moi">
						<h3>-<?php echo $result['giakhuyenmai_sp'] ?>%</h3>
					</div>
					<?php } ?>
					<a href="index.php?act=ctsp&idsp=<?php echo $result['id_sp'] ?>"><img src="uploads/<?php echo $result['anh_sp'];?>" alt=""></a>
					<p><a href="index.php?act=ctsp&idsp=<?php echo $result['id_sp'] ?>"><?php echo $result['ten_sp']; ?></a></p>
					<h4><?php echo number_format(($result['gia_sp'] * ((100 - $result['giakhuyenmai_sp'])/100)),0,",","."); ?></h4>
					<div class="button">
						<ul>
							<li>
								<h1>
									<a href="index.php?act=ctsp&idsp=<?php echo $result['id_sp'] ?>" class="chitiet">
									<button>Chi Tiết</button>
									</a>
								</h1>
							</li>
							<li>
								<h5>
									<a href="index.php?act=cart&action=add&idsp=<?php echo $result['id_sp'] ?>">
									<button>Cho Vào Giỏ</button>
									</a>
								</h5>
							</li>
						</ul>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	<div class="phantrang">
		<?php
			$total_results = mysqli_query($con,"SELECT COUNT(*) as Num FROM sanpham WHERE id_tl='{$_GET['madm']}'");  
			$total_row=mysqli_fetch_assoc($total_results);
			$total_records=$total_row['Num'];
			$total_pages = ceil($total_records / $max_results); 
			
			if($page > 1){
				$prev = ($page -1);
				echo "<a href=\"".$_SERVER['PHP_SELF']."?madm=".$_GET['madm']."&page=$prev\"><button class='trang'>Trang Trước</button></a>&nbsp;";
			}
			for	($i = 1; $i <=$total_pages;$i++){
				if(($page)==$i){
					echo "$i&nbsp;";
				}else{
					echo "<a href=\"".$_SERVER['PHP_SELF']."?madm=".$_GET['madm']."&page=$i\"><button class='so'>$i</button></a>&nbsp;";
				}
			}
			if($page <$total_pages){
				$next =($page + 1);
				echo "<a href=\"".$_SERVER['PHP_SELF']."?madm=".$_GET['madm']."&page=$next\"><button class='trang'>Trang sau</button></a>";  
			}  
			echo "</center>"; 	
		?>
	</div>
	<?php
		}
		else {
			echo "Không có sản phẩm nào";
		}
	}
	else {
	?>
	<div class="sanpham">
		<h2>ĐIỆN THOẠI BÁN CHẠY</h2>
		<div class="sanphamcon">
			<?php
				$sql2="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.id_tl=theloai.id_tl WHERE dequi=1 ORDER BY daban DESC LIMIT 6";
		
				$result2 =mysqli_query($con,$sql2);
			while($row=mysqli_fetch_array($result2)){
				if($row['daban']>0){
			?>
			
			<div class="dienthoai">
				<?php 
					if	($row['giakhuyenmai_sp']>0){
				?>
				<div class="moi">
					<h3>-<?php echo $row['giakhuyenmai_sp']; ?>%</h3>
				</div>
				<?php } ?>
				<h1><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp']; ?>"><img src="uploads/<?php echo $row['anh_sp']; ?>" alt=""></a></h1>
				<p><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp']; ?>"><?php echo $row['ten_sp']; ?></a></p>
				<h4>Giá: <?php echo number_format(($row['gia_sp'] * ((100-$row['giakhuyenmai_sp'])/100)),0,",","."); ?></h4>
				<div class="button">
					<ul>
						<li>
							<h1>
								<a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp']; ?>" class="chitiet">
									<button>Chi Tiết</button>
								</a>
							</h1>
						</li>
						<li>
							<h5>
								<a href="index.php?act=cart&action=add&idsp=<?php echo $row['id_sp']; ?>" >
									<button>Cho Vào Giỏ</button>
								</a>
							</h5>
						</li>
					</ul>
				</div>
			</div>
		<?php
				}
			} ?>
	</div>
</div>
<div class="sanpham">
	<h2>ĐIỆN THOẠI MỚI</h2>
	<div class="sanphamcon">
		<?php
			$sql2="SELECT * FROM sanpham INNER JOIN theloai ON sanpham.id_tl = theloai.id_tl WHERE dequi=1 ORDER BY id_sp DESC LIMIT 6";
			$result2=mysqli_query($con,$sql2);
			while($row=mysqli_fetch_array($result2)){
		?>
		<div class="dienthoai">
			<?php
				if	($row['giakhuyenmai_sp'] > 0){
			?>
				<div class="moi"><h3>-<?php echo $row['giakhuyenmai_sp']; ?>%</h3></div>
				<?php } ?>
				<h1><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>"><img src="uploads/<?php echo $row['anh_sp']; ?>" alt=""></a></h1>
				<p><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>"><?php echo $row['ten_sp']; ?></a></p>
				<h4><?php echo number_format(($row['gia_sp'] * ((100 - $row['giakhuyenmai_sp']) / 100)),0,",","."); ?></h4>
				<div class="button">
					<ul>
						<li>
							<h1>
								<a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>" class="chitiet">
								<button>Chi Tiết</button>
								</a>
							</h1>
						</li>
						<li>
							<h5>
								<a href="index.php?act=cart&action=add&idsp=<?php echo $row['id_sp']; ?>">
									<button>Cho Vào Giỏ</button>
								</a>
							</h5>
						</li>
					</ul>
				</div>
		</div>	
	<?php	}?>
	</div>
</div>
<?php } ?>