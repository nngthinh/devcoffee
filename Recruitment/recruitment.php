<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/recruitment.css" />
    <link rel="stylesheet" href="../css/introduce.css" />
    <link rel="stylesheet" href="../hf.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Recruitement</title>
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
          <div class="col-12 col-md-12 banner-rec">
            <div class="bg-rec">
              <div class="col-12 col-md-12 block-head-rec">
                <div class="">
                  <div class="block-head-rec">
                    <p class="content-head">CƠ HỘI NGHỀ NGHIỆP</p>
                    <h2 class="content-head">
                      TRỞ THÀNH THÀNH VIÊN TRONG GIA ĐÌNH DEVCOFFEE
                    </h2>
                    <a href="#" class="btn btn-info btn-des btn-h" role="button"
                      >CÁC VỊ TRÍ HIỆN TẠI</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align_center">
          <div class="col-12 header-title">
            Nhân viên là cốt lõi của bền vững
          </div>
          <div class="col-12 content-title">
            Chúng tôi tin rằng xây dựng được hạnh phúc, chú trọng con đường sự
            nghiệp cho nhân viên, sự hài lòng trong công việc và môi trường tích
            cực sẽ là nền tảng lâu dài cho sự phát triển bền vững của The Coffee
            House. Hãy đến với chúng tôi khi nhận thấy những giá trị này phù hợp
            với bạn!
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align_center">
          <div class="col-12 header-title">
            THE DEVCOFFEE SẼ MANG ĐẾN CHO BẠN
          </div>
        </div>
        <div class="row">
          <div class="d-flex flex-wrap col-12 col-md-12 align_center">
            <div class="col-12 col-md-4 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item align_left mb-2">
                    MÔI TRƯỜNG LÍ TƯỞNG
                  </h4>
                  <p class="card-text content_item align_left">
                    Linh hoạt, thách thức, năng động và thân thiện, là những
                    điều chúng tôi mang đến cho bạn sự thoải mái để tập trung
                    tạo hiệu quả công việc tốt nhất bên cạnh sự hỗ trợ của đồng
                    nghiệp và hướng dẫn từ quản lý.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item align_left mb-2">
                    CƠ HỘI PHÁT TRIỂN NGHỀ NGHIỆP
                  </h4>
                  <p class="card-text content_item align_left">
                    Bạn sẽ có cơ hội để học hỏi rất nhanh và phát triển sự
                    nghiệp bền vững trong ngành F&B cùng với sự mở rộng và phát
                    triển không ngừng của công ty.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
              <div class="card">
                <img class="card-img-top" src="../images/coffee1.jpg" alt="" />
                <div class="card-body">
                  <h4 class="content_item align_left mb-2">
                    PHIÊN BẢN TỐT HƠN CỦA CHÍNH MÌNH
                  </h4>
                  <p class="card-text content_item align_left">
                    Những điều bạn phải cam kết với chúng tôi là sự quán triệt
                    đi đến cùng với công việc và đam mê, chúng tôi tôn trọng sự
                    nỗ lực của cá nhân và đề cao tinh thần chủ động tiên phong
                    giải quyết những vấn đề và gặt hái thành quả.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12 pos-title">
            <div class="col-12 col-md-12 pos-text">
              <div class="row">
                <div class="pos-bgr">
                  <div class="block_text_pos">
                    <div class="header-title pos_content">
                      CÁC VỊ TRÍ HIỆN TẠI
                    </div>
                    <div class="pos_content">
                      Chúng tôi luôn tìm kiếm những người tuyệt vời! Nếu bạn
                      chưa tìm thấy cơ hội phù hợp hiện tại, nhưng tin rằng bạn
                      có thể trở thành 1 phần của The Coffee House, hãy gửi
                      thông tin cho chúng tôi.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid align_center">
          <div class="row">
            <div class="pos-name pos-name-after">OPERATER</div>
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="pos-name pos-name-after">OPERATER</div>
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="pos-name pos-name-after">OPERATER</div>
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="pos-name pos-name-after">OPERATER</div>
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="pos-rec-block pos-rec-h">
              <a href="#" class="pos linkh"
                >SUPERVISOR - GIÁM SÁT CỬA HÀNG (HCM, Bà Rịa - Vũng Tàu, Phú
                Quốc)</a
              >
              <div class="pos-info">
                <div>
                  <i class="fa fa-clock-o" aria-hidden="true"></i
                  ><span class="pos-con">Fulltime</span>
                </div>
                <div>
                  <i class="fa fa-map-marker" aria-hidden="true"></i
                  ><span class="pos-con">
                    Địa điểm phỏng vấn: The Coffee House - Hà Nội, Tầng 4 số 3
                    Trung Hòa, Cầu Giấy, Hà Nội
                  </span>
                </div>
              </div>
              <div class="pos-apply">
                <a
                  href="#"
                  class="btn btn-info btn-des btn-h btn-apply"
                  role="button"
                  >Ứng Tuyển</a
                >
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
