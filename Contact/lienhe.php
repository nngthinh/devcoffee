<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lien he</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../hf.css" />


</head>

</style>
<body>
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
<div class="container">
  <div class="row">
    <div class="col-xs-4 col-md-4">
      <img src="../logo/devcoffee-black.svg" alt="devcoffe" />
        <h3>Công ty Cổ phần Thương mại và Dịch vụ Dev Việt Nam</h3>
    </div>
    <div class="col-xs-4 col-md-4">
        <h3 class="lienhe-title">Mạng xã hội</h3>
        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        <a href="https://twitter.com/" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        <a href="https://www.youtube.com/" class="fa fa-youtube-play"></a>



    </div>
    <div class="col-xs-4 col-md-4">
        <h3 class="lienhe-title">
            Liên hệ
        </h3>
        <ul class="no-bullets">
          <li >
            <img src="//theme.hstatic.net/1000360860/1000486980/14/ft_email.png?v=2706">
            &nbsp; &nbsp; info@devcofee.com
          </li>
          <li>
            <img src="//theme.hstatic.net/1000360860/1000486980/14/ft_phone.png?v=2706">
            &nbsp; &nbsp; 1900.68.67.37
          </li>
          <li>
            <img src="//theme.hstatic.net/1000360860/1000486980/14/ft_address.png?v=2706">
            &nbsp; &nbsp; Tòa AH1, Kí túc xá khu A phường Linh Trung quận Thủ Đức TP.HCM.
          </li>
          <li>
            <img src="//theme.hstatic.net/1000360860/1000486980/14/ft_time.png?v=2706">
            &nbsp; &nbsp; Mon - Sat 9:00 - 18:00
          </li>
        </ul>

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