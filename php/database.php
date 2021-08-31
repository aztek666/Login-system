<?php
    // headers
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    header("Content-Type: application/json; charset=UTF-8");

    // vars for db
    $database_site      = 'localhost';
    $database_username  = 'root';
    $database_passworld = '';
    $database_name      = 'angdb';
    $maria_db = new maria_db($database_site, $database_username, $database_passworld,$database_name);

    if ($maria_db->connect_error) {
    die('Error : ('. $maria_db->connect_errno .') '. $maria_db->connect_error);
 }
?>