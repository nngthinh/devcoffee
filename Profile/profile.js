

function updateBasicInfo() {
    var basicinfo = document.querySelector(".info-1");
    var lname = basicinfo.querySelectorAll("input")[0].value;
    var fname = basicinfo.querySelectorAll("input")[1].value;
    var username = basicinfo.querySelectorAll("input")[2].value;
    var email = basicinfo.querySelectorAll("input")[3].value;
    var gender = $('.info-1 md-select md-select-value span div')[0].innerHTML;
    var datetime = $('.info-1 md-datepicker');
    console.log(lname, fname, username, email, gender);
    $.ajax({
        url: "profile_req.php",
        type: "POST",
        dataType: "html",
        async: true, 
        data: {user: username,lname:lname,fname:fname,mail:email,gender:gender,basic:true},
        success: function (respone) {

           alert(respone);
       },
       error: function (respone) {
           alert("error");
       }
   });
}

function updateContactInfo(e) {
    var basicinfo = document.querySelector(".info-1");
    var contactinfo = document.querySelector(".info-2");
    var username = basicinfo.querySelectorAll("input")[2].value;
    var phone = contactinfo.querySelectorAll("input")[0].value;
    var addr = contactinfo.querySelectorAll("input")[1].value;
    console.log(username) 
    $.ajax({
         url: "profile_req.php",
         type: "POST",
         dataType: "html",
         async: true, 
         data: {user: username,phone:phone,address: addr,contact:true},
         success: function (respone) {

            alert(respone);
        },
        error: function (respone) {
            alert("error");
        }
    });
}
