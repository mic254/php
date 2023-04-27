<?php
// create database parameter
$username ="root";
$hostname ="localhost";
$password ="";
$bdname ="school_db";

// connect to mysql server
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// check iif connection was successful
if ($conn){
    echo "connection was successful";
} else{
    echo "connection was not successful";
}

// C  -create
// R  -Read/Retriv
// U  -Update
// D  -Delete

// 1.create dthe database ->school_bd
// 2.create a table in our database