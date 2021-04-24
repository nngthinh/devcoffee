
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Menu</title>
	<!-- <link rel="icon" href="https://iconscout.com/icon/coffee-1199" type="image/x-icon" /> -->
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="../hf.css" />
	<?php
	$link = mysqli_connect("localhost", "root", "", "devcoffee");
	if (!$link) {
    die('Connection failed: (' . mysqli_errno($link) . ')' . mysqli_error($link));
	}
	?>
</head>
<body data-scy="scroll" data-target="a.navbar" data-offset="50">
<!-- Navigation -->
<header>
    <div class="navbar" id="topmobile">
      <a href="javascript:void(0)" id="burger"
      ><div class="burger_line"></div
      ></a>
      <div>
      <a href="../index.php" class="logo">
        <img src="../logo/devcoffee-white.svg" alt="devcoffe" />
      </a>
      </div>
    </div>
    <div class="navbar" id="widescreen">
      <div class="navlinks navlinks-left">
      <a href="../Introduction/introduce.php">Giới thiệu</a>
      <a href="../Recruitment/recruitment.php">Tuyển dụng</a>
      </div>
      <!--Logo-->
      <a href="../index.php" class="logo">
      <img src="../logo/devcoffee-white.svg" alt="devcoffe" />
      </a>
      <div class="navlinks navlinks-right">
      <a href="../MenuList/menu_list.php">Sản phẩm</a>
	  <a href="../Contact/lienhe.php">Liên hệ</a>
	  <?php 
        if (!isset($_COOKIE['username'])) {
          echo '<a href="../login/login.php">Đăng nhập</a>';
        }
        else {
          echo '<a href="../Profile/profile.php">Hồ sơ</a>';
        }
        ?> 
      </div>
    </div>
    </header>
<!-- <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<h2>Header here....</h2>
	
	</div>
</nav> -->
<nav class="navbar navbar-expand-md navbar-light bg-light menu-list sticky-top">

		<form action="" method="post">  
		<input type="text" name="term">  
		<button type="submit"><i class="fa fa-search"></i></button> 
		</form> 

</nav> 
<div class="container-fluid padding">
	<div class="row padding" >
		<div class="col-xs-12 col-md-3" >
			<div class="searchbar">
				<form action="" method="post">  
				<input type="text" name="term"> 
				<button type="submit"><i class="fa fa-search"></i></button>
				</form> 

				<?php
				if(($_POST['term'])!='') echo  'Kết quả tìm kiếm cho "', $_POST['term'], '"';
				?>
			</div>
			
		</div>
		<div class="col-xs-12 col-md-8 border-menu menu_lists">
			<div class="container-fluid padding">
				<br>
				<div class="container-fluid">
					<div class="row padding">
						<!-- <div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/bacsiu.html"><img class="card-img-top" src="./images/img7.webp" alt="img7"></a>
								<div class="card-body text-center">
									<h6>Bạc sỉu</h6>
									<h6 class="price">32.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/capheden.html"><img class="card-img-top" src="./images/img8.webp" alt="img8"></a>
								<div class="card-body text-center">
									<h6>Cà phê đen</h6>
									<h6 class="price">32.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/caphesua.html"><img class="card-img-top" src="./images/img9.webp" alt="img9"></a>
								<div class="card-body text-center">
									<h6>Cà phê sữa</h6>
									<h6 class="price">32.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/americano.html"><img class="card-img-top" src="./images/img10.webp" alt="img10"></a>
								<div class="card-body text-center">
									<h6>Americano</h6>
									<h6 class="price">39.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/cappuccino.html"><img class="card-img-top" src="./images/img11.webp" alt="img11"></a>
								<div class="card-body text-center">
									<h6>Cappuccino</h6>
									<h6 class="price">45.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/caramel.html"><img class="card-img-top" src="./images/img12.webp" alt="img12"></a>
								<div class="card-body text-center">
									<h6>Caramel Macchiato</h6>
									<h6 class="price">55.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/espresso.html"><img class="card-img-top" src="./images/img13.webp" alt="img13"></a>
								<div class="card-body text-center">
									<h6>Espresso</h6>
									<h6 class="price">35.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/latte.html"><img class="card-img-top" src="./images/img14.webp" alt="img14"></a>
								<div class="card-body text-center">
									<h6>Latte</h6>
									<h6 class="price">45.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4">
							<div class="card">
								<a href="../Products/mocha.html"><img class="card-img-top" src="./images/img15.webp" alt="img15"></a>
								<div class="card-body text-center">
									<h6>Mocha</h6>
									<h6 class="price">49.000 VND</h6>
									<input class="buybutton" type="button" value="MUA NGAY">
								</div>
							</div>
						</div> -->
    
            <!-- <?php
            $sql = "SELECT * FROM products";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
					echo '<div class="col-sm-6 col-md-4">
						<div class="card">
							<img class="card-img-top" src='. $row["image"] .'>
							<div class="card-body text-center">
								<h6>'. $row["name"] . '</h6>
								<h6 class="price">'. $row["price"] . ' VND</h6>
								<input class="buybutton" type="button" value="MUA NGAY">
							</div>
						</div>
					</div>';
  
                    }
                }
                mysqli_close($link);
            }
            ?> -->
     
			 <?php
			$link = mysqli_connect("localhost", "root", "", "devcoffee");
			 if (!$link) {
			 die('Connection failed: (' . mysqli_errno($link) . ')' . mysqli_error($link));
				 }
			$search_value=isset($_POST["term"])? $_POST["term"] : '';
	        $sql="select * from products where name like '%$search_value%'";

			if ($result = mysqli_query($link, $sql)) {
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_array($result)) {
					echo '<div class="col-sm-6 col-md-4">
						<div class="card">
							<img class="card-img-top" src='. $row["image"] .'>
							<div class="card-body text-center">
								<h6>'. $row["name"] . '</h6>
								<h6 class="price">'. $row["price"] . ' VND</h6>
								<input class="buybutton" type="button" value="MUA NGAY">
							</div>
						</div>
					</div>';

				}
			}
		
			mysqli_close($link);
		}
?>
					</div>
				</div>


			</div>
			
		</div>
	
	</div>
</div>

<footer>
	<div class="listSocial">
	  <div class="container">
		<div class="row">
		  <div class="footer contact col-md-6">
			<h4>KẾT NỐI</h4>
			<p>Sẵn sàng kết nối ngay cùng Dev!</p>
			<div class="social">
			  <a href="#"><i class="fa fa-lg fa-facebook"></i></a>
			  <a href="#"><i class="fa fa-lg fa-instagram"></i></a>
			  <a href="#"><i class="fa fa-lg fa-twitter"></i></a>
			  <a href="#"><i class="fa fa-lg fa-youtube-play"></i></a>
			</div>
		  </div>
		  <div class="footer subscribe col-md-6">
			<h4>LUÔN CẬP NHẬT</h4>
			<p>Đừng ngần ngại nhận những tin tức mới nhất của Dev!</p>
			<div class="input-group">
			  <input
				type="email"
				class="form-control newsletter-email"
				name="email"
				id="email"
				size="13"
				placeholder="Email"
				required=""
			  /><span class="input-group-btn"
				><button
				  class="btn btn-default"
				  type="submit"
				  name="subscribe"
				  id="mc-embedded-subscribe"
				>
				  Đăng Ký
				</button></span
			  >
			</div>
		  </div>
		</div>
	  </div>
	  <div class="copyRight">
		<div class="container">
		  <div class="row">
			<div class="footer about col-md-12">
			  <p>© 2020 DEVCOFFEE. All rights reserved</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </footer>
  <script src="hf.js"></script>
</body>
</html>