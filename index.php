<?php

include_once __DIR__."/vendor/autoload.php";

use UserCrawler\Classes\Users;

if(isset($_GET['page_number'])){
    $pageNumber = $_GET['page_number'];
    $userList = new Users('https://reqres.in/api/users?page='.$pageNumber);
}else{    

$userList = new Users('https://reqres.in/api/users?page=1');
}

$users =  $userList->getUsers();



if(isset($_GET['user-id'])){
    $userid = $_GET['user-id'];
    $getVal = $userList->getUser($userid);
}

$getPages = $userList->getTotalPages();

include('Templates/userList.php');