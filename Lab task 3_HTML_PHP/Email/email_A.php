<?php 
    $email = $_REQUEST['email'];
    if($email == "")
        {
            echo "null value";
        }
    else
        {
            echo $email;
        }
?>