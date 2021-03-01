/* :::::::::::::::::::::::::::::::::
CONTROLE VUE PASSWORD
::::::::::::::::::::::::::::::::: */

let togglePassword = document.getElementById("togglePassword");
let input = document.querySelector(".revealPassword input");

togglePassword.addEventListener("click", showPassword);

function showPassword () {
    if (input.type == "password") {
        input.type = "text";
        togglePassword.className = "fas fa-eye";
    } else {
        input.type = "password";
        togglePassword.className = "fa fa-eye-slash";
    }
}