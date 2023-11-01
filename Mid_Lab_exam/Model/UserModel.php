<?php

    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function Registration($id, $password, $name, $usertype)
        {
                $con = getConnection();
                $checkQuery = "SELECT id FROM Registration WHERE id = '$id'";
                $checkResult = mysqli_query($con, $checkQuery);
            
                if (mysqli($checkResult) > 0) 
                 {
                    echo "User ID already exist";
                    return false;
                 } 
             else 
                {  
                    $sql = "INSERT INTO Registration (id, password, name, user_type) VALUES ('$id', '$password', '$name', '$userType')";
                    
                    if (mysqli_query($con, $sql)) {
                        return true; 
                    } else {
                        return false; 
                    }
                }
        }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from Registration";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function adduser()
    {
        $con = getConnection();
        $sql = "select * from Registration where id = '$id'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            echo "Invalid User";
            return false;
        }
    }

    function deleteUser()
    {
        
        $con = getConnection();
        $sql = "DELETE FROM Registration WHERE id = $id";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function updateUser()
    {
        $con = getConnection();


        $id = $user['id'];
        $username = $user['username'];
        $email = $user['email'];

        $sql = "UPDATE Registration SET username = '$username', email = '$email' WHERE id = $id";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


?>