<?php
    include '../connect.php';
    try{
        $conn = connect_db();
        $sql = "CREATE TABLE users (
            iduser INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            pass VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            Address VARCHAR(100),
            Role BOOLEAN NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

            )";
            $conn->exec($sql);
            echo "Table users created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>