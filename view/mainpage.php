<html>
<head>
<style>
 tr{cursor: pointer; transition: all .25s ease-in-out}
 .selected{background-color: red; font-weight: bold; color:#fff;}
            
 </style>
</head>
<body>


<div class="main-div">
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
$product->selection=$selection;

// set page header
$page_title = "Products";
include_once "nav.php";

?>
<?php
if(isset($_POST['search']))
{
  
    $product->searchitem=$_POST['searchitem'];
    $stmt=$product->search();
    $num=$stmt->rowCount();
    
}
else
{
// query products
$stmt = $product->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();
}
?>
<?php
if(isset($_POST['reset']))
{
    $stmt = $product->readAll($from_record_num, $records_per_page);
    $num = $stmt->rowCount();
}

?>

<div class="aum_page_n"> 
<form action="" method="post">
	<input type="text" id="searchTitles" name="searchitem" placeholder="write keyword to search">
				
	<input type="submit" id="search"     name="search" value="Search" >
	<input type="submit" name="reset" id="reset" value="Reset"  > 			
</form>               
			 
                </div>


                <div class="alp_btn" >
                        <div class="article_page"><a value="A" href="index.php?action=search&selection=<?php echo ' . value . ' ?>" class="alp_page">A</a></div>
                        <div class="article_page"><a value="B" href="" class="alp_page">B</a></div>
                        <div class="article_page"><a href="" class="alp_page">C</a></div>
                        <div class="article_page"><a href="" class="alp_page">D</a></div>
                        <div class="article_page"><a href="" class="alp_page">E</a></div>
                        <div class="article_page"><a href="" class="alp_page">F</a></div>
                        <div class="article_page"><a href="" class="alp_page">G</a></div>
                        <div class="article_page"><a href="" class="alp_page">H</a></div>

                        <div class="article_page"><a href="" class="alp_page">I</a></div>
                        <div class="article_page"><a href="" class="alp_page">J</a></div>
                        <div class="article_page"><a href="" class="alp_page">K</a></div>
                        <div class="article_page"><a href="" class="alp_page">L</a></div>
                        <div class="article_page"><a href="" class="alp_page">M</a></div>
                        <div class="article_page"><a href="" class="alp_page">N</a></div>
                        <div class="article_page"><a href="" class="alp_page">O</a></div>
                        <div class="article_page"><a href="" class="alp_page">P</a></div>
                        <div class="article_page"><a href="" class="alp_page">Q</a></div>
                        <div class="article_page"><a href="" class="alp_page">R</a></div>
                        <div class="article_page">
                        <a  id="myHref"  class="alp_page">S</a></div>
                        <div class="article_page"><a href="" class="alp_page">T</a></div>
                        <div class="article_page"><a href="" 
                        class="alp_page">U</a></div>
                        <div class="article_page"><a href="" class= "alp_page">V</a></div>
                        <div class="article_page"><a href="" class="alp_page">W</a></div>
                        <div class="article_page"><a href="" class="alp_page">X</a></div>
                        <div class="article_page"><a href="" class="alp_page">Y</a></div>
                        <div class="article_page"><a href="" class="alp_page">Z</a></div>
                        <div class="article_page"><a href="" class="alp_page">..</a></div>			    </div>
<?php
// contents will be here
echo "<div class='right-button-margin'>
    <a href='index.php?action=create' class='btn btn-default pull-right' style='background-color:lightblue'>Create Product</a>
</div>";
// display the products if there are any
if($num>0){
 
    echo "<table id='table' class='table table-hover table-responsive table-bordered'>";
        echo "<tr style='background-color:green'>";
            echo "<th>Product</th>";
            echo "<th>Content</th>";
            echo "<th>Modify</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr id='select'>";
                echo "<td><span style='font-size:12px' class='glyphicon glyphicon-play'></span>{$Products}</td>";
                echo "<td>{$Product_part}</td>";
                echo "<td>";
                    // read one, edit and delete button will be here
                // read, edit and delete buttons
				echo "<a href='index.php?action=add&id={$id}' class='btn btn-primary left-margin'>
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
                <a class='btn btn-primary left-margin'>
                <span  class='glyphicon glyphicon-thumbs-up' id='likes[i]' ></span>
                </a>";
                // <a href='favourite.php?action=fav&id={$id}' class='btn btn-primary left-margin'>
    			
				// </a>";
             
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
<!-- <script> -->
            
            <!-- function selectedRow(){
                
                var index,
                    table = document.getElementById("table");
                var like=  document.getElementById("like");
            
                for(var i = 1; i < table.rows.length; i++)
                {
                 //   table.rows[i].onclick = function()
                table.rows[i].onclick = function()
                    {
                      var select= confirm('Please confirm for freezing');
                        //  // remove the background from the previous selected row
                        // if(typeof index !== "undefined"){
                        //    table.rows[index].classList.toggle("selected");
                        // }
                        if(select == true){
                        console.log(typeof index);
                        // // get the selected row index
                         index = this.rowIndex;
                        // // add class selected to the row
                         this.classList.toggle("selected");
                       
                         console.log(typeof index);
                        }
                       
                     };
                }
                
            }
            selectedRow();
        </script> -->
<script>
function addTofav(){
    var index,table = document.getElementById("table");
    var like=  document.getElementById("likes[i]");
    var tr=document.getElementById("select");
    for(var i = 1; i < table.rows.length; i++)
                {
    like.onclick=function()
    {
      like.value=<span  class='glyphicon glyphicon-thumbs-down' id='likes' >;
        
    };
                }
}
addTofav();
</script>
</body>

</html>