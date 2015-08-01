<?php
/**
 * Start php session and try to connect to the db
 *
 * Created by PhpStorm.
 * User: ammly
 * Date: 01/08/15
 * Time: 12:40
 */
// Set the error reporting level
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Start a PHP session
session_start();

// Include site constants
include_once "inc/config.php";

// Create a database object
try {
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    $db = new PDO($dsn, DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>