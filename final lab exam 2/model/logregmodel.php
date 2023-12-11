<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from registration where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }
 
    function signup($user)
    {
        $firstname = $user['firstname'];
        $lastname = $user['lastname'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        $phone = $user['phone'];
        
        $con = getConnection();
        $sql = "INSERT INTO registration (fristname, lastname, username, email, password, phone)
        VALUES ('$firstname', '$lastname', '$username', '$email', '$password','$phone')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
?>