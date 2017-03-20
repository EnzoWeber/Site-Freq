<?php
/**
 * Created by PhpStorm.
 * User: Hypraz
 * Date: 20/03/2017
 * Time: 15:40
 */

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'index';
}

include 'view/includes/header.php';

if($page == 'login'){
    include 'controller/loginController.php';
}elseif($page == 'home'){
    include 'controller/indexController.php';
}elseif($page == 'rdv'){
    include 'controller/profileController.php';
}elseif($page == 'contact'){
    include 'controller/contactController.php';
}else{
    include 'controller/indexController.php';
}

include 'view/includes/footer.php';