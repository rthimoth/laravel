const btnEditPassword = document.getElementById("editPasswordButton");

btnEditPassword.onclick = function(){
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (password != confirm_password) {
      document.getElementById("password_match").innerHTML = "Passwords do not match";
    } else {
      document.getElementById("password_match").innerHTML = "Passwords match";
    }
}
