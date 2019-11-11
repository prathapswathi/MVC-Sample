<?php
include_once("model/product.php");
include_once("libs/config/config.php");
include_once("controller/loginController.php");
include_once("controller/SignupController.php");
class Controller {
    private $product;
    
    public function __construct() {
        $this->product = new Product();
    }
    
     public function invoke($action) {
        switch ($action) {
            case '':
            include_once 'view/login.php';
            //     break;
            // case '?':
            //include_once 'view/mainpage.php';
                break;
            case 'home':
                include 'view/home.php';
                break;
            case 'product':
                include 'view/mainpage.php';
                break;   
            case 'create':
                include 'view/create_product.php';
                break;
            case 'read':
                include 'view/read.php';
                break;
            case 'edit':
                include 'view/edit.php';
                break;
            case 'delete':
                include 'view/delete.php';
                break;
            case 'login':
                $login=new LoginController();
                break;
            case 'register':
                include 'view/register.php';
                break;
            case 'signup':
                 $signup=new SignupController();
                 break;
            case 'search':
                include 'view/search.php';
                break;
            case 'findbyalpha':
                include 'view/findbyalpha.php';
                break;
            case 'add':
                include 'view/addSection.php';
                break;
            case 'manage':
                include 'view/manageContent.php';
                break;
            case 'topic':
                include 'view/topic.php';
                break;
            case 'log':
                include 'view/logInfo.php';
                break;
            default:
                break;
        }
    }
}