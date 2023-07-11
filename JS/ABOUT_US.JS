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