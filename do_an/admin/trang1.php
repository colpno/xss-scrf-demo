<?php
  session_start();
   if(!isset($_SESSION['username'])   or ($_SESSION['phanquyen']==1))
   {
		
		header('location:login.php');
		exit();
   }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang Quản Trị</title>
<link href="css/admin1.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<script charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
		.centent {
    margin-left: 300px;
    background-position: center;
    background-size: cover;
    height: auto;
    transition: 0.5s;
}s
	</style>
</head>

<body>
	<input type="checkbox" id="check">
	<header>
		<label for="check">
			<i class="fas fa-bars" id="sidebar_btn"></i>
		</label>
		<div class="left_area">
			<div class="left_area_p">
				<strong>xin chào admin:</strong>
				<small><?php echo $_SESSION['username']?></small>
			</div>
		</div>
		<div class="right_area">
			<a href="logout.php" class="dangx"><i class="fas fa-sign-out-alt"></i></a>
		</div>
	</header>
	<!-- mobi-->
	<div class="mobile_nav">
		<div class=nav_bar>
			<img src="../anh/logo.webp" class="mobile_profole_imge" alt="">
			<i class="fas fa-bars nav_btn" ></i>
		</div>
		<div class="mobile_nav_items">
			<a href="trang1.php?act=dm"><i class="fas fa-bars"></i><span>Danh Mục</span></a>
			<a href="trang1.php?act=hd"><i class="fas fa-clipboard"></i><span>Đơn Hàng</span></a>
			<a href="trang1.php?act=nd"><i class="fas fa-user"></i><span>Khách Hàng</span></a>
			<a href="trang1.php?act=sp"><i class="fas fa-mobile-screen-button"></i><span>Sản Phẩm</span></a>
			<input type="checkbox" id="checkmobitk">
			<label for="checkmobitk" >
			<a class="label_check">
				<i class="fas fa-edit"></i><span>Thống Kê</span><i class="fas fa-chevron-down drop-down"></i>
			</a>
		</label>
		
			<div class="sub-menu">
				<a href=""><i class="fas fa-edit"></i><span>thong ke 1</span></a>
				<a href=""><i class="fas fa-edit"></i><span>thong ke 2</span></a>
			</div>
		</div>
	</div>
	<!---->
	<div class="sidebar">
		<div class="profile_info">
			<img src="../anh/logo.webp" class="img_1" alt="">
			<h4><?php echo $_SESSION['username']?></h4>
		</div>	
		
		<a href="trang1.php?act=dm"><i class="fas fa-bars"></i><span>Danh Mục</span></a>
		<a href="trang1.php?act=hd"><i class="fas fa-clipboard"></i><span>Đơn Hàng</span></a>
		<a href="trang1.php?act=nd"><i class="fas fa-user"></i><span>Khách Hàng</span></a>
		<a href="trang1.php?act=sp"><i class="fas fa-mobile-screen-button"></i><span>Sản Phẩm</span></a>
		<input type="checkbox" id="checktk">
		<label for="checktk" >
			<a class="label_check">
				<i class="fas fa-edit"></i><span>Thống Kê</span><i class="fas fa-chevron-down drop-down"></i>
			</a>
		</label>
		
			<div class="sub-menu">
				<a href=""><i class="fas fa-edit"></i><span>thong ke 1</span></a>
				<a href=""><i class="fas fa-edit"></i><span>thong ke 2</span></a>
			</div>
		
	</div>	
		<div class="centent">
			<?php
				include('htContent.php');
			?>
	</div>
	<!--js .mobi_nav_items-->
	        <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
</body>
</html>