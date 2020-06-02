<?php

$server= 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con) {
    console.log("connected");
} else {
    console.log("Not Connected");
}

?>