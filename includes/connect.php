<?php 
    $db_dsn = [
        'host' => 'localhost',
        'dbname' => 'db_miniapp',
        'charset' => 'utf8'
    ];

    $dsn = 'mysql:'.http_build_query($db_dsn, '', ';');

    //This is the DB credentials

    $db_user = 'root';
    $db_pass = '';

    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        //echo 'Connection Successful';
    } catch(PDOException $exception) {
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }

//when making a database always select "utf8_general_ci"
// make primary key ID with Auto-Increment
// add one extra column for ID