<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS, PATCH');
require 'vendor/autoload.php';

Flight ::route('/', function(){
    echo 'Hello world!';
});


Flight::register('db', 'PDO', 
array('mysql:host=localhost;dbname=lab4_db','root','a1b2c3d4e5')); //ovaj zadnji argumenat je sifra od MySQL

Flight::route('GET /test', function(){
    $users = Flight::db()->query('SELECT * FROM Users', PDO::FETCH_ASSOC)->fetchAll();
    var_dump($users);
    Flight::json($users);
    });
    
    
    Flight::start();









?>