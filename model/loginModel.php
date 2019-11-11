<?php
include_once("libs/config/database.php");
class Login{
 
    // database connection and table name
    private $host = "localhost";
    private $db_name = "ebook";
    private $dbusername = "root";
    private $dbpassword = "123456";
    public $conn;
    public $table_name = "register";
 
    // object properties
    // public $id;
    // public $firstname;
    // public $lastname;
    public $username;
    public $password;
  
    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
        
      //  $this->conn = new database();
    }

    public function login()
    {
        // if($this->username == 'root' && $this->password == '123456')
        // {
        //     return true;
        // }
        // else 
        // {
        //     return false;
        // }
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->dbusername, $this->dbpassword);

        $query = "SELECT
                username,password
            FROM
                " . $this->table_name . "
            WHERE
               username=? and password=?  ";

            $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(1, $this->username);
            $stmt->bindParam(2, $this->password);
            $stmt->execute();
        
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
            $newUser = $row['username'];
            $newPassword = $row['password'];

            if($newUser == $this->username && $newPassword == $this->password)
            {
                return true;
            }
            else{
                return false;
            }


    }
}