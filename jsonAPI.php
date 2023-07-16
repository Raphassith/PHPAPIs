<?php
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, POST, DELETE, OPTIONS");
// header('Access-Control-Max-Age: 86400');
// header("Access-Control-Allow-Headers: *");
// header("Access-Control-Expose-Headers: Content-Length, X-JSON");

$postdata = file_get_contents("php://input");
if (isset($postdata)) {
    $request = json_decode($postdata);
    $response = array(
        'fname' => $request->fname,
        'lname' => $request->lname,
        'fullname' => $request->fname . ' ' . $request->lname
    );
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);