<?php
    include './connect.php';
    $result = $mysqli->query("SELECT `user_id`, `username`, `email`, `balance`, `admin`, `join_date` FROM tblusers WHERE user_id = ". $_GET['user_id']);
    
    $row = $result->fetch_assoc();

    $_SESSION['user'] = $row;
    echo $row
?>