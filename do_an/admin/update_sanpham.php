 <?php
function redirect($url, $message="", $delay=0) { 
/* redirects to a new URL using meta tags */ 
echo "<meta http-equiv='refresh' content='$delay;URL=$url'>"; 
if (!empty($message)) echo "<div style='font-family: Arial, Sans-serif;
font-size: 14pt;' align=center>$message</div>"; 
exit; 
}
 include('../db/ketnoi.php');

		$tensp=$_POST['tensp'];
		$gia=$_POST['gia'];
		$chitiet=$_POST['chitiet'];
		$khuyenmai1=$_POST['khuyenmai1'];
	   //$hinhanh=$_POST['hinhanh'];
	   
	  $upload_image="../uploads/";
		$file_tmp= isset($_FILES['hinhanh']['tmp_name']) ?$_FILES['hinhanh']['tmp_name'] :"";
		$file_name=isset($_FILES['hinhanh']['name']) ?$_FILES['hinhanh']['name'] :"";
		$file_type=isset($_FILES['hinhanh']['type']) ?$_FILES['hinhanh']['type'] :"";
		$file_size=isset($_FILES['hinhanh']['size']) ?$_FILES['hinhanh']['size'] :"";
		$file_error=isset($_FILES['hinhanh']['error']) ?$_FILES['hinhanh']['error'] :"";
		//Lay gio cua he thong
		$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		//Lay ngay cua he thong
		$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
		
		$file__name__=$dmyhis.$file_name;
		
		$soluong=$_POST['soluong'];
		$daban=$_POST['daban'];
		$madm=$_POST['danhmuc'];
		$idsp=$_GET['idsp'];
		if($_FILES['hinhanh']['name'] != "")
		{
		move_uploaded_file($file_tmp,$upload_image.$file__name__);
	   
	$sql_update=("
		UPDATE sanpham SET 
							ten_sp='$tensp',
							soluong_sp='$soluong',
							daban='$daban',
							anh_sp='$file__name__',
						
							chitiet_sp='$chitiet',
							gia_sp='$gia',
							giakhuyenmai_sp='$khuyenmai1',
							id_tl='$madm'
						WHERE id_sp='$idsp'
	");
	}
    else {
	   	$sql_update=("
		UPDATE sanpham SET 
							ten_sp='$tensp',
							
							soluong_sp='$soluong',
							daban='$daban',
							
							chitiet_sp='$chitiet',
							gia_sp='$gia',
							giakhuyenmai_sp='$khuyenmai1',
							
							id_tl='$madm'
						WHERE id_sp='$idsp'
	");
	}
	//echo $sql_update;
$update=mysqli_query($con,$sql_update);
		if($update)
{
		redirect("trang1.php?act=sp", "Bạn đã sửa thành công sản phẩm.", 2 );
	}
else {
	redirect ("trang1.php?act=suasp&idsp=$idsp'", "Sửa thất bại", 2);
	}
	
?>
