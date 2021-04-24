<?php
include("../config/config.php");

// A. Request handling function == > AJAX
function requestHandling()
{
    if (isset($_POST["account"])) {
        if ($_POST["account"] == "getaccount") {
            getAccount();
        } else if ($_POST["account"] == "addaccount") {
            addAccount();
        } else if ($_POST["account"] == "updateaccount") {
            updateAccount();
        } else if ($_POST["account"] == "removeaccount") {
            removeAccount();
        }
    } else if (isset($_POST["product"])) {
        if ($_POST["product"] == "getproduct") {
            getProduct();
        } else if ($_POST["product"] == "addproduct") {
            addProduct();
        } else if ($_POST["product"] == "updateproduct") {
            updateProduct();
        } else if ($_POST["product"] == "removeproduct") {
            removeProduct();
        }
    } else if (isset($_POST["transaction"])) {
        getTransaction();
    } else if (isset($_POST["statistic"])) {
        if ($_POST["statistic"] == "access") {
            accessStatistic();
        } else if ($_POST["statistic"] == "product") {
            productStatistic();
        }
    }
}

function addFilter($sql, $cond)
{
    if (strpos($sql, 'WHERE') !== false) {
        return $sql . " AND " . $cond;
    };
    return $sql . " WHERE " . $cond;
}


// B. Related functions
// 1. Account
// ===================================
// - Get all account
function getAccount()
{
    $response = array();
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    $sql = "SELECT * FROM account";


    // Admin
    $isAdmin = false;
    if (isset($_POST["admin"]) && $_POST["admin"] == "true") {
        $isAdmin = true;
    }
    if ($isAdmin) {
        $sql .= " WHERE admin = True";
    } else {
        $sql .= " WHERE admin = False";
    }
    // Other filter 
    if (isset($_POST["filter"])) {
        $filter = json_decode($_POST["filter"], true);
        if (count($filter) > 0) {
            if (isset($filter['id'])) {
                $sql = addFilter($sql, "id = " . $filter['id']);
            }
            if (isset($filter['username'])) {
                $sql = addFilter($sql, "username = \"" . $filter['username'] . "\"");
            }
            if (isset($filter['fname'])) {
                $sql = addFilter($sql, "fname = \"" . $filter['fname'] . "\"");
            }
            if (isset($filter['lname'])) {
                $sql = addFilter($sql, "lname = \"" . $filter['lname'] . "\"");
            }
            if (isset($filter['gender'])) {
                $sql = addFilter($sql, "gender = " . $filter['gender']);
            }
            if (isset($filter['birthday'])) {
                $date = date('Y-m-d', strtotime($filter['birthday']));
                $sql = addFilter($sql, "birthday = \"" . $date . "\"");
            }
            if (isset($filter['email'])) {
                $sql = addFilter($sql, "email = \"" . $filter['email'] . "\"");
            }
            if (isset($filter['phone'])) {
                $sql = addFilter($sql, "phone = \"" . $filter['phone'] . "\"");
            }
            if (isset($filter['address'])) {
                $sql = addFilter($sql, "address = \"" . $filter['address'] . "\"");
            }
            if (isset($filter['firstdate'])) {
                $date = date('Y-m-d', strtotime($filter['firstdate']));
                $sql = addFilter($sql, "firstdate = \"" . $date . "\"");
            }
            if (isset($filter['lastdate'])) {
                $date = date('Y-m-d', strtotime($filter['lastdate']));
                $sql = addFilter($sql, "lastdate = \"" . $date . "\"");
            }
            if (isset($filter['walletid'])) {
                $sql = addFilter($sql, "walletid = " . $filter['walletid']);
            }
        }
    }
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $response[] = array(
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'fname' => $row['fname'],
                    'lname' => $row['lname'],
                    'gender' => $row['gender'],
                    'birthday' => $row['birthday'],
                    'email' => $row['email'],
                    'phone' => $row['phone'],
                    'address' => $row['address'],
                    'firstdate' => $row['firstdate'],
                    'lastdate' => $row['lastdate'],
                    'walletid' => $row['walletid']
                );
            }
        }
        die(json_encode($response));
    } else {
        echo (mysqli_error($link) . ". Query command: " . $sql);
    }
}
// - Add an account
function addAccount()
{
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    if (!(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["gender"]) && isset($_POST["birthday"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["address"]) && isset($_POST["admin"]))) {
        die("Lỗi: thiếu tham số");
    }

    $sql = "INSERT INTO account (username, password, fname, lname, gender, birthday, email, phone, address, admin, firstdate, lastdate, walletid) ";
    $sql .= " VALUES (\"" . $_POST["username"] . "\",\"" . $_POST["password"] . "\",\"" . $_POST["fname"] . "\",\"" . $_POST["lname"] . "\"," . $_POST["gender"] . ",\"" . date("Y-m-d", strtotime($_POST["birthday"])) . "\",\"" . $_POST["email"] . "\",\"" . $_POST["phone"] . "\",\"" . $_POST["address"] . "\"," . $_POST["admin"] . ",\"" . date("Y-m-d") . "\",\"" . date("Y-m-d") . "\", null );";

    if ($result = mysqli_query($link, $sql)) {
        echo ("Tạo account mới thành công (Id: " . mysqli_fetch_array(mysqli_query($link, "SELECT id FROM account WHERE username = \"" . $_POST["username"] . "\""))["id"] . ")");
    } else {
        die(mysqli_error($link) . ". Query command: " . $sql);
    }
}
// - Update account
function updateAccount()
{

    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    if (!(isset($_POST["id"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["gender"]) && isset($_POST["birthday"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["address"]))) {
        die("Lỗi: thiếu tham số");
    }
    $sql = "UPDATE account SET fname = \"" . $_POST["fname"] . "\", lname = \"" . $_POST["lname"] . "\", gender = " . $_POST["gender"] . ", birthday = \"" . date("Y-m-d", strtotime($_POST["birthday"])) . "\", email = \"" . $_POST["email"] . "\", phone = \"" . $_POST["phone"] . "\", address = \"" . $_POST["address"] . "\" WHERE id = " . $_POST["id"];

    if ($result = mysqli_query($link, $sql)) {
        echo ("Cập nhật account " . $_POST["id"] . " thành công!");
    } else {
        echo (mysqli_error($link) . ". Query command: " . $sql);
    }
}
// - Remove account
function removeAccount()
{
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    if (!isset($_POST["acclist"]) || count($_POST["acclist"]) == 0) {
        die("Lỗi: thiếu tham số");
    }
    foreach ($_POST["acclist"] as $acc) {
        $sql = "DELETE FROM account WHERE id = " . $acc;
        if (!($result = mysqli_query($link, $sql))) {
            die(mysqli_error($link) . ". Query command: " . $sql);
        }
    }
    echo ("Xóa " . count($_POST["acclist"]) . " account (" . implode(", ", $_POST["acclist"]) . ") thành công!");
}
// 2. Product
// ===================================
// - Get all products
function getProduct()
{
    $response = array();
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    $sql = "SELECT * FROM products";

    // Other filter 
    if (isset($_POST["filter"])) {
        $filter = json_decode($_POST["filter"], true);
        if (count($filter) > 0) {
            if (isset($filter['id'])) {
                $sql = addFilter($sql, "id = " . $filter['id']);
            }
            if (isset($filter['name'])) {
                $sql = addFilter($sql, "name = \"" . $filter['name'] . "\"");
            }
            if (isset($filter['type'])) {
                $sql = addFilter($sql, "type = \"" . $filter['type'] . "\"");
            }
            if (isset($filter['image'])) {
                $sql = addFilter($sql, "image = \"" . $filter['image'] . "\"");
            }
            if (isset($filter['price'])) {
                $sql = addFilter($sql, "price = " . $filter['price']);
            }
        }
    }

    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $response[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'type' => $row['type'],
                    'image' => $row['image'],
                    'price' => $row['price']
                );
            }
        }
        die(json_encode($response));
    } else {
        echo (mysqli_error($link) . ". Query command: " . $sql);
    }
}
// - Add a new product 
function addProduct()
{
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    if (!(isset($_POST["name"]) && isset($_POST["type"]) && isset($_POST["image"]) && isset($_POST["price"]))) {
        die("Lỗi: thiếu tham số");
    }

    $sql = "INSERT INTO products (name, type, image, price) ";
    $sql .= " VALUES (\"" . $_POST["name"] . "\",\"" . $_POST["type"] . "\",\"" . $_POST["image"] . "\"," . $_POST["price"] . ");";

    if ($result = mysqli_query($link, $sql)) {
        echo ("Tạo product mới thành công (Id: " . mysqli_fetch_array(mysqli_query($link, "SELECT id FROM products WHERE name = \"" . $_POST["name"] . "\""))["id"] . ")");
    } else {
        die(mysqli_error($link) . ". Query command: " . $sql);
    }
}
// - Update a product
function updateProduct()
{
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    if (!(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["type"]) && isset($_POST["image"]) && isset($_POST["price"]))) {
        die("Lỗi: thiếu tham số");
    }
    $sql = "UPDATE products SET name = \"" . $_POST["name"] . "\", type = \"" . $_POST["type"] . "\", image = \"" . $_POST["image"] . "\", price = " . $_POST["price"] . " WHERE id = " . $_POST["id"];

    if ($result = mysqli_query($link, $sql)) {
        echo ("Cập nhật product " . $_POST["id"] . " thành công!");
    } else {
        echo (mysqli_error($link) . ". Query command: " . $sql);
    }
}

// - Remove a product
function removeProduct()
{
    $link = mysqli_connect(LS, LU, LP, LD);
    if (!$link) {
        die('ERROR: Connection failed (' . mysqli_errno($link) . ')' . mysqli_error($link));
    }
    if (!isset($_POST["prolist"]) || count($_POST["prolist"]) == 0) {
        die("Lỗi: thiếu tham số");
    }
    foreach ($_POST["prolist"] as $acc) {
        $sql = "DELETE FROM products WHERE id = " . $acc;
        if (!($result = mysqli_query($link, $sql))) {
            die(mysqli_error($link) . ". Query command: " . $sql);
        }
    }
    echo ("Xóa " . count($_POST["prolist"]) . " product (" . implode(", ", $_POST["prolist"]) . ") thành công!");
}
// 3. Transactions
// ===================================
// - Get all transactions (buying product(s))
function getTransaction()
{
    return;
}

// 4. Statistics
// ===================================
// - Get the statistic of the number of product sold (in an interval of time)
function productStatistic()
{
    return;
}
// - Get the statistic of the number of the accessing to the page (in an interval of time) 
function accessStatistic()
{
    return;
}


// Run
requestHandling();
