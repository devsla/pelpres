<?php



function update($table, $data)
{
    global $conn;
    $keys = array_keys($data);
    $values = array_values($data);
    $sql = "UPDATE $table SET (" . implode(',', $keys) . ") VALUES ('" . implode("','", $values) . "')";
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