<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbname";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM blog ORDER BY id desc";
    $result = $conn->query($sql);
?>