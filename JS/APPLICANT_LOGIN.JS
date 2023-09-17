// VERSION 3


//SHOW PASSWORD
let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("password");

eyeicon.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "../IMAGES/eye-open.png"
    } else {
        password.type = "password";
        eyeicon.src = "../IMAGES/eye-close.png"
    }
}