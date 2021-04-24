<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chu</title>
    <!-- boostrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- other css -->
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="hf.css" />
  </head>
  <body>
    <!--Navbar-->
    <header>
      <div class="navbar" id="topmobile">
        <a href="javascript:void(0)" id="burger"
        ><div class="burger_line"></div
        ></a>
        <div>
        <a href="./index.php" class="logo">
          <img src="./logo/devcoffee-white.svg" alt="devcoffe" />
        </a>
        </div>
      </div>
      <div class="navbar" id="widescreen">
        <div class="navlinks navlinks-left">
        <a href="./Introduction/introduce.php">Giới thiệu</a>
        <a href="./Recruitment/recruitment.php">Tuyển dụng</a>
        </div>
        <!--Logo-->
        <a href="./index.php" class="logo">
        <img src="./logo/devcoffee-white.svg" alt="devcoffe" />
        </a>
        <div class="navlinks navlinks-right">
        <a href="./MenuList/menu_list.php">Sản phẩm</a>
        <a href="./Contact/lienhe.php">Liên hệ</a>
        <?php 
        if (!isset($_COOKIE['username'])) {
          echo '<a href="login/login.php">Đăng nhập</a>';
        }
        else {
          echo '<a href="Profile/profile.php">Hồ sơ</a>';
        }
        ?> 
        </div>
      </div>
      </header>
    <!--Content-->
    <div class="container-fluid">
      <div class="row">
        <div class="slider">
          <div class="slideshow-container">
            <div class="mySlides fade">
              <div id="slider01"></div>
              <div class="text-caption">
                <h4>Những câu chuyện</h4>
              </div>
            </div>
            <div class="mySlides fade">
              <div id="slider02"></div>
              <div class="text-caption">
                <h4>Cùng chill cùng code</h4>
              </div>
            </div>
            <div class="mySlides fade">
              <div id="slider03"></div>
              <div class="text-caption">
                <h4>Đa dạng hương vị</h4>
              </div>
            </div>
            <div class="mySlides fade">
              <div id="slider04"></div>
              <div class="text-caption">
                <h4>Home cafe của dev</h4>
              </div>
            </div>
          </div>
          <br />
          <div style="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section">
        <h2>DEVCOFFEE</h2>
        <div>
          Hãy ghé thăm, và cùng tận hưởng những điều mới lạ có một không hai từ Dev!
        </div>
      </div>
      <div class="section">
        <div class="banner">
          <img src="section/section01.jpg" alt="section 01" />
          <span class="txt style1">GIỚI THIỆU</span>
        </div>
      </div>
      <div class="section">
        <div class="banner">
          <img src="section/section02.jpg" alt="section 01" />
          <span class="txt style1">TUYỂN DỤNG</span>
        </div>
      </div>
    </div>

    <!-- Footer -->
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
    <script src="slider.js"></script>
  </body>
</html>
