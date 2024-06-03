<?php 

class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $model = new Model;
    // $model->test();
    $arr['id'] = 1;
    $arr['name'] = 'John';
    $arr2['name'] = 'Jazz';
    $result = $model->where($arr, $arr2);

    // echo "This is the home controller";
    show($result);
    $this->view('home');
  }


}



