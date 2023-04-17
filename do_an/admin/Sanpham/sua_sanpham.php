<link rel="stylesheet" href="css/them_sanpham.css">
<?php
		//include('../include/connect.php');
		$idsp=$_GET['idsp'];
        $sql="select * from sanpham where id_sp=$idsp";
         $rows=mysqli_query($con,$sql);
         $row=mysqli_fetch_array($rows);
?>
<form action="Sanpham/update_sanpham.php?idsp=<?php echo $idsp;?>" method="post" name="frm" onsubmit="" enctype="multipart/form-data">
	<table>
			<tr class="tieude_themsp">
				<td colspan=2>Sửa Sản Phẩm </td>
			</tr>
    		<tr>
            	<td>Tên SP</td><td><input type="text" name="tensp" value="<?php echo $row['ten_sp'] ?>"/></td>
            </tr>
            <tr>
            	<td>Hình ảnh</td><td class="img_hienthi_sp"><img src="../uploads/<?=$row['anh_sp']?>" width="80" height="120"/><br /><br /><input type="file" name="hinhanh" /></td>
            </tr>
            <tr>
            	<td>Chi tiết</td><td><textarea name="chitiet" id="chitiet"><?php echo $row['chitiet_sp'] ?></textarea></td>
            </tr>  
			<tr>
            	<td>Số lượng</td><td><input type="text" name="soluong" size="5" value="<?php echo $row['soluong_sp'] ?>"/></td>
            </tr>
			<tr>
            	<td>Đã bán</td><td><input type="text" name="daban" size="5" value="<?php echo $row['daban'] ?>"/></td>
            </tr>
            <tr>
            	<td>Giá</td><td><input type="text" name="gia" value="<?php echo $row['gia_sp'] ?>"/></td>
            </tr>
			<tr>
            	<td>Giảm giá</td><td><input type="text" name="khuyenmai1" size="1" value="<?php echo $row['giakhuyenmai_sp'] ?>" /> &nbsp %</td>
            </tr>
			
            <tr>
            	<td>Mã DM</td><td> 
					<select name="danhmuc">
					<?php 
						$sql1="select * from theloai";
						$rows1=mysqli_query($con,$sql1);
						while($row1=mysqli_fetch_array($rows1))
					{
					?>
					<option value="<?php echo $row1['id_tl']?>" <?php if($row['id_tl']==$row1['id_tl']) echo 'selected="selected"';?>><?php echo $row1['ten_tl']?></option>
					<?php }?>
					</select>
				
				</td>
            </tr>
            <tr>
                <td colspan=2 class="input"> <input type="submit" name="update" value="Update" />
                <input type="reset" name="" value="Hủy" /></td>
            </tr>
        </table> 

</form>
<script type="text/javascript" language="javascript">
 
  CKEDITOR.replace( 'chitiet', {
	uiColor: '#d1d1d1'
});
</script>
