<?php
require('mysql/connect.php');
$stmt = $conn->prepare("SELECT * FROM tableName");
$stmt->execute();

$rowCount = $stmt->rowCount(); // record count

$result = array();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($result, array(
        "column1" => $row['column1'],
        "column2" => $row['column2'],
        "column3" => $row['column3'],
        "column4" => $row['column4']
    ));
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
