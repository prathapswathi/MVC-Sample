<!DOCTYPE html>
<html lang="en">
<head>
    
<style>
#admin_nav{
   background-color:skyblue;
   list-style: none;
    font-weight: bold;
    float: left;
    width: 100%;
    color:white;
} 

.link {
    display:inline-block;
    padding:10px;
    
}
.breadcrumb{
    display:block;
	padding:0 0 0 5px;
	width:100%;
	box-sizing:border-box;
}

.article_page{
    display: inline-block; 
    border: 1px solid skyblue; 
   /* background-color:lightgreen;*/
    margin:10px;
    padding:2px;
}

.main-div{
    border: 1px solid black;
    padding:10px;
}  
        </style>
  
</head>

<div class="main-nav">
<ul id="admin_nav">
                    <li class="link"><a href="index.php?action=home" title="Home"><i class="fa fa-home h_ico"></i></a></li>			 
					<li class="link"><a href="index.php?action=manage" title="Manage Content">Manage Content</a></li>					
					<!-- <li class="link"><a href="/Authoring/browse-by-index/" title="Browse by Index">Browse by Index</a></li> -->
                    <li class="link"><a href="index.php?action=product" title="All books">All books</a></li>
					<li class="link"><a href="index.php?action=topic" title="Browse by Topic">Browse by Topic</a></li>
					
					<li class="link"><a href="index.php?action=log" title="View User logs">View logs</a></li>
                </ul>
</div>
<div class="breadcrumb">

<?php
if($location = substr(dirname($_SERVER['PHP_SELF']), 1))
	$dirlist = explode('/', $location);
else
	$dirlist = array();

$count = array_push($dirlist, basename($_SERVER['PHP_SELF']));

$address = 'http://'.$_SERVER['HTTP_HOST'];
$address1 = 'http://localhost/Sample1-mvc/';
echo '<a href="'.$address1.'">Home</a>';


for($i = 0; $i < $count; $i++)
    echo '&nbsp;<span style="font-size:10px" class="glyphicon glyphicon-play"></span>&nbsp;<a href="'.($address .= '/'.$dirlist[$i]).'">'.$dirlist[$i].'</a>';
    
?>
</div>
</body>
</html>