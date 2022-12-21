<?php
session_start();
include_once "config.php";

$status = 0;
$action = $_POST['action'] ?? '';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
IF(!$connection){
    throw new Exception("Cannot connect to database");
}else{
    if('register' == $action){
        $fname = $_POST['fname'] ?? '';
        $lname = $_POST['lname'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if($email && $password){
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO `users`(fname, lname, email, password) VALUES('{$fname}','{$lname}','{$email}', '{$hash}')";
            mysqli_query($connection, $query);
            if(mysqli_error($connection)){
                $status = 1;
            }else{
                $status = 3;
            }
        }else{
            $status = 2;
        }
        header("Location: index.php?status={$status}");
    }elseif('login' == $action){
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if($email && $password){
            $query = "SELECT id, password FROM `users` WHERE email = '{$email}'";
            $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_password = $data['password'];
                $_id = $data['id'];
                if(password_verify($password,$_password)){
                    $_SESSION['id'] = $_id;
                    header("Location: dashboard.php");
                    die();
                }else{
                    $status = 4;
                }
                
            }else{
                $status = 5;
            }
        }else{
            $status = 2;
        }
        header("Location: index.php?status={$status}");
    }
}

?>