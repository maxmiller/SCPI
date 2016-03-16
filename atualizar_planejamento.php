<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 11/03/16
 * Time: 15:19
 */


include 'database.php';
include 'auxiliar.php';


session_start();

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
    $id = $_POST['id'];
    $total_diarias = calcular_diarias($data_inicio, $data_fim, $tipo_evento);
    $total_pontos = calcular_pontos($relevancia, $projeto, $estudando, $titulacao, $tipo_evento, $tempo_servico, $nacional, $internacional);
    $siape = $_SESSION['siape'];

    $sql = "UPDATE planejamento SET
                  siape=$siape,
                  nome_evento=$nome_evento,
                  cidade_evento=$cidade_evento,
                  data_inicio_evento=$data_inicio,
                  data_fim_evento=$data_fim,
                  valor_passagem=$valor_passagem,
                  justificativa_evento_relevancia=$justificativa,
                  sitio_evento=$sitio_evento,
                  relevancia_evento=$relevancia,
                  projeto_institucional=$projeto,
                  estudando=$estudo,
                  numero_evento_nacional=$nacional,
                  numero_evento_internacional=$internacional,
                  titulacao=$titulacao,
                  tempo_servico=$tempo_servico,
                  tipo_evento_capacitacao=$tipo_evento,
                  total_diarias=$total_diarias,
                  total_pontos=$total_pontos
                   WHERE id = $id";

    $stmt = $con->prepare($sql);

    $stmt->execute();

    echo "<script>
          alert('Planejamento atualizado com sucesso!');
          window.location('planejamento.php');
        </script>";

}else{
    echo "<script>
        alert('Usuário não logado');
        window.location('inicio_planejamento.php');
        </script>";
}