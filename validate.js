function validateEmail() {
  var emailAdd = $("#email").val();
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  if (reg.test(emailAdd) == false) {
    $("#mailmessage").html("<li>Invalid Email Address</li>");
    return false;
  }

  $("#mailmessage").html("");
  return true;
}

function validateNumber() {
  var number = $("#contact").val();
  var reg = /^([0-9]{10})$/;
  //console.log(typeof(number.value))
  if (reg.test(number) == false) {
    $("#nummessage").html("<li>Invalid Number</li>");
    return false;
  }
  $("#nummessage").html("");
  return true;
}

function checkPass() {
  var pass = $("#password").val();
  var cpass = $("#cpassword").val();
  console.log(pass, cpass);
  if (pass != cpass) {
    $("#passmsg").html("<li>Password does not match</li>");
    return false;
  }
  $("#passmsg").html("");
  return true;
}
