<?php
    session_start();
    require_once('../model/logregmodel.php');
     
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpassword'];
    $phone = $_POST['phone'];

   
    if($firstname == "" || $lastname == "" || $username == "" || $email == "" || $password == "" || $phone == ""){
        echo "null username or password or email!";
    }
    else{
        $user = ['firstname'=> $firstname, 'lastname'=> $lastname, 'username'=> $username, 'email'=>$email, 'password'=> $password, 'phone'=> $phone];
        $status = signup($user);
        $_SESSION['user'] = $user;
        header('location: ../view/Login.html');
        if ($status){
            echo "you have signed up successfully";
            $_SESSION['flag'] = 'true';
            ;
        }else{
            echo "invalid user!";
        }
    }
?>

  
