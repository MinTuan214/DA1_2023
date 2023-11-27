<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try {
      $conn = new PDO("mysql:host=$servername", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "CREATE DATABASE duan1";
      $conn->exec($sql);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>