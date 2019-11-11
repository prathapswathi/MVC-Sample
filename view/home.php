<html>
<head>
<style>
.startat { width:250px; padding:0px; float: left;    margin: 20px 70px; box-sizing:border-box; height: 162px;}
.startat h1{font-family: 'open_sansregular';	font-size:18px; text-align:center;	color:#555555; padding:0; margin:0;	line-height:22px;	font-weight:normal;	text-decoration:none; text-transform:uppercase;}
.startat h1 a{color:#555555;text-decoration:none;}
.startat h1 a:hover{color:#555555;text-decoration:none;}
#admin_nav{background-color:skyblue; list-style: none;font-weight: bold;float: left;
width: 100%;color:white;}

</style>
</head>
<body>
 
<?php
include_once "header.php";
?>   
<div class="main-nav">
<ul id="admin_nav">
                    <li class="link"><a href="index.php?action=home" title="Home"><i class="fa fa-home h_ico"></i></a></li>
					<li class="link"><a href="index.php?action=product" title="All books">All books</a></li>				 
					<li class="link"><a href="index.php?action=manage" title="Manage Content">Manage Content</a></li>					
					<!-- <li class="link"><a href="/Authoring/browse-by-index/" title="Browse by Index">Browse by Index</a></li> -->
					<li class="link"><a href="index.php?action=topic" title="Browse by Topic">Browse by Topic</a></li>
					
					<li class="link"><a href="index.php?action=log" title="View User logs">View logs</a></li>
                </ul>
</div>


    <div class="authoring_admin_wrap">
     
		<div class="startat">
			<h1><a href="index.php?action=manage"><img src="http://demo-authoring.impelsys.com/application/images/dashboard_img1.png"></a></h1>
		</div>
		
		<div class="startat">
			<h1><a href="index.php?action=topic"><img src="http://demo-authoring.impelsys.com/application/images/dashboard_img5.png"></a></h1>
		</div>
		<div class="startat">
			<h1><a href="index.php?action=log"><img src="http://demo-authoring.impelsys.com/application/images/dashboard_img6.png"></a></h1>
		</div>
        
    </div>
                
<!-- Content wrapper end -->

</body>
<?php
include "footer.php";
?>
<div>
<div class="last"></div>
<div class="footer">
	<h1><a></a></h1>
</div>
</div>
</html>