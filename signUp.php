<?php

// require 'includes/urlError.php';
require 'includes/connectionVariables.php';
require 'includes/functions.php';

try {
    // Connexion
    $conn = new PDO($dns, $userName, $password);
    // set Up Error Mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // setUp Variables
    if(isset($_POST['signUpUserName']) AND isset($_POST['signUpUserEmail']) AND isset($_POST['signUpUserPassword'])) {
        $name = validate($_POST['signUpUserName']);
        $password = validate($_POST['signUpUserPassword']);
        $email = filter_var($_POST['signUpUserEmail'], FILTER_SANITIZE_EMAIL);
        // Check Email Validation
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // set Up The Query
            $sql = 'INSERT INTO users(userName, userEmail, userPassword) VALUES(:username, :useremail, :userpassword)';
            // Prepare Sql To Be Executed
            $statement = $conn -> prepare($sql);
            // Set Up Parametrs
            $statement -> bindParam(':username', $name);
            $statement -> bindParam(':useremail', $email);
            $statement -> bindParam(':userpassword', $password);
            // insert
            $statement -> execute();
        } else {
            // Invalide Email
            echo 'falseEmail';
        }
    }

} catch (PDOException $exeption) {
    echo $exeption->getMessage();
}

$conn = null;

?>