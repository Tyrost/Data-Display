<?php

    $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=login_credentials', 'root', 'M1n2B3v4!');

    $query = 'SELECT * FROM login_credentials';
    
    $statement = $conn->query($query);

    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);

?>