<?php
// get ID of the product to be read
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 
// include database and object files
include_once 'libs/config/database.php';
include_once 'model/product.php';
include_once 'model/file_handle.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare objects
$product = new Product($db);
$file = new file($db);
 
// set ID property of product to be read
$product->id = $id;
$file->id = $id;
// read the details of product to be read
$product->readOne();
$file->fileget();
$page_title = "Read Product";
include_once "nav.php";
include_once "header.php";
 
// read products button
echo "<div class='right-button-margin'>";
    echo "<a href='index.php?action=product' class='btn btn-primary pull-right' style='background-color:lightgray;color:black'>";
        echo "<span class='glyphicon glyphicon-list'></span> Products";
    echo "</a>";
    // echo "<button type='button' style='background-color:orange;color:white'>Read Product</button>";
   
echo "<table class='table table-hover table-responsive table-bordered'>";
 
    echo "<tr>";
        echo "<th>Products</th>";
        echo "<th>Chapter</th>";
        echo "<th>Chapter id</th>";
        // echo "<th>Content</th>";
      
    echo "</tr>";
 
    echo "<tr>";
       
        echo "<td>{$product->Products}</td>";
        echo "<td>{$product->Product_part}</td>";
        echo "<td>{$product->chap_id}</td>";
        // echo "<td><a href='Chapters/{$file->myeditor}'>{$file->myeditor}</td>";
    echo "</tr>";
 
echo "</table>";
?>
<label style='color:red'>Content:</label>
<textarea  id="myeditor" name="myeditor" readonly><?php echo file_get_contents('./Chapters/'.$file->myeditor) ; ?></textarea>
<?php
echo "</div>";
 
// set footer
include_once "footer.php";
?>