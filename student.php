<?php
class Students{

    function redirect($url){
        header('Location:'.$url);
        exit;
    }

    function login(){
        global $message;
        if($_POST['login']=='user' && $_POST['password']=='123'){
            $_SESSION['login'] = true;
            $this->redirect('/');
        }else{
            $message = 'Невірний логін або пароль';
        }
    }

    function logout(){
        unset($_SESSION['login']);
        $this->redirect('/');
    }

    function addNew(){
        global $message;

        if((!isset($_POST['name'])||empty($_POST['name'])||!is_string($_POST['name']))){
            $message='Некоректно введене ім'я';
        }
        if((!isset($_POST['surname'])||empty($_POST['surname'])||!is_string($_POST['surname']))){
            $message='Некоректне прізвище';
        }
        if((!isset($_POST['age'])||empty($_POST['age'])||!is_numeric($_POST['age']))){
            $message='Некоректний вік';
        }

        if(empty($message)){
            $students = array();
            if(isset($_COOKIE['students']) && !empty($_COOKIE['students'])){
                $students = unserialize($_COOKIE['students']);
            }

            $students[] = [
                'name'=>$_POST['name'],
                'surname'=>$_POST['surname'],
                'age'=>$_POST['age']
            ];

            setcookie('students', serialize($students));
            $this->redirect('/');
        }
    }
}
?>