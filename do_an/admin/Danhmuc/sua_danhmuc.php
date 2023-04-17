<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="css/them_sanpham.css"	/>
</head>
<body>
<?php
	include'../db/ketnoi.php';
if(isset($_POST['btnthem']))
{
	$madm = $_GET['madm']; // Cho lên đầu nhé
   $m="";
   if($_POST['tendm'] == NULL){
      echo "Xin vui lòng nhập tên danh mục<br />";
   }else{
      $m=$_POST['tendm'];
   }




   if($m)
   {
	  $m = $_POST['tendm'];
	  $d = $_POST['dequi'];
      $sql="UPDATE theloai SET ten_tl='".$m."', dequi='".$d."' WHERE id_tl='".$madm."'"; 
      mysqli_query($con,$sql);
	  //mysqli_error();
      header("location:trang1.php?act=dm");
      //exit();
   }
}

$query=mysqli_query($con,"SELECT * FROM theloai WHERE id_tl= '{$_GET['madm']}' "); 

$row=mysqli_fetch_array($query); 

?>

<form action="?act=suadm&madm=<?php echo $row['id_tl']; ?>" method="post" name="frm" onsubmit="return kiemtra()"> <!-- $row ở đâu ra thế? -->
	<table>
		<tr class="tieude_themsp">
			<td colspan=2 >Sửa Danh Mục</td>
		</tr>
		<tr>
			<td>Mã danh mục</td>
			<td><input type="text" disabled="disabled" name="madm" size="5" value="<?php echo $row['id_tl']; ?>" /></td>
		</tr>
		<tr>
			<td>Tên danh mục</td>
			<td><input type="text" name="tendm" value="<?php echo $row['ten_tl']; ?>" /> </td>
		</tr>
		<tr>
				<td>Thuộc</td>
				<td>
					<select name="dequi">
            <option value="0">Danh mục chính</option>
						<option value="1">Điện thoại</option>
						<option value="2">Phụ kiện</option>  
        
            </select>
				</td>
	   </tr>
	   <tr>
				<td colspan=2 class="input"> <input type="submit" name="btnthem" value="Update" />
				<input type="reset" name="btnhuy" value="Hủy" /> </td>
		</tr>
	</table>
</form>
</body>
</html>

<script language="javascript">
 	function  kiemtra()
	{
	    if(frm.tendm.value=="")
		{
			alert("Bạn chưa nhập tên danh mục. Vui lòng kiểm tra lại");
			frm.tendm.focus();
			return false;	
		}
	}
 </script>