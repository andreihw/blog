<?php

// Display errors if any
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Database {
  private $hostname;
  private $username;
  private $password;
  private $database;
  public $link = NULL;

  function __construct() {
    $this->db_connect();
  }

  public function db_connect() {
    $this->hostname = 'localhost';
    $this->username = 'root';
    $this->password = 'root';
    $this->database = 'blog';

    $this->link = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    if(mysqli_connect_errno()) {
        die("Could not connect to database: " . mysqli_connect_error() . " - " . mysqli_connect_errno());
    }
  }
}

class Posts extends Database {
  public $total_posts;

  public function count_total_posts() {
    $query = 'SELECT * FROM posts';
    $result = $this->link->query($query);
    $this->total_posts = $result->num_rows;
    return $this->total_posts;
  }
  
  public function show_all_posts() {
    $post = array();
    $query = 'SELECT * FROM posts';
    $result = $this->link->query($query);
    while($obj=mysqli_fetch_object($result)) {
      $results[] = $obj;
    }
    return $results;

  }
}
?>
