<?php

    $host = '127.0.0.1';
    $port = '3306';
    $db = 'financeDB';
    $dns = "mysql:host=$host;port=$port;dbname=$db";
    
    $username = 'root';
    $password = 'M12n2B3v4!';

    $conn = new PDO($dns, $username, $password);

    $name = $_POST['newsletter_name'];
    $email = $_POST["newsletter_email"];
    
    $query="INSERT INTO newsletter(name, email) VALUES(:name, :email)";

    $statement = $conn->prepare($query);

    $statement->bindValue(":name", $name);
    $statement->bindValue(":email", $email);

    $statement->execute();
    
    header('Location: ../../index.html');
    exit();

?>