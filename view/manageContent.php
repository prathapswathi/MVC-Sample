<?php
// include database and object files
//$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'libs/config/database.php';
include_once 'model/product.php';
include_once 'model/file_handle.php';

$database = new Database();
$db = $database->getConnection();


$product = new Product($db);
$product->id = $id;

$file = new File();
$page_title = "Create Section";
include_once "nav.php";

include_once "header.php";

 ?>
<button type="button" style="background-color:orange;color:white">Manage content</button>
<div class="content_wrapper">
	
                
                <div class="content_toolbox">
                    
					<form style="border:1px solid black;padding:50px" name="contentUpdate" id="contentUpdate" method="POST" action="index.php?action=topic">
					<center>
					<h4>   Fields marked with <span style="color:red"class="mandatory">*</span> are mandatory</h4><br>
                        <label class="form control"><strong>Product Title <span style="color:red" class="mandatory">*</span> </strong></label>
                          	<select name="Products" id="Products" class="validate[required]" onchange="callVolume();">
                            <option>Select Product</option>;
                        <?php
                         $stmt = $product->allRead();
                        while ($row_product = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row_product);
                echo "<option value='{$Products}'>{$Products}</option>";
              }
							?>
												</select>
                        </label>
						<div class="retool_r"><input type="submit" onclick="return formSubmit(this.form);" class="button" name="submit" value="Manage Section Content"></div>
						 
                       </center>
						</form>
                    </div>
                </div>
            </div>