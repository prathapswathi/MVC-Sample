<?php
include_once("model/SignupModel.php");

class SignupController {
    private $id;
    private $firstname = null;
    private $lastname = null;
    private $username = null;
    private $password = null;
    private $cpassword = null;
    //private $group = null;
    
    private $model = null;
    
    function __construct() {
        $this->firstname = $_POST['firstname'];
        $this->lastname= $_POST['lastname'];
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $this->cpassword = $_POST['cpassword'];

        // $this->firstname = "sauiikl";
        // $this->lastname= "iuiahu";
        // $this->username = "swa@gmail.com";
        // $this->password ="123456";
        // $this->cpassword ="123456";
        
        $this->model = new Register($this->firstname,$this->lastname, $this->username, $this->password, $this->cpassword);
        
        if($this->model->register()) {
            //echo "<div class='alert alert-success'>register successfully</div>";
            include ("view/login.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>unable to register</div>";
            include ("view/register.php");
        }
    }
}

?>