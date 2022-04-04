<?php

require('../includes/connectionVariables.php');


try {
    // Connexion
    $conn = new PDO($dns, $userName, $password);
    // set Up Error Mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // set Up The Query
    $sql = 'SELECT *FROM users';
    // Prepare Sql Statement to Execute
    $statement = $conn -> prepare($sql);
    // Execute Statement
    $statement -> execute();
    // Get Result
    $users = $statement ->fetchAll(PDO::FETCH_ASSOC);
    // Get Data 
    exit(json_encode($users));
    
} catch (PDOException $exeption) {
    echo $exeption->getMessage();
}

$conn = null;
