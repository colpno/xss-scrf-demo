<link rel="stylesheet" href="../css/cthd.css">

<?php
	include ('db/ketnoi.php');
	
    $select = "select * from chitiethoadon where   mahd={$_GET['mahd']}";
    $query = mysqli_query($con,$select);
    $dem = mysqli_num_rows($query);
?>
<div class="chitiethd">
<div class="hd">
	<h3>CHI TIẾT HÓA ĐƠN</h3>
	

<table>
    
    <tr class='tieude_hienthi_sp'>
        <td>Mã HD</td>
        <td>Tên sản phẩm</td>
        <td>Số lượng</td>
        <td>Giá</td>
        <td>Thành tiền</td>
    </tr>

    <?php
	


			$tong=0;					
    if($dem > 0){
        while ($bien = mysqli_fetch_array($query))
        {
		$thanhtien=$bien['gia']*$bien['soluong'];
		$tong+=$thanhtien;
?>

            <tr class='noidung_hienthi_sp'>
                <td class="masp_hienthi_sp"><?php  echo $bien['mahd'] ?></td>
                <td class="stt_hienthi_sp"><?php echo $bien['ten_sp'] ?></td>
				<td class="sl_hienthi_sp"><?php echo $bien['soluong'] ?></td>
				<td class="sl_hienthi_sp"><?php echo number_format($bien['gia'],0,",",".") ?></td>
				<td class="sl_hienthi_sp"><?php echo number_format($thanhtien,0,",",".") ?></td>
                
            </tr>
<?php 

		}
		
	?>
		<tr>
			<td colspan=5 align="right" style="padding:10px 20px 10px 0px; font-size:20px;">Tổng: <font color="red"><?php echo number_format($tong,0,",",".") ?></font><br>
				<?php if(isset($_SESSION['idnd'])){
				$sql=mysqli_query($con,"select * from khachhang where id_kh='".$_SESSION['idnd']."'");
				$row=mysqli_fetch_array($sql);
				?>

			<a href="index.php?act=lsdh&idnd=<?php echo $row['id_kh']; ?>">
				<?php
				$select = "select * from hoadon where idnd='".$_SESSION['idnd']."'";
				$query = mysqli_query($con,$select);
				$dem = mysqli_fetch_array($query);
				if($dem['trangthai']==1){
					echo "Đơn hàng đang chờ xử lý";
				}elseif($dem['trangthai']==2){
					echo "Đơn hàng dã được giao";
				}elseif($dem['trangthai']==3){
					echo "Đơn hàng đã bị hủy";
				}
				?>
			</a>
				<?php }	?>
		</td>	
		</tr>
	<?php 
	}
    else echo "<tr><td colspan='6'>Không có sản phẩm trong CSDL</td></tr>";
	
?>
</table>
	</div>
</div>



