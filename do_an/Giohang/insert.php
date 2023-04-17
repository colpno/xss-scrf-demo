
<?php
if($action="insert")
{
$hoten=$_POST['hoten'];
$dienthoai=$_POST['dienthoai'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$phuongthuc=$_POST['phuongthuc'];
$ngay=date('Y-m-d');
		if(isset($_SESSION['idnd'])){	
			$sql=mysqli_query($con,"select * from khachhang where id_kh='".$_SESSION['idnd']."'");
			$row=mysqli_fetch_array($sql);
			
			$idnd=$row['id_kh'];
	
$sql="INSERT INTO hoadon(idnd,hoten,diachi,dienthoai,email,ngaydathang,trangthai) VALUES 
('$idnd','$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";

}
	else 
	$sql="INSERT INTO hoadon(hoten,diachi,dienthoai,email,ngaydathang,trangthai) VALUES 
('$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";

	mysqli_query($con,$sql);
	
    $mahd=mysqli_insert_id($con);
	
    foreach($_SESSION['giohang'] as $stt => $soluong)
            {
               $sql="select * from sanpham where id_sp=$stt";
               $rows=mysqli_query($con,$sql);
               $row=mysqli_fetch_array($rows);
               //$mahd=$row['mahd'];
               $tensp=$row['ten_sp'];
        
               $gia=$row['gia_sp']*((100-$row['giakhuyenmai_sp'])/100);
               $sql1 ="insert into chitiethoadon(mahd,ten_sp,soluong,gia,ptthanhtoan) values('$mahd','$tensp','$soluong','$gia','$phuongthuc')";
			
              mysqli_query($con,$sql1);
              
            }
    foreach($_SESSION['giohang'] as $stt => $soluong)
            {
               
               $sql="select * from sanpham where id_sp=$stt";
               $rows=mysqli_query($con,$sql);
               $row=mysqli_fetch_array($rows);
               $ban=$row['daban']+$soluong;
               $sql="UPDATE sanpham SET daban='$ban' WHERE id_sp = $stt";
               
                mysqli_query($con,$sql);
            }
	
unset($_SESSION['giohang']);
//var_dump($_SESSION['giohang']);
}
?>

<?php
echo "
	<script>
		alert('Đơn Hàng Thiết Lập Thành Công.');
		window.open('index.php','_self',3);
	</script>
	";

?>