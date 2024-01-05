
<?php 
    include_once '../classes/admin.php';

    $admin = new Admin();

    if (isset($_POST['login'])) {
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            if( $admin->isExistAdmin($_POST['email'])){
                $admin->setEmail($_POST['email']);
                $admin->setPassword($_POST['password']);
                $admin->loginAdmin();

            } else {
                echo 'admin does not exist';
                header("Location: ../index.php"); 
            }
        } else {
            echo( 'All fields are required');
            header("Location: ../index.php"); 
        }
    }

?>