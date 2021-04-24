<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/introduce.css" />
    <link rel="stylesheet" href="../hf.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Giới Thiệu</title>
  </head>
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
    <div class="background_body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12 header_Intr">
            <div class="col-12 col-md-12 text_Header">
              <div class="row">
                <div class="bgr_color">
                  <div class="block_text_header">
                    <div class="title_header line_after_heading">
                      CÙNG DEV CÙNG COFFEE
                    </div>
                    <div class="content_title">
                      Tại The Coffee House, chúng tôi luôn trân trọng những câu
                      chuyện và đề cao giá trị Kết nối con người. Chúng tôi mong
                      muốn The Coffee House sẽ trở thành “Nhà Cà Phê", nơi mọi
                      người xích lại gần nhau và tìm thấy niềm vui, sự sẻ chia
                      thân tình bên những tách cà phê đượm hương, chất lượng.
                    </div>
                    <div class="content_title">
                      Tại The Coffee House, chúng tôi luôn trân trọng những câu
                      chuyện và đề cao giá trị Kết nối con người. Chúng tôi mong
                      muốn The Coffee House sẽ trở thành “Nhà Cà Phê", nơi mọi
                      người xích lại gần nhau và tìm thấy niềm vui, sự sẻ chia
                      thân tình bên những tách cà phê đượm hương, chất lượng.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div
            class="col-12 col-md-12 block_text_header title_header line_after_heading"
          >
            4 GIÁ TRỊ LÀM NÊN DEVCOFFEE
          </div>
        </div>

        <div class="row">
          <div
            class="d-flex flex-wrap-reverse col-12 col-md-12 justify-content-around mb-3"
            style="text-align: center"
          >
            <img
              src="../images/coffee1.jpg"
              alt="coffee"
              class="col-12 col-sm-6 col-lg-3 mb-5 item_img_coffee"
            />
            <img
              src="../images/coffee2.jpg"
              alt="coffee"
              class="col-12 col-sm-6 col-lg-3 mb-5 item_img_coffee"
            />
            <div class="col-12 col-sm-12 col-lg-4" style="text-align: left">
              <div class="title_header">CHÂN THÀNH</div>
              <div class="content_title content_item">
                Bắt đầu từ sứ mệnh
                <b>“Deliver Happiness” - Trao gửi hạnh phúc</b>, chúng tôi tin
                rằng khi làm việc với tất cả sự chân thành và tôn trọng những
                giá trị nguyên bản của từng nhân viên cũng như khách hàng, tất
                cả mọi người đến với The Coffee House đều nhận được những niềm
                vui nho nhỏ, được tốt lên và làm người khác tốt lên từng ngày.
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-12 col-md-12 d-flex flex-wrap mb-3"
            style="text-align: center"
          >
            <div class="col-12 col-sm-6" style="text-align: left">
              <div class="title_header">QUAN TÂM</div>
              <div class="content_title content_item">
                Mỗi sản phẩm, chiến dịch của The Coffee House luôn xoay quanh
                con người. Chúng tôi lấy khách hàng, nhân viên và cộng đồng làm
                trọng tâm cho mọi quyết định. Vì khi có bạn, The Coffee House
                được tiếp thêm sức mạnh để cùng lan toả những giá trị tốt đẹp
                cho người trẻ Việt Nam.
              </div>
            </div>
            <img
              src="../images/coffee1.jpg"
              alt="coffee"
              class="col-12 col-sm-6 mb-5 rounded-circle item_img_coffee"
            />
          </div>
        </div>
        <div class="row">
          <div
            class="col-12 col-md-12 d-flex flex-wrap-reverse mb-3"
            style="text-align: center"
          >
            <img
              src="../images/coffee1.jpg"
              alt="coffee"
              class="col-12 col-sm-6 mb-5 rounded-circle item_img_coffee"
            />
            <div class="col-12 col-sm-6" style="text-align: left">
              <div class="title_header">SÁNG TẠO</div>
              <div class="content_title content_item">
                Chúng tôi muốn tạo ra dấu ấn khác biệt cho cà phê Việt Nam bằng
                sự tử tế và cẩn trọng. 5 năm qua, cảm ơn bạn là nguồn động lực
                giúp chúng tôi nỗ lực đổi mới và kiến tạo mỗi ngày, để mang lại
                những thành phẩm tuyệt vời nhất, để trải nghiệm của bạn ngày một
                tốt hơn.
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="d-flex flex-wrap col-12 col-md-12 justify-content-around mb-3"
            style="text-align: center"
          >
            <div class="col-12 col-sm-12 col-lg-4" style="text-align: left">
              <div class="title_header">DŨNG CẢM</div>
              <div class="content_title content_item">
                Tại The Coffee House, những tâm hồn đồng điệu cùng nhau làm việc
                cần mẫn và chung sức cho những mục tiêu lớn. Mỗi ngày với chúng
                tôi đều là một ngày được học hỏi, trải nghiệm những điều mới,
                đón nhận thách thức và dấn thân trên con đường phía trước. Hành
                trình tiếp theo, chúng tôi mong muốn được cùng bạn nuôi dưỡng
                ước mơ và kiên trì đi đến tận cùng ước mơ của mình.
              </div>
            </div>
            <img
              src="../images/coffee1.jpg"
              alt="coffee"
              class="col-12 col-sm-6 col-lg-3 mb-5 item_img_coffee"
            />
            <img
              src="../images/coffee2.jpg"
              alt="coffee"
              class="col-12 col-sm-6 col-lg-3 mb-5 item_img_coffee"
            />
          </div>
        </div>
      </div>

      <div class="container-fluid" style="background-color: black">
        <div class="container align_center">
          <div class="row">
            <div
              class="col-12 col-md-12 block_text_header title_header line_after_heading line_after_heading_white"
            >
              Hãy cùng nhìn lại những dấu ấn hành trình của chúng tôi
            </div>
          </div>
          <div class="year_item">
            <div class="year">2014</div>
            <div class="year_content year_text">
              <h3 class="upercase">
                RA MẮT CỬA HÀNG ĐẦU TIÊN tại 86-88 Cao Thắng.
              </h3>
              <div>
                Sau 3 năm, The Coffee House có hơn 60 cửa hàng tại TP Hồ Chí
                Minh.
              </div>
            </div>
          </div>
          <div class="year_item">
            <div class="year">2015</div>
            <div class="year_content year_text">
              <h3 class="upercase">THE COFEE HOUSE CÓ MẶT TẠI HÀ NỘI</h3>
              <div>
                Tới nay, Nhà đã có 14 cửa hàng ở các khu vực trung tâm Thủ đô Hà
                Nội.
              </div>
            </div>
          </div>
          <div class="year_item">
            <div class="year">2015</div>
            <div class="year_content year_text">
              <h3 class="upercase">Xin chào ĐÀ NẴNG, BIÊN HOÀ VÀ VŨNG TÀU</h3>
              <div>
                Chúng tôi đem trải nghiệm “Đi cà phê” lan toả rộng hơn, đến Đà
                Nẵng, Biên Hòa và Vũng Tàu.
              </div>
            </div>
          </div>
          <div class="year_item">
            <div class="year">2017</div>
            <div class="year_content year_text">
              <h3 class="upercase">
                Chinh phục HÀNH TRÌNH “TỪ NÔNG TRẠI ĐẾN LY CÀ PHÊ”
              </h3>
              <div>
                Bắt đầu từ sứ mệnh “Deliver Happiness” - Trao gửi hạnh phúc,
                chúng tôi tin rằng khi làm việc với tất cả sự chân thành và tôn
                trọng những giá trị nguyên bản của từng nhân viên
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div
            class="col-12 col-md-12 block_text_header title_header line_after_heading"
          >
            NHỮNG NGƯỜI TẠO NÊN SỰ ĐẶC BIỆT
          </div>
        </div>
        <div class="row">
          <div
            class="d-flex flex-wrap col-12 col-md-12"
            style="text-align: center"
          >
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item">ĐOÀN NGỌC THỊNH</h4>
                  <p class="card-text content_item">Code: 1810542</p>
                  <a href="#" class="btn btn-outline-secondary">Profile</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item">LÊ HOÀNG PHÚC</h4>
                  <p class="card-text content_item">Code: 1810440</p>
                  <a href="#" class="btn btn-outline-secondary">Profile</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item">HUỲNH THIÊN TRÌNH</h4>
                  <p class="card-text content_item">Code: 1810615</p>
                  <a href="#" class="btn btn-outline-secondary">Profile</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item">PHẠM VĂN TÂM</h4>
                  <p class="card-text content_item">Code: 1710279</p>
                  <a href="#" class="btn btn-outline-secondary">Profile</a>
                </div>
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
