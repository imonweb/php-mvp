<?php 

class Products extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    // echo "This is the products controller";
    $this->view('products');
  }
}

