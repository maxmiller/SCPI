<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 16/03/16
 * Time: 14:48
 */
include 'database.php';
session_start();
$nome_evento = "";
$cidade_evento = "";
$data_inicio = "";
$data_fim = "";
$valor_passagem = "";
$justificativa = "";
$sitio_evento = "";
$relevancia = "";
$projeto = "";
$estudo = "";
$titulacao = "";
$tipo_evento = "";
$tempo_servico = "";
$nacional = "";
$internacional = "";
$inscricao = "";
$siape = "";
$id = $_GET['id'];

if (isset($_SESSION["siape"])) {
    $sql = " SELECT * FROM planejamento WHERE id=? limit 1";
 //   echo $sql;
    $query = $con->prepare($sql);
    $query->bindParam(1, $id);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
//    print_r($query);
   // print_r($row);
    // foreach ($con->query($sql) as $row) {
    $nome_evento = $row["nome_evento"];
    $cidade_evento = $row["cidade_evento"];
    $data_inicio = $row["data_inicio_evento"];
    $data_fim = $row["data_fim_evento"];
    $valor_passagem = $row["valor_passagem"];
    $justificativa = $row["justificativa_evento_relevancia"];
    $sitio_evento = $row["sitio_evento"];
    $relevancia = $row["relevancia_evento"];
    $projeto = $row["projeto_institucional"];
    $estudo = $row["estudando"];
    $titulacao = $row["titulacao"];
    $tipo_evento = $row["tipo_evento_capacitacao"];
    $tempo_servico = $row["tempo_servico"];
    $nacional = $row["numero_evento_nacional"];
    $internacional = $row["numero_evento_internacional"];
    $inscricao = $row["inscricao"];
    $siape = $row["siape"];
    $id = $row["id"];
      //  echo "XXXXXXXXX $nome_evento";
      //  echo "XXXXXXXXX $nome_evento";
    //  }
    //  echo "XXXXXXXXX$nome_evento";
} else {
    echo "<script>
        alert('Usuário não logado');
        window.location='inicio_planejamento.php';
        </script>";
}