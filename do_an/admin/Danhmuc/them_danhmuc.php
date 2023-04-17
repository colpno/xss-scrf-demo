<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm Danh Mục</title>
<link rel="stylesheet" href="css/them_sanpham.css" />
</head>

<body>
<?php
	include'../db/ketnoi.php';

if(isset($_POST['btnthem']))
{
	$tendm=$_POST['tendm'];
	$dequi=$_POST['dequi'];
	
	$insertdm = mysqli_query($con,"INSERT INTO theloai(ten_tl,dequi) VALUES('$tendm', '$dequi') ");
	if($insertdm) {
		
		echo "<p align = center>Thêm danh muc <font color='red'><b> $tendm </b></font> thành công!</p>";
		echo '<meta http-equiv="refresh" content="1;url=trang1.php?act=dm">';
	}
	else {
		echo "Thêm thất bại";
	}
}
?>

<form action="" method="post">
	<table>
		<tr>
			
		</tr>
		<tr class="tieude_themsp">
				<td colspan=2>Thêm Danh Mục </td>
				
			</tr>
		<tr>
        	<td>Mã danh mục</td><td><input type="text" disabled="disabled" name="madm" size="5" /></td>
		</tr>
		<tr>
    		<td>Tên danh mục</td><td><input type="text" name="tendm" /></td>
		</tr>
		<tr>
            <td>Thuộc</td>
			<td>
            	<select name="dequi">
                	<option value="0">Danh mục chính</option>
					<option value="1">Điện thoại</option>
					<option value="2">phụ kiện</option>
                </select>
			</td>
		</tr>
		<tr>
			<td colspan=2 class="input">
            <input type="submit" name="btnthem" value="Thêm" class="btnthem" />
			<input type="reset" name="" value="Xóa" class="btnxoa"/>
			</td>
		</tr>
       </table>    
</form>




</body>
</html>