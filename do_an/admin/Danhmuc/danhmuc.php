<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh Mục</title>
<link rel="stylesheet" href="css/admincentent.css" />
</head>
<body>
<?php
	include '../db/ketnoi.php';
	$hienthi = mysqli_query($con,"SELECT * FROM theloai");
	$dem = mysqli_num_rows($hienthi);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ DANH MỤC</h3>
	<a href='?act=themdm' >Thêm danh mục</a><br>
	<p>Có tổng <font color=red><b><?php echo $dem ?></b></font> danh mục</p>
	<form action="" method="post" name="frmTest" onsubmit="if(CheckForm() == false) return false">
		<table>
			<tr class="tieude_hienthi_sp">
				<td>Mã DM</td>
			   <td> Tên DM</td>
				<td>Thuộc </td>
				<td colspan=2>Active</td>
			</tr>
			<?php
				if($dem !="")
				{
					while($bien=mysqli_fetch_array($hienthi))
					{
			?>
			<tr>
				<td><?php echo $bien['id_tl'] ?></td>
				<td>
					<b><?php echo $bien['ten_tl'] ?></b>
				</td>
				<td>
					<?php
						if($bien['dequi'] ==0) {
							echo "Danh mục chính";
						}
						else {
							if($bien['dequi']==1) {
								echo "Điện thoại";
							}
							else {
								echo "Phụ kiện";
							}
						}
					?>
				</td>
				<td class="active_hienthi_sp">
					<p>
						<a href="?act=suadm&madm=<?php echo $bien['id_tl']?>" ><img src="../anh/sua.png" title="Sửa" class="sua"></a>
					</p>
					<?php echo "<p onclick = 'checkdel({$bien['id_tl'] })' ><img src='../anh/xoa.png' title='Xóa' class='delete'></p>" ?>
				</td>
			<?php  
					}
				}
				else{
					echo "<tr><td colspan='5'>Không có danh mục nào </td></tr>";
				}
			?>
		</table>
	</form>
</div>

</body>
</html>
<script language="JavaScript">
    function checkdel(madm)
    {
        var	madm=madm;
        var link="xoa_danhmuc.php?madm="+madm;
        if(confirm("Bạn có chắc chắn muốn xóa danh mục này?")==true)
            window.open(link,"_self",1);
    }
</script>