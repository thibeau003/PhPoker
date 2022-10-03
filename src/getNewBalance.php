<?php
    include './connect.php';
    $result = $mysqli->query("SELECT * FROM tblusers WHERE user_id = ". $_GET['user_id']);
    
    $row = $result->fetch_assoc();

    print_r($row['balance']);
    $_SESSION['user']['balance'] = $row['balance'];
?>