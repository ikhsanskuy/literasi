<?php

$host   = 'localhost:8889';
$user   = 'root';
$pass   = 'root';
$db     = 'buku';

// $host   = 'localhost';
// $user   = 'user';
// $pass   = 'pass';
// $db     = 'db';


$conn    = mysqli_connect($host, $user, $pass, $db) or die("ERROR");

    // if ($con){
    //     echo "ada koneksi ke database";
    // }
