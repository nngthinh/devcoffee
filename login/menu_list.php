<?php  
	session_start();
	if(!isset($_SESSION['valid'])) {
		header('location: login.php');
	}
	if(isset($_POST['logout'])) {
		header('location: logout.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Menu - The Ami Coffee</title>
	<link rel="icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body data-scy="scroll" data-target="a.navbar" data-offset="50">
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<h2>The Ami Coffee</h2>
		<div class="box-search">
			<input type="search" id="search" placeholder="Search">
		</div>
		<div class="logout">
			<form method="POST">
				<input type="submit" name="logout" id="logout" value="Logout">
			</form>
		</div>
	</div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-light menu-list sticky-top">
	<div class="container-fluid">
		<span><a href="#type1">Nổi bật trong tuần</a></span>
		<span><a href="#type2">Cà phê Việt Nam</a></span>
		<span><a href="#type3">Cà phê máy</a></span>
		<span><a href="#type4">Cold Brew</a></span>
		<span><a href="#type5">Trà trái cây</a></span>
		<span><a href="#type6">Trà sữa macchiato</a></span>
		<span><a href="#type7">Cà phê đá xay</a></span>
		<span><a href="#type8">Thức uống trái cây</a></span>
	</div>
</nav>
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-xs-12 col-sm-6 col-md-1">
			<img class="chibi" src="./images/chibi_1.gif" alt="chibi_1">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-2">
			<br>
			<h4><a href="#">Loại thức uống hiện có</a></h4>
			<br><br>
			<table class="border-table">
				<tr><td><a href="#type1">Nổi bật trong tuần</a></td></tr>
				<tr><td><a href="#type2">Cà phê Việt Nam</a></td></tr>
				<tr><td><a href="#type3">Cà phê máy</a></td></tr>
				<tr><td><a href="#type4">Cold Brew</a></td></tr>
				<tr><td><a href="#type5">Trà trái cây</a></td></tr>
				<tr><td><a href="#type6">Trà sữa macchiato</a></td></tr>
				<tr><td><a href="#type7">Cà phê đá xay</a></td></tr>
				<tr><td><a href="#type8">Thức uống trái cây</a></td></tr>
			</table>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-8">
			<div class="container-fluid padding">
				<div id="type1" class="container-fluid">
					<div>
						<h1>Nổi bật trong tuần</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img1.webp" alt="img1">
								<div class="card-body text-center">
									<h6>Macca phủ socola</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img2.jpg" alt="img2">
								<div class="card-body text-center">
									<h6>Cà phê lúc mạch đá</h6>
									<h6>Giá: 69.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img3.webp" alt="img3">
								<div class="card-body text-center">
									<h6>Cà phê lúc mạch nóng</h6>
									<h6>Giá: 69.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img4.webp" alt="img4">
								<div class="card-body text-center">
									<h6>Trà sữa Mắc ca trân châu trắng</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img5.webp" alt="img5">
								<div class="card-body text-center">
									<h6>Trà đen Macchiato</h6>
									<h6>Giá: 42.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img6.webp" alt="img6">
								<div class="card-body text-center">
									<h6>Trà đào cam sả</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="type2" class="container-fluid">
					<div>
						<h1>Cà phê Việt Nam</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img7.webp" alt="img7">
								<div class="card-body text-center">
									<h6>Bạc sỉu</h6>
									<h6>Giá: 32.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img8.webp" alt="img8">
								<div class="card-body text-center">
									<h6>Cà phê đen</h6>
									<h6>Giá: 32.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img9.webp" alt="img9">
								<div class="card-body text-center">
									<h6>Cà phê sữa</h6>
									<h6>Giá: 32.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="type3" class="container-fluid">
					<div>
						<h1>Cà phê máy</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img10.webp" alt="img10">
								<div class="card-body text-center">
									<h6>Americano</h6>
									<h6>Giá: 39.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img11.webp" alt="img11">
								<div class="card-body text-center">
									<h6>Cappuccino</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img12.webp" alt="img12">
								<div class="card-body text-center">
									<h6>Caramel Macchiato</h6>
									<h6>Giá: 55.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img13.webp" alt="img13">
								<div class="card-body text-center">
									<h6>Espresso</h6>
									<h6>Giá: 35.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img14.webp" alt="img14">
								<div class="card-body text-center">
									<h6>Latte</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img15.webp" alt="img15">
								<div class="card-body text-center">
									<h6>Mocha</h6>
									<h6>Giá: 49.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="type4" class="container-fluid">
					<div>
						<h1>Cold Brew</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img16.webp" alt="img16">
								<div class="card-body text-center">
									<h6>Cold Brew truyền thống</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img17.webp" alt="img17">
								<div class="card-body text-center">
									<h6>Cold Brew phúc bồn tử</h6>
									<h6>Giá: 50.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img18.webp" alt="img18">
								<div class="card-body text-center">
									<h6>Cold Brew sữa tươi</h6>
									<h6>Giá: 50.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="type5" class="container-fluid">
					<div>
						<h1>Trà trái cây</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img19.webp" alt="img19">
								<div class="card-body text-center">
									<h6>Trà Oolong vải</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img20.webp" alt="img20">
								<div class="card-body text-center">
									<h6>Trà Oolong hạt sen</h6>
									<h6>Giá: 32.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img21.webp" alt="img21">
								<div class="card-body text-center">
									<h6>Trà đào cam sả</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="type6" class="container-fluid">
					<div>
						<h1>Trà sữa machhiato</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img22.webp" alt="img22">
								<div class="card-body text-center">
									<h6>Trà Khoai môn</h6>
									<h6>Giá: 42.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img23.webp" alt="img23">
								<div class="card-body text-center">
									<h6>Trà lài machhiato</h6>
									<h6>Giá: 42.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img24.webp" alt="img24">
								<div class="card-body text-center">
									<h6>Trà đen machhiato</h6>
									<h6>Giá: 42.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img25.webp" alt="img25">
								<div class="card-body text-center">
									<h6>Trà sữa mắc ca trân châu trắng</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img26.webp" alt="img26">
								<div class="card-body text-center">
									<h6>Trà matcha machhiato</h6>
									<h6>Giá: 45.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img27.webp" alt="img27">
								<div class="card-body text-center">
									<h6>Trà xoài macchiato</h6>
									<h6>Giá: 55.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="type7" class="container-fluid">
					<div>
						<h1>Cà phê đá xay</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img28.webp" alt="img28">
								<div class="card-body text-center">
									<h6>Trà cà phê đá xay</h6>
									<h6>Giá: 59.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img29.webp" alt="img29">
								<div class="card-body text-center">
									<h6>Cà phê đá xay</h6>
									<h6>Giá: 59.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="type8" class="container-fluid">
					<div>
						<h1>Thức uống trái cây</h1>
					</div>
					<div class="row padding">
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img30.webp" alt="img30">
								<div class="card-body text-center">
									<h6>Chanh sả đá xay</h6>
									<h6>Giá: 49.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img31.webp" alt="img31">
								<div class="card-body text-center">
									<h6>Phúc bồn tử cam đá xay</h6>
									<h6>Giá: 59.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="./images/img32.webp" alt="img32">
								<div class="card-body text-center">
									<h6>Sinh tố cam xòai</h6>
									<h6>Giá: 59.000 VND</h6>
									<input type="button" value="Mua ngay">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-1">
			<img class="chibi" src="./images/chibi_2.gif" alt="chibi_1">
		</div>
	</div>
</div>
<div class="container-fluid padding footer-style">
	<div class="row text-center padding">
		<div class="col-12">
			<h6 id="footer">Thông tin quán Ami Coffee</h6>
			<a href="#">Facebook</a> |
			<a href="#">Zalo</a> |
			<a href="#">Instagram</a>
		</div>
	</div>
</div>
</body>
</html>