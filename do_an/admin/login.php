<?php
session_start();
if	(isset($_SESSION['username'])){
	if($_SESSION['phanquyen']==1){
		header("location:../index.php");
	}
	if($_SESSION['phanquyen']==0){
		header("location:trang1.php");
	}
}
?>
<link rel="stylesheet" href="css/admin.css">
<div class="body">
	<div class="tieude">
		<div class="quantri">
			<h2>Đăng nhập quản trị</h2>
		</div>
	</div>
</div>
<?php
include("../db/ketnoi.php");

if(isset($_POST['login']))
{
    $username = $_POST['user'];
    $password = md5($_POST['pass']);
    $sql_check = mysqli_query($con,"select * from khachhang where tentaikhoan = '$username'");
    $dem = mysqli_num_rows($sql_check);
    if($dem == 0)
    {
        echo "<p class='thongbaoloi'>Tài khoản không tồn tại</p>";
    }
    else
    {
        $sql_check2 = "select * from khachhang where tentaikhoan = '$username' and password = '$password'";
		$row=mysqli_query($con,$sql_check2);	
        $dem2 = mysqli_num_rows($row);
        if($dem2 == 0)
            echo "<p class='thongbaoloi'>Mật khẩu không chính xác</p>";
        else
        {
	
		 while($rows = mysqli_fetch_array($row))
            {
              	$_SESSION['username'] = $username;
				$_SESSION['phanquyen'] = $rows['phanquyen'];
				$_SESSION['idnd'] = $rows['id_kh'];
                if($rows['phanquyen'] == 0)
                {
                    
					echo "
							<script language='javascript'>
								alert('Đăng nhập quản trị thành công');
								window.open('trang1.php','_self', 1);
							</script>
						";
                }
                else
                {
                    
					header('location:../index.php');
                }
            }
        }
    }
}
?>
<div class="admin_login">
    <form action="" method="post">
        <label>Tên tài khoản:</label><input type="text" name="user" placeholder=" Username"><br>
        <label>Mật khẩu:</label><input type="password" name="pass" placeholder=" Password"><br>
        <button name="login" class="dangnhap">Đăng nhập</button><button class="thoat"><a href="../index.php">Thoát</a></button>
    </form>
</div>
</div>