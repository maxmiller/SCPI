<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 29/03/16
 * Time: 10:02
 */

include_once 'class.planejamentodao.php';

use \IFRN\PlanejamentoDao;


session_start();

//print_r($_GET);
try {
    $dao = new PlanejamentoDao();
    if($_GET['id']>= 0 || $_GET['id']!="0") {
        $dao->rejeitar($_GET['id']);
        echo "<script>
         alert(\"Planejamento Rejeitado com sucesso\");
         window.location='page.planejamento.all.php';
        </script>";
    }
} catch (Exception $e) {

    echo $e->getMessage();

}
