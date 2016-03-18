<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 18/03/16
 * Time: 15:43
 */

unset($_SESSION['siape']);
session_destroy();
echo "<script> 
        alert(\"Desconectado com sucesso!\");
        window.location = 'index.php';
      </script>";
