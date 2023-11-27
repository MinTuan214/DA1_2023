<?php
    include '../connect.php';
    try{
        $conn = connect_db();
        $sql = "CREATE TABLE hotels (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            namehotel VARCHAR(30) NOT NULL,
            image VARCHAR(30) NOT NULL,
            price VARCHAR(50),
            title VARCHAR(100),
            address VARCHAR(100),
            description text,
            status boolean,
            phonenumber INT(10),       
            branch VARCHAR(100),       
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            $conn->exec($sql);
            echo "Table users created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>