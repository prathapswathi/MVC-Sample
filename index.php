<?php
session_start();

include 'controller/controller.php';

include 'view/header.php';
?>

<div class="mainContent">

<?php

$controller = new Controller();
$controller->invoke($page);
?>
    
</div>

