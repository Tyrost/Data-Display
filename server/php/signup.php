
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

    }


    $sql = "INSERT INTO users (first_name, last_name, email, password)
        VALUES ('$firstName', '$lastName', '$email', '$password')";

?>