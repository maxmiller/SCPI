<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 15:41
 */

session_start();

$siape;
if (isset($_SESSION["siape"])) {
    $siape = $_SESSION["siape"];
}else{
    $siape = null;
}

?>