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

    function find_user_login($user_db) {

        $email = $_POST['login-email'];
        $password = $_POST['login-password'];
    
        foreach($user_db as $user) {
    
            if ($email == $user['email'] && $password == $user['password']) {
    
                header('Location: ../../../index.html');
                exit();

                return true;
                
            } 
        };
        
        header('Location: ../../frontend/html/login_page.html');
        exit();

        return false;
    };


    $_SESSION['logged-in'] = find_user_login($users);

?>