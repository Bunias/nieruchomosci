<?php

require_once __DIR__ . "/initialize.php";

class MySQLDatabase
{

  private $connection;

  function __construct()
  {
    $this->openConnection();
  }

  private function openConnection()
  {
    $this->connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    $this->connection->connect_errno ? die("Connect Error: {$this->connection->connect_errno}") : null;
    echo "Established database connection";
  }

  public function closeConnection()
  {
    if(isset($this->connection))
    {
      $this->connection->close;
      unset($this->connection);
    }
  }

}

$database = new MySQLDatabase;
