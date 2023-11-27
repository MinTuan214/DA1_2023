<?php
    include '../connect.php';
    try{
        $conn = connect_db();
        $sql = "CREATE TABLE tours (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nametour VARCHAR(30) NOT NULL,
            image VARCHAR(30) NOT NULL,
            price VARCHAR(50),
            title VARCHAR(100),
            description text,
            address VARCHAR(100),
            status VARCHAR(100),
            schedule VARCHAR(100)     
            )";
            $conn->exec($sql);
            echo "Table users created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>