<?php

    require_once('../model/usermodel.php');

    $jsonData = $_REQUEST['userdata'];
    $jsonData = json_decode($jsonData,true);

    $username= $jsonData['username'];
    $password= $jsonData['password'];
    $password2 = $jsonData['password1'];
    $email= $jsonData['email'];
    $user_type = $jsonData['user_type'];

    // validation
    if($username == "" || $password =="" || $email == ""){
        echo " required username/password/email";
    }
    elseif(strlen($username) < 3 || strlen($username) > 10) {
        echo "Username must be between 3 to 10 characters long.";
    }
    elseif($password == $username){
        echo "password can't  be same as username..";
    }
    elseif(strlen($password) < 5 ) {
        echo "password must be at least 5 characters long..";
    }
    elseif($password != $password2){
        echo "password and confirm password must be same.";
    }
    
    // If everything is correct, register the user
    else{
        $user = ['username'=>$username,'password'=>$password,'email'=>$email,'user_type'=>$user_type];
        
        $status = createUser(json_encode($user));

        if($status){
            // header('location:../view/login.php');
            // echo "form submitted!";
            echo $status;
        } else {
            echo "please try again";
        }
    }
?>