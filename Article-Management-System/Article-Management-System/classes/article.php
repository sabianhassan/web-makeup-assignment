<?php
require_once '../config/connection.php'; 

    class Article extends Database{
        protected $id;
        protected $image;
        protected $category;
        protected $title;
        protected $description;

        public function __construct ($id=NULL, $img="", $cat="", $title="", $desc="")
        {
            $this->id          = $id;
            $this->image       = $img;
            $this->category    = $cat;
            $this->title       = $title;
            $this->description = $desc;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setImage($img){
            $this->image = $img;
        }
        public function setCategory($cat){
            $this->category = $cat;
        }
        public function setTitle($tit){
            $this->title = $tit;
        }
        public function setDescription($desc){
            $this->description = $desc;
        }
        

        public function gettId(){
            return $this->id;
        }
        public function gettImage(){
            return $this->image;
        }
        public function gettCategory(){
            return $this->category;
        }
        public function gettTitle(){
            return $this->title;
        }
        public function gettDescription(){
            return $this->description;
        }

        /*********  crud Post: *********/
        public function addPost($image)
        {
            $db = new Database();

            $sql = "INSERT INTO post(image, title, category , description) VALUES(?,?,?,?)";
            $conn= $db->connect()->prepare($sql);
            $conn->execute([$image, $this->title,  $this->category, $this->description ]);
        }

        function showPosts()
        {
            $db = new Database();
            // $sql = "SELECT * FROM `post`";
            $sql = "SELECT p.id, p.image, p.title, c.name as category, p.description, c.id as cat_id FROM post p inner join category c on p.category = c.id";            
            $stmt = $db->connect()->prepare($sql);
            $stmt->execute();
            $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // echo '<pre>';
            // var_dump($posts); 
            // echo '</pre>'; 
            // die;

            return $posts;
        }

        
        
        public function update($img, $title, $cat, $des)
        {
            $db = new Database();
            $this->image = $img;
            $this->title = $title;
            $this->category = $cat;
            $this->description = $des;
            $req = "UPDATE post SET image = ?, title = ?, category = ?, description = ? WHERE id = ?";

            $stmt = $db->connect()->prepare($req);
            return $stmt->execute( [$img, $title, $cat, $des, $this->id]);  
        }

        public function delete($id)
        {
            $db = new Database();
            $req = "DELETE FROM post WHERE id = :id";
            $stmt = $db->connect()->prepare($req);
            $stmt -> bindParam(':id',$id);
            $stmt->execute();
        }

        function uploadimage()
        {
            if (isset($_FILES['image']))
            {
                $img_name = $_FILES['image']['name'];
                $img_size = $_FILES['image']['size'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $error    = $_FILES['image']['error'];
                $new_img_name = "";

                if ($error === 0)
                {
                    if ($img_size > 170000) 
                    {
                        $_SESSION['error'] = "Sorry, your file is too large.";
                        header('location: ../pages/dashboard.php');
                    }
                    else
                    {
                        // ex = extension  | lc = lowerCase 
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); 
                        $img_ex_lc = strtolower($img_ex);

                        $allowed_exs = array("jpg", "jpeg", "png"); 

                        if (in_array($img_ex_lc, $allowed_exs)) 
                        {
                            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                            $img_upload_path = '../Assets/upload_image/'.$new_img_name;
                            move_uploaded_file($tmp_name, $img_upload_path);
                        }
                        else {
                            $_SESSION['error'] = "You can't upload files of this type";
                            header('location: ../pages/dashboard.php'); 
                        }
                    }
                }
                else
                {
                    $_SESSION['error'] = 'unknown error occurred!';
                    header('location: ../pages/dashboard.php'); 
                    
                }
                return $new_img_name;
            }
        }
    }