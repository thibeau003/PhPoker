<?php
    include './connect.php';  

    $stmt = $mysqli->prepare("SELECT `user_id`, `username`, `email`, `balance`, `admin`, `join_date` FROM tblusers WHERE user_id = ?");
    $stmt->bind_param('i', $_GET['user_id']);
    $stmt->execute(); 
    $result = $stmt->get_result();

    $result = $mysqli->query("". $_GET['user_id']);
    
    $row = $result->fetch_assoc();

    $_SESSION['user'] = $row;
    echo $row
?>