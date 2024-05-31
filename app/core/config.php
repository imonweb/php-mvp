<?php

if($_SERVER['SERVER_NAME'] == 'localhost'){
  define('ROOT', 'http://localhost/php/Quick-Programming/php-mvp/public/');
  define('DBNAME', 'quickprogramming_mvc');
  define('DBHOST', 'localhost');
  define('DBUSER', 'imon');
  define('DBPASS', 'p@ssw0rd');
  define('DBDRIVER', '');
} else {
  /*  online */
}