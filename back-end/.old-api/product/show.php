<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../Database/connection.php';
include_once '../Controller/product.php';
 
$database = new Database();

$db = $database->getConnection();
 
$product = new Product($db);
 
$product->id = isset($_GET['id']) ? $_GET['id'] : die();
 
$product->show();
 
if($product->name != null ) {
    $product_arr = array(
        "id" =>  $product->id,
        "name" => $product->name,
        "description" => $product->description,
        "price" => $product->price,
        "tax" => $product->tax,
        "category_id" => $product->category_id, 
    );
 
    http_response_code(200);
 
    echo json_encode($product_arr);
} else {
    http_response_code(404);
 
    echo json_encode(array("message" => "Product does not exist."));
}
?>