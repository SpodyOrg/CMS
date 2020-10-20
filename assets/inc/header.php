<!DOCTYPE html>
<html lang="en">
<?php 
    include("assets/inc/db_conn.php");
    
    $sql = "SELECT * FROM siteinfo";
    $result = $conn->query($sql);
?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $sitetitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>