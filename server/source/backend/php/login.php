<?php

    ## Prepare Connection ##

    $host = '127.0.0.1';
    $port = '3306';
    $db = 'financeDB';
    $dns = "mysql:host=$host;port=$port;dbname=$db";
    
    $username = 'root';
    $password = 'M12n2B3v4!';

    $conn = new PDO($dns, $username, $password);
    
    $query="SELECT * FROM signup;";

    $statement = $conn->prepare($query);
    $statement->execute();
    
    # Get all users #
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    # Get user login input #

    

    // $username = $_POST['login-username'];
    // $password = $_POST['login-password'];

    foreach($users as $user);



    print_r($users);

?>