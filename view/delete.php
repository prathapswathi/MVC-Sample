<?php
// check if value was posted
//if($_POST){
    $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
    // include database and object file
    include_once 'libs/config/database.php';
    include_once 'model/product.php';
    include_once 'model/file_handle.php';
 
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
 
    // prepare product object
    $product = new Product($db);
    
    $file = new file($db);
     
    // set product id to be deleted
    $product->id = $id;
    $file->id = $id;

    $file->fileget();
     
    // delete the product
    if($product->delete() && $file->delete()){
        echo "<div class='alert alert-success alert-dismissable'>";
        echo "Product content was deleted successfully.";
    echo "</div>";
    }
     
    // if unable to delete the product
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
        echo "Unable to delete product.";
    echo "</div>";
    }
//}
?>
