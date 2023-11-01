<?php 
require_once("../model/UserModel.php");
    session_start();
    $password = $_REQUEST['password'];
    $password = $_REQUEST['confirm password'];
    $email = $_REQUEST['name'];
    $username = $_REQUEST['user_type'];

    if (isset($_REQUEST['user_type'])) 
    {
        $userType = $_REQUEST['user_type'];
    } else {
        $userType = '';
    }

    if($id == "" || $password == "" || $confirm_password == ""|| $name == "")
    {
        echo "Please fill in all the fields";
    }elseif($password !=$password)
     {
        echo "Passwords do not match.";
     }
    else{
        $sql = Registration($id, $password, $name, $userType);
        $_SESSION['Registration'] = $user;
        header('location: ../view/login.html');
    }
?>