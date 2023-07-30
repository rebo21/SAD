<?php
// functions.php

function isActivePage($pageName) {
    // Get the current page's filename
    $currentPage = basename($_SERVER['PHP_SELF']);
    
    // Compare the current page's filename with the provided page name
    if ($currentPage === $pageName) {
        // If they match, return the active class attribute
        return 'class="active"';
    } else {
        // Otherwise, return an empty string (no active class attribute)
        return '';
    }
}
?>