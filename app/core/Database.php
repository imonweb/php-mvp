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

