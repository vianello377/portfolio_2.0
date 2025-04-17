<?php   
    $pdo = require 'include/connect.php';

    $sql = 'SELECT * FROM home';
    $statement = $pdo->query($sql);
    $user_data = $statement->fetchall(PDO: :FETCH_ASSOC);
    print_t($user_data);