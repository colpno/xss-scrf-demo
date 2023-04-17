<base href="http://localhost/Lopthu3_Tiet12345_Nhom8/do_an/" />
<?php
session_start();
include("db/ketnoi.php");
?>
<!DOCTYPE>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bán Điện Thoại</title>
	<link rel="stylesheet" href="css/index_css.css">
	<link rel="stylesheet" href="css/cthd.css">
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-----------------------slide------------->
	<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
	<script language="javascript" type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var nut = {
				previous: $('#slide .lof-previous'),
				next: $('#slide .lof-next')
			};
			$obj = $('#slide').lofJSidernews({
				interval: 4000,
				direction: 'opacitys',
				easing: 'easeInOutExpo',
				duration: 2000,
				auto: true,
				maxItemDisplay: 4,
				navPosition: 'horizontal',
				navigatorHeight: 32,
				navigatorWidth: 80,
				mainWidth: 1000,
				buttons: nut
			});

		});
	</script>
</head>

<body style="background:#19B3D3">
	<div id="wapper">
		<div id="header">
			<div id="logo_header">
				<h1>
					<a href="index.php">logo</a>
				</h1>
			</div>
			<div id="anh_header"></div>
			<div id="menu-header">
				<?php include("Giaodien/menu-header.php") ?>
			</div>
		</div>
		<div id="content">
			<div id="slide" class="lof-slide" style="width: 1000px; height: 350px;">
				<div class="preload">
					<div></div>
				</div>
				<div id="lof-main">
					<ul class="lof-main-wapper">
						<li><img src="anh/slide/slide1.png" width="1000" height="350"></li>
						<li><img src="anh/slide/slide2.png" width="1000" height="350"></li>
						<li><img src="anh/slide/slide3.png" width="1000" height="350"></li>
						<li><img src="anh/slide/slide4.png" width="1000" height="350"></li>
						<li><img src="anh/slide/slide5.png" width="1000" height="350"></li>
					</ul>
				</div>
				<div class="lof-navigator-wapper">
					<div onclick="return false" class="lof-next">Next</div>
					<div class="lof-navigator-outer">
						<ul class="lof-navigator">
							<li><img src="anh/slide/slide1.png" width="70" height="25"></li>
							<li><img src="anh/slide/slide2.png" width="70" height="25"></li>
							<li><img src="anh/slide/slide3.png" width="70" height="25"></li>
							<li><img src="anh/slide/slide4.png" width="70" height="25"></li>
							<li><img src="anh/slide/slide5.png" width="70" height="25"></li>
						</ul>
					</div>
					<div onclick="return false" class="lof-previous">Previous</div>
				</div>
			</div>
			<div id="main-centent">
				<div id="left-content">
					<?php
					include("Content/Left-content.php")
					?>
				</div>
				<div id="center-content">
					<?php
					include("Content/Content.php");
					?>
				</div>
				<div id="right_content">
					<?php
					include("Content/Right-content.php")
					?>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="menu-footer">
				<ul>
					<li><a href="index.php">TRANG CHỦ</a></li>
					<li><a href="index.php?act=gt">GIỚI THIỆU</a></li>
					<li><a href="index.php?act=sp">SẢN PHẨM</a></li>
					<li><a href="index.php?act=pk">PHỤ KIỆN</a></li>
					<li><a href="index.php?act=ht">HỖ TRỢ</a></li>
				</ul>
			</div>
			<div id="bg-footer">
				<div id="ndfooter">
					<div id="lg-footer">
						<h3><a href="index.php">logo</a></h3>
					</div>
					<div id="noidung">
						<ul>
							<li><span id="tennhom">NHÓM ĐÔ ÁN WEB THẦY SANG</span></li><br>
							<li>Địa Chỉ: Cai Lậy - Tiềng Giang</li>
							<li>Điện Thoại: 096.420.1735 - Hotline: 096.420.1735</li>
							<li>Email: tritrantvs121295@gmail.com</li>
						</ul>
					</div>
					<div id="thanhngang"><img src="anh/thanhngang-footer.png" alt=""></div>
					<div id="tentv">
						<p>Sinh Viên : Trường| Nhân | Hào | Nguyên</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>