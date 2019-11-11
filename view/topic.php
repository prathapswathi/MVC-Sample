<?php

include_once 'libs/config/database.php';
include_once 'model/product.php';
// instantiate database and objects
$database = new Database();
$db = $database->getConnection();
 
$product = new Product($db);
 

// set page header
$page_title = "Products";
include_once  "nav.php";


$stmt = $product->allRead();
$num = $stmt->rowCount();

?>



                
<?php

if($num>0){
 
    echo "<table id='table' class='table table-hover table-responsive table-bordered'>";
        echo "<tr style='background-color:green'>";
        echo "<th>Number</th>";
            echo "<th>Topic</th>";
            echo "<th>Modify</th>";
        echo "</tr>";
        $i=1;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            
            echo "<tr>";
                echo "<td>$i</td>";
                
                echo "<td><span style='font-size:12px' class='glyphicon glyphicon-play'></span>{$Product_part}</td>";
                echo "<td>";
               
				echo "<a href='index.php?action=read&id={$id}' class='btn btn-primary left-margin'>
    			<span class='glyphicon glyphicon-eye-open'></span>
				</a>

				<a href='index.php?action=edit&id={$id}' class='btn btn-info left-margin'>
    			<span class='glyphicon glyphicon-edit'></span>
				</a>
 
				<a href='index.php?action=delete&id={$id}' class='btn btn-danger delete-object' >
    			<span class='glyphicon glyphicon-trash'></span> 
                </a> 
                <a class='btn btn-primary left-margin'>
                <span  class='glyphicon glyphicon-thumbs-up' id='likes' ></span>
                </a>";
             
                echo "</td>";
 
            echo "</tr>";
        $i++;
        }
   // $i++;
    echo "</table>";
  
    
    // the page where this paging is used
    }
// tell the user there are no products

 
// set page footer
// include_once "footer.php";
?>
