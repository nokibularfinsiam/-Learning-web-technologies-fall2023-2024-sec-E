<?php 

$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpassword = '';


function getConnection(){
    global $dbhost;
    global $dbname;
    global $dbpassword;
    global $dbuser;

    $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    return $con;
}

?>
