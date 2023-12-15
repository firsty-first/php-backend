<?php
class DbOperations{
  private $con;
  function __construct() {
    require_once(dirname(__FILE__) ."/DbConnect.php");
    $db=new DbConnect();
    $this->con = $db->connect();
  }
  //crud 
  function createUser($username, $password, $email) {
    $password=sha1($password);
    $stmt = $this->con->prepare ("INSERT INTO `users`(`id`, `username`, `password`, `email`) VALUES (NULL,?,?,?);");
    $stmt->bind_param("sss", $username, $password,$email);
    $stmt->execute()
or die ("failed". $stmt->error);
  }}