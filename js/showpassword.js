$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var pass = document.getElementById("password");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
});