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
        <th>MATERIAL</th>
        <th>STATUS</th>
        <th>AÇÕES</th>
    </tr>
    </thead>
    <tbody>
    <?php include 'script.tabela.requisicao.php'; ?>
    </tbody>
</table>

<a class=" btn btn-primary btn-lg" href="page.requisicao.cadastrar.php"> Cadastrar Solicitacao de Material</a>


<?php
include 'base.php';

?>
