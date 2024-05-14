<?php

    session_start();

    require_once('../model/usermodel.php');

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

    // if($username ==" " || $password ==" " || $username == "" || $password == ""){
    //     echo "required username or password";
    // }
    // elseif($password == $username){
    //     echo "password can't  be same as username..";
    // }
    // else{

        $status=login($username,$password);
        if($status){
            $_SESSION['flag'] = "true";
            setcookie('flag','true',time()+3600,'/');
            echo "true";
        } else{
            echo "invalid user";
        }
    // }
    
?>