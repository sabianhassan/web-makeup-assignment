<?php 
    include_once '../classes/admin.php';

    if (isset($_POST['singup'])) signUp();

    function signUp(){

        $admin = new Admin();

        $admin->setEmail($_POST['email']);
        $admin->setFirstName($_POST['first_name']);
        $admin->setLastName($_POST['last_name']);
        $admin->setPassword($_POST['password']);
        $admin->addAdmin($admin);

        header('location: ../index.php');

    }

?>

