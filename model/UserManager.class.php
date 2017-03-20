<?php
/**
 * Created by PhpStorm.
 * User: Hypraz
 * Date: 20/03/2017
 * Time: 15:43
 */

if (isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'index';
}


if ($page == 'login'){
    include 'controller/loginController.php';
}else{
    include 'controller/indexController.php';
}

