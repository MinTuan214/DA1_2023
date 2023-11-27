<?php
    include '../connect.php';
    try{
        $conn = connect_db();
        $sql = "CREATE TABLE comment (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            content text NOT NULL,
            iduser INT(6),
            idpro INT(11),      
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            
            )";
            $conn->exec($sql);
            echo "Table users created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
?>