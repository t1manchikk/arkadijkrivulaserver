<?php
include 'student.php';
$message = '';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action']=='login') {
    $obj = new Students();
    $obj->login();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action']=='add') {
    $obj = new Students();
    $obj->addNew();
}

if (isset($_GET['logout'])){
    $obj = new Students();
    $obj->logout();
}

if(isset($_SESSION['login']) && $_SESSION['login']){
    include 'form.php';
}else{
    include 'login.php';
}
?>