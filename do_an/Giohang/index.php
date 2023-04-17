<?php
	if(isset($_GET['idsp']))
	$stt=$_GET['idsp'];
	else $stt=0;
	switch($action){
		case "xoa":
			unset($_SESSION['giohang']);
			echo '
				<script>
					alert("Bạn Đã Xóa Thành Công");
					window.open("index.php","_self",1);
				</script>
			';
			break;
		case "check":
			include('check.php');
			break;
		case "tt":
			include('ttkh.php');
			break;
		case "insert":
			include('insert.php');
			break;
		case "add":
			$sql="SELECT soluong_sp FROM sanpham WHERE id_sp=$stt";
			$rows = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($rows);
			if	($row['soluong_sp']==0){
				echo '
					<script>
						alert("Sản phẩm hết hàng ^^.");
						history.back();
						history.go(-1);
					</script>
				
				';
			}
			elseif(@$_POST['soluongmua']==0){
				$_SESSION['giohang'][$stt] = 1 ;
				echo '
					<script>
						alert("Sản Phẩm Đã Thêm Vào Giỏ");
						history.back();
						history.go(-1);
					</script>
				';
			}
			else{
				$_SESSION['giohang'][$stt]=$_POST['soluongmua'];
				echo '
					<script>
						alert("Sản Phẩm Đã Thêm Vào Giỏ");
						history.back();
						history.go(-1);
					</script>
				';
			}
			break;
		case "addcart":
			$sql="SELECT soluong_sp FROM sanpham WHERE id_sp=$stt";
			$rows = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($rows);
			if($row['soluong_sp']==0){
				echo '
					<script>
						alert("Sản Phẩm này Tạm Thời Hết Hàng ^^.");
						history.back();
						history.go(-2);
					</script>
				';
			}elseif($row['soluong_sp'] < $_SESSION['giohang'][$stt]){
				echo '
					<script>
						alert("Số Lượng Mua Lớn Hơn Số Hàng Còn Lại Trong Kho.");
						history.back();
						history.g0(-2);
					</script>
				';
			}else{
				$sl=$_POST['sl'];
				$_SESSION['giohang'][$stt];
				echo '
					<script>
						alert("Sản Phẩm Được Thêm Vào Giỏ Hàng.");
						history.back();
						history.g0(-2);
					</script>
				
				';
			}
			break;
		case "update":
			if(isset($_POST['huy']))
			$sl=0;
			else 
			$sl=$_POST['sl'];
			if	($sl == 0)
			unset($_SESSION['giohang'][$stt]);
			else
			$_SESSION['giohang'][$stt]=$sl;
			echo '
				<script >
    				alert("cập nhật thành công");
					window.location.href="index.php?act=cart";
				</script>
				';
			break;
			default:
			include('xemcart.php');
			break;
	}
?>