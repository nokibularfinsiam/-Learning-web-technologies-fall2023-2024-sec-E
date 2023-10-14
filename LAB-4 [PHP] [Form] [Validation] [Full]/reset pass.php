<?php
    $currentPassword = $_POST['currentpassword'];
    $newPassword = $_POST['newPassword'];
    $retypePassword = $_POST['retypePassword'];

    $errors = [];

    if ($currentPassword === $newPassword) {
        $errors[] = "New Password cannot be the same as the Current Password.";
    }
    if ($newPassword !== $retypePassword) {
        $errors[] = "New Password and Retyped Password do not match.";
    }

    if (!empty($errors)) {
        echo "<h3>Validation Errors:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } 
    else 
    {
        echo "<h3>Password Change Successful!</h3>";
    }
?>
