document.addEventListener('DOMContentLoaded', function() {
    var submitButton = document.querySelector('button[type="submit"]');
    submitButton.addEventListener('click', function() {
      submitButton.disabled = true;
      submitButton.innerText = 'Submitting...';
    });
  });
  //allowed input
  function restrictName(event) {
    const keyCode = event.keyCode || event.which;
    const inputValue = String.fromCharCode(keyCode);
    const allowedChars = /^[0-9 \b\t]+$/;

  if (!allowedChars.test(inputValue)) {
    event.preventDefault();
    document.getElementById("error-message").textContent = "Only letters A-Z are allowed";
  } else {
    document.getElementById("error-message").textContent = "";
  }
}