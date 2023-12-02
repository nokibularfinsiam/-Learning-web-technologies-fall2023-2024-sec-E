<?php
require_once('../Model/logRegModel.php');
session_start();

function NameValidation($name) {
    for ($i = 0; $i < strlen($name); $i++) {
        $Char = $name[$i];
        
        if (!Rq_Letter($Char)) {
            return false;
        }
    }
    return true;
}

function Rq_Letter($char) {
    return (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' ');
}

function UsernameValidation($username) {
    for ($i = 0; $i < strlen($username); $i++) {
        $Char = $username[$i];
    
        if (!Rq_letter_number($Char)) {
            return false;
        }
    }
    return true;
}

function Rq_letter_number($char) {
    return (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || is_numeric($char));
}

function PasswordValidation($password) {

    $specialCharacters = "!@#$%^&*(),.?\":{}|<>";
    return (strlen($password) >= 6 && strpbrk($password, $specialCharacters) !== false);
}

function PhoneNumberValidation($phone) {

    $validformat = ['013', '014', '015', '016', '017', '018', '019'];
    $position = substr($phone, 0, 3);

    if (!in_array($position, $validformat)) {
        return false;
    } 
    //$phoneNumber = substr($phone, 3);
    if(is_numeric($phone) && strlen($phone) == 11)
    {
        return true;
    }
}

$EmpName = $_POST['Empname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

if ($EmpName == "" || $username == "" || $password == "" || $phone == "") {
    echo "Null username or password or email!";
} else {

    if (!NameValidation($EmpName)) {
        echo "Invalid Employee name Use only letters!";
    } 
        else{

            if (!UsernameValidation($username)) {
                echo "Invalid username Use letters and numeric number!";
            } 
                else {

                    if (!PasswordValidation($password)) {
                        echo "Invalid password use at least 6 characters and numaric number!";
                    }  
                        else {

                            if (!PhoneNumberValidation($phone)) {
                                echo "phone number Should  be start with '013', '014', '015', '016', '017', '018', '019' and contain 11 number!";
                            } 
                            else {

                                $user = ['EmpName' => $EmpName, 'phone' => $phone, 'userName' => $username, 'password' => $password];
                                $status = signup($user);
                                $_SESSION['user'] = $user;
                                header('location: ../view/login.html');
                                if ($status) {
                                    echo "You have signed up successfully";
                                    $_SESSION['flag'] = 'true';
                                } else {
                                    echo "Invalid user!";
                                }
                            }
                        }
                    }
                }
            }
?>
<br><a href="../View/registration.html">Go back</a>

