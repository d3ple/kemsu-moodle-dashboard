<?php

require '../db/config.php'; 

$sql = "SELECT id, name FROM servers";

$result = $systemConn->query($sql);
if ($result != FALSE) {
    $rows = array();
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    $systemConn->close();
    print json_encode($rows);
} else {
    echo "Ошибка: " . $sql . "<br />" . $systemConn->error;
}

?>