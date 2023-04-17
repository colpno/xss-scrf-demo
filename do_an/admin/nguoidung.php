<link rel="stylesheet" href="css/admincentent.css">
<?php
	include ('../db/ketnoi.php');
	
    $select = "select * from khachhang where phanquyen=1";
    $query = mysqli_query($con,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="quanlysp">
	<h3>QUẢN LÝ NGƯỜI DÙNG</h3>
	
	<p>Có tổng <font color=red><b><?php echo $dem ?></b></font> người dùng</p>
<table>
    <tr class='tieude_hienthi_sp'>
        <td>ID</td>
        <td>Tên ND</td>
        <td>Username</td>
        <td>Email</td>
        <td>Điện thoại</td>
        <td>Quyền</td>
        <td>Active</td>
    </tr>

    <?php

		$sql = mysqli_query($con,$select = "select * from khachhang where phanquyen=1"); 



								
    if($dem > 0)
        while ($bien = mysqli_fetch_array($sql))
        {
?>
            <tr >
                <td ><?php  echo $bien['id_kh'] ?></td>
                <td ><?php echo $bien['tentaikhoan'] ?></td>
                <td > <?php echo $bien['ten'] ?>  </td>
				<td ><?php echo $bien['email'] ?></td>
				<td ><?php echo $bien['phone'] ?></td>
				<td ><?php 
					if($bien['phanquyen']==0)
						echo "Administrator";
					else 
						echo "Người dùng";
					
				?></td>
                <td class="active_hienthi_sp">
					<?php echo "<p onclick = 'checkdel({$bien['id_kh'] })' ><img src='../anh/xoa.png' title='Xóa' class='delete'></p>"  ?>
                </td>
            </tr>
<?php 
    }
	
    else echo "<tr><td colspan='6'>Không có khách hàng</td></tr>";
	
?>
</table>
</div>
	

<script language="JavaScript">
    function checkdel(idnd)
    {
        var	idnd=idnd;
        var link="xoa_nguoidung.php?idnd="+idnd;
        if(confirm("Bạn có chắc chắn muốn xóa người dùng này?")==true)
            window.open(link,"_self",1);
    }
</script>