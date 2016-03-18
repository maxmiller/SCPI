<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 09/03/16
 * Time: 18:00
 */

include 'database.php';
include 'auxiliar.php';


session_start();

print_r($_POST);
/*
if (isset($_SESSION["siape"])) {
    $nome_evento = $_POST['nome_evento'];
    $cidade_evento = $_POST['cidade_evento'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $valor_passagem = $_POST['valor_passagem'];
    $justificativa = $_POST['justificativa'];
    $sitio_evento = $_POST['sitio'];
    $relevancia = $_POST['relevancia'];
    $projeto = $_POST['projetos'];
    $estudo = $_POST['estudo'];
    $titulacao = $_POST['titulacao'];
    $tipo_evento = $_POST['tipo_evento'];
    $tempo_servico = $_POST['tempo_servico'];
    $nacional = $_POST['nacional'];
    $internacional = $_POST['internacional'];
    $inscricao= $_POST['valor_inscricao'];

    $total_diarias = calcular_diarias($data_inicio, $data_fim, $tipo_evento);
    $total_pontos = calcular_pontos($relevancia, $projeto, $estudando, $titulacao, $tipo_evento, $tempo_servico, $nacional, $internacional);
    $siape = $_SESSION['siape'];
    $sql = "INSERT INTO planejamento(siape, nome_evento, cidade_evento, data_inicio_evento, data_fim_evento,
              valor_passagem, justificativa_evento_relevancia, sitio_evento,
              relevancia_evento, projeto_institucional, estudando, numero_evento_nacional, numero_evento_internacional,
              titulacao, tempo_servico, tipo_evento_capacitacao,total_diarias,total_pontos,inscricao)
              VALUES ('$siape','$nome_evento','$cidade_evento','$data_inicio','$data_fim',$valor_passagem,'$justificativa',
              '$sitio_evento',$relevancia,$estudo,$projeto, $nacional,$internacional,$titulacao,$tempo_servico,$tipo_evento,$total_diarias,$total_pontos,$inscricao)";
    $stmt = $con->prepare($sql);
    echo $sql;
    $stmt->execute();

    echo "<script>
         window.location='page.planejamento.principal.php';
        </script>";
} else {
    echo "<script>
        alert('Usuário não logado');
        window.location(page.login.php  </script>";
}
*/


?>

