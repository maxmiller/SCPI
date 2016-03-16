<?php
session_start();

if (!isset($_SESSION["siape"])) {
    echo "<script>
        alert('Usuário não logado');
        window.location=('inicio_planejamento.php');
        </script>";
}
$siape = $_SESSION['siape'];
include 'topo.php';


?>

<table class="table table-striped">
    <thead>
        <tr>
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
        <?php include 'tabela_planejamento.php'; ?>
    </tbody>
</table>

<a class="btn btn-primary btn-lg" href="novo_planejamento.php"> Cadastrar Planejamento de Diárias e Passagens</a>


<?php
include 'base.php';

?>
