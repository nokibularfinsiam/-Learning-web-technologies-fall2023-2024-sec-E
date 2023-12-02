<?php

    require_once('DB.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from Registration where userName='{$username}' and password='{$password}'";
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
        $EmpName = $user['Empname'];
        $phone = $user['phone'];
        $username = $user['username'];
        $password = $user['password'];
        
        $con = getConnection();
        $sql = "INSERT INTO Registration (EmpName, ContactNo, userName, password)
        VALUES ('$EmpName', '$phone', '$username', '$password')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }

        return true;
    }
?>