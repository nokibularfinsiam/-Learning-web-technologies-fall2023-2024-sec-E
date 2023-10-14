<?php

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (strlen($username) >= 2 && preg_match('/^[a-zA-Z0-9._-]+$/', $username) && strlen($password) >= 8 && preg_match('/[@#$%]/', $password)) 
    {
        echo "Valid username: ". $username;
        echo "valid password";
    }
    else 
    {
        echo "Invalid user";
    }

?>