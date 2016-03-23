<?php
session_start();

require_once 'class.planejamento.php';

if (!isset($_SESSION["siape"])) {
    echo "<script>
        alert('Usuário não logado');
        window.location=(ppage.login.php </script>";
} else {

    $planejamento = new \IFRN\Planejamento();
    $planejamento->setId(0);
    $planejamento->setSiape($_SESSION["siape"]);
    include 'topo.php';
    include 'page.planejamento.base.php';
    include 'base.php';
}
?>
