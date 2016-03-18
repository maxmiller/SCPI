<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 11/03/16
 * Time: 14:57
 */

include 'database.php';

session_start();

if (isset($_SESSION["siape"])) {
    $id = $_GET['id'];
    $sql = "delete from planejamento where id = $id";
    $stmt = $con->prepare($sql);

    $stmt->execute();

    echo "<script>
         alert('Planejamento excluído com sucesso');
         window.location='page.planejamento.principal.php';
        </script>";

}else{
    echo "<script>
        alert('Usuário não logado');
        window.location(page.login.php  </script>";
}