<?php

 
// include database and object files
include_once 'libs/config/database.php';
include_once 'model/product.php';

 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare objects
$product = new Product($db);

$stmt=$product->searchS();
$num=$stmt->rowCount();


// contents will be here
echo "<div class='right-button-margin'>
    <a href='index.php?action=create' class='btn btn-default pull-right' style='background-color:lightblue'>Create Product</a>
</div>";
// display the products if there are any
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr style='background-color:green'>";
            echo "<th>Product</th>";
            echo "<th>Content</th>";
            echo "<th>Modify</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td><span style='font-size:12px' class='glyphicon glyphicon-play'></span>{$Products}</td>";
                echo "<td>{$Product_part}</td>";
                echo "<td>";
                    // read one, edit and delete button will be here
                // read, edit and delete buttons
				echo "<a href='addSection.php?action=add&id={$id}' class='btn btn-primary left-margin'>
    			<span class='glyphicon glyphicon-plus'></span>
                </a>
                
                
                <a href='index.php?action=read&id={$id}' class='btn btn-primary left-margin'>
    			<span class='glyphicon glyphicon-eye-open'></span>
				</a>

				<a href='index.php?action=edit&id={$id}' class='btn btn-info left-margin'>
    			<span class='glyphicon glyphicon-edit'></span>
				</a>
 
				<a href='index.php?action=delete&id={$id}' class='btn btn-danger delete-object' >
    			<span class='glyphicon glyphicon-trash'></span> 
                </a> 
                
                <a href='favourite.php?action=fav&id={$id}' class='btn btn-primary left-margin'>
    			<span class='glyphicon glyphicon-thumbs-up'></span>
				</a>";
             
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
  

    // the page where this paging is used
$page_url = "index.php?";
 
// count all products in the database to calculate total pages
$total_rows = $product->countAll();
 
// paging buttons here
include_once 'view/paging.php';
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-info'>No products found.</div>";
}
 
// set page footer
include_once "footer.php";
?>
</div>
 
