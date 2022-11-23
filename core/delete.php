<?php



function delete($table, $data)
{
    global $conn;
    $keys = array_keys($data);
    $values = array_values($data);
    $sql = "DELETE FROM $table WHERE $keys[0] = $values[0]";
    $status = query($sql);

    if ($status > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}