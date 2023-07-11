// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
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
//rectriction of type number/ limit the digit
var ageInput = document.getElementById("age");
var heightInput = document.getElementById("height");
var weightInput = document.getElementById("weight");
var landnumInput = document.getElementById("landnum");
var mobilenumInput = document.getElementById("mobilenum");
var mobileSnumInput = document.getElementById("mobileSnum");
ageInput.addEventListener("input", function() {
  if (this.value.length > 2) {
      this.value = this.value.slice(0, 2);
  }
});
heightInput.addEventListener("input", function() {
  if (this.value.length > 3) {
      this.value = this.value.slice(0, 3);
  }
});

weightInput.addEventListener("input", function() {
  if (this.value.length > 3) {
      this.value = this.value.slice(0, 3);
  }
});
landnumInput.addEventListener("input", function() {
  if (this.value.length > 8) {
      this.value = this.value.slice(0, 8);
  }
});
mobilenumInput.addEventListener("input", function() {
  if (this.value.length > 11) {
      this.value = this.value.slice(0, 11);
  }
});
mobileSnumInput.addEventListener("input", function() {
  if (this.value.length > 11) {
      this.value = this.value.slice(0, 11);
  }
});