<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 08/03/16
 * Time: 17:04
 */

$host = 'localhost';
$database = 'copeinca';
$user = 'copeinca';
$password = '@#2kC57JfhL9osU!';
$con = null;

try {
    $con = new PDO("mysql:host=$host;dbname=$database", $user, $password);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}