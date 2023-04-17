<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
<link rel="stylesheet" href="style/style_header.css">
<style>	

	/*
	https://cdn.pixabay.com/photo/2017/01/31/23/42/animal-2028258__340.png
	#menuheader{
		width: 100%;
		height: 50px;
		background: #DE1FD8;
		
	}
	.logo img{
		display: inline-block;
		width: 50px;
		height: 50px;
		text-align: left;
	}
	#menuheader div{
		display: inline-block;
		text-align: right;
	}
	#menuheader li{
	display: inline-block;
		list-style: none;
		text-align: left;
	}
	#menuheader ul li{
		padding: 10px 20px;
	}*/
</style>
	
</head>
<body>
<header id="header">
<div class="logo">
			<li><a href=""></a><img src="../do_an/anh/logo herader.webp" alt="" style="height:50px;width: 50px;"></li>
		</div>
		
		<div class="menu">
			<li><a href="index.php">TRANG CHỦ</a></li>
			<li><a href="Gioi_Thieu.html">GIỚI THIỆU</a></li>
			<li><a href="Lien_he.html">LIÊN HỆ</a></li>
			<li><a href="The_Loai.html">PHỤ KIỆN<i class="fas fa-chevron-right float-right" style="transform: rotate(90deg);margin-left: 6px;"></i></a></li>
			<li><a href="The_Loai.html">SẢN PHẨM<i class="fas fa-chevron-right float-right" style="transform: rotate(90deg);margin-left: 6px;"></i></a>
				<ul class="sub_menu">
					<li class="sub_menu_li"><a href="">Iphone</a>
						<ul>
							<li>Iphone13</li>
							<li>Iphone13 pro max</li>
							<li>Iphone12</li>
							<li>Iphone12 pro max</li>
						</ul>
					</li>
					<li class="sub_menu_li"><a href="">Samsung</a>
						<ul>
							<li>Samsung Galaxy S21 Ultra</li>
							<li>SAMSUNG Galaxy</li>
							<li>Samsung S21 Plus</li>
							<li>Samsung Galaxy S20+</li>
						</ul>
					</li>
					<li class="sub_menu_li"><a href="">Oppo</a>
						<ul>
							<li>OPPO A95</li>
							<li>OPPO A93</li>
							<li>OPPO A5s</li>
							<li>Oppo A57</li>
						</ul>
					</li>
					<li class="sub_menu_li"><a href="">Xiao Mi</a>
						<ul>
							<li>Xiaomi Redmi Note 10 Pro</li>
							<li>Xiaomi Mi Note 10 Lite</li>
							<li>Xiaomi Mi 11 Ultra</li>
							<li>Xiaomi Redmi 9A</li>
						</ul>
					</li>
					<li class="sub_menu_li"><a href="">Vivo</a>
						<ul>
							<li>Vivo X70 Pro</li>
							<li>Vivo Y50</li>
							<li>Vivo Y21s</li>
							<li>Vivo Y11</li>
						</ul>
					</li>
					<li class="sub_menu_li"><a href="">NOKIA</a>
						<ul>
							<li>Nokia 3.4</li>
							<li>Nokia C30</li>
							<li>Nokia C20</li>
							<li>Nokia G10</li>
						</ul>
					</li>
				</ul>
			</li>	
		</div>
		<div></div>
		<div class="others">
			<li><input placeholder="Tìm Kiếm" type="text"><i class="fas fa-search"></i></li>
			<?php 
			   if (isset($_SESSION['ten']) && $_SESSION['ten']){
				   echo '<div class="ten">'.$_SESSION['ten'].'<div class="thoat"><a href="Logout.php">Logout</a></div></div>';
				}
				else 
					echo'<li><a href="index.php?act=dn"><i class="fas fa-user"></i></a></li>';
					
			?>
			
			<li><a href="Gio_hang.html"><i class="fas fa-shopping-cart"><sup>0</sup></i></a></li>
			
		</div>
</header>

	
</body>
</html>

