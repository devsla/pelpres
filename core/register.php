<?php 

function register($data)
{
    $nama = $data['nama'];
    $username = $data['username'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);

    $query = query("INSERT INTO user VALUES (null, '$nama', '$username', '$password')");

    if ($query) {
        return true;
    } else {
        return false;
    }
    
}