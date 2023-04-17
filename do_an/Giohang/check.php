<?php
	$loi = 0;
	foreach($_SESSION['giohang'] as $stt => $soluong){
		$sql="SELECT soluong_sp,ten_sp,daban FROM sanpham WHERE id_sp=$stt";
		$rows=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rows);
		$sl=$_SESSION['giohang'][$stt];
		if($row['soluong_sp']==0 or ($row['soluong_sp']-$row['daban'])<$sl){
			echo '<meta http-equiv="refresh" content="2;index.php?act=cart">';
			echo "Sản Phẩm <font color='red'><b>". $row['ten_sp']."</b></font> Đã Hết Hoặc Không Đủ Hàng Trong Kho<br><br>";
			$loi+=1;
		}
	}
	if($loi==0)
      echo '<meta http-equiv="refresh" content="0;index.php?act=cart&action=tt">';
?>