<?php
$servername = "db";
$username = "prac";
$password = "PassWord";
$dbname = "prac";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);

}

?>