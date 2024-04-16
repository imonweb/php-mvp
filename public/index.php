<?php 

function show($stuff) 
{
  echo "<pre>";
  print_r($stuff);
  echo "</pre>";
}

// show($_GET);

$URL = $_GET['url'] ?? 'home';
$URL = explode("/", $URL);
show($URL);