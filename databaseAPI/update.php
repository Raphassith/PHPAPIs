<?php
require('mysql/connect.php');
$column1 = isset($_POST['column1']) ? $_POST['column1'] : null;
$column2 = isset($_POST['column2']) ? $_POST['column2'] : null;
$column3 = isset($_POST['column3']) ? $_POST['column3'] : null;
$column4 = isset($_POST['column4']) ? $_POST['column4'] : null;

$stmt = $conn->prepare("UPDATE tableName SET column2 = ?, column3 = ?, column4 = ? WHERE column1= ?");
$param = array($column2, $column3, $column4, $column1);

try {
    $stmt->execute($param);
    $res = true;
    $msg = "Complete";
    $err = null;
} catch (Exception $ex) {
    $res = false;
    $msg = "Fail";
    $err = $ex;
}

$result = array(
    "res" => $res,
    "msg" => $msg,
    "err" => $err
);

echo json_encode($result, JSON_UNESCAPED_UNICODE);
