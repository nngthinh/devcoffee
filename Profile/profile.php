<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.3/angular-material.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,800,900" />
    <link rel="stylesheet" href="https://codepen.io/JeremyPP/pen/eRarxE.css" />

    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<!-- partial:index.partial.html -->

<body ng-app="wemApp" class="wem-profile" ng-controller="ProfileDetails" data-anonym="false">
    <!-- Page loader -->
    <div id="loadingSpinner">
        <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30">
            </circle>
        </svg>
    </div>

    <!-- Header toolbar -->
    <div ng-controller="ToolbarCtrl" class="mainToolbarContainer">
        <md-toolbar class="mainToolbarTop fixed-toolbar">
            <div class="md-toolbar-tools">
                <md-button class="md-icon-button" aria-label="Back" href="javascript:history.back();">
                    <i class="material-icons">arrow_back</i>
                </md-button>
                <h2 flex>
                    <span>Thông tin cá nhân</span>
                </h2>
            </div>
        </md-toolbar>
    </div>

    <!-- Main Container -->
    <section class="wem-mainContainer with-fixed-toolbar width-90" layout="row">
        <!-- Left section (fixed card) -->
        <section class="left-container-card">
            <!-- Card -->
            <div class="fixed-profile-card">
                <div class="avt-profile" style="width:200px; height:200px;">
                    <?php
                    include("../config/config.php");
                    if (isset($_COOKIE['username'])) {
                        $user = $_COOKIE['username'];
                    } else {
                        header("location: ../index.php");
                    }
                    $link = mysqli_connect(LS, LU, LP, LD);
                    if (!$link) {
                        die('ERROR: connect failed(' . mysqli_errno($link) . ')' . mysqli_error($link));
                    }

                    $sql = "SELECT id, username, fname, lname, email, gender, birthday, phone, address, firstdate, lastdate FROM account WHERE username=\"$user\"";
                    $row = null;
                    $id = null;

                    if ($result = mysqli_query($link, $sql)) {
                        $row = mysqli_fetch_array($result);
                        $id = $row["id"];
                    } else {
                        die(mysqli_error($link));
                    }

                    if (isset($_POST['Submit1'])) {
                        $temp = explode(".", $_FILES["file"]["name"]);
                        $newfilename = $id . '.' . end($temp);
                        $_FILES["file"]["name"] = $newfilename;
                        $filepath = "./imagesPersonal/" . $_FILES["file"]["name"];
                        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
                    }
                    $filepath = "./imagesPersonal/" . $id . ".jpg";
                    if (!file_exists($filepath)) {
                        $filepath = "./imagesPersonal/defaultava.png";
                    }
                    echo "<img src=" . $filepath . " class=\"profile-picture2\" />";

                    ?>
                    <h1 class="prof-card-fullname truncate" style="font-size: 1.5rem;"><?php echo $row["lname"] . " " . $row["fname"]; ?></h1>
                </div>

                <div style="margin-top: 50px">
                    <div class="card-user-info">Đăng nhập lần đầu <span><?php echo $row["firstdate"]; ?></span></div>
                    <div class="card-user-info">Đăng nhập lần cuối <span><?php echo $row["lastdate"]; ?></span></div>
                </div>

                <form action="" enctype="multipart/form-data" method="post">
                    <label for="files" class="btn-upload">Chọn ảnh</label>
                    <input id="files" name="file" style="visibility:hidden; width: 0px;" type="file">
                    <input type="submit" class="btn-submit" name="Submit1" value="Đổi ảnh đại diện" />
                    <a class="btn-submit"style="margin-top: 1.5rem; color: white; text-decoration: none; background-color: #ff3333" href="../logout.php">Đăng xuất</a>
                </form>


            </div>
        </section>

        <!-- <div flex="5"></div> -->

        <!-- Right section -->
        <section flex class="wem-main-section">
            <!-- Tabs -->
            <div ng-cloak>
                <md-content>
                    <md-tabs md-dynamic-height md-border-bottom>
                        <md-tab label="Thông tin">
                            <md-content class="md-padding">
                                <div class="info-1 prof-prop-card">
                                    <div class="smallLabelText">Thông tin cơ bản</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More" ng-click="toggleGroup = !toggleGroup">
                                            <i class="material-icons">{{toggleGroupIcon}}</i>
                                        </md-button>
                                    </span>

                                    <div ng-show="toggleGroup">
                                        <div layout="column" layout-gt-sm="row" class="profile-prop-row">
                                            <md-input-container flex="100" flex-gt-sm="50" class="changed-icon md-block">
                                                <label>Tên</label>
                                                <input value="<?php echo $row["lname"]; ?>" />
                                            </md-input-container>
                                            <div flex-gt-sm=" 5" hide-xs hide-sm>
                                                <!-- Spacer //-->
                                            </div>
                                            <md-input-container flex="100" flex-gt-sm="50" class="changed-icon md-block">
                                                <label>Họ</label>
                                                <input value="<?php echo $row["fname"]; ?>" />
                                            </md-input-container>
                                        </div>

                                        <div layout="column" layout-gt-sm="row" class="profile-prop-row">
                                            <md-input-container flex="100" flex-gt-sm="50" class="changed-icon md-block">
                                                <label>Tên đăng nhập</label>
                                                <input style="color:cadetblue" readonly value="<?php echo $row["username"]; ?>" />
                                            </md-input-container>
                                            <div flex-gt-sm="5" hide-xs hide-sm>
                                                <!-- Spacer //-->
                                            </div>
                                            <md-input-container flex="100" flex-gt-sm="50" class="md-block">
                                                <label>Email</label>
                                                <input value="<?php echo $row["email"]; ?>" type="email" />
                                            </md-input-container>
                                        </div>

                                        <div layout="column" layout-gt-sm="row" class="profile-prop-row">
                                            <md-input-container flex="100" flex-gt-sm="50" class="md-block">
                                                <label>Giới tính</label>
                                                <md-select ng-model="user.state">
                                                    <?php $male = $female = "";
                                                    if ($row["gender"] == 1) {
                                                        $male = "selected";
                                                    } else {
                                                        $female = "selected";
                                                    } ?>
                                                    <md-option value="1" <?php echo $male; ?>>Nam</md-option>
                                                    <md-option value="0" <?php echo $female; ?>>Nữ</md-option>
                                                </md-select>
                                            </md-input-container>

                                            <div flex-gt-sm="5" hide-xs hide-sm>
                                                <!-- Spacer //-->
                                            </div>
                                        </div>

                                        <md-card-actions layout="row" layout-align="end center" class="prof-card-footer">
                                            <!-- <md-button>hủy</md-button> -->
                                            <div onclick='return updateBasicInfo()'>
                                                <md-button class="md-accent">lưu</md-button>
                                            </div>

                                        </md-card-actions>
                                    </div>
                                </div>



                                <br />

                                <div class="info-2 prof-prop-card">
                                    <div class="smallLabelText">Thông tin liên hệ</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More" ng-click="">
                                            <i class="material-icons">keyboard_arrow_up</i>
                                        </md-button>
                                    </span>

                                    <div ng-show="true">
                                        <div layout="column" layout-gt-sm="row" class="profile-prop-row">
                                            <md-input-container flex="100" flex-gt-sm="50" class="md-block">
                                                <label>Số điện thoại</label>
                                                <input value="<?php echo $row["phone"]; ?>" />
                                            </md-input-container>
                                            <div flex-gt-sm="5" hide-xs hide-sm>
                                                <!-- Spacer //-->
                                            </div>
                                            <md-input-container flex="100" flex-gt-sm="50" class="md-block">
                                                <label>Địa chỉ</label>
                                                <input value="<?php echo $row["address"]; ?>" />
                                            </md-input-container>
                                        </div>
                                        <md-card-actions layout="row" layout-align="end center" class="prof-card-footer">
                                            <!-- <md-button>hủy</md-button> -->
                                            <div onclick='return updateContactInfo()'>
                                                <md-button class="md-accent" name="contactinfo">lưu</md-button>
                                            </div>
                                        </md-card-actions>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <md-tab label="Ví điện tử">
                            <md-content class="md-padding">
                                <br hide-gt-sm />
                                <div class="card-1 prof-prop-card">
                                    <div layout="row">
                                        <div flex="100" style="padding: 8px 16px">
                                            <div class="profiling-header">
                                                <span>Interests</span>
                                                <md-button class="md-icon-button" id="chart-view">
                                                    <md-tooltip md-direction="right">Chart view</md-tooltip>
                                                    <i class="material-icons">pie_chart_outlined</i>
                                                </md-button>
                                                <md-button class="md-icon-button" id="list-view" style="display: none">
                                                    <md-tooltip md-direction="right">List view</md-tooltip>
                                                    <i class="material-icons">list</i>
                                                </md-button>
                                                <md-menu class="prof-card-menu profiling-card-filter">
                                                    <md-button aria-label="" class="md-icon-button" ng-click="$mdMenu.open($event)" style="margin-left: 0">
                                                        <i class="material-icons">sort</i>
                                                    </md-button>
                                                    <md-menu-content>
                                                        <md-menu-item>
                                                            <md-button>
                                                                <div layout="row" flex>
                                                                    <p flex>Filter by value</p>
                                                                </div>
                                                            </md-button>
                                                        </md-menu-item>
                                                        <md-menu-item>
                                                            <md-button>
                                                                <div layout="row" flex>
                                                                    <p flex>Filter by name</p>
                                                                </div>
                                                            </md-button>
                                                        </md-menu-item>
                                                    </md-menu-content>
                                                </md-menu>
                                            </div>
                                            <div class="md-chips profiling-chips chips-list-view">
                                                <md-chip>
                                                    <span>My interest</span>
                                                    <strong>8</strong>
                                                </md-chip>
                                                <md-chip>
                                                    <span>Another interest</span>
                                                    <strong>2</strong>
                                                </md-chip>
                                                <md-chip>
                                                    <span>And one more...</span>
                                                    <strong>5</strong>
                                                </md-chip>
                                                <md-chip>
                                                    <span>This one is very important</span>
                                                    <strong>100</strong>
                                                </md-chip>
                                                <md-chip>
                                                    <span>Lorem Ipsum</span>
                                                    <strong>1</strong>
                                                </md-chip>
                                            </div>
                                            <div class="profiling-chart-view" style="display: none">-Chart view-
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div layout="row">
                                        <div flex="100" style="padding: 8px 16px">
                                            <div class="profiling-header">
                                                <span>Scoring</span>
                                                <md-button class="md-icon-button">
                                                    <md-tooltip md-direction="right">Chart view</md-tooltip>
                                                    <i class="material-icons">pie_chart_outlined</i>
                                                </md-button>
                                                <md-menu class="prof-card-menu">
                                                    <md-button aria-label="" class="md-icon-button" ng-click="$mdMenu.open($event)" style="margin-left: 0">
                                                        <i class="material-icons">sort</i>
                                                    </md-button>
                                                    <md-menu-content>
                                                        <md-menu-item>
                                                            <md-button>
                                                                <div layout="row" flex>
                                                                    <p flex>Filter by value</p>
                                                                </div>
                                                            </md-button>
                                                        </md-menu-item>
                                                        <md-menu-item>
                                                            <md-button>
                                                                <div layout="row" flex>
                                                                    <p flex>Filter by name</p>
                                                                </div>
                                                            </md-button>
                                                        </md-menu-item>
                                                    </md-menu-content>
                                                </md-menu>
                                            </div>
                                            <div class="md-chips profiling-chips">
                                                <md-chip>
                                                    <span>A small value</span>
                                                    <strong>3</strong>
                                                </md-chip>
                                                <md-chip>
                                                    <span>Another one</span>
                                                    <strong>2</strong>
                                                </md-chip>
                                                <md-chip>
                                                    <span>A hight value</span>
                                                    <strong>42</strong>
                                                </md-chip>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div layout="row">
                                        <div flex="100" style="padding: 8px 16px">
                                            <div class="profiling-header">
                                                <span>Segments</span>
                                                <md-button class="md-icon-button" aria-label="More">
                                                    <i class="material-icons">sort_by_alpha</i>
                                                </md-button>
                                            </div>
                                            <div class="md-chips profiling-chips">
                                                <md-chip>
                                                    <span>My segment</span>
                                                </md-chip>
                                                <md-chip>
                                                    <span>Another segment</span>
                                                </md-chip>
                                                <md-chip>
                                                    <span>And one more</span>
                                                </md-chip>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div layout="row">
                                        <div flex="100" style="padding: 8px 16px">
                                            <div class="profiling-header">
                                                <span>Lists</span>
                                                <md-button class="md-icon-button">
                                                    <i class="material-icons">playlist_add</i>
                                                </md-button>
                                                <md-button class="md-icon-button">
                                                    <i class="material-icons">sort_by_alpha</i>
                                                </md-button>
                                            </div>
                                            <div class="md-chips profiling-chips">
                                                <md-chip>
                                                    <span>My custom list</span>
                                                </md-chip>
                                                <md-chip>
                                                    <span>A small list</span>
                                                </md-chip>
                                                <md-chip>
                                                    <span>Another list</span>
                                                </md-chip>
                                                <md-chip>
                                                    <span>A list with a very long name</span>
                                                </md-chip>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </md-content>
                        </md-tab>
                        <md-tab label="Lịch sử giao dịch">
                            <md-content class="md-padding">
                                <div class="analytics-filters">
                                    <div layout="column" layout-gt-sm="row">

                                        <!--<div flex></div>-->
                                        <div class="time-shortcuts-container" style="display: block">
                                            <md-button class="md-raised md-accent">All time</md-button>
                                            <md-button>1 week</md-button>
                                            <md-button>1 month</md-button>
                                            <md-button>1 year</md-button>
                                            <md-button class="md-warn" id="custom-range">Custom</md-button>
                                        </div>
                                        <div class="custom-range-container" style="display: none">
                                            <md-button class="md-icon-button" id="default-ranges">
                                                <i class="material-icons">arrow_back</i>
                                            </md-button>
                                            <br hide-gt-xs />
                                            <span class="datepicker-label">From:</span>
                                            <md-datepicker ng-model="ctrl.myDate" md-placeholder="Enter date">
                                            </md-datepicker>
                                            <br hide-gt-xs />
                                            <span class="datepicker-label">to:</span>
                                            <md-datepicker ng-model="ctrl.myDate2" md-placeholder="Enter date">
                                            </md-datepicker>
                                            <br hide-gt-xs />
                                            <md-button class="md-warn">Apply</md-button>
                                        </div>
                                    </div>
                                </div>

                                <br />

                                <div class="card-1 prof-prop-card">
                                    <div class="smallLabelText">Visitor info</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More">
                                            <i class="material-icons">keyboard_arrow_up</i>
                                        </md-button>
                                    </span>

                                    <div layout="column" layout-gt-sm="row">
                                        <div flex="50" flex-gt-sm="25" class="visitor-info-block">
                                            <div class="visitor-info-name truncate">Most access from</div>
                                            <div class="truncate">Desktop (62%)</div>
                                        </div>

                                        <div flex="50" flex-gt-sm="25" class="visitor-info-block">
                                            <div class="visitor-info-name truncate">Favorite browser</div>
                                            <div class="truncate">Google Chrome 48.2 (85%)</div>
                                        </div>

                                        <div flex="50" flex-gt-sm="25" class="visitor-info-block">
                                            <div class="visitor-info-name truncate">Favorite platform</div>
                                            <div class="truncate">Windows 10</div>
                                        </div>

                                        <div flex="50" flex-gt-sm="25" class="visitor-info-block">
                                            <div class="visitor-info-name truncate">Most frequent IP</div>
                                            <div class="truncate">83.167.48.241</div>
                                        </div>
                                    </div>
                                    <div layout="column" layout-gt-sm="row">
                                        <div flex="50" flex-gt-sm="25" class="visitor-info-block">
                                            <div class="visitor-info-name truncate">First referer</div>
                                            <div class="truncate">http://www.adobe.com/</div>
                                        </div>

                                        <div flex="50" flex-gt-sm="25" class="visitor-info-block">
                                            <div class="visitor-info-name truncate">Average session duration</div>
                                            <div class="truncate">1 minute and 16 seconds</div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div class="smallLabelText">Goals</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </md-button>
                                    </span>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div class="smallLabelText">Campaigns</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </md-button>
                                    </span>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div class="smallLabelText">Page views & Sessions</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </md-button>
                                    </span>
                                </div>
                                <br />
                                <div class="card-1 prof-prop-card">
                                    <div class="smallLabelText">Visitor sessions</div>
                                    <span class="toggle-group-container">
                                        <md-button class="md-icon-button" aria-label="More">
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </md-button>
                                    </span>
                                </div>
                            </md-content>
                        </md-tab>
                    </md-tabs>
                </md-content>
            </div>
        </section>
    </section>

    <!-- partial -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <script src="https://cdn.gitcdn.link/cdn/angular/bower-material/v1.1.3/angular-material.js"></script>
    <script src="./script.js"></script>
    <script src="./profile.js"></script>


</body>

</html>