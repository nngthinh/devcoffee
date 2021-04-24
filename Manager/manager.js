// (*) Single page applicaiton (v2)
// All page
var allpages = $('[id^="page"]');
$('.left-content [name="nav-left"]').each(function (index) {
  $(this).click(function (index) {
    var page = $(this).val();
    // Hide all page
    allpages.each(function (index) {
      var attr = $(this).is('[class~="active"]');
      // For some browsers, `attr` is undefined; for others,
      // `attr` is false.  Check for both.
      if (typeof attr !== typeof undefined && attr !== false) {
        $(this).removeProp("class", "hide active");
        $(this).prop("class", "hide");
      }
    });
    // then unhide chosen page
    $(`[id|="${page}"]`).prop("class", "hide active");
  });
});

// (*) Modal
function openModal(mheader, mbody, mfooter) {
  // 1. Create a modal (id="modal")
  var modal = document.createElement("div");
  modal.setAttribute("id", "modal");
  // 2. Create a background hider + box (includes: header, content, footer) inside the modal
  var modalBgHider = document.createElement("div");
  modalBgHider.setAttribute("id", "modal-background-hider");
  modalBgHider.addEventListener("click", closeModal); // Close modal on click
  var modalBox = document.createElement("div");
  modalBox.setAttribute("class", "shadow-md");
  // Set id
  modalBox.setAttribute("id", "modal-box");
  mheader.setAttribute("id", "modal-header");
  mbody.setAttribute("id", "modal-body");
  mfooter.setAttribute("id", "modal-footer");
  // Append to modalBox
  modalBox.append(mheader, mbody, mfooter);
  // Append modalBox + background hider
  modal.append(modalBgHider, modalBox);

  if (document.getElementById("modal")) {
    closeModal();
  }
  // 3. Set overflow of body to hidden
  var body = document.getElementsByTagName("body")[0];
  body.style.overflow = "hidden";
  // 4. Append to body
  body.append(modal);
}

// Close modal function
function closeModal() {
  // 1. Body: Remove attribute style
  var body = document.getElementsByTagName("body")[0];
  body.removeAttribute("style");
  // 2. Modal: Remove modal
  var modal = document.getElementById("modal");
  if (modal) modal.parentElement.removeChild(modal); // Remove itself
}

// Press ESC button can closeModal too
$("document").keyup(function (e) {
  if (e.code == 27) {
    closeModal();
  }
});

// Modal success + error + warning
function raiseSuccess(content) {
  var mheader = document.createElement("div");
  mheader.append(`Thành công`);
  var mbody = document.createElement("div");
  mbody.append(content);
  var mfooter = document.createElement("div");
  mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 25px 25px">Thoát</button>`;
  mfooter.children[0].addEventListener("click", () => {
    closeModal();
  });
  // Then open modal
  openModal(mheader, mbody, mfooter);
}

function raiseError(content) {
  var mheader = document.createElement("div");
  mheader.append(`Thất bại`);
  var mbody = document.createElement("div");
  mbody.append(content);
  var mfooter = document.createElement("div");
  mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 25px 25px">Thoát</button>`;
  mfooter.children[0].addEventListener("click", () => {
    closeModal();
  });
  // Then open modal
  openModal(mheader, mbody, mfooter);
}

function raiseWarning(content, func) {
  var mheader = document.createElement("div");
  mheader.append(`Cảnh báo`);
  var mbody = document.createElement("div");
  mbody.append(content);
  var mfooter = document.createElement("div");
  mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 0px 25px">Thoát</button><button name="updateaccount" class="bg-purple-800 text-white roudend-sm w-full h-full hover:bg-red-600" type="submit" style="border-radius: 0px 0px 25px 0px">Tiếp tục</button>`;
  mfooter.children[0].addEventListener("click", () => {
    closeModal();
  });
  mfooter.children[1].addEventListener("click", () => {
    func();
  });
  // Then open modal
  openModal(mheader, mbody, mfooter);
}

// =================================================================================
// All request function (AJAX)
// 1. Account
// -- Send Filter handling
function filterSendAccount() {
  var obj = "";
  if ($('div[id="page2-pc"] div[class="tasks-wrapper"] input').get(0).checked) {
    var plural = false;
    $('div[id="page2-pc"] .filter-account input[class="filter-input"]').each(
      function (index) {
        if ($(this).val()) {
          if (plural) {
            obj += ", ";
          }
          obj += `"${$(this).get(0).name}": "${$(this).val()}"`;
          plural = true;
        }
      }
    );
    $('div[id="page2-pc"] .filter-account select').each(function (index) {
      if ($(this).val()) {
        if (plural) {
          obj += ", ";
        }
        obj += `"${$(this).get(0).name}": "${$(this).val()}"`;
        plural = true;
      }
    });
  }
  return "{" + obj + "}";
}

// -- Choose all
var chooseAllAccountFlag = false;
function chooseAllAccount() {
  $('div[id="page2-pc"] .account-table table tbody input').each(function (
    index
  ) {
    $(this).get(0).checked = !chooseAllAccountFlag;
  });
  chooseAllAccountFlag = !chooseAllAccountFlag;
}

$('div[id="page2-pc"] .account-table table thead .chooseall').on(
  "click",
  chooseAllAccount
);

// -- Filter flag
function filterAccount() {
  var filteraccounttable = $(
    'div[id="page2-pc"] [class="filter-account"] table'
  );
  if ($(this).get(0).checked) {
    filteraccounttable.removeProp("class", "hide");
    filteraccounttable.prop("class", "hide active");
  } else {
    filteraccounttable.removeProp("class", "hide active");
    filteraccounttable.prop("class", "hide");
  }
}

$('div[id="page2-pc"] div[class="tasks-wrapper"] input').on(
  "click",
  filterAccount
);
// -- Add received response to the table and display

function tableAddAccount(value, index) {
  var gender = value["gender"] == 1 ? "Nam" : "Nữ"; // Male and female
  var row = document.createElement("tr");
  row.innerHTML += `<td><span class="task"><input class="task-item" name="task" type="checkbox" id="item-account-${index}"><label for="item-account-${index}"> <span class="label-text"></span></label></span></td><td>${value["id"]}</td><td>${value["username"]}</td><td>${value["fname"]}</td><td>${value["lname"]}</td><td>${gender}</td><td>${value["birthday"]}</td><td>${value["email"]}</td><td>${value["phone"]}</td><td>${value["address"]}</td><td>${value["firstdate"]}</td><td>${value["lastdate"]}</td><td>${value["walletid"]}</td>`;
  row.addEventListener("click", function (event) {
    // Check if clicked in option
    if (event.target.nodeName == "SPAN") {
      event.preventDefault();
      var input = event.target.parentNode.parentNode.querySelector("input");
      input.checked = !input.checked;
      return;
    }
    // Create a modal
    // Important: Create header, body, footer
    var mheader = document.createElement("div");
    mheader.append(`Thông tin tài khoản`);
    var mbody = document.createElement("div");
    // Gender
    var male = value["gender"] == "1" ? "selected" : "";
    var female = value["gender"] == "0" ? "selected" : "";

    mbody.innerHTML = `
    <div><div class="col-6-nr">Id</div><div class="col-6-nr"><input class="modal-input green" name="id" value="${value["id"]}" readonly> </div></div>
    <div><div class="col-6-nr">Tên đăng nhập</div><div class="col-6-nr"><input class="modal-input green" name="username" value="${value["username"]}" readonly> </div></div>
    <div><div class="col-6-nr">Họ</div><div class="col-6-nr"><input class="modal-input" name="fname" value="${value["fname"]}"> </div></div>
    <div><div class="col-6-nr">Tên</div><div class="col-6-nr"><input class="modal-input" name="lname" value="${value["lname"]}"> </div></div>
    <div><div class="col-6-nr">Giới tính</div><div class="col-6-nr"><select class="modal-input"><option class="modal-input" name="gender" value="1" ${male}>Nam</option><option class="modal-input" name="gender" value="0" ${female}>Nữ</option></select> </div></div>
    <div><div class="col-6-nr">Ngày sinh</div><div class="col-6-nr"><input class="modal-input" name="birthday" type="date" value="${value["birthday"]}"> </div></div>
    <div><div class="col-6-nr">Email</div><div class="col-6-nr"><input class="modal-input" name="email" value="${value["email"]}"> </div></div>
    <div><div class="col-6-nr">SDT</div><div class="col-6-nr"><input class="modal-input" name="phone" value="${value["phone"]}"> </div></div>
    <div><div class="col-6-nr">Địa chỉ</div><div class="col-6-nr"><input class="modal-input" name="address" value="${value["address"]}"> </div></div>
    <div><div class="col-6-nr">Ngày tạo</div><div class="col-6-nr"><input class="modal-input green" name="firstdate" value="${value["firstdate"]}" readonly> </div></div>
    <div><div class="col-6-nr">Đăng nhập gần nhất</div><div class="col-6-nr"><input class="modal-input green" name="lastdate" value="${value["lastdate"]}" readonly> </div></div>
    <div><div class="col-6-nr">Ví điện tử</div><div class="col-6-nr"><input class="modal-input green" name="walletid" value="${value["walletid"]}" readonly></div></div>
    `;
    mbody.append();
    var mfooter = document.createElement("div");
    mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 0px 25px">Thoát</button><button name="updateaccount" class="bg-purple-800 text-white roudend-sm w-full h-full hover:bg-red-600" type="submit" style="border-radius: 0px 0px 25px 0px">Cập nhật</button>`;
    mfooter.children[0].addEventListener("click", () => {
      closeModal();
    });
    mfooter.children[1].addEventListener("click", () => {
      updateAccount();
    });
    // Then open modal
    openModal(mheader, mbody, mfooter);
  });
  return row;
}

// -- Ajax
function getAccount() {
  var filter = filterSendAccount();
  // alert(filter);
  var admin = $('div[id="page2-pc"] .content-categories input:checked').val();
  $.ajax({
    url: "manager_req.php",
    type: "post",
    dataType: "json",
    data: { account: "getaccount", admin: admin, filter: filter },
    success: function (response) {
      var tbody = $('div[id="page2-pc"] .account-table table tbody')[0];
      tbody.innerHTML = "";
      var index = 0;
      $.each(response, function (key, value) {
        tbody.append(tableAddAccount(value, index));
        index++;
      });
      raiseSuccess(`Tìm được ${index} kết quả`);
    },
    error: function (response) {
      raiseError("Thất bại. Lỗi: " + response);
    },
  });
  //console.log(e.target);
}

$('div[id|="page2-pc"] div[class="search-account"] label')[0].addEventListener(
  "click",
  getAccount
); // Search account button

function addAccount() {
  // Get updated info
  var form = $('div[id="modal-body"]').get(0);
  var username = form.querySelector('input[name="username"]').value;
  var password = form.querySelector('input[name="password"]').value;
  var fname = form.querySelector('input[name="fname"]').value;
  var lname = form.querySelector('input[name="lname"]').value;
  var gender = form.querySelector("select").value;
  var birthday = form.querySelector('input[name="birthday"]').value;
  var email = form.querySelector('input[name="email"]').value;
  var phone = form.querySelector('input[name="phone"]').value;
  var address = form.querySelector('input[name="address"]').value;
  var admin = $('div[id="page2-pc"] .content-categories input:checked').val();
  console.log(
    username,
    password,
    fname,
    lname,
    gender,
    birthday,
    email,
    phone,
    address,
    admin
  );
  $.ajax({
    url: "manager_req.php",
    type: "post",
    dataType: "text",
    data: {
      account: "addaccount",
      username: username,
      password: password,
      fname: fname,
      lname: lname,
      gender: gender,
      birthday: birthday,
      email: email,
      phone: phone,
      address: address,
      admin: admin,
    },
    success: function (response) {
      raiseSuccess(response);
    },
    error: function (response) {
      raiseError("Thất bại. Lỗi: " + response);
    },
  });
}

$('div[id|="page2-pc"] div[class="search-account"] label')[1].addEventListener(
  "click",
  function () {
    // Create a modal
    // Important: Create header, body, footer
    var mheader = document.createElement("div");
    mheader.append(`Tạo tài khoản`);
    var mbody = document.createElement("div");
    mbody.innerHTML = `
    <div><div class="col-6-nr">Tên đăng nhập</div><div class="col-6-nr"><input class="modal-input" name="username" > </div></div>
    <div><div class="col-6-nr">Mật khẩu</div><div class="col-6-nr"><input class="modal-input" name="password" type="password"> </div></div>
    <div><div class="col-6-nr">Họ</div><div class="col-6-nr"><input class="modal-input" name="fname" > </div></div>
    <div><div class="col-6-nr">Tên</div><div class="col-6-nr"><input class="modal-input" name="lname" > </div></div>
    <div><div class="col-6-nr">Giới tính</div><div class="col-6-nr"><select class="modal-input"><option class="modal-input" name="gender" selected></option><option class="modal-input" name="gender" value="1">Nam</option><option class="modal-input" name="gender" value="0">Nữ</option></select></div></div>
    <div><div class="col-6-nr">Ngày sinh</div><div class="col-6-nr"><input class="modal-input" name="birthday" type="date" > </div></div>
    <div><div class="col-6-nr">Email</div><div class="col-6-nr"><input class="modal-input" name="email" > </div></div>
    <div><div class="col-6-nr">SDT</div><div class="col-6-nr"><input class="modal-input" name="phone" > </div></div>
    <div><div class="col-6-nr">Địa chỉ</div><div class="col-6-nr"><input class="modal-input" name="address" > </div></div>
    `;
    mbody.append();
    var mfooter = document.createElement("div");
    mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 0px 25px">Thoát</button><button name="updateaccount" class="bg-purple-800 text-white roudend-sm w-full h-full hover:bg-red-600" type="submit" style="border-radius: 0px 0px 25px 0px">Thêm tài khoản</button>`;
    mfooter.children[0].addEventListener("click", () => {
      closeModal();
    });
    mfooter.children[1].addEventListener("click", () => {
      addAccount();
    });
    // Then open modal
    openModal(mheader, mbody, mfooter);
  }
); // Add account button

function updateAccount() {
  // Get updated info
  var form = $('div[id="modal-body"]').get(0);
  var id = form.querySelector('input[name="id"]').value;
  var fname = form.querySelector('input[name="fname"]').value;
  var lname = form.querySelector('input[name="lname"]').value;
  var gender = form.querySelector("select").value;
  var birthday = form.querySelector('input[name="birthday"]').value;
  var email = form.querySelector('input[name="email"]').value;
  var phone = form.querySelector('input[name="phone"]').value;
  var address = form.querySelector('input[name="address"]').value;
  // console.log(id, fname, lname, gender, birthday, email, phone, address);
  $.ajax({
    url: "manager_req.php",
    type: "post",
    dataType: "text",
    data: {
      account: "updateaccount",
      id: id,
      fname: fname,
      lname: lname,
      gender: gender,
      birthday: birthday,
      email: email,
      phone: phone,
      address: address,
    },
    success: function (response) {
      raiseSuccess(response);
      //getAccount();
    },
    error: function (response) {
      raiseError("Thất bại. Lỗi: " + response);
    },
  });
}

function removeAccount() {
  var chosenlist = $('div[id="page2-pc"] .account-table table tbody tr')
    .filter(function (index) {
      return $(this).get(0).querySelector("input").checked;
    })
    .get()
    .map((x) => x.querySelectorAll("td")[1].innerHTML);

  if (chosenlist.length == 0) {
    return;
  }
  var mes = document.createElement("div");
  mes.innerHTML = `<div>Chú ý: ${chosenlist.length} tài khoản sau sẽ bị xóa</div><div>${chosenlist}</div>`;
  raiseWarning(mes, function () {
    $.ajax({
      url: "manager_req.php",
      type: "post",
      dataType: "text",
      data: {
        account: "removeaccount",
        acclist: chosenlist,
      },
      success: function (response) {
        raiseSuccess(response);
      },
      error: function (response) {
        raiseError("Thất bại. Lỗi: " + response);
      },
    });
  });
}

$('div[id|="page2-pc"] div[class="search-account"] label')[2].addEventListener(
  "click",
  removeAccount
); // Remove account button

// 2. Product
// -- Send Filter handling
function filterSendProduct() {
  var obj = "";
  if ($('div[id="page3-pc"] div[class="tasks-wrapper"] input').get(0).checked) {
    var plural = false;
    $('div[id="page3-pc"] .filter-product input[class="filter-input"]').each(
      function (index) {
        if ($(this).val()) {
          if (plural) {
            obj += ", ";
          }
          obj += `"${$(this).get(0).name}": "${$(this).val()}"`;
          plural = true;
        }
      }
    );
    $('div[id="page3-pc"] .filter-product select').each(function (index) {
      if ($(this).val()) {
        if (plural) {
          obj += ", ";
        }
        obj += `"${$(this).get(0).name}": "${$(this).val()}"`;
        plural = true;
      }
    });
  }
  return "{" + obj + "}";
}

// -- Choose all
var chooseAllProductFlag = false;
function chooseAllProduct() {
  $('div[id="page3-pc"] .product-table table tbody input').each(function (
    index
  ) {
    $(this).get(0).checked = !chooseAllProductFlag;
  });
  chooseAllProductFlag = !chooseAllProductFlag;
}

$('div[id="page3-pc"] .product-table table thead .chooseall').on(
  "click",
  chooseAllProduct
);

// -- Filter flag
function filterProduct() {
  var filterproducttable = $(
    'div[id="page3-pc"] [class="filter-product"] table'
  );
  if ($(this).get(0).checked) {
    filterproducttable.removeProp("class", "hide");
    filterproducttable.prop("class", "hide active");
  } else {
    filterproducttable.removeProp("class", "hide active");
    filterproducttable.prop("class", "hide");
  }
}

$('div[id="page3-pc"] div[class="tasks-wrapper"] input').on(
  "click",
  filterProduct
);
// -- Add received response to the table and display

function tableAddProduct(value, index) {
  var row = document.createElement("tr");
  row.innerHTML += `<td><span class="task"><input class="task-item" name="task" type="checkbox" id="item-product-${index}"><label for="item-product-${index}"> <span class="label-text"></span></label></span></td><td>${value["id"]}</td><td>${value["name"]}</td><td>${value["type"]}</td><td>${value["image"]}</td><td>${value["price"]}</td>`;
  row.addEventListener("click", function (event) {
    // Check if clicked in option
    if (event.target.nodeName == "SPAN") {
      event.preventDefault();
      var input = event.target.parentNode.parentNode.querySelector("input");
      input.checked = !input.checked;
      return;
    }
    // Create a modal
    // Important: Create header, body, footer
    var mheader = document.createElement("div");
    mheader.append(`Thông tin sản phẩm`);
    var mbody = document.createElement("div");

    mbody.innerHTML = `
    <div><div class="col-6-nr">Id</div><div class="col-6-nr"><input class="modal-input green" name="id" value="${value["id"]}" readonly> </div></div>
    <div><div class="col-6-nr">Tên sản phẩm</div><div class="col-6-nr"><input class="modal-input" name="name" value="${value["name"]}"> </div></div>
    <div><div class="col-6-nr">Loại</div><div class="col-6-nr"><input class="modal-input" name="type" value="${value["type"]}"> </div></div>
    <div><div class="col-6-nr">Image</div><div class="col-6-nr"><input class="modal-input" name="image" value="${value["image"]}"> </div></div>
    <div><div class="col-6-nr">Giá cả</div><div class="col-6-nr"><input class="modal-input" name="price" value="${value["price"]}"> </div></div>
    `;
    mbody.append();
    var mfooter = document.createElement("div");
    mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 0px 25px">Thoát</button><button name="updateproduct" class="bg-purple-800 text-white roudend-sm w-full h-full hover:bg-red-600" type="submit" style="border-radius: 0px 0px 25px 0px">Cập nhật</button>`;
    mfooter.children[0].addEventListener("click", () => {
      closeModal();
    });
    mfooter.children[1].addEventListener("click", () => {
      updateProduct();
    });
    // Then open modal
    openModal(mheader, mbody, mfooter);
  });
  return row;
}

// -- Ajax
function getProduct() {
  var filter = filterSendProduct();
  $.ajax({
    url: "manager_req.php",
    type: "post",
    dataType: "json",
    data: { product: "getproduct", filter: filter },
    success: function (response) {
      
      var tbody = $('div[id="page3-pc"] .product-table table tbody')[0];
      tbody.innerHTML = "";
      var index = 0;
      $.each(response, function (key, value) {
        tbody.append(tableAddProduct(value, index));
        index++;
      });
      raiseSuccess(`Tìm được ${index} kết quả`);
    },
    error: function (response) {
      raiseError("Thất bại. Lỗi: " + response);
    },
  });
  //console.log(e.target);
}

$('div[id|="page3-pc"] div[class="search-product"] label')[0].addEventListener(
  "click",
  getProduct
); // Search product button

function addProduct() {
  // Get updated info
  var form = $('div[id="modal-body"]').get(0);
  var name = form.querySelector('input[name="name"]').value;
  var type = form.querySelector('input[name="type"]').value;
  var image = form.querySelector('input[name="image"]').value;
  var price = form.querySelector('input[name="price"]').value;
  console.log(name, type, image, price);
  $.ajax({
    url: "manager_req.php",
    type: "post",
    dataType: "text",
    data: {
      product: "addproduct",
      name: name,
      type: type,
      image: image,
      price: price,
    },
    success: function (response) {
      raiseSuccess(response);
    },
    error: function (response) {
      raiseError("Thất bại. Lỗi: " + response);
    },
  });
}

$('div[id|="page3-pc"] div[class="search-product"] label')[1].addEventListener(
  "click",
  function () {
    // Create a modal
    // Important: Create header, body, footer
    var mheader = document.createElement("div");
    mheader.append(`Tạo sản phẩm`);
    var mbody = document.createElement("div");
    mbody.innerHTML = `
    <div><div class="col-6-nr">Tên sản phẩm</div><div class="col-6-nr"><input class="modal-input" name="name" > </div></div>
    <div><div class="col-6-nr">Loại</div><div class="col-6-nr"><input class="modal-input" name="type"> </div></div>
    <div><div class="col-6-nr">Image</div><div class="col-6-nr"><input class="modal-input" name="image" placeholder="./images" > </div></div>
    <div><div class="col-6-nr">Giá cả</div><div class="col-6-nr"><input class="modal-input" name="price" > </div></div>
    `;
    mbody.append();
    var mfooter = document.createElement("div");
    mfooter.innerHTML = `<button name="cancel" class="bg-gray-800 text-white roudend-sm w-full h-full hover:bg-gray-600" type="submit" style="border-radius: 0px 0px 0px 25px">Thoát</button><button name="updateproduct" class="bg-purple-800 text-white roudend-sm w-full h-full hover:bg-red-600" type="submit" style="border-radius: 0px 0px 25px 0px">Thêm sản phẩm</button>`;
    mfooter.children[0].addEventListener("click", () => {
      closeModal();
    });
    mfooter.children[1].addEventListener("click", () => {
      addProduct();
    });
    // Then open modal
    openModal(mheader, mbody, mfooter);
  }
); // Add product button

function updateProduct() {
  // Get updated info
  var form = $('div[id="modal-body"]').get(0);
  var id = form.querySelector('input[name="id"]').value;
  var name = form.querySelector('input[name="name"]').value;
  var type = form.querySelector('input[name="type"]').value;
  var image = form.querySelector('input[name="image"]').value;
  var price = form.querySelector('input[name="price"]').value;
  $.ajax({
    url: "manager_req.php",
    type: "post",
    dataType: "text",
    data: {
      product: "updateproduct",
      id: id,
      name: name,
      type: type,
      image: image,
      price: price,
    },
    success: function (response) {
      raiseSuccess(response);
    },
    error: function (response) {
      raiseError("Thất bại. Lỗi: " + response);
    },
  });
}

function removeProduct() {
  var chosenlist = $('div[id="page3-pc"] .product-table table tbody tr')
    .filter(function (index) {
      return $(this).get(0).querySelector("input").checked;
    })
    .get()
    .map((x) => x.querySelectorAll("td")[1].innerHTML);

  if (chosenlist.length == 0) {
    return;
  }
  var mes = document.createElement("div");
  mes.innerHTML = `<div>Chú ý: ${chosenlist.length} sản phẩm sau sẽ bị xóa</div><div>${chosenlist}</div>`;
  raiseWarning(mes, function () {
    $.ajax({
      url: "manager_req.php",
      type: "post",
      dataType: "text",
      data: {
        product: "removeproduct",
        prolist: chosenlist,
      },
      success: function (response) {
        raiseSuccess(response);
      },
      error: function (response) {
        raiseError("Thất bại. Lỗi: " + response);
      },
    });
  });
}

$('div[id|="page3-pc"] div[class="search-product"] label')[2].addEventListener(
  "click",
  removeProduct
); // Remove product button
