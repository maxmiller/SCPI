<?php

include 'topo.php';

if (!isset($_SESSION["siape"])) {
    echo "<script>
        alert('Usuário não logado');
        window.location='page.login.php' </script>";
}
$siape = $_SESSION['siape'];



?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>P.</th>
            <th>SIAPE</th>
            <th>EVENTO</th>
            <th>LOCAL DO EVENTO</th>
            <th>INÍCIO</th>
            <th>FIM</th>
            <th>VALOR PASSAGEM AÉREA</th>
            <th>TIPO DE EVENTO</th>
            <th>TOTAL DE DIÁRIAS</th>
            <th>INSCRIÇÃO</th>
            <th>TOTAL DE RECURSO</th>
            <th>PONTUAÇÃO</th>
            <th>AÇÕES</th>


        </tr>
    </thead>
    <tbody>
        <?php include 'script.tabela.planejamento.php'; ?>
    </tbody>
</table>

<a class=" btn btn-primary btn-lg" href="page.planejamento.cadastrar.php"> Cadastrar Planejamento de Diárias e Passagens</a>


<?php
include 'base.php';

?>
