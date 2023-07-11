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
//limited character
function restrictName(event) {
    const keyCode = event.keyCode || event.which;
    const inputValue = String.fromCharCode(keyCode);
    const allowedChars = /^[A-Za-zñÑ \b\t]+$/;
  
  if (!allowedChars.test(inputValue)) {
    event.preventDefault();
    document.getElementById("error-message").textContent = "Only letters A-Z are allowed";
  } else {
    document.getElementById("error-message").textContent = "";
  }
  }
  //show password
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