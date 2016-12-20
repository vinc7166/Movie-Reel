<?php
class DB
{
  public static function connect($database="moviereel")
  {
    $server = "localhost";
    $username = "root";
    $password = "retepv16";
    $connection = new mysqli($server, $username, $password, $database);

    if ($connection->connect_error) {
     die('Failed to connect');
    }
    return $connection;
  }
}
 ?>
