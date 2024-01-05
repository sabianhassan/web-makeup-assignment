<?php 
    include_once '../classes/category.php';

    //Routing :
    if (isset($_POST['save_cat'])) category();
    if (isset($_POST['edit_cat'])) updateCat();
    if (isset($_POST['dcategory'])) deleteCat($_POST['dcategory']);
    
    // ************** save category ****************//
    function category()
    {
        $cat = new Category();
        $cat->setId($_POST['id']);   
        $cat->setCatName($_POST['name']);
        $cat->addCategory();

        header('location: ../pages/dashboard.php');
    }

    // ************** get category ****************//
    $cat = new Category();
    $catData = array();
    $catData = $cat->getCategory();
    
    // ************ update | dalate : category ***********//
    function updateCat()
    {
        //var_dump($_POST);
        $category = new Category();
        $category->setId((int)$_POST['id']);
        $res= $category->update($_POST['name']);
        if($res) 
            header("Location: ../pages/dashboard.php");
    }

    function deleteCat($id)
    {
        $category = new Category();
        $category->delete($id);
    }
?>

