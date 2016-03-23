<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 11/03/16
 * Time: 14:57
 */

include_once 'class.planejamentodao.php';

session_start();

if (isset($_SESSION["siape"])) {
    try {
        $id = $_GET['id'];
        $dao = new \IFRN\PlanejamentoDao();
        $dao->delete($id);
        echo "<script>
         alert('Planejamento excluído com sucesso');
         window.location='page.planejamento.principal.php';
        </script>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

} else {
    echo "<script>
        alert('Usuário não logado');
        window.location(page.login.php  </script>";
}