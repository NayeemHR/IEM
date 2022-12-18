<?php
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
        header("Location: signup.php?status={$status}");
    }
}

?>