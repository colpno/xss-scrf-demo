<?php 
function redirect($url, $message="", $delay=0) { 
/* redirects to a new URL using meta tags */ 
echo "<meta http-equiv='refresh' content='$delay;URL=$url'>"; 
if (!empty($message)) echo "<div style='font-family: Arial, Sans-serif;
font-size: 14pt;' align=center>$message</div>"; 
exit; 
} 
include 'db/ketnoi.php';

if(isset($_POST['submit']))
{
	$tennd=$_POST['user'];
	$user=$_POST['tenkh'];
	$pass=md5($_POST['pass']);
	$email=$_POST['email'];
	$ngaysinh=$_POST['ngaysinh'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
	$sql_dk="SELECT * FROM khachhang where tentaikhoan='$tennd'";
	$result = mysqli_query($con, $sql_dk);
		if(mysqli_num_rows($result) > 0) {
			redirect("index.php?act=dn", "Tài Khoản đã tồn tại.", 2 );
		}
		else{
			$insert="INSERT INTO khachhang(tentaikhoan,ten,password,ngaysinh,email,phone,diachi,ngaydangky,phanquyen) VALUES ('$tennd','$user','$pass','$ngaysinh','$email','$dienthoai','$diachi','$ngay','1')";
			$query=mysqli_query($con,$insert);
			redirect("index.php?act=dn", "Bạn đã đăng ký thành công.", 2 );
			}
}
?>