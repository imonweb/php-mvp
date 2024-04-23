<?php 

class Home extends Controller
{
  public function index()
  {
    echo "This is the home controller";
  }


}

$home = new Home;
// $home->index();

call_user_func_array();