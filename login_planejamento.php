<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 08/03/16
 * Time: 17:04
 */

include 'database.php';
include 'ldap.php';

session_start();

$siape = $_POST['siape'];
$password = $_POST['senha'];


if(conectarLDAP($siape,$password) == true){

    $stmt = $con->prepare("INSERT INTO login_sistema(siape) VALUES(:siape)");
    $stmt->bindParam(':siape',$siape);
    $stmt->execute();
    $_SESSION['siape'] = $siape;
    echo "<script>
            window.location='planejamento.php';
        </script>";
 //   header('location:planejamento.php');
}else{
    echo "<script>
            alert('Siape/Senha incorretos!');
            window.location='inicio_planejamento.php';
        </script>";

}




