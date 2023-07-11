// VERSION 1


// RESPONSIVE NAV BAR
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener
('click', () => 
    {
    navbarLinks.classList.toggle('active')
    }
)
//show password
let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("password");

eyeicon.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "../../IMAGES/eye-open.png"
    } else {
        password.type = "password";
        eyeicon.src = "../../IMAGES/eye-close.png"
    }
}