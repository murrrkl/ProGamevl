<?php
    $user = "root";
    $pass = "";
    $db = "n43849_new";

    try {
        // подключаемся к серверу
        // utf8mb4_general_ci	
        $pdo = new PDO("mysql:host=localhost; charset=utf8mb4; dbname=$db", $user, $pass);
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
