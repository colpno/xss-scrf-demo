<?php
	if(isset($_POST['id']))
	{
	foreach($_POST['id'] as $idsp)
	{
		$_SESSION['id'][$idsp]=1;
	}
	

		if(isset($_POST['giaohang']))
		{
			foreach($_SESSION['id'] as $idsp=>$value)
			{
				if ($value==1)
				$sql="update hoadon set trangthai=2 where idsp='$idsp'";
				mysqli_query($con,$sql);
				unset($_SESSION['id']);
				echo "
							<script language='javascript'>
								alert('Đã giao hàng');
								window.open('trang1.php?act=sp','_self', 1);
							</script>
						";
			}
		}
		else if(isset($_POST['huy']))
			{ 
				foreach($_SESSION['id'] as $idsp=>$value)
				{
					if ($value==1)
					$sql="update hoadon set trangthai=3 where idsp='$idsp'";
					mysqli_query($con,$sql);
					unset($_SESSION['id']);
					echo "
							<script language='javascript'>
								alert('Đã huỷ đơn hàng');
								window.open('trang1.php?act=sp','_self', 1);
							</script>
						";
				}
			}
			else
					{
						foreach($_SESSION['id'] as $idsp=>$value)
						{
							if ($value==1)
							$sql="delete from sanpham where id_sp='$idsp'";
							mysqli_query($con,$sql);
							unset($_SESSION['id']);
							echo "
							<script language='javascript'>
								alert('Xóa thành công');
								window.open('trang1.php?act=sp','_self', 1);
							</script>
						";
						}
			
					}

			}		else echo "
							<script language='javascript'>
								alert('Bạn chưa chọn sản phẩm cần xử lý');
								window.open('trang1.php?act=sp','_self', 1);
							</script>
						";
		
?>