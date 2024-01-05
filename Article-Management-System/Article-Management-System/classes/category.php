<?php
require_once '../config/connection.php'; 

    class Category extends Database{
        protected $id = NULL;
        protected $name;

        public function __construct ($id=NULL, $name="")
        {
            $this->id   = $id;
            $this->name = $name;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setCatName($name){
            $this->name = $name;
        }
        

        public function getId(){
            return $this->id;
        }
        public function getCatName(){
            return $this->firstName ;
        }
        
        // public function getObject($dbObject)
        // {
        //     $this->id = $dbObject->id;
        //     $this->name = $dbObject->name;
        // }

        /*********  crud category: *********/
        public function addCategory()
        {
            $db = new Database();
            $sql = "INSERT INTO category(name) VALUES(?)";
            $conn= $db->connect()->prepare($sql);
            $conn->execute(array($this->name));
        }

        public function getCategory()
        {
            $db = new Database();
            $sql = "SELECT * FROM `category`";
            $stmt = $db->connect()->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $categories;
        }
        
        public function update($newName)
        {
            $db = new Database();
            $this->name = $newName;
            $req = "UPDATE category SET name = ? WHERE id = ?";
            $stmt = $db->connect()->prepare($req);
            return $stmt->execute([$newName, $this->id]);   
        }
        public function delete($id)
        {
            $db = new Database();
            $req = "DELETE FROM category WHERE id = :id";
            $stmt = $db->connect()->prepare($req);
            $stmt -> bindParam(':id',$id);
            $stmt->execute();
        }
    }