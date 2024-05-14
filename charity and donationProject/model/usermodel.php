<?php
    require_once('db.php');

    function login($username,$password){
        $conn = dbConnection();
        $sql = "select * from users where name ='{$username}' and password = '{$password}'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }

    }

    function createUser($user){
        $conn = dbConnection();
        $user = json_decode($user);
        
        $sql = "select * from users where name = '{$user->username}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "user already exist..";
        } else{
            $sql = "insert into users (user_type, name, email, password) values 
            ('{$user->user_type}','{$user->username}','{$user->email}','{$user->password}')";

            $result = mysqli_query($conn, $sql);
            
            if($result) {
                return true;
            } else{
                return false;
            }
        }
    }

    // function getAllUser(){
    //     $conn = dbConnection();
    //     $sql = "select * from users";
    //     $result = mysqli_query($conn, $sql);
    //     $users= [];
    //     while($row = mysqli_fetch_assoc($result)){
    //         array_push($users, $row);
    //     }
    
    //     return $users;
    // }
    

?>