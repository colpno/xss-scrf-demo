<?php
if(isset($_GET['timkiem']))
{
  $tim=$_GET['timkiem'];
  switch($_GET['gia'])
  {
	case "1":
		$sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%' and (gia_sp between '0' and '1000000')";	
	break;
	case "2":
		$sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%'  and (gia_sp between '1000000' and '3000000')";	
	break;
	case "3":
		$sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%'  and (gia_sp between '3000000' and '5000000')";	
	break;
	case "4":
		$sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%'  and (gia_sp between '5000000' and '8000000')";	
	break;
	case "5":
		$sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%'  and (gia_sp between '8000000' and '10000000')";	
	break;
	case "6":
		$sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%'  and (gia_sp >= '10000000')";	
	break;
	default:
	  $sql="select * FROM sanpham WHERE ten_sp like '%".$tim."%' ";	
	  break;
  }
		
	$rows=mysqli_query($con,$sql);
	$tong=mysqli_num_rows($rows);
    if($tong<0)
     echo"Không tìm được sản phẩm nào";
    else
      {
    ?>
	<div class="sanpham">	
	<h2>Từ khóa <font color="yellow"><b><?php echo $tim ?></b></font> : có <?php echo $tong?> kết quả </h2>
	<div class="sanphamcon">
    <?php

        while($row=mysqli_fetch_array($rows))
        {
?>
		
		<div class="dienthoai">
			<?php 
										if($row['giakhuyenmai_sp']>0)
										{
									?>
									<div class="moi"><h3>-<?php echo $row['giakhuyenmai_sp']?>%</h3></div>
									<?php } ?>
			<a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>"><img  src="uploads/<?php echo $row['anh_sp'];?>"></a>					
			<p><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>" ><?php echo $row['ten_sp'];?></a></p>
			<h4><?php echo number_format(($row['gia_sp']*((100-$row['giakhuyenmai_sp'])/100)),0,",",".");?></h4>
				<div class="button">
										<ul>
											<li>
												<h1><a href="index.php?act=ctsp&idsp=<?php echo $row['id_sp'] ?>" class="chitiet"><button>Chi tiết</button></a></h1>
											</li>
											<li>
												<h5><a href="index.php?act=cart&action=add&idsp=<?php echo $row['id_sp'] ?>"><button>Cho vào giỏ</button></a></h5>
											</li>
										</ul>
									</div><!-- End .button-->
		</div><!-- End .dienthoai-->
	<?php } ?>
		</div><!-- End .sanphamcon-->
	</div><!-- End .sanpham-->
 
<?php 
}}
?>
