<?php


class Register{
 
    // database connection and table name
    private $host = "localhost";
    private $db_name = "ebook";
    private $dbusername = "root";
    private $dbpassword = "123456";
    public $conn;
    public $table_name = "register";
 
    // object properties
    private $id;
    private $firstname;
    private $lastname;
    private $username;
    private $password;
    private $cpassword;
  
    function __construct($firstname,$lastname,$username, $password, $cpassword) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->password = $password;
        $this->cpassword = $cpassword;
    }

  
    public function register()
    {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->dbusername, $this->dbpassword);

    $query = "INSERT INTO
    " . $this->table_name . "
    SET
    firstname=:firstname,lastname=:lastname, username=:username, password=:password ";
       $stmt = $this->conn->prepare($query);

         
        $stmt->bindParam(":firstname", $this->firstname);
        $stmt->bindParam(":lastname", $this->lastname);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);

       if($stmt->execute()){
        return true;
       }else{
        return false;
            }
    }
}