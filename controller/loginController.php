<?php
include_once("model/loginModel.php");
class LoginController {
    private $username = null;
    private $password = null;
    //private $group = null;
    
    private $model = null;
    
    function __construct() {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        
        $this->model = new Login($this->username, $this->password);
        
        if($this->model->login()) {
            include_once("view/home.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Invalid username or password</div>";
            include_once("view/login.php");
        }
    }
}

?>