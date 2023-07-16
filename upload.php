<?php
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, POST, DELETE, OPTIONS");
// header('Access-Control-Max-Age: 86400');
// header("Access-Control-Allow-Headers: *");
// header("Access-Control-Expose-Headers: Content-Length, X-JSON");

if (isset($_FILES['img'])) {
    $extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    // $new_name = time() . '.' . $extension;
    $new_name = $_POST['name'] . '.' . $extension;
    move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $new_name);
    $data = array(
        'image_source' => 'images/' . $new_name
    );
    echo json_encode($data);
}
