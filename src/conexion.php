<?php

function getConnection() {
    $db_host = 'localhost';
    $db_user = 'root';
    //$db_pass = '';
    $db_pass = 'abbatistam';
    $db_database = 'jobs';
    $db_port = '3306';
    //$db_port = '3306';

    $mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_database, $db_port);
    //return $mysqli;
    try {
        if ($mysqli->connect_error) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        } else {
            //echo "Connectado";
            return $mysqli;
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}
