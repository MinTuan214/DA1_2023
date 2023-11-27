<?php
    function connect_db(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "duan1";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //PDO là phương thức kết nối db
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // giá trị thông báo lỗi
        return $conn;
    }
?>