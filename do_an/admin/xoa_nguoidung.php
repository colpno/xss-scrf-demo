 <?php
function redirect($url, $message="", $delay=0) { 
/* redirects to a new URL using meta tags */ 
echo "<meta http-equiv='refresh' content='$delay;URL=$url'>"; 
if (!empty($message)) echo "<div style='font-family: Arial, Sans-serif;
font-size: 14pt;' align=center>$message</div>"; 
exit; 
} 
include '../db/ketnoi.php';

$delete = "delete from khachhang where id_kh='{$_GET['idnd']}'";
$tennd=$_GET['idnd'];
$del = mysqli_query($con,$delete);
if ($del)
	//echo "thanh cong";
	//header("location: index.php?admin=hienthind");
	redirect ("trang1.php?act=nd", "Xóa người dùng thành công. ", 2);
	else
	echo "Xóa người dùng thất bại";
?>