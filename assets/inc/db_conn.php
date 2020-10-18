<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbname";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM siteinfo";
    $result = $conn->query($sql);
?>