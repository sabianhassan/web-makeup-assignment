<?php
require_once '../config/connection.php'; 
session_start();

    class Admin extends Database{
        protected $id = NULL;
        protected $firstName;
        protected $lastName;
        protected $password;
        protected $email;

        public function __construct ($id=NULL, $fn="" , $ln="" , $pas ="", $emi="" )
        {
            $this->id        = NULL;
            $this->firstName = $fn;
            $this->lastName = $ln;
            $this->password  = $pas;
            $this->email     = $emi;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setFirstName($fn){
            $this->firstName = $fn;
        }
        public function setLastName($ln){
            $this->lastName = $ln;
        }
        public function setPassword($pas){
            $this->password = $pas;
        }
        public function setEmail($emi){
            $this->email = $emi;
        }
        

        public function getId(){
            return $this->id;
        }
        public function getFirstName(){
            return $this->firstName ;
        }
        public function getLastName(){
            return $this->lastName  ;
        }
        public function getPassword(){
            return $this->password  ;
        }
        public function getEmail(){
            return $this->email  ;
        }
        
        // public function getObject($dbObject)
        // {
        //     $this->id = $dbObject->id;
        //     $this->firstName = $dbObject->first_name;
        //     $this->lasttName = $dbObject->last_name;
        //     $this->password = $dbObject->password;
        //     $this->email = $dbObject->email;
        // }

        public function isExistAdmin($email)
        {
            $sql = "SELECT * FROM `admin` WHERE email =(?)";

            $stmt = Database::connect()->prepare($sql);
            $stmt->execute([$email]);

            return $stmt->rowCount();
            
        }

        public function loginAdmin() 
        { 
            $conn = new Database();

            $sql = "SELECT * FROM `admin` WHERE email = ? AND password = ?;";
            $stmt =  $conn->connect()->prepare($sql);
            $stmt->execute([$this->email, $this->password]);
            $admin = $stmt -> fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                
                $_SESSION['name'] = $admin['first_name'];
                $_SESSION['last-name'] = $admin['last_name'];
                $_SESSION['id'] = $admin['id'];

                echo"<script>alert('successfully');document.location='../pages/dashboard.php'</script>";  
                
            } else {
                echo"<script>alert('incorrect inputs');document.location='../index.php'</script>";
            }
        }

        /*********  signup: *********/
        public function addAdmin($admin)
        {                
            $conn = new Database();
            $sql1 = "INSERT INTO admin(first_name, last_name, email, password) values(?,?,?,?)";
            $res = $conn->connect()->prepare($sql1);
            $res->execute([$admin->firstName, $this->lastName, $this->email, $this->password]);        
        }

        public function addSession(){
          session_start();
          $_SESSION['name'] = $this->name;
          $_SESSION['id'] = $this->id;
        }
    }

?>