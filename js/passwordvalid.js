var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


function myFunction() {
  var pass = document.getElementById("password");
  var confirmpass = document.getElementById("confirm_password");
  if (pass.type === "password" || confirmpass.type === "password") {
    pass.type = "text";
    confirmpass.type = "text";
  } else {
    pass.type = "password";
    confirmpass.type = "password";
  }
}