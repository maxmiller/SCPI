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
            window.location='page.planejamento.principal.php';
        </script>";
 //   header('location:page.planejamento.principal.php');
}else{
    echo "<script>
            alert('Siape/Senha incorretos!');
            window.location='page.login.php';
        </script>";

}




