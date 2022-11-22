<?php 

/**
 * This function for dump and die
 * data from variable
 */

function dd($data)
{
try {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
} catch (\Throwable $th) {
    die($th->getMessage());
}
}