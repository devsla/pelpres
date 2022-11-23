<?php 

function login($username, $password)
{
    $user = query("SELECT * FROM user WHERE username = '$username'");

    if (count($user) > 0) {
        if (password_verify($password, $user[0]['password'])) {
            $_SESSION['user'] = $user[0];
            return true;
        }
    }

    return false;
}