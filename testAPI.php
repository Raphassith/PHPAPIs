<?php
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, POST, DELETE, OPTIONS");
// header('Access-Control-Max-Age: 86400');
header("Access-Control-Allow-Headers: *");
// header("Access-Control-Expose-Headers: Content-Length, X-JSON");

// $postdata = file_get_contents("php://input");
// if (isset($postdata)) {
//     $request = json_decode($postdata);
// }

$request['uid']="admin";
$request['pwd']="123456";

$request['member']=array();

$data=array(
  'mid'=>'001',
  'name'=>'Thomas'
);
array_push($request['member'],$data);

$data=array(
  'mid'=>'002',
  'name'=>'Isaac'
);
array_push($request['member'],$data);

echo json_encode($request, JSON_UNESCAPED_UNICODE);
