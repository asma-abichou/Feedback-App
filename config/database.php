<?php
const DB_HOST = 'localhost';
const DB_USER = 'asma';
const DB_PASS = '123456';
const DB_NAME = 'php_dev';

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME );

//Check the connection
if($conn -> connect_error){
    die('Connection Failed '.$conn ->connect_error);
}


