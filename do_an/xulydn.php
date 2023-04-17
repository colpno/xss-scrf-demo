<?php
session_start();
include("db/ketnoi.php");
if(isset($_POST['dangnhap'])){
	$username=$_POST['user'];
	$password =md5($_POST['pass']);
	$sql_check =mysqli_query($con,"select * from khachhang where tentaikhoan = '$username'");
	$dem=mysqli_num_rows($sql_check);
	if($dem==0)
	{
		$_SERVER['thongbaoloi']="Tài Khoản không tồn tại.";
		echo " 
		<script>
			alert('Tài Khoản Không Tồn Tại');
			window.open('index.php?act=dn','_self',1);
		</script>
		";
		
	}else{
		$sql_check2=mysqli_query($con,"select *from khachhang where tentaikhoan='$username' and password='$password'");
		$dem2=mysqli_num_rows($sql_check2);
		if($dem2==0){
			echo " 
			<script>
				alert('Mật khẩu đăng nhập không đúng');
				window.open('index.php?act=dn','_self',1);
			</script>
			";
		}
	else{
		$row=mysqli_fetch_array($sql_check2);
		$_SESSION['username'] = $username;
		$_SESSION['phanquyen'] = $row['phanquyen'];
		$_SESSION['idnd'] = $row['id_kh'];
		 if($_SESSION['phanquyen'] ==0)
					{
						
						echo "
							<script language='javascript'>
								alert('Đăng nhập vào trang quản trị thành công');
								window.open('admin/trang1.php','_self', 1);
							</script>
						";
					}
                else
                {
                   
                   echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								window.open('index.php','_self', 1);
							</script>
						";
                }
	}
	}
}
?>