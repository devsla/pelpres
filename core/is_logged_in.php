<?php 

/**
 * If you call this function, you will check
 * if user is logged in or not
 */

function is_logged_in()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}