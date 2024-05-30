<?php 

$servername = "localhost";
$username = 'imon';
$password = 'p@ssw0rd';

try {
  $conn = new PDO("mysql:host=$servername;dbname=quickprogramming_mvc", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected Successfully";
} catch (PDOException $e) {
  echo "Connection Failed" . $e->getMessage();
}

// $string = "mysql:hostname=localhost;dbname=quickprogramming_mvc";
// $con = PDO($string, 'imon', '');

// show($con);