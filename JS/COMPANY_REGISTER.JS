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


// MODAL[TERMS & AGREEMENT]
// Get the modal
var modal = document.getElementById("myModal");
  
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
  
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
  
// When the user clicks the button, open the modal 
btn.onclick = function() 
{
    modal.style.display = "block";
}
  
// When the user clicks on <span> (x), close the modal
span.onclick = function() 
{
    modal.style.display = "none";
}
  
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) 
{
    if (event.target == modal) {
      modal.style.display = "none";
    }
}
// Add a click event listener to the document
document.addEventListener("click", function(event) {
    // Check if the click event target is outside the sign-up form and error message
    if (!event.target.closest(".card1") && !event.target.closest(".error-message")) {
        // Remove the error message
        var errorMessage = document.querySelector(".error-message");
        if (errorMessage) {
            errorMessage.remove();
        }
    }
});