<?php 

class Controller 
{
  public function view($name)
  { 
    $filename = "../app/views/".$name.".view.php";
    if(file_exists($filename))
    {
      require $filename;
    } else {
      // echo "controller not found";
      $filename = "../app/controllers/_404.php";
      require $filename;
    }
  }
}