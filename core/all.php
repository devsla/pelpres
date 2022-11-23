<?php 

function all($table)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = query($sql);
    return $result;
}