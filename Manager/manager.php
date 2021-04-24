<?php
include("../config/config.php");
if (!isset($_COOKIE["username"])) {
  header("location: ../index.php");
}

// // $link = mysqli_connect('localhost', 'root', '', 'devcoffe');
$link = mysqli_connect('localhost', 'root', '', '123abcdef');
if (!$link) {
  die('ERROR: Connection failed (' . mysqli_connect_errno() . '): ' . mysqli_connect_error($link));
}
mysqli_connect_errno()
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="task-manager">
    <!-- Left bar-->
    <div class="left-bar">
      <div class="upper-part">
        <div class="actions">
          <img src="../logo/devcoffee-black.svg" alt="devcoffe" width="100px" />
          Administrator page
        </div>
      </div>
      <div class="left-content">
        <ul class="action-list">
          <li class="item">
            <input class="nav-item" name="nav-left" type="radio" id="opt-nl-1" checked value="page1" />
            <label for="opt-nl-1">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              <span>Trang chủ</span>
            </label>
          </li>
          <li class="item">
            <input class="nav-item" name="nav-left" type="radio" id="opt-nl-2" value="page2" />
            <label for="opt-nl-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg>
              <span>Tài khoản</span>
            </label>
          </li>
          <li class="item">
            <input class="nav-item" name="nav-left" type="radio" id="opt-nl-3" value="page3" />
            <label for="opt-nl-3">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
              </svg>
              <span>Sản phẩm</span>
            </label>
          </li>
          <li class="item">
            <input class="nav-item" name="nav-left" type="radio" id="opt-nl-4" value="page4" />
            <label for="opt-nl-4">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
              </svg>
              <span>Giao dịch</span>
            </label>
          </li>
          <li class="item">
            <input class="nav-item" name="nav-left" type="radio" id="opt-nl-5" value="page5" />
            <label for="opt-nl-5">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
              <span>Thống kê</span>
            </label>
          </li>
          <?php
          if (!isset($_COOKIE['username'])) {
            echo '<a href="../login/login.php" style="color:#f7f8fc">Đăng nhập</a>';
          } else {
            echo '<a href="../Profile/profile.php" style="color:#f7f8fc">Hồ sơ</a>';
          }
          ?>
        </ul>
      </div>
    </div>
    <!-- Page content-->
    <div class="page-content">
      <!-- Page 1: Home-->
      <div id="page1-pc" class="hide active">
        <div class="header">Hôm nay có gì</div>
        <div class="col-6">
          <div class="task-box yellow">
            <div class="description-task">
              <div class="task-name">Lượt truy cập</div>
              <?php

              $link = mysqli_connect(LS, LU, LP, LD);


              $sql = "SELECT lastdate FROM account WHERE lastdate = \"" . date("Y-m-d") . "\"";
              $result = mysqli_query($link, $sql);
              $counter = 0;
              while ($row = mysqli_fetch_array($result)) {
                $counter++;
              };

              echo "<div style=\"font-size: 2rem; padding: 10px\">$counter</div>";
              ?>

            </div>
            <!-- <div class="more-button"></div> -->
          </div>
        </div>
        <div class="col-6">
          <div class="task-box blue">
            <div class="description-task">
              <!-- <div class="time">10:00 - 11:00 AM</div> -->
              <div class="task-name">Sản phẩm yêu thích</div>
              <?php echo "<div style=\"font-size: 2rem; padding: 10px\">Cà phê truyền thống</div>"; ?>
            </div>
            <!-- <div class="more-button"></div> -->
          </div>
        </div>
      </div>
      <!-- Page 2: Accounts-->
      <div id="page2-pc" class="hide">
        <div class="header">Tài khoản</div>
        <!--Category-->
        <div class="content-categories">
          <div class="label-wrapper">
            <input class="nav-item" name="nav" type="radio" id="opt-account-1" value="false" checked />
            <label class="category" for="opt-account-1">Khách hàng</label>
          </div>
          <div class="label-wrapper">
            <input class="nav-item" name="nav" type="radio" id="opt-account-2" value="true" />
            <label class="category" for="opt-account-2">Quản lý</label>
          </div>
        </div>
        <!--Utilities-->
        <div class="tasks-wrapper">
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="filter-account" />
            <label for="filter-account">
              <span class="label-text">Bộ lọc tìm kiếm</span>
            </label>
          </div>
        </div>
        <div class="filter-account">
          <table class="hide">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Email</th>
                <th>SDT</th>
                <th>Địa chỉ</th>
                <th>Ngày tạo</th>
                <th>Đăng nhập gần đây</th>
                <th>Ví điện tử</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><input name="id" class="filter-input"></th>
                <th><input name="username" class="filter-input"></th>
                <th><input name="fname" class="filter-input"></th>
                <th><input name="lname" class="filter-input"></th>
                <th><select name="gender">
                    <option name="gender" class="filter-input" checked></option>
                    <option name="gender" class="filter-input" value="1">Nam</option>
                    <option name="gender" class="filter-input" value="0">Nữ</option>
                  </select>
                </th>
                <th><input name="birthday" type="date" class="filter-input"></th>
                <th><input name="email" class="filter-input"></th>
                <th><input name="phone" class="filter-input"></th>
                <th><input name="address" class="filter-input"></th>
                <th><input name="firstdate" type="date" class="filter-input"></th>
                <th><input name="lastdate" type="date" class="filter-input"></th>
                <th><input name="walletid" class="filter-input"></th>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="search-account">
          <div class="col-4">
            <label class="task-box blue">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
              <span>Tìm kiếm tài khoản</span>
            </label>
          </div>
          <div class="col-4">
            <label class="task-box green">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
              </svg>
              <span>Thêm tài khoản</span>
            </label>
          </div>
          <div class="col-4">
            <label class="task-box red">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
              <span>Xóa tài khoản</span>
            </label>
          </div>
        </div>
        <!--Table-->
        <div class="account-table">
          <table>
            <thead>
              <tr>
                <th class="chooseall">Chọn</th>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Email</th>
                <th>SDT</th>
                <th>Địa chỉ</th>
                <th>Ngày tạo</th>
                <th>Đăng nhập gần đây</th>
                <th>Ví điện tử</th>
              </tr>
            </thead>
            <tbody>
              <!--AJAX-->
            </tbody>
          </table>
        </div>
      </div>
      <!-- Page 3: Products-->
      <div id="page3-pc" class="hide">
        <div class="header">Sản phẩm</div>
        <!--Utilities-->
        <div class="tasks-wrapper">
          <div class="task">
            <input class="task-item" name="task" type="checkbox" id="filter-product" />
            <label for="filter-product">
              <span class="label-text">Bộ lọc tìm kiếm</span>
            </label>
          </div>
        </div>
        <div class="filter-product">
          <table class="hide">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Loại</th>
                <th>Path</th>
                <th>Giá cả</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><input name="id" class="filter-input"></th>
                <th><input name="name" class="filter-input"></th>
                <th><input name="type" class="filter-input"></th>
                <th><input name="image" class="filter-input"></th>
                <th><input name="price" class="filter-input"></th>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="search-product">
          <div class="col-4">
            <label class="task-box blue">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
              <span>Tìm kiếm sản phẩm</span>
            </label>
          </div>
          <div class="col-4">
            <label class="task-box green">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
              </svg>
              <span>Thêm sản phẩm</span>
            </label>
          </div>
          <div class="col-4">
            <label class="task-box red">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
              <span>Xóa sản phẩm</span>
            </label>
          </div>
        </div>
        <!--Table-->
        <div class="product-table">
          <table>
            <thead>
              <tr>
                <th class="chooseall">Chọn</th>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Loại</th>
                <th>Path</th>
                <th>Giá cả</th>
              </tr>
            </thead>
            <tbody>
              <!--AJAX-->
            </tbody>
          </table>
        </div>
      </div>
      <!-- Page 4: Transactions-->
      <div id="page4-pc" class="hide">
        <div class="header">Giao dịch</div>
      </div>
      <!-- Page 5: Statistics-->
      <div id="page5-pc" class="hide">
        <div class="header">Thống kê</div>
      </div>
    </div>
    <!-- Right bar-->
    <!-- <div class="right-bar">
      
      <div id="page1-rb" class="hide active">
      </div>
      
      <div id="page2-rb" class="hide">
        
      </div>
      
      <div id="page3-rb" class="hide">
      </div>
      
      <div id="page4-rb" class="hide">
      </div>
      
      <div id="page5-rb" class="hide">
      </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="manager.js"></script>
</body>

</html>