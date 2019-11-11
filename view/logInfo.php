<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 5;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
include_once 'libs/config/database.php';
include_once 'model/product.php';
// instantiate database and objects
$database = new Database();
$db = $database->getConnection();
 
$product = new Product($db);
 

// set page header
$page_title = "Products";
include_once "nav.php";

?>
<button type="button" style="background-color:orange;color:white">Log Details</button>
<form style="border:1px solid black;padding:50px" name="contentUpdate" id="contentUpdate" method="POST" action="">
</form>