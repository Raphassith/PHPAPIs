<?php
require('mysql/connect.php');
$column1 = isset($_POST['column1']) ? $_POST['column1'] : null;

$stmt = $conn->prepare("DELETE FROM tableName WHERE column1= ?");
$param = array($column1);

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
