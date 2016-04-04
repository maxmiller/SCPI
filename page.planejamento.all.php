<?php

include 'topo.php';

if (!isset($_SESSION["siape"])) {
    echo "<script>
        alert('Usuário não logado');
        window.location='page.login.php'; </script>";
}
$siape = $_SESSION['siape'];

$total_diarias_aprovadas = 0;
$total_pasagens_aprovadas = 0;
$total_inscricao_aprovada = 0;
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th>P.</th>
        <th>SIAPE</th>
        <th>SERVIDOR</th>
        <th>EVENTO</th>
        <th>JUSTICATIVA</th>
        <th>LOCAL DO EVENTO</th>
        <th>INÍCIO</th>
        <th>FIM</th>
        <th>VALOR PASSAGEM AÉREA</th>
        <th>TIPO DE EVENTO</th>
        <th>TOTAL DE DIÁRIAS</th>
        <th>INSCRIÇÃO</th>
        <th>TOTAL DE RECURSO</th>
        <th>PONTUAÇÃO</th>
        <th>STATUS</th>
        <th>AÇÕES</th>


    </tr>
    </thead>
    <tbody>
    <?php include 'script.tabela.all.planejamento.php'; ?>
    </tbody>
</table>

<h1> Total Diárias Aprovadas:  <?php echo $total_diarias_aprovadas; ?> -   R$ 30.760,00 </h1>
<h1> Total Passagens Aprovadas:  <?php echo $total_pasagens_aprovadas; ?>  - R$ 31.900,00 </h1>
<h1> Total Inscricao Aprovadas:  <?php echo  $total_inscricao_aprovada; ?>  - R$ 7.000,00 </h1>


<a class=" btn btn-primary btn-lg" href="script.planejamento.download.php"> Cadastrar Planejamento de Diárias e Passagens</a>


<?php
include 'base.php';

?>
