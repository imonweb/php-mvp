<?php 

class App
{
  private $controller = 'Home';
  private $method = 'index';

  private function splitURL()
  {
    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/", $URL);
    return $URL;
  }

  public function loadController()
  {
    $URL = $this->splitURL();
    $filename = "../app/controllers/".ucfirst($URL[0]).".php";
    if(file_exists($filename))
    {
      require $filename;
      $this->controller = ucfirst($URL[0]);
    } else {
      // echo "controller not found";
      $filename = "../app/controllers/_404.php";
      require $filename;
      $this->controller = "_404";
    }
    // show($this->controller);

    $controller = new $this->controller;
    call_user_func_array([$controller, $this->method], []);
    
  }

  // show(splitURL());
} // class App

// loadController();
 
// show($_GET);

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.