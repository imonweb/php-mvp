<?php 

// $servername = "localhost";
// $username = 'imon';
// $password = 'p@ssw0rd';

Trait Database
{
  function connect()
  {
    try {
    // $conn = new PDO("mysql:host=$servername;dbname=quickprogramming_mvc", $username, $password);
    $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
    $con = new PDO($string, DBUSER, DBPASS);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
    // echo "Connected Successfully";
  } catch (PDOException $e) {
    echo "Connection Failed" . $e->getMessage();
  }
  } // function connect()

  public function query($query, $data = [])
  {
    $con = $this->connect();
    $stm = $con->prepare($query);

    $check = $stm->execute($data);
    if($check)
    {
      $result = $stm->fetchAll(PDO::FETCH_OBJ);
      if(is_array($result) && count($result))
      {
        return $result;
      }
    }

    return false;
  }

  public function get_row($query, $data = [])
  {
    $con = $this->connect();
    $stm = $con->prepare($query);

    $check = $stm->execute($data);
    if($check)
    {
      $result = $stm->fetchAll(PDO::FETCH_OBJ);
      if(is_array($result) && count($result))
      {
        return $result[0];
      }
    }

    return false;
  }

} // class Database



// $string = "mysql:hostname=localhost;dbname=quickprogramming_mvc";
// $con = PDO($string, 'imon', '');

// show($con);

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.