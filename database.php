<?php
  $server = "localhost";
  $username = "root";
  $password ="";
  $database ="IDhserver";

  try {
      $conn = new PDO ("mysql:host=$server;dbname=$database;",$username, $password);
  } catch (PDOException $e) {
      die("Connected failed: ".$e->getMessage());
  }
?>